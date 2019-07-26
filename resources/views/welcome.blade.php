@extends('layouts.master')
@section('content')

<div>

    <header class="col flex flex-col items-center py-5 bg-gradient text-white text-shadow">
        <h1 class="display-3 text-center text-6xl font-semibold">Clint Winter</h1>
        <h2 class="display-6 text-center text-3xl mb-4 opacity-50 leading-none"><small>( cwinter.web@gmail.com )</small></h2>
        <p class="flex items-center text-4xl leading-loose">
            <a href="https://github.com/clintwinter" class="mx-3" target="_blank" rel="noopener noreferrer"><i class="fab fa-github-square"></i></a>
            <a href="https://linkedin.com/in/clint-winter" class="mx-3" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
            <a href="{{ Storage::url('ClintWinterResume.pdf') }}" class="mx-3" target="_blank" rel="noopener noreferrer"><i class="fas fa-file-pdf"></i></a>
            {{-- <a href="{{ Storage::url('ClintWinterResume.pdf') }}" class="mx-3" download><i class="fas fa-file-download"></i></a> --}}
        </p>
    </header>

    <div class="col flex justify-center py-16 px-2">
        <p class="text-gray-600" style="max-width: 45rem;"><em>Hi, I'm Clint and I'm a self taught software developer from New Jersey. My goal is to help those that were like me when I was first starting out and lead them to becoming competent developers. Whether it be teaching, providing general advice or top-notch resources, or simply being there to assist in navigating roadblocks, I want to pay it forward from the community that has enabled me to be in this position.</em></p>
    </div>

    <div class="col bg-gray-100 py-5 px-2">
        <div class="mx-auto w-full md:w-3/4 lg:w-2/3 xl:w-1/2 flex flex-col items-start">
            <h2 class="mb-8 text-xl font-semibold text-gray-800">Projects</h2>
            <div class="projects flex flex-col items-stretch w-full">
                <div class="flex p-3 bg-white shadow-lg w-full mb-8">
                    <div class="h-40 w-64 bg-gray-600 shadow flex-auto md:flex-none"></div>
                    <div class="flex flex-col justify-between self-stretch px-3">
                        <div class="mb-8">
                            <h5 class="leading-none mb-2 text-lg text-gray-800 font-semibold">Title</h5>
                            <p class="mb-2 text-md text-gray-700">
                                This is a very basic project description for a future project...
                            </p>
                            <p class="leading-none"><a href="#modal-container"><small class="text-teal-500 hover:underline">Details</small></a></p>
                        </div>
                        <div class="flex">
                            <button class="px-4 py-2 leading-none text-sm bg-teal-500 hover:bg-teal-600 text-white text-shadow rounded shadow">View</button>
                            <button class="px-4 py-2 leading-none text-sm hover:underline text-teal-500">Source</button>
                        </div>
                    </div>
                </div>
                <div class="flex p-3 bg-white shadow-lg w-full mb-8">
                    <div class="h-40 w-64 bg-gray-600 shadow flex-auto md:flex-none"></div>
                    <div class="flex flex-col justify-between self-stretch px-3">
                        <div class="mb-8">
                            <h5 class="leading-none mb-2 text-lg text-gray-800 font-semibold">Title</h5>
                            <p class="mb-2 text-md text-gray-700">
                                This is a very basic project description for a future project...
                            </p>
                            <p class="leading-none"><a href="#modal-container"><small class="text-teal-500 hover:underline">Details</small></a></p>
                        </div>
                        <div class="flex">
                            <button class="px-4 py-2 leading-none text-sm bg-teal-500 hover:bg-teal-600 text-white text-shadow rounded shadow">View</button>
                            <button class="px-4 py-2 leading-none text-sm hover:underline text-teal-500">Source</button>
                        </div>
                    </div>
                </div>
                <div class="flex p-3 bg-white shadow-lg w-full mb-8">
                    <div class="h-40 w-64 bg-gray-600 shadow flex-auto md:flex-none"></div>
                    <div class="flex flex-col justify-between self-stretch px-3">
                        <div class="mb-8">
                            <h5 class="leading-none mb-2 text-lg text-gray-800 font-semibold">Title</h5>
                            <p class="mb-2 text-md text-gray-700">
                                This is a very basic project description for a future project...
                            </p>
                            <p class="leading-none"><a href="#modal-container"><small class="text-teal-500 hover:underline">Details</small></a></p>
                        </div>
                        <div class="flex">
                            <button class="px-4 py-2 leading-none text-sm bg-teal-500 hover:bg-teal-600 text-white text-shadow rounded shadow">View</button>
                            <button class="px-4 py-2 leading-none text-sm hover:underline text-teal-500">Source</button>
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

    <footer class="bg-gray-800 text-white py-5 px-2">
        <div class="w-full md:w-2/3 xl:w-1/2 container mx-auto">Thanks for visiting!</div>
    </footer>

</div>

<div id="modal-container" class="flex justify-center items-center">
    <div id="modal" class="bg-white relative shadow-xl rounded m-2 md:m-8 w-full md:w-2/3 xl:w-1/2 border-2 border-gray-200">
        <div class="modal-header flex justify-between p-3 text-gray-800 border-b border-gray-200">
            <h3 class="text-xl font-semibold">Title</h3>
            <a href="#"><i class="fas fa-window-close text-pink-500 text-shadow text-4xl"></i></a>
        </div>
        <div class="modal-body bg-gray-100 py-5 px-2 md:px-5 text-gray-800 border-b border-gray-200">
            <p>These are the details</p>
        </div>
        <div class="modal-footer p-3"></div>
    </div>
    <div id="mask"></div>
</div>

@endsection