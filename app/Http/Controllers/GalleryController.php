<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = menu('guest', '_json');
        $segment = 'Gallery';
        $galleries = Album::where([
            ['status', '=', Album::STATUS_ACTIVE]
        ])
            ->get();
        // dd($galleries);
        return view('pages.gallery_all', [
            'items' => $items,
            'segment' => $segment,
            'albums' => $galleries,
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
    public function show($slug)
    {
        $items = menu('guest', '_json');
        $album = Album::where([
            ['slug', '=', $slug],
            ['status', '=', Album::STATUS_ACTIVE],
        ])
            ->firstOrFail();
        $photos = DB::select('select * from photos where album_id = ?', [$album->id]);
        return view('pages.gallery', [
            'items' => $items,
            'photos' => $photos,
            'album' => $album,
        ]);
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
