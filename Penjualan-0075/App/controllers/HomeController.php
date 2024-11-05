<!--<?php
    //class HomeController
    {
        //public function index()
        {
            require_once __DIR__ . '/../Views/Home/index.php';
        }
    }

    class HomeController
    {
        private $db;

        public function __construct($db)
        {
            $this->db = $db;
        }

        public function index()
        {
            require __DIR__ . '/../views/home/index.php'; // Pastikan file index.php untuk home ada
        }
    }
