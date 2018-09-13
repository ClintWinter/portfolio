@extends('layouts.master')
@section('content')

<div class="row nospacing">

    <div class="col-12 mb-5 text-center">
        <img src="/images/linkedin.jpg" class="profile-img img-thumbnail">
        <h1 class="display-1 text-center">Clint Winter</h1>
        <div class="sm-links d-flex justify-content-center">
            <a class="px-2" target="_blank" href="https://github.com/cwinterweb"><i class="fab fa-github-square"></i></a>
            <a class="px-2" target="_blank" href="https://linkedin.com/in/clint-winter"><i class="fab fa-linkedin"></i></a>
            {{-- <a href="https://github.com/cwinterweb"><i class="fab fa-github"></i></a>
            <a href="https://github.com/cwinterweb"><i class="fab fa-github"></i></a> --}}
        </div>
        <hr class="bg-dark">
    </div>

    <div class="col-12 d-flex justify-content-between flex-nowrap">
        <div class="flex-fill w-50 content-box mx-3 p-3">
            <p>Greetings,</p>
            <p>My name is Clint Winter, and I'm currently a full-stack web developer for <a target="_blank" href="https://cwrdistribution.com">CWR Wholesale Distribution</a>. I'm motivated to master the technologies and languages I know and continue adding new ones to my toolbelt. I've begun to add my projects and notes to my <a target="_blank" href="https://github.com/cwinterweb">GitHub</a> account.</p>
            <p>Thanks for checking out my work, feel free to email me at <a href="mailto:cwinter.web@gmail.com">cwinter.web@gmail.com</a>!</p>
        </div>
        <div class="flex-fill w-50 content-box mx-3 p-3">
            <p>Here is a list of my projects:</p>
        </div>
    </div>

</div>

@endsection