<?php

    class about extends Controller
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
            $this->view->render('about/index', true);
        }
    }
