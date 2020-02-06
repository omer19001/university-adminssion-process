@extends('layouts.app')

@section('content')
 
    
    
    <div class="album py-5 bg-light">
        <div class="container">
       
          <div class="row">
          @foreach($universities as $university)
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{asset('images/'.$university->image)}}" alt="Card image cap">
                <div class="card-body">
                <p class="card-header">{{$university->name }}</p>
                <div class="collapse" id="collapse{{$university->id}}">
                  <p class="card-text">{{$university->description }}</p></div>
                   
                   
                      <div class="form-group">
  <a class="  btn-sm" data-toggle="collapse" href="#collapse{{$university->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
    see more
  </a>
  
  
                    <div class="btn-group w-100">
                       <a type="button" class=" btn  btn-primary  text-white  " href="{{$university->url}}">visit website</a> 
                       
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            @endforeach
</div>
           
             

             
            
             
 
            
            
          </div>
         
      </div>

    
 
 

@endsection
