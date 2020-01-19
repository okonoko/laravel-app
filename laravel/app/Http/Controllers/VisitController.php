<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Visit;

use App\Repositories\VisitRepository;

class VisitController extends Controller
{
    public function index(VisitRepository $visitRepo){
       
        $visits = $visitRepo->getAll();
 
        return view('visits.list',["visits"=>$visits, "footerYear"=>date("Y"), "title"=>"Moduł Specjalizacji"]);
    }

}