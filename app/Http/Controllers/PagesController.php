<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use View;

class PagesController extends Controller
{
    //
    public function index() {
        if(View::exists('pages.index'))
            return view('pages.index')
            ->with('text','<b>Laravel</b>')
            ->with('name','<b>SM Farhad</b>')
            ->with(['location'=>'Europe', 'planet'=> 'Earth']);
            //return view('pages.index', ['text'=> '<b>Laravel</b>']);
        else
            return 'no view available';
            
    }
    
    public function profile() {
        return view('pages.profile');
    }
    
    public function settings() {
        return view('pages.settings');
    }    
    
}
