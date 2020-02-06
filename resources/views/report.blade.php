@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-4"><div class="card ca"><div class="card-header">settings</div>
    <div class="card-body">
        <ul class="list-group">
        <li class="list-group-item"><a href="{{route('report')}}"  >reports</a>
</li> 

        </ul>
    </div>
    </div></div>
     
         <div class="col-md-8">
             <div class="card ca">
<div class="card-header"></div>
             <div class="card-body">
                 <div ><a href="{{route('export')}}" class="btn btn-primary mb-10 bt">export to ecxcel</a></div>
                 <div>
                 <table class='table table-striped'>
                 <thead>
                 <tr>
                 <th>name </th>
                 <th>email</th>
                 <th>ID score</th>
                 <th>TOFEL IBT</th>

                 </tr>

                 </thead>
                 <tbody>
                     @foreach($users as $user)
                <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->grade_id}}</td>
                <td>{{$user->tofel_id}}</td>

                </tr>
@endforeach
                 </tbody>
                 
                 </table></div>
                 {{$users->links()}}
             </div>
             </div>
         </div>
    </div>
</div>
@endsection
@section('style')
<style>
.bt{

    margin-bottom: 10px;
}
.ca{

    margin-top: 20px;
}

</style>
@endsection