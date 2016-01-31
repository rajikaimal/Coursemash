<?php

    class guest extends Controller
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
            $this->view->render('index/index', false);
        }
    }
