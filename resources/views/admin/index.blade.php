@extends('admin.master')
@section('content')


    <header class="bg-white shadow z-10">
        <ul class="flex justify-between p-6">
            <li class="text-xl font-bold">clintgwinter CMS</li>
            <li>Sign Out</li>
        </ul>
    </header>

    <nav class="mt-32 bg-gray-100">
        <div class="px-0 md:px-2 lg:px-8">
            <ul class="flex text-lg">
                <li 
                    :class="{ 'text-white bg-teal-600': activeTab == 'blog' }" 
                    class="py-3 px-8 cursor-pointer rounded-t" 
                    @click="setActiveTab('blog')"
                >Blog Posts</li>
            </ul>
        </div>
    </nav>

    <main class="bg-gray-100 h-screen px-0 md:px-2 lg:px-8 mb-16">
        <div class="border h-full">

        </div>
    </main>

    <footer class="bg-gray-800 text-white px-16 py-8">
        <p>This is the footer!</p>
    </footer>

@endsection