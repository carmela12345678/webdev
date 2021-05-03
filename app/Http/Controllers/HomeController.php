<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
=======
use App\Models\User;
use App\Models\CensusRecord;
>>>>>>> 3017d2a7e7935281ad712fb2054a7bc06bd4c858

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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
<<<<<<< HEAD
=======

    public function addRecAdmin()
    {
        return view('admin/AddRecAdmin');
    }

    public function viewCensusAdmin()
    {
        return view('admin/viewCensusAdmin');
    }

    public function unverifiedCensusAdmin()
    {
        $records = CensusRecord::all();
        return view('admin/unverifiedCensusAdmin')->with('records',$records);;
    }

    public function show()
    {
        $records = User::all();
        return view('admin/users')->with('records',$records);
    }

    public function censusRecord()
    {
        return redirect('census-view');
    }
>>>>>>> 3017d2a7e7935281ad712fb2054a7bc06bd4c858
}
