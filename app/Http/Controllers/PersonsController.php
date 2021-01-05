<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class PersonsController extends Controller
{
    public function index(){

        $person_list = Person::all();

       // dd($person_list);

        return view('site.personlist',compact('person_list'));
    }
}
