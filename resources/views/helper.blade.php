@extends('layouts.master')

@section('content')

<div class="mx-auto container px-4 md:px-2 py-8">

    <h1 class="uppercase text-xl text-gray-600 font-black mb-8">Text Helper</h1>

    <div class="block mb-4 w-full">
        <textarea class="w-full border border-gray-300 shadow p-4 leading-relaxed" rows="6" v-model="text"></textarea>
    </div>

    <div class="block mb-16 flex">
        <button @click="toUpper" class="px-4 py-2 rounded bg-indigo-600 text-white hover:bg-indigo-700 mr-4 shadow-md">TO UPPER CASE</button>
        <button @click="toLower" class="px-4 py-2 rounded bg-indigo-600 text-white hover:bg-indigo-700 mr-4 shadow-md">TO LOWER CASE</button>
        <button @click="toInvert" class="px-4 py-2 rounded bg-indigo-600 text-white hover:bg-indigo-700 mr-4 shadow-md">TO INVERTED CASE</button>
    </div>

    <div class="block mb-4">
        <h2 class="uppercase text-xl text-gray-600 font-black mb-4">RESULT</h2>
        <div class="bg-gray-200 rounded shadow w-full p-4 whitespace-pre-wrap" v-text="result"></div>
    </div>

</div>

@endsection