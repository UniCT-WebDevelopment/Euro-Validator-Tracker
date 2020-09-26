@extends('layout')

@section('serial')

<h1 class="title">
    {{ $note[0]->serial }} is 
    @if($note[0]->valid == true)
        <span>valid</span>
    @else
        <span>not valid</span>
    @endif
</h1>

<p>Its history is the following:<br /></p>
@foreach($note as $n)
<p>{{ $n->value }}€ - {{ $n->zip }} - {{ $n->created_at }}</p>
@endforeach

@endsection('serial')
