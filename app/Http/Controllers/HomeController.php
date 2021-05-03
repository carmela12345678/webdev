<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CensusRecord;


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

}
