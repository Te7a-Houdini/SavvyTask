<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * list users
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.index');
    }
}
