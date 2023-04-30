@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="table table-striped text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
            </tr>
        </thead>

        <tbody>
            @forelse($superpowers as $superpower)
                <tr>
                    <td>{{$superpower->id}}</td>
                    <td>
                        <a href="{{ route('superpowers.show', $superpower->id) }}">{{$superpower->name}}</a>
                    </td>
                    <td>{{ $superpower->description }}</td>
                </tr>
            @empty
                <p>There're no superpowers</p>
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
            <br><a href="{{ route('superpowers.create') }}" class="btn btn-warning">Create Superpower</a>
            </div>
        </div>
    </div>
@endsection