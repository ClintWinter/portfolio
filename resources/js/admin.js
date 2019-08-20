import axios from 'axios';
window.axios = axios;

import Vue from 'vue';
import BlogContainer from './components/BlogContainer';
import BlogItem from './components/BlogItem';

const app = new Vue({
    el: '#app',

    data: {
        activeTab: 'blog',
        blogs: []
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
        }
    },

    components: {
        'blog-container': BlogContainer,
        'blog-item': BlogItem
    }
});