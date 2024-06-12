<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $team = [
        [
            'id'=>1,
            'name'=>'Mario',
            'surname'=>'Rossi',
            'email'=>'mariorossi@gmail.com',
            'role'=>'Admin',
            'image'=>'https://picsum.photos/id/1/200',
        ],
        [
            'id'=>2,
            'name'=>'Luca',
            'surname'=>'Verdi',
            'email'=>'lucaverdi@gmail.com',
            'role'=>'Tutor',
            'image'=>'https://picsum.photos/id/2/200',
        ],
        [
            'id'=>3,
            'name'=>'Nicola',
            'surname'=>'Bianchi',
            'email'=>'nicolabianchi@gmail.com',
            'role'=>'Admin',
            'image'=>'https://picsum.photos/id/3/200',
        ],
    ];

    
    public function home(){
        return view('home');
    }

    public function aboutUs(){
        return view('aboutUs',[
            'team'=>$this->team,
        ]);
    }

    public function member ($id){
        if(array_key_exists($id,$this->team)){
            $member = $this->team[$id];
            return view('member',compact('member'));
        }else{
            abort(404);
        }
        
    }



}
