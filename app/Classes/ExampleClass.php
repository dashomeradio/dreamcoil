<?php

//EXAMPLE FILE

namespace App;

class ExampleClass
{


    public function called()
    {

        $config = new \Dreamcoil\Config;

        $title = new \Dreamcoil\Codebowl\Title;

        $auth = new \Dreamcoil\Auth;

        $title->set($config->get('title'));

        $title->append('Home');

        $layout = new \Dreamcoil\Layout('Bubo',array('title' => $title->get(), 'time' => time()));

        echo "We're going to miss you Dreamcoil v1<hr>";

        \Models\UserModel::getData();

        $auth->set(array('Name' => 'Florian'));

        if($auth->check()) echo '<br>Welcome!</br>';

    }

}