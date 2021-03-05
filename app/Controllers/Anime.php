<?php

namespace App\Controllers;

class Anime extends BaseController
{
    public function detail()
    {
        return view('Web/detail');
    }

    public function anim2()
    {
        return view('Web/anim2');
    }
}
