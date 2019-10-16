@extends('admin.master')
@section('content')

    <header class="bg-gray-900 text-white shadow z-10">
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

    <div class="flex flex-col md:flex-row items-stretch">

        <nav class="min-w-64 bg-teal-800 text-white text-shadow shadow-md">
            <div class="py-8">
                <ul class="flex flex-col sm:flex-row md:flex-col text-lg">
                    <li
                        :class="{ 'text-white bg-teal-500 hover:bg-teal-500': activeTab == 'blog' }"
                        class="py-3 px-8 cursor-pointer hover:bg-teal-500"
                        @click="setActiveTab('blog')"
                    >Blog Posts</li>
                    <li
                        :class="{ 'text-white bg-teal-500': activeTab == 'library' }"
                        class="py-3 px-8 cursor-pointer hover:bg-teal-500"
                        @click="setActiveTab('library')"
                    >Library</li>
                    <li
                        :class="{ 'text-white bg-teal-500': activeTab == 'project' }"
                        class="py-3 px-8 cursor-pointer hover:bg-teal-500"
                    >Projects</li>
                </ul>
            </div>
        </nav>

        <main class="flex-grow min-h-screen">
            <div class="min-h-full shadow-md">
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
                            @editresource="editResource"
                        ></library-resource>
                    </library-list>
                    <library-new
                        v-if="tabState == 'new'"
                        :languages="languages"
                        @newlanguage="newLanguage"
                        @addresource="addResource"
                    ></library-new>
                    <library-edit
                        v-if="tabState == 'edit'"
                        :languages="languages"
                        :resource="library[currentResource]"
                        :index="currentResource"
                        @newlanguage="newLanguage"
                        @updateresource="updateResource"
                        @deleteresource="deleteResource"
                    ></library-edit>
                </div>
            </div>
        </main>

        <preview-blog :preview="preview" @closepreview="closePreview"></preview-blog>
        <language-new :active="language.active" @closelanguage="closeLanguage" @addlanguage="addLanguage"></language-new>
    </div>

@endsection