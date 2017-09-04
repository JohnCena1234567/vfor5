<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThreadsController extends Controller
{
    public function index() {
    	$message = "Þetta er Threads síða";
    	return $message;
    }

    public function create() {
    	$message = "Þetta er threads create síða";
    	return $message;
    }

    public function show($id) {
    	$message = "Þetta er thread með id $id";
    	return $message;
    }
}
