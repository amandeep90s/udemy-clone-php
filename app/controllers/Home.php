<?php

/**
 * Home Class Controller
 */
class Home extends Controller
{
    public function index()
    {
        $this->view('home', [
            'title' => 'Home page'
        ]);
    }
}
