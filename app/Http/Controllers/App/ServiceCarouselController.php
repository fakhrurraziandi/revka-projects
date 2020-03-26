<?php

namespace App\Http\Controllers\App;

use App\ServiceCarousel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ServiceCarouselController extends Controller
{

    public function data(Request $request)
    {
        $limit = $request->filled('limit') ? $request->get('limit') : 10;
		$offset = $request->filled('offset') ? $request->get('offset') : 0;
		$search = $request->filled('search') ? $request->get('search') : '';
		$sort = $request->filled('sort') ? $request->get('sort') : 'id';
        $order = $request->filled('order') ? $request->get('order') : 'ASC';
        
        $list_service_carousel = ServiceCarousel::search($search);
        $data['total'] = $list_service_carousel->count();


        $list_service_carousel->skip($offset);
        $list_service_carousel->limit($limit);
        $list_service_carousel->orderBy($sort, $order);

        $data['rows'] = $list_service_carousel->get();

        return $data;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('app.service_carousel.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.service_carousel.form');
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
            'description' => ['required'],
            'image_file' => ['required', 'mimes:jpg,jpeg,bmp,png']
        ];

        $request->validate($rules);

        $image_file = $request->file('image_file');
        $image_filename = 'uploads/'. md5(rand(0, 9999)). '.'. $image_file->getClientOriginalExtension();
        Storage::disk('public')->put($image_filename, File::get($image_file));

        ServiceCarousel::create([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'image_file' => $image_filename,
        ]);

        return redirect()->route('app.service_carousel.index');
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
    public function edit(ServiceCarousel $service_carousel)
    {
        return view('app.service_carousel.form', compact('service_carousel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceCarousel $service_carousel)
    {
        $rules = [
            'title' => ['required'],
            'description' => ['required'],
            'image_file' => ['mimes:jpg,jpeg,bmp,png']
        ];

        $request->validate($rules);

        $data = [
            'title' => $request->get('title'),
            'description' => $request->get('description'),
        ];

        if($request->hasFile('image_file')){
            $image_file = $request->file('image_file');
            $image_filename = 'uploads/'. md5(rand(0, 9999)). '.'. $image_file->getClientOriginalExtension();
            Storage::disk('public')->put($image_filename, File::get($image_file));

            $data['image_file'] = $image_filename;

        }

        $service_carousel->update($data);

        return redirect()->route('app.service_carousel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceCarousel $service_carousel)
    {
        $service_carousel->delete();

        return redirect()->route('app.service_carousel.index');
    }
}
