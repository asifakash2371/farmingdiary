<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs=Blog::all();
        return view('blog',compact('blogs'));
    }

    public function createBlog()
    {
        return view('createblog');
    }

    public function storeBlog(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'image'=> 'required|mimes:jpeg,png',
        ]);

        $blog = Blog::create([
            'name' => $request->name,
            'description' => $request->description,

        ]);

        if($request->hasFile('image')){
            $image = $request->image;
            $image_new_name = time() . '.' . $image->extension();
            $image->move('storage/blogs/', $image_new_name);
            $blog->image = 'blogs/' . $image_new_name;
            $blog->save();
        }

        session()->flash('message','Blog has been created successfully!');
        return redirect()->back();

    }
}
