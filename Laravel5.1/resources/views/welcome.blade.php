<!-- Grabbing my layout.blade.php -->
@extends('layout') 

<!-- putting the section I declared in my layout.blade -->
@section('content')
        <!-- If statment usign the blade -->
        <!-- This is just saying if dic people is empty display this -->
        @if (empty($people))
            There are no people
        @else
            There are people
        @endif
        <!-- This is displaying the peoples variable I made in the Routes.pho -->
        <h1>Old way of displaying peoples var</h1>
        <?php foreach ($people as $person) : ?>
            <li><?= $person; ?></li>
        <?php endforeach; ?>
        <h1>New way of displaying peoples var</h1>
        <!-- Same thing but using the blade approach -->
        @foreach ($people as $person)
            <li>{{ $person }}</li>
        @endforeach
    
<!-- Ending that section -->
@stop
