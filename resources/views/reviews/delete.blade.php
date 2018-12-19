<<<<<<< HEAD
@extends('main')

@section('title', '|DELETE COMMENT?')
=======
@extends('layouts.main')

@section('title', '|Delete Review?')
>>>>>>> afecbce755f6465d9da36ccad7c0fb2850fc6c3b

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
<<<<<<< HEAD
        <h1>DELETE THIS COMMENT?</h1>
        <p>
            <strong>Name:</strong> {{ $comment->name }}<br>
            <strong>Email:</strong> {{ $comment->email }}<br>
            <strong>Comment:</strong> {{ $comment->comment }}
</p>
{{ Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'DELETE']) }}
    {{ Form::submit('YES DELETE THIS COMMENT', ['class' => 'btn btn-lg btn-block btn-danger']) }}
=======
    <br>
    <br>
        <h5>Delete this Review?</h5>
        <p>
            <strong>Title:</strong> {{ $review->title }}<br>
            <strong>Name:</strong> {{ $review->name }}<br>
            <strong>Email:</strong> {{ $review->email }}<br>
            <strong>Rating:</strong> {{ $review->rating }}<br>
            <strong>Review:</strong> {{ $review->review }}
</p>
{{ Form::open(['route' => ['reviews.destroy', $review->id], 'method' => 'DELETE']) }}
    {{ Form::submit('Yes, Delete this review', ['class' => 'btn btn-lg btn-block btn-danger']) }}
>>>>>>> afecbce755f6465d9da36ccad7c0fb2850fc6c3b
{{ Form::close() }}
<hr>
<a href="{{ url()->previous() }}" class="btn btn-default btn-block">Cancel</a>
    </div>
    
</div>
@endsection