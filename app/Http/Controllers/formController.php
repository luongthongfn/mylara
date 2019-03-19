<?php

namespace App\Http\Controllers;
use App\Http\Requests\myformRequest;
use App\Http\Requests\myLoginRequest;
use App\Http\Requests\registerRequest;

class formController extends Controller
{
    public function form1(myformRequest $request)
    {
        echo $request->text1;
        echo $request->text2;
    }

    public function login(myLoginRequest $request)
    {
        echo 'login succes';
        ?>
        <p><?= $request->user ?></p>
        <p><?= $request->pass ?></p>
        <?php
    }

    public function register(registerRequest $request)
    {
        echo 'register succes';
        ?>
        <p><?= $request->user ?></p>
        <p><?= $request->pass ?></p>
        <?php
    }
}
