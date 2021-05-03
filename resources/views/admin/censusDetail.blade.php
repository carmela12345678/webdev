@extends('layout/layout')

@section('body')
    <div class="container" style="margin-top:3%; border-radius:10px;">
    <div class="jumbotron" style="background-color:white;">
    	<h3>Welcome Admin blahblah !</h3><br>
		<hr style="border: 1px solid black"></hr>
    </div>
	<div class="container" style="margin-top:3%; background-color:white; border-radius:10px;">
		<div>
			<a href="viewCensusAdmin" class="btn btn-primary">View Census Records</a><br><br>
			<a href="unverifiedCensusAdmin" class="btn btn-primary">Unverified Census Records</a><br><br>
			<a href="addAccount" class="btn btn-primary">Add Account</a><br><br>
			<a href="viewCensusAdmin" class="btn btn-primary">Log Out </a><br><br>
		</div>
	</div>
@endsection