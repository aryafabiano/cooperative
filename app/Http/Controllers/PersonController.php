<?php
namespace App\http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
        public function create(){
            return view('people.create');
        }
        public function store(Request $request){
            dd($request);
        }
}