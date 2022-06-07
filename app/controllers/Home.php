<?php

/**
 * Home Class Controller
 */
class Home extends Controller
{
    public function index()
    {
        $db = new Database();
        $db->create_tables();
        $users = $db->query("select * from users");
        show($users);

        $this->view('home', [
            'title' => 'Home page'
        ]);
    }
}
