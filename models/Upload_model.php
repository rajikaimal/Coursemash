<?php

    class Upload_model extends Model
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function insert($target)
        {
            $st = $this->db->prepare('INSERT INTO papers (type,confidence,year,directory,module,semester,owner) values 
				(:type,:confidence,:year,:directory,:module,:semester,:owner)');
            Session::init();
            $st->execute([
                ':type'       => $_POST['type'],
                ':confidence' => $_POST['confidence'],
                ':year'       => $_POST['year'],
                ':directory'  => $target,
                ':module'     => $_POST['module'],
                ':semester'   => $_POST['semester'],
                ':owner'      => $_SESSION['loggedIn'],
            ]);
        }

        public function insertPapers($target)
        {
            $st = $this->db->prepare('INSERT INTO pastpapers (type,year,directory,module,semester) values 
				(:type,:year,:directory,:module,:semester)');
            $st->execute([
                ':type'      => $_POST['type-paper'],
                ':year'      => $_POST['year-paper'],
                ':directory' => $target,
                ':module'    => $_POST['module-paper'],
                ':semester'  => $_POST['semester-paper'],
            ]);
        }
    }
