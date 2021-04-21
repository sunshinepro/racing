@extends('layouts.app')
@section('content')
{{-- <div class="card-body">
    <form class="form-inline" action="{{ route('betters.index') }}" method="GET">
        <select name="horse_id" id="" class="form-control">
            <option value="" selected disabled>Please choose a horse to filter:</option>
            @foreach ($horses as $horse)
            <option value="{{ $horse->id }}" 
                @if($horse->id == app('request')->input('horse_id')) 
                    selected="selected" 
                @endif>{{ $horse->name }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">Filter</button>
        <a class="btn btn-success" href={{ route('betters.index') }}>Show all</a>
    </form>
</div> --}}
<div class="card-body">
    @if($errors->any())
    <h4 style="color: red">{{$errors->first()}}</h4>
    @endif
    <h2>Table of betters</h2>
    <table class="table">
        <tr>
            <th>Better</th>
            <th>Bet</th>
            <th>Horse</th>
            <th>Actions</th>
        </tr>
        @foreach ($betters as $better)
        <tr>
            <td>{{ $better->name }} {{ $better->surname }}</td>
            <td>{{ $better->bet }}</td>
            <td>{{ $better->horse['name'] }}</td>
            {{-- <td>{{ $better->horse->name }}</td> --}}
            <td>
                <form action={{ route('betters.destroy', $better->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('betters.edit', $better->id) }}>Edit</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Delete"/>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('betters.create') }}" class="btn btn-success">Add new better</a>
    </div>
</div>
@endsection

