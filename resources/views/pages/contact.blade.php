@extends('layout.default')

@section('content')
    <h1>contact me (please)</h1>
    <form action ="/contact" method="post" >
        {{ csrf_field() }}
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="name@example.com">
        </div>

        <div class="form-group">
            <label for="body">Example textarea</label>
            <textarea class="form-control" id="body" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Send!</button>
    </form>


@endsection