@extends('admin.master')
@section('content')

    <header class="z-10 border-b border-dark">
        <ul class="flex justify-between items-center p-6">
            <li class="text-xl text-red"><strong>$clintgwinterCMS</strong></li>
            <li >
                <a
                    class="bg-orange text-darkbg px-2 py-1"
                    href="{{ route('logout') }}"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                ><strong>$logout</strong></a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </header>

    <div class="flex flex-col md:flex-row items-stretch">

        <nav class="min-w-64 border-r border-dark">
            <div class="py-8">
                <ul class="flex flex-col sm:flex-row md:flex-col text-lg">
                    <li
                        :class="{ 'text-darkbg bg-orange': activeTab == 'blog' }"
                        class="py-3 px-8 cursor-pointer hover:bg-yellow hover:text-darkbg"
                        @click="setActiveTab('blog')"
                    ><strong>$Blog_Posts</strong></li>
                    <li
                        :class="{ 'text-darkbg bg-orange': activeTab == 'library' }"
                        class="py-3 px-8 cursor-pointer hover:bg-yellow hover:text-darkbg"
                        @click="setActiveTab('library')"
                    ><strong>$Library</strong></li>
                    <li
                        :class="{ 'text-darkbg bg-orange': activeTab == 'project' }"
                        class="py-3 px-8 cursor-pointer hover:bg-yellow hover:text-darkbg"
                    ><strong>$Projects</strong></li>
                </ul>
            </div>
        </nav>

        <main class="flex-grow min-h-screen">
            <div class="min-h-full">
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