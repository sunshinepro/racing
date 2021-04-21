@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Add new horse:</div>
               <div class="card-body">
                   <form action="{{ route('horses.store') }}" method="POST">
                       @csrf
                       <div class="form-group">
                           <label>Name: </label>
                           <input type="text" name="name" class="form-control">
                       </div>
                       <div class="form-group">
                           <label>Runs: </label>
                           <input type="number" name="runs" class="form-control"> 
                       </div>
                       <div class="form-group">
                        <label>Wins: </label>
                        <input type="number" name="wins" class="form-control"> 
                    </div>
                       <div class="form-group">
                           <label>About: </label>
                           <textarea id="mce" name="description" rows=10 cols=100 class="form-control"></textarea>
                       </div>
                       <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
