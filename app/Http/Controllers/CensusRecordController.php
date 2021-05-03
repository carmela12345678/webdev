<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CensusRecord;
use App\Models\Record;

class CensusRecordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $records = CensusRecord::all();
        return redirect('/unverifiedCensusAdmin')->with('records',$records);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $flag = 0;
        $user = $request->user(); // Pag kuha sa instance sa logged in user
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $age = $request->input('age');
        $gender = $request->input('gender');
        $status = $request->input('status');
        $add = $request->input('add');
        $dateOfBirth = $request->input('dateOfBirth');
        $educational = $request->input('educational');
        $role = $request->input('role');
        $sourceOfIncome = $request->input('sourceOfIncome');
        $recordId = $request->input('record');
       
        $censusRec = new CensusRecord;

        if( $recordId == 0){
            $record = new Record;
            $record->record_status = "unverified";
            $record->user_id = $user->id; // Access sa user ID

            $record->save();
            $censusRec->record_id = $record->id;
            $flag = 1;
        }else{
            $censusRec->record_id = $recordId;
        }
        // else{
        //     $id = Record::find($recordId);
        //     $censusRec->record_id = $id->id;
        // }

        $censusRec->firstname = $fname;
        $censusRec->lastname = $lname;
        $censusRec->age = $age;
        $censusRec->gender = $gender;
        $censusRec->civil_status = $status;
        $censusRec->address = $add;
        $censusRec->birth_date = $dateOfBirth;
        $censusRec->education = $educational;
        $censusRec->role = $role;
        $censusRec->sourceOfIncome = $sourceOfIncome;

        $censusRec->save();
        
        if($flag == 1){
            return redirect('/AddRecAdmin');
        }else{
            return redirect('/unverifiedCensusAdmin');
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        $id = $request->input('id');
        $records = CensusRecord::all()->where('record_id',$id);
        return view('/admin/censusRec')->with('records', $records);
    }

    public function addMember(Request $request)
    {
        //
        $id = $request->input('id');
        $records = CensusRecord::all()->where('record_id',$id);
        return view('/admin/AddMemberAdmin')->with('records', $records);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $id = $request->input('id');

        $record = CensusRecord::find($id);
        $record->delete();

        return redirect('/censusRecord');
    }
}
