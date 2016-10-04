<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Blog;

use App\Http\Requests;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['display']);
    }

    /**
     *    Retrieve all blog entries from the database and display them in a view.
     */
    public function display()
    {
        $blog = new    Blog();
        $blogs = $blog->all();
        return view('display')->with('blogs', $blogs);
    }

    /**
     *
     */
    public function index()
    {
        //	Send anonymous requests to the main display page
        return Redirect::to('/blog/display');
    }

    /**
     * Adds a new blog entry
     */

    public function add()
    {
        return view('add');
    }

    /**
     *    Save a blog entry to the database
     */
    public function save($id = null)
    {
        // Get the data posted from the form
        $title = Input::get('title');
        $entry = Input::get('entry');
        if ($id != null) {
            // Fetch the existing blog record from the db
            $blog = Blog::find($id);
        } else {
            // Create a new blog record
            $blog = new Blog();
        }

        $blog->title = $title;
        $blog->entry = $entry;
        $blog->posted_on = date("Y-m-d H:i:s");
        $blog->save();
        return Redirect::to('/blog/display');
    }

    /**
     *    Edit an existing blog entry
     */
    public function edit($id)
    {

        $blog = Blog::find($id);
        return view('edit')->with('blog', $blog);
    }

    /**
     *    Delete a blog entry
     */
    public function delete($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return Redirect::to('/blog/display');
    }
}
