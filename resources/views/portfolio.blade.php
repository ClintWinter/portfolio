@extends('layouts.master')

@section('title', 'Projects | Clint Winter')

@section('metadescription', 'Projects built by Clint Winter. Take a look, you may find some of them useful.')

@section('content')

<div class="container mx-auto px-2">
    <div class="mx-auto flex flex-col items-start">
        <div class="projects flex flex-col items-stretch w-full">
            <div class="flex flex-col items-center p-3 w-full">
                <img
                    class="w-full max-h-128 max-w-128 shadow-lg rounded"
                    src="{{ Storage::url('public/images/resavma1.png') }}"
                >

                <div class="h-12"></div>

                <div class="w-full md:w-2/3 flex flex-col justify-between px-3">
                    <div class="mb-8">
                        <h5 class="leading-none text-xl font-display text-purple"><strong>Resavma</strong></h5>

                        <div class="h-4"></div>

                        <p class="text-base leading-loose">Collect all of your Reddit saves in one place, where they won't disappear. Provides features not available in Reddit, such as filtering, tagging, and searching.</p>

                        <div class="h-4"></div>

                        <p class="leading-none">
                            {{-- @TODO: link to project details --}}
                            {{-- <a href="" class="font-display text-yellow hover:underline">Learn More -></a> --}}
                            <a href="https://redditsm.clintgwinter.com" class="font-display text-yellow hover:underline">View -&gt;</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection