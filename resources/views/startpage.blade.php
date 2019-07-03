@extends('layouts.master')
@section('content')

<div class="start-page row nospacing d-flex flex-column align-items-center">

    <form method="GET" action="https://google.com/search" class="d-flex justify-content-center">
        @csrf
        <div class="banner px-5">
            <input id="searchbox" name="q" type="text" placeholder="Search">
            <button id="searchbox-button" type="submit"><i class="fas fa-search"></i></button>
        </div>
    </form>

    <section class="links flex-grow-1 d-flex justify-content-center align-items-start flex-wrap px-3">
    </section>
</div>

@endsection