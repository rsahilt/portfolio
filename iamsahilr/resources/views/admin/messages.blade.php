@extends('layouts.admintemplate')

@section('content')

@if(session('success'))
    <div class="alert alert-danger" id="successMessage">
        {{ session('success') }}
    </div>
    <script>
    setTimeout(function() {
        document.getElementById('successMessage').style.display = 'none';
    }, 3000);
</script>
@endif

<div class="testimonials">
  
    <div class="container-fluid">
        @foreach($messages as $message)
        <div class="review">
            <div class="dp">
                <img class="dp-img-admin" src="/images/dp.png" alt="display picture">
            </div>
            <div class="user">
                <div class="username">{{ $message->username }}, {{ $message->email }}</div>
                <div class="userreview">{{ $message->message }}</div>
            </div>
            <form action="{{ route('admin.messages.destroy', $message->id) }}" method="POST" novalidate>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"
                    style="color:white; background-color:red !important;">Delete</button>
            </form>
        </div>
        @endforeach
    </div>

</div>

@endsection