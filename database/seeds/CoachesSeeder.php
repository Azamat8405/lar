<?php

use Illuminate\Database\Seeder;

use App\Coaches;

class CoachesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 		$node = Coaches::create([
	            'name' => 'АЛБОРОВ АРТУР КУДАЙНАТОВИЧ',
	            'img' => '',
	            'categ_id' => 4,
        ]);
 		$node = Coaches::create([
	            'name' => 'АЛИКОВА ВИКТОРИЯ АСЛАНБЕКОВНА',
	            'img' => '',
	            'categ_id' => 4,
        ]);
 		$node = Coaches::create([
	            'name' => 'АЛИКОВА ГАЛИНА ГЕОРГИЕВНА',
	            'img' => '',
	            'categ_id' => 4,
        ]);
 		$node = Coaches::create([
	            'name' => 'БАГАЕВ УЧА МАЛХАЗОВИЧ',
	            'img' => '',
	            'categ_id' => 4,
        ]);
 		$node = Coaches::create([
	            'name' => 'ВОРОБЬЕВА ИРИНА НИКОЛАЕВНА',
	            'img' => '',
	            'categ_id' => 4,
        ]);
 		$node = Coaches::create([
	            'name' => 'ДУДИЕВ РУСЛАН ГЕОРГИЕВИЧ',
	            'img' => '',
	            'categ_id' => 4,
        ]);
 		$node = Coaches::create([
	            'name' => 'ХУГАЕВ СЕРГЕЙ ВЛАДИМИРОВИЧ',
	            'img' => '',
	            'categ_id' => 4,
        ]);


		// ФУТБОЛИСТЫ
 		$node = Coaches::create([
	            'name' => 'АГАЕВ АЛАН ХАЗБИЕВИЧ',
	            'img' => '',
	            'categ_id' => 5,
        ]);
 		$node = Coaches::create([
	            'name' => 'БИТАРОВ РОБЕРТ АРКАДИЕВИЧ',
	            'img' => '',
	            'categ_id' => 5,
        ]);
  		$node = Coaches::create([
	            'name' => 'ВАЛИЕВ АСЛАН ЮРЬЕВИЧ',
	            'img' => '',
	            'categ_id' => 5,
        ]);
   		$node = Coaches::create([
	            'name' => 'ГАГЛОЕВ ДАВИД РУСЛАНОВИЧ',
	            'img' => '',
	            'categ_id' => 5,
        ]);
   		$node = Coaches::create([
	            'name' => 'ДЖИОЕВ ТАМЕРЛАН ВЯЧИСЛАВОВИЧ',
	            'img' => '',
	            'categ_id' => 5,
        ]);
		$node = Coaches::create([
	            'name' => 'КЕКИШВИЛИ ГРИГОРИЙ ОЛЕГОВИЧ',
	            'img' => '',
	            'categ_id' => 5,
        ]);
 		$node = Coaches::create([
	            'name' => 'КЕРАШВИЛИ ГИВИ ШАЛВОВИЧ',
	            'img' => '',
	            'categ_id' => 5,
        ]);
  		$node = Coaches::create([
	            'name' => 'КИРАКОСЯН БАРСЕГ АРТЕМОВИЧ',
	            'img' => '',
	            'categ_id' => 5,
        ]);
  		$node = Coaches::create([
	            'name' => 'КЛЕЩЕНКО ДАНИИЛ ВИКТОРОВИЧ',
	            'img' => '',
	            'categ_id' => 5,
        ]);
   		$node = Coaches::create([
	            'name' => 'МИШЕЛАШВИЛИ ВЛАДИМИР ДАВИДОВИЧ',
	            'img' => '',
	            'categ_id' => 5,
        ]);
		$node = Coaches::create([
	            'name' => 'СУАНОВ РУСЛАН РУСЛАНОВИЧ',
	            'img' => '',
	            'categ_id' => 5,
        ]);
 		$node = Coaches::create([
	            'name' => 'ТЕБЛОЕВ АНАТОЛИЙ ГРИГОРЬЕВИЧ',
	            'img' => '',
	            'categ_id' => 5,
        ]);
  		$node = Coaches::create([
	            'name' => 'ТЕДЕЕВ ЗАУРБЕК ЭДУАРДОВИЧ',
	            'img' => '',
	            'categ_id' => 5,
        ]);
   		$node = Coaches::create([
	            'name' => 'ХАПСАЕВ ВИТАЛИЙ ЭЛЬБРУСОВИЧ',
	            'img' => '',
	            'categ_id' => 5,
        ]);
		$node = Coaches::create([
	            'name' => 'ХОЗИЕВ МАРАТ АУЗБИЕВИЧ',
	            'img' => '',
	            'categ_id' => 5,
        ]);
 		$node = Coaches::create([
	            'name' => 'ШАГРОВ СЕРГЕЙ ИВАНОВИЧ',
	            'img' => '',
	            'categ_id' => 5,
        ]);
  		$node = Coaches::create([
	            'name' => 'ШАТОВ АНДРЕЙ ВЛАДИМИРОВИЧ',
	            'img' => '',
	            'categ_id' => 5,
        ]);
    }
}