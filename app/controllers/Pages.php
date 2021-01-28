<?php
class Pages extends Controller {
    public function __construct(){
    }

    public function index(){
        $data = [
            'title' => 'UnoMoMVC',
            'description' => 'Model View Controller Framework'
        ];

        $this->view('pages/index', $data);
    }

    public function about(){
        $data = [
            'title' => 'About Us',
            'description' => 'Model View Controller Framework made along with a PHP course'
        ];
        
        $this->view('pages/about', $data);
    }
}