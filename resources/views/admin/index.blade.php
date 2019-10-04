@extends('admin.master')
@section('content')

    <header class="bg-white shadow z-10">
        <ul class="flex justify-between p-6">
            <li class="text-xl font-bold">clintgwinter CMS</li>
            <li >
                <a 
                    class="hover:underline"
                    href="{{ route('logout') }}"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                >{{ __('Logout') }}</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </header>

    <div class="flex flex-col md:flex-row mt-32 items-stretch">

        <nav class="min-w-64">
            <div class="px-1 md:px-2 py-8">
                <ul class="flex flex-col sm:flex-row md:flex-col text-lg">
                    <li 
                        :class="{ 'text-white bg-teal-600 hover:bg-teal-600': activeTab == 'blog' }" 
                        class="mb-2 py-3 px-8 cursor-pointer rounded hover:bg-gray-300" 
                        @click="setActiveTab('blog')"
                    >Blog Posts</li>
                    <li 
                        :class="{ 'text-white bg-teal-600': activeTab == 'library' }" 
                        class="mb-2 py-3 px-8 cursor-pointer rounded hover:bg-gray-300"
                        @click="setActiveTab('library')"
                    >Library</li>
                    <li 
                        :class="{ 'text-white bg-teal-600': activeTab == 'project' }" 
                        class="mb-2 py-3 px-8 cursor-pointer rounded hover:bg-gray-300"
                    >Projects</li>
                </ul>
            </div>
        </nav>

        <main class="flex-grow min-h-screen px-1 md:px-2 lg:px-8 mb-16 rounded">
            <div class="min-h-full bg-white shadow-md">
                <div class="blog-container" v-if="activeTab == 'blog'">
                    <blog-container v-if="tabState == 'index'" @changestate="changeState">
                        <blog-item 
                            v-for="(blog, index) in blogs" 
                            :key="blog.slug"
                            :blog="blog"
                            :index="index"
                            @editblogpost="editBlogPost"
                            @publishblogpost="publishBlogPost"></blog-item>
                    </blog-container>
                    <new-blog 
                        v-if="tabState == 'new'"
                        @previewpost="previewPost"
                        @addblogpost="addBlogPost"
                        @changestate="changeState"></new-blog>
                    <edit-blog 
                        v-if="tabState == 'edit'" 
                        :blog="blogs[currentBlog]"
                        :index="currentBlog"
                        @previewpost="previewPost"
                        @updateblogpost="updateBlogPost"
                        @changestate="changeState"></edit-blog>
                </div>
                <div class="library-container" v-if="activeTab == 'library'">
                    <library-list 
                        v-if="tabState == 'index'" 
                        @changestate="changeState"
                    >
                        <library-resource
                            v-for="(resource, index) in library"
                            :key="resource.url"
                            :resource="resource"
                            :index="index"
                        ></library-resource>
                    </library-list>
                    <library-new 
                        v-if="tabState == 'new'" 
                        :languages="languages"
                    ></library-new>
                </div>
            </div>
        </main>

        <preview-blog :preview="preview" @closepreview="closePreview"></preview-blog>
    </div>

@endsection