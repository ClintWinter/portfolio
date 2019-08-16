import axios from 'axios';
window.axios = axios;

import Vue from 'vue';

const app = new Vue({
    el: '#app',

    data: {
        activeTab: ''
    },

    methods: {
        setActiveTab(tabName) {
            this.activeTab = tabName;
        }
    }
});