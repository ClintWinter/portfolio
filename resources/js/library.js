import Vue from 'vue';
import axios from 'axios';
window.axios = axios;

import ResourceList from './components/FrontEnd/ResourceList';
import ResourceItem from './components/FrontEnd/ResourceItem';

const app = new Vue({
    el: '#app',

    data: {
        resources: []
    },

    mounted() {
        axios.get('/resources')
        .then(response => {
            this.resources = response.data;
        });
    },

    methods: {

    },

    components: {
        'fe-resource-list': ResourceList,
        'fe-resource-item': ResourceItem
    }
});