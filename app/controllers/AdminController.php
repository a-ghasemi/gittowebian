<?php


namespace App\Controllers;

use Kernel\Controller;

class AdminController extends Controller
{
    protected function get_index(){
        return view("admin.index");
    }

    protected function get_fetch(){
        return "hi fetch";
    }
}