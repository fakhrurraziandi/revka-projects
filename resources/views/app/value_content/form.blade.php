@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            

            <div class="card border-0 shadow-sm">
                <div class="card-header">{{ isset($value_content) ? 'Edit Value Content' : 'Add New Value Content' }}</div>
                <div class="card-body">
                    
                    
                    @if(isset($value_content))
                        <form action="{{ route('app.value_content.update', $value_content->id)}}" method="POST" enctype="multipart/form-data">
                    @else
                        <form action="{{ route('app.value_content.store')}}" method="POST" enctype="multipart/form-data">
                    @endif

                        @csrf

                        @isset($value_content)
                            @method('PUT')
                        @endisset

                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label text-sm-right">Title</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}" id="title" name="title" placeholder="Title" value="{{old('title', (isset($value_content) ? $value_content->title : null)) }}">
                                @if($errors->has('title'))
                                    <div class="invalid-feedback">
                                        {{$errors->first('title')}}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-sm-2 col-form-label text-sm-right">Description</label>
                            <div class="col-sm-6">
                                <textarea class="form-control {{$errors->has('description') ? 'is-invalid' : ''}}" id="description" name="description" placeholder="Description" rows="7">{{old('description', (isset($value_content) ? $value_content->description : null)) }}</textarea>
                                @if($errors->has('description'))
                                    <div class="invalid-feedback">
                                        {{$errors->first('description')}}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image_file" class="col-sm-2 col-form-label text-sm-right">Image File</label>
                            <div class="col-sm-6">
                                <input type="file" class="form-control {{$errors->has('image_file') ? 'is-invalid' : ''}}" id="image_file" name="image_file" placeholder="Image File" value="{{old('image_file', (isset($value_content) ? $value_content->image_file : null)) }}">
                                
                                @if(isset($value_content))
                                    <p class="my-2">ignore if you don't want to replace the image</p>
                                @endif

                                @if($errors->has('image_file'))
                                    <div class="invalid-feedback">
                                        {{$errors->first('image_file')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                       

                        <div class="row mt-3">
                            <div class="col-sm-10 offset-sm-2">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{route('app.value_content.index')}}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        
        </div>
    </div>
</div>
@endsection
