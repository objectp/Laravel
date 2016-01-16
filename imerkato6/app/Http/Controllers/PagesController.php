<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about(){
        //how to pass value
        //method1
        /*$name = 'Tekalegn Fisseha';
        return view('pages/about')->with('name', $name); 1*/
        
         // method 2
        /*return view('pages/about')->with([
            'first' => 'Tekalegn',
            'last' => 'Fisseha'
            ]);*/

        //method 3
        /*$data = [];
        $data['first'] = 'Tekalegn';
        $data['last'] = 'Fisseha';

        return view('pages.about', $data);*/

        //method 4
        /*$first = 'Tekalegn';
        $last = 'Fisserha';
        return view('pages.about', compact('first', 'last'));*/

        $people = ['Danayet', 'Mitu', 'Bogish','zeka'];
        return view('pages.about', compact('people'));
        
    }

    public function contact(){
        return view('pages/contact');
    }
}
