@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-success">
                        Sei loggato!
                    </h1>
                </div>
            </div>
        </div>
        <div class="col-6 m-auto mt-3">
            <div class="card">
                <a href="{{ route('admin.projects.index') }}" class="p-5">
                    <div class="card-body">
                        <h1 class="text-center">
                            Vedi Progetti
                        </h1>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-6 m-auto mt-3">
            <div class="card">
                <a href="{{ route('admin.projects.create') }}" class="p-5">
                    <div class="card-body">
                        <h1 class="text-center">
                            Aggiungi Progetti
                        </h1>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
