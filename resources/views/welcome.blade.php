@extends('layouts.master')
@section('content')

<div class="welcome-page row m-0 p-0">

    <header class="col-12 d-flex flex-column align-items-center py-5">
        <h1 class="display-3 text-center text-lg-right">Clint Winter</h1>
        <h2 class="display-6 text-center text-lg-right mb-4"><small>( cwinter.web@gmail.com )</small></h2>
        <p class="sm-links d-flex">
            <a href="https://github.com/clintwinter" class="mx-3" target="_blank" rel="noopener noreferrer"><i class="fab fa-github-square"></i></a>
            <a href="https://linkedin.com/in/clint-winter" class="mx-3" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
            <a href="javascript:console.log('resume');" class="mx-3" target="_blank" rel="noopener noreferrer"><i class="fas fa-file-alt"></i></a>
        </p>
    </header>

    <div class="col-12 d-flex justify-content-center py-5 px-2 px-md-5 quote">
        <p><em>Hi, I'm Clint and I'm a self taught software developer from New Jersey. My goal is to help those that were like me when I was first starting out and lead them to becoming competent developers. Whether it be teaching, providing general advice or top-notch resources, or simply being there to assist in navigating roadblocks, I want to pay it forward from the community that has enabled me to be in this position.</em></p>
    </div>

    <div class="col-12 off-color py-5 px-2 px-md-5">
        <h2 class="mb-5">Projects</h2>
        <div class="projects col-12 d-flex flex-column align-items-center">
            <div class="media mb-5 p-3 col col-md-10">
                <div class="img mr-3 align-self-start"></div>
                <div class="media-body">
                    <h5 class="mt-0">Title</h5>
                    <p class="mb-3">This is the description</p>
                    <div class="buttons d-flex">
                        <button class="btn btn-sm btn-primary mr-1">View</button>
                        <button class="btn btn-sm btn-link">Source</button>
                    </div>
                </div>
            </div>
            <div class="media mb-5 p-3 col col-md-10">
                <div class="img mr-3 align-self-start"></div>
                <div class="media-body">
                    <h5 class="mt-0">Title</h5>
                    <p class="mb-3">This is the description</p>
                    <div class="buttons d-flex">
                        <button class="btn btn-sm btn-primary mr-1">View</button>
                        <button class="btn btn-sm btn-link">Source</button>
                    </div>
                </div>
            </div>
            <div class="media mb-5 p-3 col col-md-10">
                <div class="img mr-3 align-self-start"></div>
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

    <div class="col-12 py-5 px-2 px-md-5 d-flex justify-content-around">
        <div>
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
        <div>
            <h4 class="mb-3">Back-end</h4>
            <ul>
                <li class="mb-2"><i class="fas fa-check mr-3"></i>PHP</li>
                <li class="mb-2"><i class="fas fa-check mr-3"></i>MySQL</li>
                <li class="mb-2"><i class="fas fa-check mr-3"></i>Laravel</li>
                <li class="mb-2"><i class="fas fa-check mr-3"></i>Node.js</li>
                <li class="mb-2"><i class="fas fa-check mr-3"></i>Express</li>
            </ul>
        </div>
        <div>
            <h4 class="mb-3">Other</h4>
            <ul>
                <li class="mb-2"><i class="fas fa-check mr-3"></i>Git/GitHub</li>
                <li class="mb-2"><i class="fas fa-check mr-3"></i>Webpack</li>
            </ul>
        </div>
    </div>

</div>

@endsection