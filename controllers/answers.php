<?php

    class answers extends Controller
    {
        public function __Answers()
        {
            parent::__construct();
        }

        public function index()
        {
            $this->view->render('answers/index', true);
        }

        public function search()
        {
            $semester = $_POST['semester'];
            $module = $_POST['module'];
            $type = $_POST['type'];
            $year = $_POST['year'];
            require 'models/Answer_model.php';
            $model = new Answer_model();

            return $model->search($semester, $module, $type, $year);
        }
    }
