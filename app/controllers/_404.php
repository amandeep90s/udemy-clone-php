<?php

/**
 * 404 Class Controller
 */
class _404 extends Controller
{
    public function index()
    {
        $this->view('errors/404', [
            'title' => '404'
        ]);
    }
}
