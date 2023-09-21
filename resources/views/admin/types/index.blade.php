@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('main-content')
    <div class="row w-75 m-auto shadow border">
        <table class="table text-center">
            <thead class="text-center">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Projects</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($types as $type)
                    <tr>
                        <th scope="row">{{ $type->id }}</th>
                        <td>{{ $type->title }}</td>
                        <td>
                            <ul>
                                @foreach ($type->project as $project)
                                    <li>
                                        <a href="{{ route('guest.show', ['id' => $project->id]) }}">
                                            {{ $project->title }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </td>
                        {{-- <td>
                            <a href="{{ route('admin.types.edit',['type' => $type->id]) }}">
                                <button class="btn btn-outline-warning">
                                    UPDATE
                                </button>
                            </a>
                            <form
                                action="{{ route('admin.types.destroy', ['type' => $type->id]) }}"
                                class="d-inline-block"
                                method="POST"
                                onsubmit="return confirm('Are you sure you want to Delete this type?');">
                                @csrf
                                @method('DELETE')
                                
                                <button type="submit" class="btn btn-outline-danger">
                                    DELETE
                                </button>
                            </form>
                        </td> --}}
                    </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection