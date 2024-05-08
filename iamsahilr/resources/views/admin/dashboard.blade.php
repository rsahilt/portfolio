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
    
    <div class="messages">
        <h1>{{ $title }}</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>User Name</th>
                    <th>Message</th>
                </tr>
            </thead>

            <tbody>
                @foreach($messages as $message)
                    <tr>
                        <td>{{ $message->id }}</td> <!-- Display the ID of the message -->
                        <td>{{ $message->username }}</td>
                        <td>{{ $message->message }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection