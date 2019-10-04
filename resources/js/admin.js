import axios from 'axios';
window.axios = axios;

import Vue from 'vue';
import BlogContainer from './components/BlogContainer';
import BlogItem from './components/BlogItem';
import NewBlog from './components/NewBlog';
import EditBlog from './components/EditBlog';
import PreviewBlog from './components/PreviewBlog';

import LibraryList from './components/LibraryList';
import LibraryResource from './components/LibraryResource';
import LibraryNew from './components/LibraryNew';

const app = new Vue({
    el: '#app',

    data: {
        activeTab: 'blog',
        tabState: 'index',
        blogs: [],
        currentBlog: 0,
        library: [],
        languages: [],
        currentResource: 0,
        preview: {
            active: false,
            title: '',
            body: ''
        }
    },

    created() {
        axios.get('/admin/blogposts')
        .then(function(response) {
            this.blogs = response.data;
        }.bind(this))
        .catch(error => console.log(error));

        axios.get('admin/resources')
        .then(function(response) {
            this.library = response.data;
            this.languages = this.library.reduce((acc, val, i) => {
                let languages = val.languages;
                acc.push(...languages)

                return acc;
            }, [] );
        }.bind(this))
        .catch(error => console.log(error));
    },

    methods: {
        setActiveTab(tabName) {
            this.activeTab = tabName;
        },

        changeState(state) {
            this.tabState = state;
        },

        // Resources

        // Blog Posts
        addBlogPost(blogPost) {
            this.blogs.unshift(blogPost);
            this.tabState = 'index';
        },

        editBlogPost(index) {
            this.tabState = 'edit';
            this.currentBlog = index;
        },

        updateBlogPost({blogPost, index}) {
            this.$set(this.blogs, index, blogPost);
            this.tabState = 'index';
        },

        publishBlogPost({blogPost, index}) {
            this.$set(this.blogs, index, blogPost);
        },

        previewPost({body, title}) {
            this.preview.active = true;
            this.preview.title = title;
            this.preview.body = body;
        },

        closePreview() {
            this.preview.active = false;
            this.preview.body = '';
        }
    },

    components: {
        'blog-container': BlogContainer,
        'blog-item': BlogItem,
        'new-blog': NewBlog,
        'edit-blog': EditBlog,
        'preview-blog': PreviewBlog,
        'library-list': LibraryList,
        'library-resource': LibraryResource,
        'library-new': LibraryNew
    }
});