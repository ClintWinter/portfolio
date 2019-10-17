import Vue from 'vue';
import axios from 'axios';
window.axios = axios;

import ResourceList from './components/FrontEnd/ResourceList';
import ResourceItem from './components/FrontEnd/ResourceItem';

const app = new Vue({
    el: '#app',

    data: {
        resources: [],
        languages: [],
        types: [],
        selectedLanguage: '',
        selectedType: ''
    },

    mounted() {
        axios.get('/resources')
        .then(response => {
            this.resources = response.data.sort((a, b) => a.name > b.name);
            this.types = this.resources.map(v => v.resource_type).filter((v, i, a) => a.indexOf(v) === i).sort((a, b) => a > b);
        })
        .catch(error => console.log(error));

        axios.get('/languages')
        .then(response => {
            this.languages = response.data.sort((a, b) => a.name > b.name);
        })
        .catch(error => console.log(error));
    },

    methods: {
        filterByLanguage(id) {
            axios.get('/resources', {
                params: {
                    language: id
                }
            })
            .then(response => {
                this.resources = response.data.sort((a, b) => a.name > b.name);
            })
            .catch(error => console.log(error));
        },

        filterByType(type) {
            axios.get('/resources', {
                params: {
                    resource_type: type
                }
            })
            .then(response => {
                this.resources = response.data.sort((a, b) => a.name > b.name);
            })
            .catch(error => console.log(error));
        }
    },

    watch: {
        selectedLanguage() {
            this.filterByLanguage(this.selectedLanguage);
        },

        selectedType() {
            this.filterByType(this.selectedType);
        }
    },

    components: {
        'fe-resource-list': ResourceList,
        'fe-resource-item': ResourceItem
    }
});