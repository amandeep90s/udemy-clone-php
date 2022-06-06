<?php

/**
 * Main controller class
 */
class Controller
{
    public function view($view, $data = [])
    {
        extract($data);

        $filename = '../app/views/' . $view . '.view.php';
        if (file_exists($filename)) {
            require_once $filename;
        } else {
            echo 'Could not find view file: ' . $filename;
        }
    }
}
