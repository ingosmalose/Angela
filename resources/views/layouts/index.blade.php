<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Games {{$tittle}}</title>
</head>
<body>

	@extends('layouts.master') 
	@section('content')
	 
	<ul>
		@foreach($games as $game)
			<li><a href="/games/{{ $game->id }}">{{ $game->title }}</a></li>
		@endforeach
	</ul>
	@endsection
</body>
</html>
