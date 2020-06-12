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

            <div class="h-16"></div>

            <div class="flex flex-col items-center p-3 w-full">
                <img
                    class="w-full max-h-128 max-w-128 shadow-lg rounded"
                    src="{{ Storage::url('public/images/devcelerate.png') }}"
                    alt="Devcelerate"
                >

                <div class="h-12"></div>

                <div class="w-full md:w-2/3 flex flex-col justify-between px-3">
                    <div class="mb-8">
                        <h5 class="leading-none text-lg font-display text-purple"><strong>DEVcelerate</strong></h5>

                        <div class="h-4"></div>

                        <p class="text-base leading-loose">Devcelerate is where I offer courses to (future) web developers. I have a <a class="text-yellow font-bold hover:underline" href="https://clintgwinter.com/blog/a-laravel-project-start-to-finish-part-1-object-oriented-design-tdd">blog series</a> that goes through building this project step by step!</p>

                        <div class="h-6"></div>

                        <p class="leading-none">
                            {{-- @TODO: link to project details --}}
                            {{-- <a href="" class="font-display text-yellow hover:underline">Learn More -></a> --}}
                            <a href="https://devcelerate.io" class="font-display text-yellow hover:underline">View -&gt;</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div id="modal-container" class="flex justify-center items-center hidden">
    <div id="modal" class="relative shadow-xl rounded m-2 md:m-8 w-full md:w-2/3 xl:w-1/2 border-2 border-gray-200">
        <div class="modal-header flex justify-between p-3  border-b border-gray-200">
            <h3 class="modal-title text-xl font-semibold">Title</h3>
            <a href="javascript:document.getElementById('modal-container').classList.add('hidden');"><i class="fas fa-window-close text-4xl"></i></a>
        </div>
        <div class="modal-body py-5 px-2 md:px-5  border-b border-gray-200">

        </div>
        <div class="modal-footer p-3 flex justify-end"></div>
    </div>
    <div id="mask" onclick="document.getElementById('modal-container').classList.add('hidden');"></div>
</div> --}}

@endsection