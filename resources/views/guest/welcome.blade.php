@extends('layouts.guest')

@section('page-title', 'Welcome')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body text-center text-primary">
                        <h1>
                            Welcome!
                        </h1>
                        <h2>
                            MY PORTOFOLIO
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            @foreach ($projects as $project)
                <div class="col-4 border text-center">
                    <h3>
                       Title: {{ $project->title }}
                    </h3>
                    <h5>
                        Description: {{ $project->description }}
                    </h5>
                    <h5>
                        Languages: {{ $project->languages }}
                    </h5>
                    <a href="{{ route('guest.show',['id' => $project->id]) }}">
                        <button class="btn btn-primary">
                            VIEW
                        </button>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
