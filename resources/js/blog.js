import Vue from 'vue';
import ViewBlog from './components/ViewBlog';

const app = new Vue({
    el: '#app',

    components: {
        'view-blog': ViewBlog
    }
});