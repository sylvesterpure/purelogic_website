<?php

namespace App\Http\Controllers;

use App\blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = blog::latest()->get();
        return view('blog.index', compact('posts')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'title'     => 'required|max:100',
            'subtitle'  => 'required|max:100',
            'body'      => 'required'
        ]);

        $strSlug = str_slug(request('title'));

        if( $request->hasFile('image_file')){ 
            $image = $request->file('image_file'); 
            $fileName = $image->getClientOriginalName();
            $fileExtension = $image->getClientOriginalExtension();
            $name = time().'.'.$fileExtension;
            $request->image_file->move(public_path('images/blog'), $name);

            $Blog = new blog;
            $Blog->title = request('title');
            $Blog->subtitle = request('subtitle');
            $Blog->body = request('body');
            $Blog->image_url = asset('images/blog/'.$name);
            $Blog->seo_url = $strSlug;

            $Blog->save();
        } else {
            $Blog = new blog;
            $Blog->title = request('title');
            $Blog->subtitle = request('subtitle');
            $Blog->body = request('body');
            $Blog->seo_url = $strSlug;

            $Blog->save();
        }
        return redirect('blog');
    }

    public function specificPost($blog)
    {
        $post = blog::whereSeo_url($blog)->first();
        return view('blog.show', compact('post'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(blog $blog)
    {
        $post = $blog;
        return view('blog.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(blog $blog)
    {
        //
    }
}
