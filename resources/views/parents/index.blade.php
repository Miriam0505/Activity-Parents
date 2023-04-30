@extends('layouts.master')
    
@section('content')
<div class="row">
    <div class="col">
        <table class="table table-striped text-center">
            <thead>
                <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
            </tr>
            </thead>

        <tbody>
            @forelse($parents as $parent)
            <tr>
                <td>{{ $parents->id }}</td>
                <td>
                    <a class="text-daner" href="{{ route('parents.show', $parent->id) }}">{{ $parent->name }}</a>
                </td>
                <td>{{ $parent->gender }}</td>
            </tr>
            @empty
                <p>No record found</p>
            @endforelse
        </tbody>
    </table>
    </div>
    </div>
@endsection

@section('botones')
<div class="container">
        <div class="row text-end">
            <div class="col-12">
                <br><a href=" {{ route('parents.create') }}" class="btn btn-warning">Create Parent</a>
            </div>
        </div>
    </div>
@endsection