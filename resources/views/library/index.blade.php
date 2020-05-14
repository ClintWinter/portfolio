@extends('layouts.master')

@section('title', 'Library | Clint G Winter')

@section('metadescription', 'Clint Winter has a library that he keeps up-to-date with relevant resources, courses, and reference material that he actively uses or has used in the past. Quickly filter through the resources, you may find something truly helpful.')

@section('content')

<div class="container mx-auto flex flex-col px-2 md:px-4">

    <div class="flex flex-col sm:flex-row items-center sm:items-start">
        <div class="flex flex-col mr-0 sm:mr-6 mb-2 sm:mb-0">
            <label class="mb-2 w-16 text-purple font-display">Language</label>
            <select class="w-64 px-2 py-1 text-darkbg" v-model="selectedLanguage">
                <option value="">All</option>
                <option v-for="language in languages" :value="language.id">@{{ language.name }}</option>
            </select>
        </div>

        <div class="flex flex-col">
            <label class="mb-2 w-16 text-purple font-display">Type</label>
            <select class="w-64 px-2 py-1 text-darkbg" v-model="selectedType">
                <option value="">All</option>
                <option v-for="type in types">@{{ type }}</option>
            </select>
        </div>
    </div>

    <div class="h-8"></div>

    <div class="w-full -mx-2">
        <fe-resource-list v-if="resources.length > 0">
            <fe-resource-item v-for="resource in resources" :resource="resource" :key="resource.id"></fe-resource-item>
        </fe-resource-list>
        <div v-else class="px-4 text-gray-700 italic">No resources!</div>
    </div>
</div>

@endsection