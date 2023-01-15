<?php

namespace App\Http\Controllers;


class tryController extends Controller
{
    public function myInfo(){
        $cs_names = [
            'pato',
            'ciong',
            'nash',
            'nacio'
        ];
        return view('myInfo.aboutMe',[
            'names'=>$cs_names
        ]);
    }
}
