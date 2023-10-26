<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Home extends Page {

    public static function getHome(){

        $content = View::render('pages/home', [
            'name'=> 'test'
        ]);


        return parent::getPage('Home', $content);
    }
}