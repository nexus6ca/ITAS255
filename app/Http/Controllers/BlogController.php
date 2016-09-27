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
        return 'BlogController::display()';
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
        return	'BlogController::add()';
    }

    /**
     *
     */
    public function save() {
        return	'BlogController::save()';
    }

    /**
     *
     */
    public function edit() {
        return	'BlogController::edit()';
    }

    /**
     *
     */
    public function delete() {
        return	'BlogController::delete()';
    }
}
