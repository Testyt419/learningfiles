<?php

namespace App\Controllers;


class IndexController  extends \Controller{
    public function index(): void
    {
            $this->render('index');
    }


}