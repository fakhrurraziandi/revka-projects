@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            

            <div class="card border-0 shadow-sm">
                <div class="card-header">{{ isset($header_carousel) ? 'Edit Header Carousel' : 'Add New Header Carousel' }}</div>
                <div class="card-body">
                    
                    
                    @if(isset($header_carousel))
                        <form action="{{ route('app.header_carousel.update', $header_carousel->id)}}" method="POST" enctype="multipart/form-data">
                    @else
                        <form action="{{ route('app.header_carousel.store')}}" method="POST" enctype="multipart/form-data">
                    @endif

                        @csrf

                        @isset($header_carousel)
                            @method('PUT')
                        @endisset

                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label text-sm-right">Title</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}" id="title" name="title" placeholder="Title" value="{{old('title', (isset($header_carousel) ? $header_carousel->title : null)) }}">
                                @if($errors->has('title'))
                                    <div class="invalid-feedback">
                                        {{$errors->first('title')}}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="subtitle" class="col-sm-2 col-form-label text-sm-right">Subtitle</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control {{$errors->has('subtitle') ? 'is-invalid' : ''}}" id="subtitle" name="subtitle" placeholder="Subtitle" value="{{old('subtitle', (isset($header_carousel) ? $header_carousel->subtitle : null)) }}">
                                @if($errors->has('subtitle'))
                                    <div class="invalid-feedback">
                                        {{$errors->first('subtitle')}}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="link_url" class="col-sm-2 col-form-label text-sm-right">Link URL</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control {{$errors->has('link_url') ? 'is-invalid' : ''}}" id="link_url" name="link_url" placeholder="Link URL" value="{{old('link_url', (isset($header_carousel) ? $header_carousel->link_url : null)) }}">
                                @if($errors->has('link_url'))
                                    <div class="invalid-feedback">
                                        {{$errors->first('link_url')}}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="link_text" class="col-sm-2 col-form-label text-sm-right">Link Text</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control {{$errors->has('link_text') ? 'is-invalid' : ''}}" id="link_text" name="link_text" placeholder="Link Text" value="{{old('link_text', (isset($header_carousel) ? $header_carousel->link_text : null)) }}">
                                @if($errors->has('link_text'))
                                    <div class="invalid-feedback">
                                        {{$errors->first('link_text')}}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image_file" class="col-sm-2 col-form-label text-sm-right">Image File</label>
                            <div class="col-sm-6">
                                <input type="file" class="form-control {{$errors->has('image_file') ? 'is-invalid' : ''}}" id="image_file" name="image_file" placeholder="Image File" value="{{old('image_file', (isset($header_carousel) ? $header_carousel->image_file : null)) }}">
                                
                                @if(isset($header_carousel))
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
                                <a href="{{route('app.header_carousel.index')}}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        
        </div>
    </div>
</div>
@endsection

