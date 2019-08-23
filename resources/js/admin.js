import axios from 'axios';
window.axios = axios;

import Vue from 'vue';
import BlogContainer from './components/BlogContainer';
import BlogItem from './components/BlogItem';
import NewBlog from './components/NewBlog';
import EditBlog from './components/EditBlog';
import PreviewBlog from './components/PreviewBlog';

const app = new Vue({
    el: '#app',

    data: {
        activeTab: 'blog',
        tabState: 'index',
        blogs: [],
        currentBlog: 0,
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
    },

    methods: {
        setActiveTab(tabName) {
            this.activeTab = tabName;
        },

        changeState(state) {
            this.tabState = state;
        },

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
        'preview-blog': PreviewBlog
    }
});