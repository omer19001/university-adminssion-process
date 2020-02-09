@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if(auth::user()->user_role=='1')
        <div class="col-md-4"><div class="card"><div class="card-header">settings</div>
    <div class="card-body">
        <ul class="list-group">
        <li class="list-group-item"><a href="{{route('report')}}"  >reports</a>
</li> 

        </ul>
    </div>
    </div></div>
    @endif
        <div class="col-md-8 ">
        <div class="jumbotron ">
  <h1 class="display-4 text-center">attention</h1>
  <p class="lead text-center">you grades are not suffcient for one of the registered universities</p>
   
   
</div>
        </div>
    </div>
</div>
@endsection
@section('style')
<style>
.jumbotron{

    margin-top: 10px;
}

</style>
@endsection