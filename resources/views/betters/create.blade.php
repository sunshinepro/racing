@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Add new better:</div>
               <div class="card-body">
                   <form action="{{ route('betters.store') }}" method="POST">
                       @csrf
                       <div class="form-group">
                            <label for="">Name: </label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Surname: </label>
                            <input type="text" name="surname" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Bet: </label>
                            <input type="number" name="bet" class="form-control">
                        </div>
                       <div class="form-group">
                           <label>Horse: </label>
                           <select name="horse_id" id="" class="form-control">
                                <option value="" selected disabled>Select horse</option>
                                @foreach ($horses as $horse)
                                <option value="{{ $horse->id }}">{{ $horse->name }}</option>
                                @endforeach
                           </select>
                       </div>
                       <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
