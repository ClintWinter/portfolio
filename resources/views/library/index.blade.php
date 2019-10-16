@extends('layouts.master')

@section('title', 'Library | Clint G Winter')

@section('content')

<div class="flex flex-col px-0 md:px-4 py-16">
    <div class="mb-8">
        <h2 class="font-bold text-gray-700 uppercase text-xl">Library</h2>
    </div>

    <fe-resource-list>
        <fe-resource-item v-for="resource in resources" :resource="resource" :key="resource.id"></fe-resource-item>
    </fe-resource-list>
</div>

@endsection