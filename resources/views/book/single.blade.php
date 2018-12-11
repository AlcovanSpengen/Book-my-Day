@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
    <img src="{{ asset('images/' . $product->image) }}" height="400" width="100%" alt="Image not working."/>
        <h1>{{ $product->title }}</h1>
        <p>{{ $product->abstract }}</p>
        <hr>
        <p>{{ $product->category->name }}</p>
    </div>
</div>






<div class="row">
    <div class="col-md-8 col-md-offset-2">
    @foreach($product->review as $review)        
        <div class="review">
            <p><strong>Title: </strong>{{ $review->title }}</p>
            <p><strong>Name: </strong>{{ $review->name }}</p>
            <p><strong>Email: </strong>{{ $review->email }}</p>
            <p><strong>Rating: </strong>{{ $review->rating }}</p>
            <p><strong>Review: </strong><br>{{ $review->review }}</p>
            <br>
            <hr>
            <br>
        </div>
    
    @endforeach
    </div>
</div>
<div class="row">
    <div class="review-form" class="col-md-8 col-md-offset-2">
    <h3>Number of Reviews: <small>{{ $product->review()->count() }}</small></h3>
        <h5>Create your own review!</h5>
        <p>We zijn blij dat je een review wil schrijven. Je helpt zo anderen bij het maken van hun keuze. Als je vragen of opmerkingen hebt over bijvoorbeeld prijs of levertijd, kunnen we je beter helpen bij de klantenservice.</p>
        {{ Form::open(['route' => ['reviews.store', $product->id], 'method' => 'POST']) }}
            <div class="row">
                <div class="col-md-6">
                    {{ Form::label('title', "Title:") }}
                    {{ Form::text('title', null, ['class' => 'form-control']) }}

                    {{ Form::label('name', "Name:") }}
                    {{ Form::text('name', null, ['class' => 'form-control']) }}
                </div>
                <div class="col-md-6">
                    {{ Form::label('email', 'Email:') }}
                    {{ Form::text('email', null, ['class' => 'form-control']) }}

                    {{ Form::label('rating', 'Rating:') }}
                    <select class="form-control" name="rating">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select> 
                </div>
                <div class="col-md-12">
                    {{ Form::label('review', "Review:") }}
                    {{ Form::textarea('review', null, ['class' => 'form-control', 'rows' => '5' ]) }}

                    {{ Form::submit('Add Review', ['class' => 'btn btn-success btn-block btn-spacing-top']) }}
                </div>
            </div>
        {{ Form::close() }}
    </div>
</div>
@endsection