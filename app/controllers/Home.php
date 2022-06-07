<?php

/**
 * Home Class Controller
 */
class Home extends Controller
{
    public function index()
    {
        $db = new Database();
        $db->query();
        
        $this->view('home', [
            'title' => 'Home page'
        ]);
    }
}
