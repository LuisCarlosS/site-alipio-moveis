<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function indexAdmin(){
        $data = [];

        return view("admin/home", $data);
    }

}