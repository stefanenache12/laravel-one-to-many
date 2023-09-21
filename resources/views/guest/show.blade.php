@extends('layouts.guest')

@section('page-title', 'Welcome')

@section('main-content')
    <div class="container">
        <div class="row mt-3">
            <div class="col-4 border text-center m-auto">
                <h3>
                Title: {{ $project->title }}
                </h3>
                <h5>
                    Description: {{ $project->description }}
                </h5>
                <h5>
                    Languages: {{ $project->languages }}
                </h5>
            </div>
        </div>
    </div>
@endsection
