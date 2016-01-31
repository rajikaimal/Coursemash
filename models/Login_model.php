<?php

    class Login_model extends Model
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function login()
        {
            $st = $this->db->prepare('SELECT fname from users where Id=:id AND password=:password');
            $st->execute([
                ':id'       => $_POST['sliitID'],
                ':password' => $_POST['password'],
            ]);
            $data = $st->fetchAll();
            $count = $st->rowCount();
            if ($count > 0) {
                Session::init();
                Session::set('loggedIn', $_POST['sliitID']);
                header('location:'.URL);
            } else {
                session_start();
                $_SESSION['error'] = 'Try again';
                header('location:'.URL.'login');
            }
        }

        public function signup()
        {
            //echo "ad";
            $st = $this->db->prepare('INSERT INTO users values (:Id,:password,:year,:fname,:lname)');
            $st->execute([
                ':fname'    => $_POST['fname'],
                ':lname'    => $_POST['lname'],
                ':Id'       => $_POST['sliitID'],
                ':year'     => $_POST['year'],
                ':password' => $_POST['password'],
            ]);
        }
    }
