<?php

    class Profile_model extends Model
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function loadData()
        {
            Session::init();
            $st = $this->db->prepare('SELECT * from users where Id=:id');
            $st->execute([
                ':id' => $_SESSION['loggedIn'],
            ]);
            $row = $st->fetch();
            $data = [$row[3], $row[4]];
            //print_r($data);
        }

        public function saveInfo()
        {
            Session::init();
            $st = $this->db->prepare('UPDATE users SET fname=:fname,lname=:lname,year=:year WHERE Id=:Id');
            $st->execute([
                ':fname' => $_POST['fname'],
                ':lname' => $_POST['lname'],
                ':Id'    => $_SESSION['loggedIn'],
                ':year'  => $_POST['year'],
            ]);
        }

        public function savePass()
        {
            Session::init();
            $st = $this->db->prepare('SELECT password from users where Id=:id');
            $st->execute([
                ':id' => $_SESSION['loggedIn'],
            ]);
            $row = $st->fetch();
            $curpass = $row[0];
            if ($_POST['currpass'] == $curpass) {
                $st = $this->db->prepare('UPDATE users SET password=:newPass WHERE Id=:Id');
                $st->execute([
                ':newPass' => $_POST['newpass'],
                ':Id'      => $_SESSION['loggedIn'],
                ]);
            }
        }
    }
