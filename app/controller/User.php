<?php
namespace app\controller;

use app\BaseController;

class User extends BaseController
{
    public function index()
    {
        return 1+1;
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
}
