<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Documents, Categs};

class DocumentController extends Controller
{
    public function index($cat_url = '')
    {
    	if($cat_url != ''){
    		$categs = Categs::whereRaw('ident = "documents" AND parent_id != 1 AND url = ?', $cat_url)->get();
    	}else{
    		$categs = Categs::whereRaw('ident = "documents" AND parent_id != 1')->get();
    	}

		$docs_list = $ids = [];
		foreach ($categs as $key => $value) {
			$ids[] = $value->id;
			$docs_list[$value->id] = [];
			$docs_list[$value->id]['categ'] = $value;
		}
		$doc_list = Documents::whereIn('categ_id', $ids)->orderBy('categ_id', 'desc')->get();
		if($doc_list){

			foreach ($doc_list as $key => $value) {

				if(!isset($docs_list[$value->categ_id]['list'])){
					$docs_list[$value->categ_id]['list'] = [];
				}

				$docs_list[$value->categ_id]['list'][] = $value;
			}
		}

        return view('base/inner/docs/list', [
            'messages' => '',
            'page_title' => 'Документы',
            'docs_list' => $docs_list
            ]);
    }
}
