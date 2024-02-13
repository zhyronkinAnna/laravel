@extends('templates.mainWide')

@section('content')
    <h2>Reviews</h2>
    
    @forelse($reviews as $review)
        {{$loop->iteration}} {{$review}}<br>
    @empty
        <p>No reviews</p>
    @endforelse
@endsection