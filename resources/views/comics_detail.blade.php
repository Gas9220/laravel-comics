@extends('layouts.app')

{{-- Page title --}}
@section('page.title')
Comics Detail
@endsection

{{-- Page contents --}}
@section('page.main')
<section class="jumbo"></section>
{{-- TODO UI --}}
<section class="comics-cover">
    <div class="container">
        <img class="shift-80" src="{{$comics['thumb']}}" alt="cover">
    </div>
</section>
<h1>{{ $comics['title'] }}</h1>
@endsection