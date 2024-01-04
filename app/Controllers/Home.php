<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data ['titulo']='marcos';
        echo view('front/inici' ,$data) ;
        echo view('front/nav');
        echo view('front/principal');
        echo view('front/final');
    }

    public function logi()
    {
        $data ['titulo']='marcos';
        echo view('front/inici' ,$data);
        echo view('front/nav');
        echo view('front/logi');
        echo view('front/final');
        
    }
}