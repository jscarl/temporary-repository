<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return redirect('/posts');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($category_name)
    {
        $findCatBySlug = Category::where([
            ['slug', '=', $category_name],
        ])
            ->firstOrFail();
        // dd($findCatBySlug);
        $posts = Post::where([
            ['status', '=', 'PUBLISHED'],
            ['category_id', '=', $findCatBySlug->id]
        ])
            ->latest()
            ->get();
        $items = menu('guest', '_json');
        $segment = $findCatBySlug->name;
        return view('pages.posts', ['posts' => $posts, 'items' => $items, 'segment' => $segment,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
