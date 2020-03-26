<?php

namespace App\Http\Controllers\App;

use App\HeaderCarousel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class HeaderCarouselController extends Controller
{

    public function data(Request $request)
    {
        $limit = $request->filled('limit') ? $request->get('limit') : 10;
		$offset = $request->filled('offset') ? $request->get('offset') : 0;
		$search = $request->filled('search') ? $request->get('search') : '';
		$sort = $request->filled('sort') ? $request->get('sort') : 'id';
        $order = $request->filled('order') ? $request->get('order') : 'ASC';
        
        $list_header_carousel = HeaderCarousel::search($search);
        $data['total'] = $list_header_carousel->count();


        $list_header_carousel->skip($offset);
        $list_header_carousel->limit($limit);
        $list_header_carousel->orderBy($sort, $order);

        $data['rows'] = $list_header_carousel->get();

        return $data;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('app.header_carousel.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.header_carousel.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => ['required'],
            'subtitle' => ['required'],
            // 'link_url' => ['required'],
            // 'link_text' => ['required'],
            'image_file' => ['required', 'mimes:jpg,jpeg,bmp,png']
        ];

        $request->validate($rules);

        $image_file = $request->file('image_file');
        $image_filename = 'uploads/'. md5(rand(0, 9999)). '.'. $image_file->getClientOriginalExtension();
        Storage::disk('public')->put($image_filename, File::get($image_file));

        HeaderCarousel::create([
            'title' => $request->get('title'),
            'subtitle' => $request->get('subtitle'),
            'link_url' => $request->get('link_url'),
            'link_text' => $request->get('link_text'),
            'image_file' => $image_filename,
        ]);

        return redirect()->route('app.header_carousel.index');
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
    public function edit(HeaderCarousel $header_carousel)
    {
        return view('app.header_carousel.form', compact('header_carousel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HeaderCarousel $header_carousel)
    {
        $rules = [
            'title' => ['required'],
            'subtitle' => ['required'],
            // 'link_url' => ['required'],
            // 'link_text' => ['required'],
            'image_file' => ['mimes:jpg,jpeg,bmp,png']
        ];

        $request->validate($rules);

        $data = [
            'title' => $request->get('title'),
            'subtitle' => $request->get('subtitle'),
            'link_url' => $request->get('link_url'),
            'link_text' => $request->get('link_text'),
        ];

        if($request->hasFile('image_file')){
            $image_file = $request->file('image_file');
            $image_filename = 'uploads/'. md5(rand(0, 9999)). '.'. $image_file->getClientOriginalExtension();
            Storage::disk('public')->put($image_filename, File::get($image_file));

            $data['image_file'] = $image_filename;

        }

        $header_carousel->update($data);

        return redirect()->route('app.header_carousel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(HeaderCarousel $header_carousel)
    {
        $header_carousel->delete();

        return redirect()->route('app.header_carousel.index');
    }
}
