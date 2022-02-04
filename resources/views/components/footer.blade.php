<hr class="container mx-auto mb-4 border-b border-dark">

<footer class="bg-gray-900 px-2 md:px-16 py-12">
    <div class="flex justify-center container mx-auto mb-12 font-display">
        <div class="flex flex-col pr-12 md:pr-32">
            <p class="mb-4 uppercase text-purple"><strong>Resources</strong></p>
            <a class="mb-6 text-sm hover:underline" href="{{ route('projects') }}">Projects</a>
            <a class="mb-6 text-sm hover:underline" href="{{ route('posts.index') }}">Blog</a>
            <a class="text-sm hover:underline" href="{{ route('library') }}">Library</a>
        </div>

        <div class="flex flex-col pr-12 md:pr-32">
            <p class="mb-4 uppercase text-purple"><strong>Contact</strong></p>
            <a class="text-sm hover:underline" href="mailto:cwinter.web@gmail.com">Email</a>
        </div>

        <div class="flex flex-col">
            <p class="mb-4 uppercase text-purple"><strong>Links</strong></p>
            <a
                aria-label="Github in new tab"
                href="https://github.com/clintwinter"
                class="mb-6 flex items-center hover:text-yellow"
                target="_blank"
                rel="noopener noreferrer"
            ><i class="text-2xl fab fa-github mr-2"></i><span class="text-sm">Github</span></a>
            <a
                aria-label="LinkedIn in new tab"
                href="https://linkedin.com/in/clint-winter"
                class="mb-6 flex items-center hover:text-yellow"
                target="_blank"
                rel="noopener noreferrer"
            ><i class="text-2xl fab fa-linkedin-in mr-2"></i><span class="text-sm">LinkedIn</span></a>
            <a
                aria-label="View PDF resume in new tab"
                href="{{ Storage::url('ClintWinterResume.pdf') }}"
                class="mb-6 flex items-center hover:text-yellow"
                target="_blank"
                rel="noopener noreferrer"
            ><i class="text-2xl fas fa-user-tie mr-2"></i><span class="text-sm">Resume</span></a>
            <a
                aria-label="Clint Winter's DEV profile"
                href="https://dev.to/clintwinter"
                class="mb-6 flex items-center hover:text-yellow"
                target="_blank"
                rel="noopener noreferrer"
            ><i class="text-2xl fab fa-dev mr-2"></i><span class="text-sm">More Blogging</span></a>
            <a
                aria-label="View PDF resume in new tab"
                href="https://twitter.com/ClintGWinter"
                class="mb-6 flex items-center hover:text-yellow"
                target="_blank"
                rel="noopener noreferrer"
            ><i class="text-2xl fab fa-twitter mr-2"></i><span class="text-sm">Twitter</span></a>
            <a
                aria-label="My codementor profile"
                href="https://www.codementor.io/@clintwinter?refer=badge"
                class="flex items-center hover:text-yellow"
                target="_blank"
                rel="noopener noreferrer"
            ><img src="https://www.codementor.io/m-badges/clintwinter/im-a-cm-g.svg" alt="I'm a codementor!"></a>
        </div>
    </div>

    <div class="text-center">
        <p class="text-xs"> This website is actively maintained by Clint Winter &nbsp;&bullet;&nbsp; Website stats that don't track your personal data by <a class="font-bold underline" href="https://usefathom.com/ref/Y84A28">Fathom Analytics</a> &nbsp;&bullet;&nbsp; Hosted with <a class="font-bold underline" href="https://m.do.co/c/1bd7d55ee985">Digital Ocean</a></p>
    </div>
</footer>
