@extends('layouts.admintemplate')

<!-- here goes all the contents -->
@section('content')

<div class="row m-4">
    <!-- first card -->
    <div class="col-sm-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Inbox</h5>
                <p class="card-text">{{ $totalMessages }}</p>
            </div>
        </div>
    </div>

    <!-- second card -->
    <div class="col-sm-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Total Site Visits</h5>
                <p class="card-text">101</p>
            </div>
        </div>
    </div>

    <!-- third card -->
    <div class="col-sm-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Revenue</h5>
                <p class="card-text">$500.89</p>
            </div>
        </div>
    </div>

    <hr class="mt-4">

</div>

@endsection