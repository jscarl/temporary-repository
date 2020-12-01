<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Events;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Models\Page;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $headlines = Post::where([
            ['headline', '=', 1],
            ['status', '=', 'PUBLISHED']
        ])
            ->latest()
            ->first();

        $post_highlight = Post::where([
            ['featured', '=', 1],
            ['status', '=', 'PUBLISHED']
        ])
            ->take(3)
            ->get();
        $items = menu('guest', '_json');
        $events = Events::where([
            ['headline', '=', '1'],
            ['status', '=', 'PUBLISHED']
        ])
            ->latest()
            ->take(2)
            ->get();

        $cat_page = DB::table('categories')
            ->where('slug', '=', 'halaman')
            ->first();
        $page = Post::where('category_id', $cat_page->id)
            ->latest()
            ->take(2)
            ->get();

        $albums = Album::where([
            ['status', '=', 'PUBLISHED']
        ])->latest()->take(3)->get();

        return view('pages.home', [
            'items' => $items,
            'post_highlight' => $post_highlight,
            'headlines' => $headlines,
            'last_event' => $events,
            'albums' => $albums,
            'pages' => $page,
        ]);
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
    public function show($id)
    {
        //
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
