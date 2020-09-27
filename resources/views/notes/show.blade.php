@extends('layout')

@section('banner')

    <section class="hero-banner">
        <div class="container">
            <h2>Your Note is 
            @if($note[0]->valid == true)
                <span class="basecolor">valid</span>
            @else
                <span class="basecolor">not valid</span>
            @endif
            </h2>
        </div>
    </section>

    <section class="area-padding">
        <div class="container">
            <div class="row">
                
            </div>
        </div>
    </section>

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

@endsection('banner')
