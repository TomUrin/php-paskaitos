<?php

namespace Litbankas\Controllers;
use Litbankas\App;
use Litbankas\Messages as M;

class HomeController {

    public function getIt($param) {
        echo 'AAA: ' .$param;
    }

    public function index() {
        $list = [];
        for($i = 0; $i < 10; $i++) {
            $list[] = rand(1000, 9999);
        }
        return App::view('home', [
            'title' => 'Alabama',
            'list' => $list
        ]);
    }

    public function indexJson() {
        $list = [];
        for($i = 0; $i < 10; $i++) {
            $list[] = rand(1000, 9999);
        };
        return App::json([
            'title' => 'Alabama',
             'list' => $list
            ]);
    }

    public function form() {
        return App::view('form', ['messages' => M::get()]);
    }

    public function doForm() {
        M::add('Puiku', 'alert'); 
        M::add($_POST['alabama'], 'success');
        return App::redirect('form');
    }
}