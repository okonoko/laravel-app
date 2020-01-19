<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Specialization;

use App\Repositories\SpecializationRepository;

class SpecializationController extends Controller
{
    public function index(SpecializationRepository $specializationRepo){
       
        $specializations = $specializationRepo->getAll();
 
        return view('specializations.list',["specializations"=>$specializations, "footerYear"=>date("Y"), "title"=>"Moduł Specjalizacji"]);
    }

}