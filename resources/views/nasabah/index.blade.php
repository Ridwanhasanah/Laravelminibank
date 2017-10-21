@extends('template')

@section('content')
	@foreach($nasabah as $n)

		{{$n}}<br>

	@endforeach
@endsection
