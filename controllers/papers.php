<?php

    class papers extends Controller
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
            $this->view->render('papers/index', true);
        }

        public function search()
        {
            $semester = $_POST['semester'];
            $module = $_POST['module'];
            $type = $_POST['type'];
            $year = $_POST['year'];
            require 'models/Papers_model.php';
            $model = new Papers_model();

            return $model->search($semester, $module, $type, $year);
        }
    }
