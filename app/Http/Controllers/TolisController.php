<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tolis;

class TolisController extends Controller
{
    public function index(){
        $tolis = Tolis::all();

        return view('welcome', [
            'tolis' =>$tolis
        ]);
    }
    
    public function store(){
        $attributes = request()->validate([
                'title' => 'required',
                'description' =>'nullable'

            ]
            );

            Tolis::create($attributes);
            return redirect('/');
    }
    public function update(Tolis $toli){
        $toli->update(['isDone' => true]);

        return redirect('/');    
    }
    public function destroy(Tolis $toli){
        $toli->delete();
        return redirect('/');

    }

}
