<?php

class PageController extends Controller
{
    public function index(){
        $this->view('index', ['title' => 'Mordeczko']);
    }
}