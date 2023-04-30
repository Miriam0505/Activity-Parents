@extends('layouts.master')

@section('content')
<br><br>
<div class="container">
    <div class="row text-center">
    <h1>{{$parents->name}}</h1>
    <p>{{$parents->gender}}</p>
</div>
</div>
<br><br>
@endsection

@section('buttons')
<div class="container">
        <div class="row text-center">
            <div class="col text-end">
                <a href="{{ route('parents.edit', $parents->id)}}">Edit Parent</a></div>
    <for action="{{ route('parents.destroy', $parents->id) }}" method="pots">
        @method('delete')
        @csrf

        <br><button type="submit" onclick="return confirm('Are you sure you want to delete this record?')">Delete Parent</button>
    </form>
</div>
</div>
 @endsection