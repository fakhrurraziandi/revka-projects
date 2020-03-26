<?php

namespace App\Http\Controllers\App;

use App\ValueContent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ValueContentController extends Controller
{

    public function data(Request $request)
    {
        $limit = $request->filled('limit') ? $request->get('limit') : 10;
		$offset = $request->filled('offset') ? $request->get('offset') : 0;
		$search = $request->filled('search') ? $request->get('search') : '';
		$sort = $request->filled('sort') ? $request->get('sort') : 'id';
        $order = $request->filled('order') ? $request->get('order') : 'ASC';
        
        $list_value_content = ValueContent::search($search);
        $data['total'] = $list_value_content->count();


        $list_value_content->skip($offset);
        $list_value_content->limit($limit);
        $list_value_content->orderBy($sort, $order);

        $data['rows'] = $list_value_content->get();

        return $data;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('app.value_content.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.value_content.form');
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

        ValueContent::create([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'image_file' => $image_filename,
        ]);

        return redirect()->route('app.value_content.index');
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
    public function edit(ValueContent $value_content)
    {
        return view('app.value_content.form', compact('value_content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ValueContent $value_content)
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

        $value_content->update($data);

        return redirect()->route('app.value_content.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ValueContent $value_content)
    {
        $value_content->delete();

        return redirect()->route('app.value_content.index');
    }
}
