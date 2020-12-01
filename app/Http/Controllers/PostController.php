<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat_page = DB::table('categories')
            ->where('slug', '=', 'halaman')
            ->first();
        $posts = Post::where([
            ['status', '=', 'PUBLISHED'],
            ['category_id', '!=', $cat_page->id]
        ])
            ->latest()
            ->get();
        $items = menu('guest', '_json');
        $segment = 'Posts';
        return view('pages.posts', [
            'posts' => $posts,
            'items' => $items,
            'segment' => $segment,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $items = menu('guest', '_json');
        $cat_page = DB::table('categories')
            ->where('slug', '=', 'halaman')
            ->first();
        $posts = Post::where([
            ['slug', '=', $slug],

        ]);

        $post = $posts->firstOrFail();
        $cat = $post->category()->getResults();
        $suggestions = Post::where('category_id', '!=', $cat_page->id)
            ->inRandomOrder()
            ->limit(3)
            ->get();
        return view('pages.post', [
            'items' => $items,
            'post' => $post,
            'category' => $cat,
            'suggestions' => $suggestions,
        ]);
    }


    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }
    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }
}
