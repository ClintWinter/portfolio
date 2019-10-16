@extends('layouts.master')

@section('title', 'Library | Clint G Winter')

@section('content')

<div class="flex flex-col px-0 md:px-4 py-16">
    <div>
        <h3 class="text-xl tracking-wider text-gray-600 font-black mb-6">FILTER</h3>
        <div class="w-1/2 mb-4">
            <label class="inline-block mr-4 w-16">Language</label>
            <select class="w-64 border border-gray-700 shadow-md rounded px-2 py-1" v-model="selectedLanguage">
                <option value="0">All</option>
                <option v-for="language in languages" :value="language.id">@{{ language.name }}</option>
            </select>
        </div>
        <div class="w-1/2 mb-4">
            <label class="inline-block mr-4 w-16">Type</label>
            <select class="w-64 border border-gray-700 shadow-md rounded px-2 py-1" v-model="selectedType">
                <option value="">All</option>
                <option v-for="type in types">@{{ type }}</option>
            </select>
        </div>
    </div>

    <div class="h-0 border-b-2 border-gray-300 w-full my-8"></div>

    <fe-resource-list>
        <fe-resource-item v-for="resource in resources" :resource="resource" :key="resource.id"></fe-resource-item>
    </fe-resource-list>
</div>

@endsection