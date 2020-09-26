@extends('layout')

@section('serial')

<h1 class="title">{{ $serial }}</h1>
@if($valid == true)
    <p>The note is valid</p>
@else
    <p>The note is not valid</p>
@endif
<p>Value: {{ $value }}€</p>
<p>ZIP code: {{ $zip }}</p>


@endsection('serial')
