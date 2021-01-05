<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Country; 

class AdminController extends Controller
{
    public function index(){

        return view('backend.admin');
    }

    public function create(){

        return view('forms.country');
    }

    public function store(){

        //dd('arrived');
        // $name=request('name');
        // $capital=request('capital');
        // $currency=request('currency');
        // $population=request('population');

        $name=request()->input('name');
        $capital=request()->input('capital');
        $currency=request()->input('currency');
        $population=request()->input('population');
        
        //first approach
        // Country::create([
        //     'name'=>$name,
        //     'capital'=>$capital,
        //     'currency'=>$currency,
        //     'population'=>$population,

        // ]);

       // 2nd approach

       $country=new Country;

       $country->name=$name;
       $country->capital=$capital;
       $country->currency=$currency;
       $country->population=$population;
       $country->population=$population;

       $country->save();

       //return view('backend.admin');
       // return back();

       return redirect('/admin/country/show');

    }

    public function showCountry(){

        $countries=Country::all();

        //dd($countries);

        return view('backend.showCountry',compact('countries'));

    }

    public function countrydetail($id){

        // $country=Country::where('id',$id)->first();
         $country=Country::find($id);  //only for searching with primary key

        // return view('backend.countryDetail',compact('country'));

        return view('backend.countryDetail',compact('country'));


    }

    public function edit($id){


        $country=Country::find($id);

        return view('forms.editCountry',compact('country'));

    }

    public function update($id){

        $country=Country::find($id);

        $name=request()->input('name');
        $capital=request()->input('capital');
        $currency=request()->input('currency');
        $population=request()->input('population');

        // $country->name=request()->input('name');
        // $country->capital=request()->input('capital');
        // $country->currency=request()->input('currency');
        // $country->population=request()->input('population');

       // $country->save();

        $country->update([
            'name' =>$name,
            'capital'=>$capital,
            'currency'=>$currency,
            'population'=>$population
        ]);

        return redirect('/admin/country/show');

    }

    public function destroy($id){
        $country=Country::find($id);

        $country->delete();

        return back();


    }
}
