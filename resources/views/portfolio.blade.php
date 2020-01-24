@extends('layouts.master')
@section('content')

<div>
    <div class="col flex justify-center py-16 px-2">
        <p class="text-gray-600 leading-relaxed text-lg" style="max-width: 45rem;"><em>Hi, I'm Clint and I'm a self taught software developer from New Jersey. My goal is to help those that were like me when I was first starting out and lead them to becoming competent developers. Whether it be teaching, providing general advice or top-notch resources, or simply being there to assist in navigating roadblocks, I want to pay it forward from the community that has enabled me to be in this position.</em></p>
    </div>

    <div class="col bg-gray-100 py-5 px-2">
        <div class="mx-auto w-full md:w-3/4 lg:w-2/3 xl:w-1/2 flex flex-col items-start">
            <h2 class="mb-8 text-xl font-semibold text-gray-800">Projects</h2>
            <div class="projects flex flex-col items-stretch w-full">
                <div class="flex p-3 bg-white shadow-lg w-full mb-8">
                    <div class="w-1/4 flex md:hidden flex-auto md:flex-none justify-center items-center mr-2 md:mr-5">
                        <i class="fab fa-reddit leading-none fa-5x bg-white rounded-full shadow-lg" style="color: #FF4500;border: 2px solid #FF4500;"></i>
                    </div>
                    <div class="w-1/3 hidden md:flex flex-auto md:flex-none justify-center items-center mr-2 md:mr-5">
                        <i class="fab fa-reddit leading-none fa-9x bg-white rounded-full shadow-lg" style="color: #FF4500;border: 2px solid #FF4500;"></i>
                    </div>
                    <div class="flex flex-col justify-between self-stretch px-3">
                        <div class="mb-8">
                            <h5 class="leading-none mb-2 text-lg text-gray-800 font-semibold">Reddit Save Manager</h5>
                            <p class="mb-2 text-md text-gray-700">
                                A project utilizing <strong>Vue.js, Laravel, and MySQL</strong> to create an application that allows a user to login with their Reddit account to track, search and filter their saved posts/comments.
                            </p>
                            <p class="leading-none">
                                <button type="button" class="btn-details outline-none" data-project="redditsm"><small class="text-teal-500 hover:underline">Details</small></button>
                            </p>
                        </div>
                        <div class="flex">
                            <a href="https://redditsm.clintgwinter.com" target="_blank" class="px-4 py-2 leading-none text-sm bg-teal-500 hover:bg-teal-600 text-white text-shadow rounded shadow">View</a>
                            <a href="https://github.com/ClintWinter/reddit-save-manager" target="_blank" class="px-4 py-2 leading-none text-sm hover:underline text-teal-500">Source</a>
                        </div>
                    </div>
                </div>
                <div class="flex p-3 bg-white shadow-lg w-full mb-8">
                    <div class="w-1/4 md:w-1/3 mr-2 md:mr-5 h-40 flex-auto md:flex-none flex items-center">
                        <img src="{{ Storage::url('public/images/devcelerate.png') }}" alt="">
                    </div>
                    <div class="flex flex-col justify-between self-stretch px-3">
                        <div class="mb-8">
                            <h5 class="leading-none mb-2 text-lg text-gray-800 font-semibold">DEVcelerate</h5>
                            <p class="mb-2 text-md text-gray-700">
                                Devcelerate is where I offer courses to (future) web developers. I have a <a class="text-teal-500 hover:underline" href="https://clintgwinter.com/blog/a-laravel-project-start-to-finish-part-1-object-oriented-design-tdd">blog series</a> that goes through building this project step by step!
                            </p>
                        </div>
                        <div class="flex">
                            <a target="_blank" href="https://devcelerate.io" class="px-4 py-2 leading-none text-sm bg-teal-500 hover:bg-teal-600 text-white text-shadow rounded shadow">View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col py-5 px-2">
        <div class="mx-auto w-full md:w-3/4 lg:w-2/3 xl:w-1/2 flex justify-between">
            <div>
                <h4 class="mb-3 text-xl font-semibold text-gray-800">Front-end</h4>
                <ul class="text-gray-700">
                    <li class="mb-2"><i class="fas fa-check mr-3 text-teal-400 text-shadow"></i>Vue.js</li>
                    <li class="mb-2"><i class="fas fa-check mr-3 text-teal-400 text-shadow"></i>JavaScript</li>
                    <li class="mb-2"><i class="fas fa-check mr-3 text-teal-400 text-shadow"></i>Sass/SCSS</li>
                    <li class="mb-2"><i class="fas fa-check mr-3 text-teal-400 text-shadow"></i>jQuery</li>
                    <li class="mb-2"><i class="fas fa-check mr-3 text-teal-400 text-shadow"></i>Bootstrap</li>
                    <li class="mb-2"><i class="fas fa-check mr-3 text-teal-400 text-shadow"></i>CSS3</li>
                    <li class="mb-2"><i class="fas fa-check mr-3 text-teal-400 text-shadow"></i>HTML5</li>
                </ul>
            </div>
            <div>
                <h4 class="mb-3 text-xl font-semibold text-gray-800">Back-end</h4>
                <ul class="text-gray-700">
                    <li class="mb-2"><i class="fas fa-check mr-3 text-teal-400 text-shadow"></i>Laravel</li>
                    <li class="mb-2"><i class="fas fa-check mr-3 text-teal-400 text-shadow"></i>PHP</li>
                    <li class="mb-2"><i class="fas fa-check mr-3 text-teal-400 text-shadow"></i>MySQL</li>
                    <li class="mb-2"><i class="fas fa-check mr-3 text-teal-400 text-shadow"></i>Node.js</li>
                    <li class="mb-2"><i class="fas fa-check mr-3 text-teal-400 text-shadow"></i>Express</li>
                </ul>
            </div>
            <div>
                <h4 class="mb-3 text-xl font-semibold text-gray-800">Other</h4>
                <ul class="text-gray-700">
                    <li class="mb-2"><i class="fas fa-check mr-3 text-teal-400 text-shadow"></i>Git/GitHub</li>
                    <li class="mb-2"><i class="fas fa-check mr-3 text-teal-400 text-shadow"></i>Webpack</li>
                </ul>
            </div>
        </div>
    </div>

</div>

<div id="modal-container" class="flex justify-center items-center hidden">
    <div id="modal" class="bg-white relative shadow-xl rounded m-2 md:m-8 w-full md:w-2/3 xl:w-1/2 border-2 border-gray-200">
        <div class="modal-header flex justify-between p-3 text-gray-800 border-b border-gray-200">
            <h3 class="modal-title text-xl font-semibold">Title</h3>
            <a href="javascript:document.getElementById('modal-container').classList.add('hidden');"><i class="fas fa-window-close text-pink-500 text-shadow text-4xl"></i></a>
        </div>
        <div class="modal-body bg-gray-100 py-5 px-2 md:px-5 text-gray-800 border-b border-gray-200">

        </div>
        <div class="modal-footer p-3 flex justify-end"></div>
    </div>
    <div id="mask" onclick="document.getElementById('modal-container').classList.add('hidden');"></div>
</div>

@endsection