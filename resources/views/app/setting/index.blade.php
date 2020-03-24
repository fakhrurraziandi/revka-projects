@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form method="post" action="{{ route('app.settings.store') }}" class="form-horizontal" role="form">
                {!! csrf_field() !!}

                @if(count(config('setting_fields', [])) )

                    @foreach(config('setting_fields') as $section => $fields)
                        <div class="card card-info mb-3">
                            <div class="card-header">
                                <i class="{{ array_get($fields, 'icon', 'glyphicon glyphicon-flash') }}"></i>
                                {{ $fields['title'] }}
                            </div>
                            

                            <div class="card-body">
                                <h5 class="text-muted">{{ $fields['desc'] }}</h5>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12">
                                        
                                        @foreach($fields['elements'] as $field)
                                            
                                            @includeIf('app.setting.fields.' . $field['type'] )
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end card for {{ $fields['title'] }} -->
                    @endforeach

                @endif

                <div class="row m-b-md my-3">
                    <div class="col-md-12">
                        <button class="btn-primary btn">
                            Save Settings
                        </button>
                    </div>
                </div>
            </form>
        
        </div>
    </div>
</div>
@endsection
