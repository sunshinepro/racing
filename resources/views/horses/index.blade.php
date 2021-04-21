@extends('layouts.app')
@section('content')
<div class="card-body">
    <h2>Table of horses</h2>
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Runs</th>
            <th>Wins</th>
            <th>About</th>
            <th>Actions</th>

        </tr>
        @foreach ($horses as $horse)
        <tr>
            <td>{{ $horse->name}}</td>
            <td>{{ $horse->runs}}</td>
            <td>{{ $horse->wins }}</td>
            <td>{{ $horse->about }}</td>
            <td>
                <form action={{ route('horses.destroy', $horse->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('horses.edit', $horse->id) }}>Edit</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Delete"/>
                </form></td>
        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('horses.create') }}" class="btn btn-success">Add</a>
    </div>
</div>
@endsection
