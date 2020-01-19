<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Repositories\UserRepository;

class DoctorController extends Controller
{
    public function index(UserRepository $userRepo){
       
        $users = $userRepo->getAllDoctors();
 
        return view('doctors.list',["doctorsList"=>$users, "footerYear"=>date("Y"), "title"=>"Moduł Lekarzy"]);
    }

    public function show($id){
       
        $doctor = User::find($id);
 
        return view('doctors.show',["doctor"=>$doctor, "footerYear"=>date("Y"), "title"=>"Moduł Lekarzy"]);
    }

    public function create(){
       
        User::create([
            'name'=>'Alice Cooper',
            'email'=>'alice@cooper.com',
            'password'=>bcrypt('password'),
            'phone'=>123454789,
            'address'=>'Abc 19, Katowice, Poland',
            'status'=>'Active',
            'pesel'=>'123123123',
            'type'=>'Doctor'
        ]);
        
        return redirect('doctors');
    }

    public function edit($id){
       
        $doctor = $userRepo->update(["name" => "Jessica Johnson"], $id);
 
        return redirect('doctors');
    }
}