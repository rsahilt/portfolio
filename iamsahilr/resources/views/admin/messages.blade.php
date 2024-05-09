@extends('layouts.admintemplate')

@section('content')

<div class="testimonials">
  
    <div class="container-fluid">
        @foreach($messages as $message)
        <div class="review">
            <div class="dp">
                <img class="dp-img-admin" src="/images/dp.png" alt="display picture">
            </div>
            <div class="user">
                <div class="username">{{ $message->username }}</div>
                <div class="userreview">{{ $message->message }}</div>
            </div>
        </div>
        @endforeach
    </div>

</div>

@endsection