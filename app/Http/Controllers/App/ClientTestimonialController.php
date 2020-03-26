<?php

namespace App\Http\Controllers\App;

use App\ClientTestimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ClientTestimonialController extends Controller
{

    public function data(Request $request)
    {
        $limit = $request->filled('limit') ? $request->get('limit') : 10;
		$offset = $request->filled('offset') ? $request->get('offset') : 0;
		$search = $request->filled('search') ? $request->get('search') : '';
		$sort = $request->filled('sort') ? $request->get('sort') : 'id';
        $order = $request->filled('order') ? $request->get('order') : 'ASC';
        
        $list_client_testimonial = ClientTestimonial::search($search);
        $data['total'] = $list_client_testimonial->count();


        $list_client_testimonial->skip($offset);
        $list_client_testimonial->limit($limit);
        $list_client_testimonial->orderBy($sort, $order);

        $data['rows'] = $list_client_testimonial->get();

        return $data;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('app.client_testimonial.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.client_testimonial.form');
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
            'name' => ['required'],
            'testimonial' => ['required'],
            'image_file' => ['required', 'mimes:jpg,jpeg,bmp,png']
        ];

        $request->validate($rules);

        $image_file = $request->file('image_file');
        $image_filename = 'uploads/'. md5(rand(0, 9999)). '.'. $image_file->getClientOriginalExtension();
        Storage::disk('public')->put($image_filename, File::get($image_file));

        ClientTestimonial::create([
            'name' => $request->get('name'),
            'testimonial' => $request->get('testimonial'),
            'image_file' => $image_filename,
        ]);

        return redirect()->route('app.client_testimonial.index');
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
    public function edit(ClientTestimonial $client_testimonial)
    {
        return view('app.client_testimonial.form', compact('client_testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClientTestimonial $client_testimonial)
    {
        $rules = [
            'name' => ['required'],
            'testimonial' => ['required'],
            'image_file' => ['mimes:jpg,jpeg,bmp,png']
        ];

        $request->validate($rules);

        $data = [
            'name' => $request->get('name'),
            'testimonial' => $request->get('testimonial'),
        ];

        if($request->hasFile('image_file')){
            $image_file = $request->file('image_file');
            $image_filename = 'uploads/'. md5(rand(0, 9999)). '.'. $image_file->getClientOriginalExtension();
            Storage::disk('public')->put($image_filename, File::get($image_file));

            $data['image_file'] = $image_filename;

        }

        $client_testimonial->update($data);

        return redirect()->route('app.client_testimonial.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientTestimonial $client_testimonial)
    {
        $client_testimonial->delete();

        return redirect()->route('app.client_testimonial.index');
    }
}
