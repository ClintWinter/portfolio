@extends('layouts.master')

@section('title', 'Library | Clint G Winter')

@section('content')

<div class="container mx-auto flex flex-col px-4 py-4 md:py-16">

    {{-- min-w-48 lg:min-w-64 sm:w-64 --}}
    <div class="w-full flex rounded px-4 mb-8">
        {{-- <h3
            :class="{ 'text-pink-500' : selectedLanguage || selectedType }"
            class="text-xl tracking-wider text-gray-500 mr-6"
        >Filter</h3> --}}

        <div class="flex flex-col mr-6">
            <label class="mb-2 w-16">Language</label>
            <select class="w-64 border border-gray-700 shadow-md rounded px-2 py-1" v-model="selectedLanguage">
                <option value="">All</option>
                <option v-for="language in languages" :value="language.id">@{{ language.name }}</option>
            </select>
        </div>

        <div class="flex flex-col">
            <label class="mb-2 w-16">Type</label>
            <select class="w-64 border border-gray-700 shadow-md rounded px-2 py-1" v-model="selectedType">
                <option value="">All</option>
                <option v-for="type in types">@{{ type }}</option>
            </select>
        </div>
    </div>

    <div class="w-full">
        <fe-resource-list v-if="resources.length > 0">
            <fe-resource-item v-for="resource in resources" :resource="resource" :key="resource.id"></fe-resource-item>
        </fe-resource-list>
        <div v-else class="px-4 text-gray-700 italic">No resources!</div>
    </div>
</div>

@endsection