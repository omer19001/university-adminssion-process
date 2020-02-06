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
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">enter you grades</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                 
                <form  action="{{route('grade')}}"  >
                @csrf
                @method('post')
                
                    <div class="form-group">
                    <label for='ID'>ID</label>
                 <input class="form-control" id="ID" type='number' name='grade_id'>
                 <small id="IDhelp" class="form-text text-muted">please enter your ID grade,this grade is out of 7</small></div>
                 <div class="for-group">
                 <label for='tofel'>TOFEL IBT</label>
                 <input type='number' id='tofel' class="form-control" name='tofel'>
                  <small id="IDhelp" class="form-text text-muted">here you enter your TOFEL IBT grade ,the TOFEL IBT is  out of 660</small></div>
                 <div class="form-group">
                  <button type="submit"  class="btn btn-primary mt-2">submit</button></div>
                </form>

                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
