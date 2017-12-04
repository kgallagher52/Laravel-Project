@extends('layout')

@section('content')

 <div class="row">
     <div class="col-md-6 col-md-offset-3">
        <h1>{{ $card->title }}</h1>
        <ul class="list-group">
            <!-- for eache note within that card -->
            @foreach ($card->notes as $note)
                <li class="list-group-item"> {{ $note->body }}</li>
            @endforeach

            <h3> Add a new note<h3>
            <form method="POST" action="/cards/{{ $card->id }}/notes">
                <div class="form-group">
                    <textarea name="body" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Note</button>
                </div>
            <form>
            
            <li class="list-group-item" id="link"><a href="/cards/">Back to cards</a></li>
        </ul>
    </div>
</div>
@stop