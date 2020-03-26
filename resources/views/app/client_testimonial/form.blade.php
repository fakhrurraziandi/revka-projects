@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            

            <div class="card border-0 shadow-sm">
                <div class="card-header">{{ isset($client_testimonial) ? 'Edit Client Testimonial' : 'Add New Client Testimonial' }}</div>
                <div class="card-body">
                    
                    
                    @if(isset($client_testimonial))
                        <form action="{{ route('app.client_testimonial.update', $client_testimonial->id)}}" method="POST" enctype="multipart/form-data">
                    @else
                        <form action="{{ route('app.client_testimonial.store')}}" method="POST" enctype="multipart/form-data">
                    @endif

                        @csrf

                        @isset($client_testimonial)
                            @method('PUT')
                        @endisset

                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label text-sm-right">Name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" id="name" name="name" placeholder="Name" value="{{old('name', (isset($client_testimonial) ? $client_testimonial->name : null)) }}">
                                @if($errors->has('name'))
                                    <div class="invalid-feedback">
                                        {{$errors->first('name')}}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="testimonial" class="col-sm-2 col-form-label text-sm-right">Testimonial</label>
                            <div class="col-sm-6">
                                <textarea class="form-control {{$errors->has('testimonial') ? 'is-invalid' : ''}}" id="testimonial" name="testimonial" placeholder="Testimonial" rows="7">{{old('testimonial', (isset($client_testimonial) ? $client_testimonial->testimonial : null)) }}</textarea>
                                @if($errors->has('testimonial'))
                                    <div class="invalid-feedback">
                                        {{$errors->first('testimonial')}}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image_file" class="col-sm-2 col-form-label text-sm-right">Image File</label>
                            <div class="col-sm-6">
                                <input type="file" class="form-control {{$errors->has('image_file') ? 'is-invalid' : ''}}" id="image_file" name="image_file" placeholder="Image File" value="{{old('image_file', (isset($client_testimonial) ? $client_testimonial->image_file : null)) }}">
                                
                                @if(isset($client_testimonial))
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
                                <a href="{{route('app.client_testimonial.index')}}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        
        </div>
    </div>
</div>
@endsection
