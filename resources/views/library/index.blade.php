@extends('layouts.master')

@section('title', 'Library | Clint G Winter')

@section('content')

<div class="flex flex-col md:flex-row px-4 py-4 md:py-16">

    <div class="w-full md:w-64 bg-gray-300 shadow px-4 py-6 mb-4">
        <h3
            :class="{ 'text-pink-500' : selectedLanguage || selectedType }"
            class="text-xl tracking-wider text-gray-600 font-black mb-6">FILTER</h3>
        <div class="mb-4">
            <label class="mr-4 w-16">Language</label>
            <select class="w-full border border-gray-700 shadow-md rounded px-2 py-1" v-model="selectedLanguage">
                <option value="">All</option>
                <option v-for="language in languages" :value="language.id">@{{ language.name }}</option>
            </select>
        </div>
        <div class="">
            <label class="mr-4 w-16">Type</label>
            <select class="w-full border border-gray-700 shadow-md rounded px-2 py-1" v-model="selectedType">
                <option value="">All</option>
                <option v-for="type in types">@{{ type }}</option>
            </select>
        </div>
    </div>

    <div class="flex-grow">
        <fe-resource-list>
            <fe-resource-item v-for="resource in resources" :resource="resource" :key="resource.id"></fe-resource-item>
        </fe-resource-list>
    </div>
</div>

@endsection