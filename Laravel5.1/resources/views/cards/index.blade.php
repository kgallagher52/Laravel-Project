@extends('layout')

@section('content')
<div class="row">
     <div class="col-md-6 col-md-offset-3">
        <h1 id="allCards">All Cards</h1>
        <ul class="list-group">
            <iframe width="640" height="360" src="https://www.youtube.com/embed/-4EDhdAHrOg" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>

            @foreach($cards as $card)
                <div>
                <li class="list-group-item"><a href="/cards/{{ $card->id }}">{{ $card->title }}</a></li>
                </div>
            @endforeach
        </ul>
    </div>
</div>
@stop