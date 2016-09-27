<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BlogController extends Controller
{
    /**
     * Display	a list of blogs
     */
    public function display() {
        // Display the controller and action name on the browser
        return view('display');
    }

    /**
     *
     */
    public function index() {
        return	'BlogController::index()';
    }

    /**
     *
     */
    public function add() {
        return	view('add');
    }

    /**
     *
     */
    public function save() {
        return	view('save');
    }

    /**
     *
     */
    public function edit() {
        return	view('edit');
    }

    /**
     *
     */
    public function delete() {
        return	view('delete');
    }
}
