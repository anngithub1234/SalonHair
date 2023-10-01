<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SubsciptionController extends Controller
{
    public function index(){
        $registered=User::count();
        return view('admin',compact('registered'));
    }
}
