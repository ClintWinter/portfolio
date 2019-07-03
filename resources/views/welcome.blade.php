@extends('layouts.master')
@section('content')

<div class="welcome-page row m-0 p-0">

    <div class="col-12 d-flex flex-column align-items-center py-5 hero">
        <h1 class="display-3 text-center text-lg-right">Clint Winter</h1>
        <h2 class="display-6 text-center text-lg-right mb-4"><small>( cwinter.web@gmail.com )</small></h2>
        <p class="sm-links d-flex">
            <a href="https://github.com/clintwinter" class="px-3" target="_blank" rel="noopener noreferrer"><i class="fab fa-github-square"></i></a>
            <a href="https://linkedin.com/in/clint-winter" class="px-3" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
            <a href="javascript:console.log('resume');" class="px-3" target="_blank" rel="noopener noreferrer"><i class="fas fa-file-alt"></i></a>
        </p>
    </div>

    <div class="col-12 d-flex justify-content-center p-5 quote">
        <p><em>Hi, I'm Clint and I'm a self taught software developer from New Jersey. My goal is to help those that were like me when I was first starting out and help them grow into competent developers. I have gained so much from this community, and I want to return the favor.</em></p>
    </div>

    <div class="col-12 off-color p-5">
        <h2 class="mb-5">Projects</h2>
        <div class="projects col-12 d-flex flex-column align-items-center">
            <div class="media mb-5 p-3 col-10">
                <div class="mr-3 align-self-start" style="height: 200px; width: 300px; background-color: #888; box-shadow: 0px 2px 2px rgba(0,0,0,0.1);"></div>
                <div class="media-body">
                    <h5 class="mt-0">Title</h5>
                    <p class="mb-3">This is the description</p>
                    <div class="buttons d-flex">
                        <button class="btn btn-sm btn-primary mr-1">View</button>
                        <button class="btn btn-sm btn-link">Source</button>
                    </div>
                </div>
            </div>
            <div class="media mb-5 p-3 col-10">
                <div class="mr-3 align-self-start" style="height: 200px; width: 300px; background-color: #888; box-shadow: 2px 4px 2px rgba(0,0,0,0.1);"></div>
                <div class="media-body">
                    <h5 class="mt-0">Title</h5>
                    <p class="mb-3">This is the description</p>
                    <div class="buttons d-flex">
                        <button class="btn btn-sm btn-primary mr-1">View</button>
                        <button class="btn btn-sm btn-link">Source</button>
                    </div>
                </div>
            </div>
            <div class="media mb-5 p-3 col-10">
                <div class="mr-3 align-self-start" style="height: 200px; width: 300px; background-color: #888; box-shadow: 2px 4px 2px rgba(0,0,0,0.1);"></div>
                <div class="media-body">
                    <h5 class="mt-0">Title</h5>
                    <p class="mb-3">This is the description</p>
                    <div class="buttons d-flex">
                        <button class="btn btn-sm btn-primary mr-1">View</button>
                        <button class="btn btn-sm btn-link">Source</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 p-5 d-flex">
        <div class="col">
            <h4 class="mb-3">Front-end</h4>
            <ul>
                <li class="mb-2"><i class="fas fa-check mr-3"></i>HTML5</li>
                <li class="mb-2"><i class="fas fa-check mr-3"></i>CSS3</li>
                <li class="mb-2"><i class="fas fa-check mr-3"></i>SASS</li>
                <li class="mb-2"><i class="fas fa-check mr-3"></i>JavaScript</li>
                <li class="mb-2"><i class="fas fa-check mr-3"></i>jQuery</li>
                <li class="mb-2"><i class="fas fa-check mr-3"></i>Bootstrap</li>
            </ul>
        </div>
        <div class="col">
            <h4 class="mb-3">Back-end</h4>
            <ul>
                <li class="mb-2"><i class="fas fa-check mr-3"></i>PHP</li>
                <li class="mb-2"><i class="fas fa-check mr-3"></i>MySQL</li>
                <li class="mb-2"><i class="fas fa-check mr-3"></i>Laravel</li>
                <li class="mb-2"><i class="fas fa-check mr-3"></i>Node.js</li>
                <li class="mb-2"><i class="fas fa-check mr-3"></i>Express</li>
            </ul>
        </div>
        <div class="col">
            <h4 class="mb-3">Other</h4>
            <ul>
                <li class="mb-2"><i class="fas fa-check mr-3"></i>Git/GitHub</li>
                <li class="mb-2"><i class="fas fa-check mr-3"></i>Webpack</li>
            </ul>
        </div>
    </div>

</div>

@endsection