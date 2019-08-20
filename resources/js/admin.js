import axios from 'axios';
window.axios = axios;

import Vue from 'vue';
import BlogContainer from './components/BlogContainer';
import BlogItem from './components/BlogItem';
import NewBlog from './components/NewBlog';
import EditBlog from './components/EditBlog';

const app = new Vue({
    el: '#app',

    data: {
        activeTab: 'blog',
        tabState: 'index',
        blogs: [],
        currentBlog: 0,
    },

    created() {
        axios.get('/admin/blogposts')
        .then(function(response) {
            this.blogs = response.data;
            console.log(this.blogs);
            // console.log(response.data);
        }.bind(this))
        .catch(error => console.log(error));
    },

    methods: {
        setActiveTab(tabName) {
            this.activeTab = tabName;
        },

        changeState(state) {
            console.log(state);
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
        }
    },

    components: {
        'blog-container': BlogContainer,
        'blog-item': BlogItem,
        'new-blog': NewBlog,
        'edit-blog': EditBlog
    }
});