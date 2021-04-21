@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit horse information</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('horses.update', $horse->id) }}">
                        @csrf @method("PUT")
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $horse->name }}">
                        </div>
                        <div class="form-group">
                            <label for="">Runs</label>
                            <input type="text" name="wins" class="form-control" value="{{ $horse->wins }}">
                        </div>
                        <div class="form-group">
                            <label for="">Wins</label>
                            <input type="text" name="runs" class="form-control" value="{{ $horse->runs }}">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea id="mce type="text" name="description" rows=10 cols=100 class="form-control">{{ $horse->description }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
