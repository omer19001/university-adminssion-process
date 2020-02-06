<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\university;
use App\user;
use Illuminate\Support\Facades\Auth;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function grade(request $request)
    {
     $id=$request->grade_id;
     $tofel=$request->tofel;
     $universties=university::all();
      
     $collection = collect();
      foreach($universties as $university){
        if($id ==$university->grade_id )
        if($tofel>=$university->tofel_from and $tofel>=$university->to)
      $collection->push($university);
      }
       $user= user::find(auth::user()->id);
       $user->grade_id=$id;
       $user->tofel_grade=$tofel;
       $user->save();
 
      return view('universities')->with('universities',$collection);
    }
    public function report( )
    {
      # code...
      return view('report')->with('users',user::paginate(10) );

    }
    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}
