<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\{Text, News, Categs};





class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

// vospit_system.pdf
// instrukcia_pojarnaya.pdf

// Инструкция по антидопинговому обеспечению для тренеров-преподавателей и спортсменов
// instrukcia_antidoping

// Инструкция по заполнению журнала групповых занятий
// instrukcia_group_lasses

// Кодекс этики и служебного поведения работников
// kodeks_etiki

// Комплект документов по антитеррору
// antiterror_docs

// Лицензия
// license

// Положени5е о профессиональной переподготовке и повышении квалификации педагогических работников МАОУ ДО ДЮСШ Владикавказская академия спорта
// povishenie_kvalifikacii

// Положение о журнале учета
// polojenie_uchet_journal

// Положение о защите песональных данных
// polojenie_person_data

// Положение о льготах и скидках
// polojenie_discount

// Положение о МАОУ ДО ДЮСШ Владикавказская академия спорта
// polojenie_about_vas

// Положение о медико-восстановительных мероприятиях
// polojenie_medic

// Положение о методическом совете
// polojenie_metod_sovet

// Положение о педагогическом совете
// polojenie_pedagog_sovet

// Положение о порядке доступа педагогических работников к информационно телекомуникационным сетям и базам данных
// polojenie_it_dostup

// Положение о порядке и сроках проведения медосмотров обучающихся
// polojenie_medosmotr

// Положение о порядке и условиях передачи обучающихся от тренера к тренеру
// polojenie_students_transfer

// Положение о порядке ознакомления с документами
// polojenie_docs_introduction

// Положение о порядке посещения мероприятий не предусмотренных учебным планом
// polojenie_event_visits

// Положение о порядке проведения самообследования
// polojenie_self_examination

// Положение о порядке установления размера персонального повышающего коэффициента
// polojenie_raising_factor

// Положение о правилах приема зачисления отчисления учащихся
// polojenie_enrollment

// Положение о приеме переводе и отчмслении обучающихся
// polojenie_expulsion

// Положение о приносяфщей доход деятельности
// polojenie_income

// Положение о присвоении и подтверждении спортивных разрядов, квалификационных категорий судей
// polojenie_categories

// Положение о проведении контрольных испытаний для воспитанников отделения футбола Барс
// polojenie_bars_tests

// Положение о проведении контрольных испытаний обучающихся отделения тенниса Асгард
// polojenie_asgard_tests

// Положение о соотношении учебной и педагогической работы
// polojenie_relation

// Положение о структуре и органах управления
// polojenie_structure

// Положение о тренерском совете
// polojenie_coaches

// Положение о языке образования
// polojenie_language

// Положение об аттестационной комиссии
// polojenie_commission

// Положение об информационной открытости
// polojenie_openness

// Положение об общем собрани работников
// polojenie_meeting

// Положение об общем собрании коллектива
// polojenie_collective_meeting

// Положение об оплате труда
// polojenie_zp

// Положение об организации работы по охране жизни и здоровья обучающихся
// polojenie_protection

// Положение об официальном сайте
// polojenie_site

// Положение об охране труда
// polojenie_trud

// Правила внутреннего трудового распорядка
// polojenie_labor_regulations

// Программа физкультурно спортивной деятельности в организации профилактики наркомании
// profilaktika_narkomanii

// УСТАВ
// ustav
        // $c = \App\Categs::find(1);
        // $cat = new \App\Categs();
        // $cat->c_title = 'Second';
        // $cat->save();
        // $c->appendNode($cat);

		$news = News::orderBy('created_at')->take(2)->get();

        return view('base/index', [
        	'messages' => '',
        	'title' => env('APP_NAME', 'mysql'),
            'news' => $news
        ]);
    }
}
