<?php

namespace Litbankas\Controllers;
use Litbankas\App;
use Litbankas\Messages as M;

class LoginController {
    public function showLogin() {

        return App::view('login', ['messages' => M::get()]);
    }

    public function doLogin() {
        $users = json_decode(file_get_contents(App::APP.'data/users.json'));
        foreach($users as $user) {
            if ($_POST['name'] !== $user->name) {
                continue;
            }
            if (md5($_POST['psw']) !== $user->password) {
                M::add('Labai blogai name', 'alert');
                return App::redirect('login');
            } else {
                App::authAdd($user);
                M::add('Sveikas, '.$user->full_name, 'success');
                return App::redirect('form');
            }
        }
        M::add('Labai blogai psw', 'alert');
        return App::redirect('login');
    }

    public function doLogout() {
        App::authRem();
        M::add('Iki', 'success');
        return App::redirect('login');
    }
}