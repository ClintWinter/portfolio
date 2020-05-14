@extends('layouts.master')

@section('content')

<div class="mx-auto container px-4 md:px-2 py-8">
    <h1 class="uppercase text-xl text-purple"><strong>Text Helper</strong></h1>

    <div class="h-8"></div>

    <div class="block w-full">
        <textarea
            class="w-full p-4 leading-relaxed border-2 border-teal bg-darkbg"
            rows="6"
            v-model="text"
            placeholder="Type here..."
        ></textarea>
    </div>

    <div class="h-4"></div>

    <div class="block flex">
        <button
            @click="toUpper"
            class="px-4 py-2 mr-4 text-orange border-2 border-orange hover:bg-orange hover:text-darkbg"
        ><strong>$to_upper_case</strong></button>

        <button
            @click="toLower"
            class="px-4 py-2 mr-4 text-orange border-2 border-orange hover:bg-orange hover:text-darkbg"
        ><strong>$to_lower_case</strong></button>

        <button
            @click="toInvert"
            class="px-4 py-2 mr-4 text-orange border-2 border-orange hover:bg-orange hover:text-darkbg"
        ><strong>$to_inverted_case</strong></button>
    </div>

    <div class="h-20"></div>

    <div class="block mb-4">
        <h2 class="uppercase text-xl text-purple"><strong>Result</strong></h2>

        <div class="h-8"></div>

        <div class="w-full p-8 whitespace-pre-wrap border-2 border-yellow text-yellow" v-text="result"></div>
    </div>
</div>

@endsection