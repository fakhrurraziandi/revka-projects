<?php

namespace App\Http\Controllers\App;

use App\Portofolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PortofolioController extends Controller
{

    public function data(Request $request)
    {
        $limit = $request->filled('limit') ? $request->get('limit') : 10;
		$offset = $request->filled('offset') ? $request->get('offset') : 0;
		$search = $request->filled('search') ? $request->get('search') : '';
		$sort = $request->filled('sort') ? $request->get('sort') : 'id';
        $order = $request->filled('order') ? $request->get('order') : 'ASC';
        
        $list_portofolio = Portofolio::search($search);
        $data['total'] = $list_portofolio->count();


        $list_portofolio->skip($offset);
        $list_portofolio->limit($limit);
        $list_portofolio->orderBy($sort, $order);

        $data['rows'] = $list_portofolio->get();

        return $data;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('app.portofolio.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.portofolio.form');
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

        Portofolio::create([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'image_file' => $image_filename,
        ]);

        return redirect()->route('app.portofolio.index');
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
    public function edit(Portofolio $portofolio)
    {
        return view('app.portofolio.form', compact('portofolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portofolio $portofolio)
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

        $portofolio->update($data);

        return redirect()->route('app.portofolio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portofolio $portofolio)
    {
        $portofolio->delete();

        return redirect()->route('app.portofolio.index');
    }
}
