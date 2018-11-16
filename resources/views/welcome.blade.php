@extends('layouts.master')
@section('content')

<div class="welcome-page row m-0 p-0">

    <div class="col-12 col-lg-6 m-0 p-3 p-md-4 p-xl-5 left-col d-flex flex-column">
        <div class="d-flex flex-wrap mb-5 w-100">
            <img src="/images/profile.jpg" class="profile-img rounded-circle mr-3">
            <div class="d-flex flex-column">
                <h1 class="display-3 text-center text-lg-right">Clint Winter</h1>
                <div class="sm-links d-flex">
                    <a class="px-2" target="_blank" href="https://github.com/clintwinter" rel="noopener noreferrer"><i class="fab fa-github-square"></i></a>
                    <a class="px-2" target="_blank" href="https://linkedin.com/in/clint-winter" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
        {{-- <hr class="bg-dark"> --}}
        <div class="p-3 summary">
            <p>Greetings!</p>

            <p>My name is Clint Winter, and I'm currently a Software Engineer with <a target="_blank" href="https://lyncserve.com" rel="noopener noreferrer">LyncServe</a>. I'm motivated to continue learning new technologies and languages to add to my tool belt, and striving to master the ones I already know. I've recently added my projects and notes to my <a target="_blank" href="https://github.com/clintwinter" rel="noopener noreferrer">GitHub</a> account.</p>

            <p>I'm currently improving my Laravel skills (this portfolio is using it), and I'm planning on learning Vue next!</p>

            <p>Thanks for checking out my work, feel free to email me at <a href="mailto:cwinter.web@gmail.com">cwinter.web@gmail.com</a>!</p>
        </div>
    </div>

    <div class="col-12 col-lg-6 nospacing right-col">
        <div class="w-100 p-3 p-md-4 p-xl-5">
            <h1 class="mb-4">Github Samples:</h1>

            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Colt Steele Advanced Bootcamp</h5>
                    <p class="card-text text-muted">Notes, exercises and small projects from this udemy course covering ES2017, modern CSS, ajax, testing, OOP and more.</p>
                    <a class="mr-3" target="_blank" href="https://github.com/ClintWinter/colt-steele-advanced" rel="noopener noreferrer">
                        <i class="fas fa-external-link-alt"></i>
                        GitHub
                    </a>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Todo App</h5>
                    <p class="card-text text-muted">SPA todo app using Node.js, MySQL, Express and vanilla JavaScript for the front end.</p>
                    <a class="mr-3" target="_blank" href="https://github.com/ClintWinter/todo-app" rel="noopener noreferrer">
                        <i class="fas fa-external-link-alt"></i>
                        GitHub
                    </a>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Blog</h5>
                    <p class="card-text text-muted">Blog site using RESTful routing and a login system with authentication. Built with Node.js, Express and MongoDB. </p>
                    <a class="mr-3" target="_blank" href="https://github.com/ClintWinter/Blog" rel="noopener noreferrer">
                        <i class="fas fa-external-link-alt"></i>
                        GitHub
                    </a>
                    <a class="mr-3" target="_blank" href="https://serene-savannah-17802.herokuapp.com/" rel="noopener noreferrer">
                        <i class="fas fa-external-link-alt"></i>
                        Launch
                    </a>
                </div>
            </div>

        </div>
    </div>

</div>

@endsection