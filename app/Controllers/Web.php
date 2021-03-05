<?php

namespace App\Controllers;

use App\Models\favoritModel;

class Web extends BaseController
{

    public function index()
    {
        return view('Web/awp');
    }

    public function open()
    {

        return view('Web/awp');
    }

    protected $watchModel;
    public function __construct1()
    {
        $this->watchModel = new \App\Models\watchModel();
    }
    public function anim2()
    {
        // $favoritModel = new \App\Models\favoritModel();
        // $animModel = new \App\Models\favoritModel();
        $anime2 = $this->watchModel->findAll();
        $data1 = [
            'tittle' => 'Anime Watched',
            'anime2' => $anime2
        ];

        return view('Web/anim2', $data1);
    }




    protected $animModel;
    public function __construct()
    {
        $this->animModel = new \App\Models\favoritModel();
    }
    public function detail()
    {

        // $favoritModel = new \App\Models\favoritModel();
        // $animModel = new \App\Models\favoritModel();
        $anime = $this->animModel->findAll();
        $data = [
            'tittle' => 'Anime Favorit',
            'anime' => $anime
        ];

        return view('Web/detail', $data);
    }


    //--------------------------------------------------------------------
}
