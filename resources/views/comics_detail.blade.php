@extends('layouts.app')

{{-- Page title --}}
@section('page.title')
Comics Detail
@endsection

{{-- Page contents --}}
@section('page.main')
<section class="jumbo"></section>
{{-- TODO UI --}}
<h1>{{ $comics['title'] }}</h1>
@endsection