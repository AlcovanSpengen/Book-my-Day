@extends('layouts.main')

@section('title', '| View Product')

@section('content')

<div class="row">
    <div class="col-md-8">
<<<<<<< HEAD
    <img src="{{ asset('images/'.$product->image) }}" height="400" width="100%" alt="Image not working." />
=======
    <img src="{{ asset('images/'.$product->image) }}" height="480" width="300" alt="Image not working." />
>>>>>>> afecbce755f6465d9da36ccad7c0fb2850fc6c3b
        <hr>
        <h1>{{ $product->title }}</h1>
        <hr>
        <h5>Abstract</h5>
        <p class="lead">{{ $product->abstract  }}</p>
        <hr>
<<<<<<< HEAD
        <div class="genres">
        <h5>Genres</h5>
            @foreach ($product->genres as $genre)
                <button>{{ $genre->name }}</button>
            @endforeach
        </div>
        <hr>
        <div class="authors">
        <h5>Authors</h5>
            @foreach ($product->authors as $author)
                <button>{{ $author->name }}</button>
            @endforeach
        </div>
        <hr>
        <div class="booktypes">
        <h5>Booktypes</h5>
            @foreach ($product->booktypes as $booktype)
                <button>{{ $booktype->name }}</button>
            @endforeach
        </div>
    </div>
    <div class="col-md-4">
        <div class="well">
            <hr>
=======
        
    </div>
    <div class="col-md-4">
        <div class="well">
            <hr>      
            <dl class="dl-horizontal">
                <label><strong>ISBN</strong></label><br>
                    {{ $product->ISBN }}
            </dl>
>>>>>>> afecbce755f6465d9da36ccad7c0fb2850fc6c3b
            <dl class="dl-horizontal">
                <label><strong>Category</strong></label>
                <p>{{ $product->category->name }}</p>
            </dl>
            <dl class="dl-horizontal">
                <label><strong>Sub-Category</strong></label>
                <p>{{ $product->subcategory->name }}</p>
            </dl>
            <dl class="dl-horizontal">
<<<<<<< HEAD
=======
                <label><strong>Genres</strong></label><br>
                @foreach ($product->genres as $genre)
                    {{ $genre->name }}
                @endforeach
            </dl>
            <dl class="dl-horizontal">
                <label><strong>Authors</strong></label><br>
                @foreach ($product->authors as $author)
                    {{ $author->name }}
                @endforeach
            </dl>
            <dl class="dl-horizontal">
                <label><strong>Booktypes</strong></label><br>
                @foreach ($product->booktypes as $booktype)
                    {{ $booktype->name }}
                @endforeach
            </dl>
            <dl class="dl-horizontal">
>>>>>>> afecbce755f6465d9da36ccad7c0fb2850fc6c3b
                <label><strong>Created At:</strong></label>
                <p>{{ date('M j, Y H:i', strtotime($product->created_at)) }}</p>
            </dl>
            <dl class="dl-horizontal">
                <label><strong>Last Updated:</strong></label>
                <p>{{ date('M j, Y H:i', strtotime($product->updated_at)) }}</p>
            </dl>
<<<<<<< HEAD
=======




>>>>>>> afecbce755f6465d9da36ccad7c0fb2850fc6c3b
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    {!! Html::linkRoute('products.edit', 'Edit', array($product->id), array('class' => 'btn btn-primary btn-block')) !!}
                </div>
                <div class="col-sm-6">
                    {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'DELETE']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    {{ Html::linkRoute('products.index', 'See all products', [], ['class' => 'btn btn-secondary btn-block btn-h1-spacing']) }}
                </div>
            </div>
        </div>
    </div>
</div>
<<<<<<< HEAD
=======
<div class="row">
    <div class="col-md-8 col-md-offset-2">
    @foreach($product->review as $review)        
        <div class="review">
            <p><strong>Title: </strong>{{ $review->title }}</p>
            <p><strong>Name: </strong>{{ $review->name }}</p>
            <p><strong>Email: </strong>{{ $review->email }}</p>
            <p><strong>Rating: </strong>{{ $review->rating }}</p>
            <p><strong>Review: </strong><br>{{ $review->review }}</p>
        </div>
    <div class="row">
        <div class="col-sm-2">
            <a href="{{ route('reviews.edit', $review->id) }}" class="btn btn-xs btn-primary btn-block">Edit</a>
        </div>
        <div class="col-sm-2">
            <a href="{{ route('reviews.delete', $review->id) }}" class="btn btn-xs btn-danger btn-block">Delete</a>
        <hr>
        <br>
        </div>
    </div>   
    @endforeach
         
</div>
>>>>>>> afecbce755f6465d9da36ccad7c0fb2850fc6c3b
@endsection