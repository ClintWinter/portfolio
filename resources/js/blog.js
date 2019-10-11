import Vue from 'vue';
import ViewBlog from './components/Blog/ViewBlog';

const app = new Vue({
    el: '#app',

    components: {
        'view-blog': ViewBlog
    }
});