<header class="px-2 md:px-6 py-4">
    <nav class="flex flex-col sm:flex-row justify-between items-baseline font-display">
        <a class="mb-4 sm:mb-0 text-2xl font-black text-red leading-none uppercase" href="{{ route('home') }}">$Clint_Winter</a>

        <ul class="flex gap-x-2 md:gap-x-10">
            <li><a class="block pr-2 text-base sm:text-lg text-orange font-semibold uppercase hover:underline {{ \Request::is('projects') ? 'underline' : '' }}" href="{{ route('projects') }}">
                $Projects
            </a></li>

            <li><a class="block px-2 text-base sm:text-lg text-orange font-semibold uppercase hover:underline {{ \Request::is('posts*') ? 'underline' : '' }}" href="{{ route('posts.index') }}">
                $Blog
            </a></li>

            <li><a class="block pl-2 text-base sm:text-lg text-orange font-semibold uppercase hover:underline {{ \Request::is('library*') ? 'underline' : '' }}" href="{{ route('library') }}">
                $Library
            </a></li>
        </ul>
    </nav>
</header>
