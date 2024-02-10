<?php

namespace Core;

class Authenticator
{
    public function attempt($email, $password)
    {
        $user = App::resolve(Database::class)->query('SELECT * FROM users WHERE email = :email', [
                'email' => $email
            ])->find();

        if($user) {
            if (password_verify($password, $user['password'])) {
                $name = $user['name'];
                $this->login([
                    'name' => $name,
                    'email' => $email
                ]);
                return true;
            } 
        }
        return false;
    }


    public function login($user) {

        $_SESSION['user'] = [
            'name' => $user['name'],
            'email' => $user['email']
        ];
        session_regenerate_id(true);
    }

    public function logout(){
        // log the user out
        Session::destroy();
    }


}
