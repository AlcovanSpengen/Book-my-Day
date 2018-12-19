<<<<<<< HEAD
@extends('main')
=======
@extends('layouts.main')
>>>>>>> afecbce755f6465d9da36ccad7c0fb2850fc6c3b

@section('title', '| Edit Review')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2"> 
        <h1>Edit Review</h1>

        {{ Form::model($review, ['route' => ['reviews.update', $review->id], 'method' => 'PUT']) }}
            {{ Form::label('title', 'Title:') }}
<<<<<<< HEAD
            {{ Form::text('title', null, ['class' => 'form-control', 'disabled' => '']) }}

            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name', null, ['class' => 'form-control', 'disabled' => '']) }}

            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email', null, ['class' => 'form-control', 'disabled' => '']) }}

            {{ Form::label('aantal_sterren', 'aantal_sterren:') }}
                <select class="form-control select2-multi" name="aantal_sterrens[]" multiple="multiple">
                    @foreach($aantal_sterrens as $aantal_sterren)
                    <option value="{{ $aantal_sterren->id }}">{{ $aantal_sterren->name }}</option>
                    @endforeach
                </select>
=======
            {{ Form::text('title', null, ['class' => 'form-control']) }}

            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name', null, ['class' => 'form-control']) }}

            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email', null, ['class' => 'form-control']) }}

            {{ Form::label('rating', 'Rating:') }}
                <select class="form-control" name="rating">
                    <option value="{{ $review->rating }}">{{ $review->rating }}</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select> 
>>>>>>> afecbce755f6465d9da36ccad7c0fb2850fc6c3b

            {{ Form::label('review', 'Review:') }}
            {{ Form::textarea('review', null, ['class' => 'form-control']) }}

            {{ Form::submit('Update Review', ['class' => 'btn btn-block btn-success']) }}
        {{ Form::close() }}
        </div>
    </div>

@endsection