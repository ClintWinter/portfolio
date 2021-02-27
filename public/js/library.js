/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************!*\
  !*** ./resources/js/library.js ***!
  \*********************************/
// import Vue from 'vue';
// import axios from 'axios';
// window.axios = axios;
// import ResourceList from './components/FrontEnd/ResourceList';
// import ResourceItem from './components/FrontEnd/ResourceItem';
// const app = new Vue({
//     el: '#app',
//     data: {
//         resources: [],
//         languages: [],
//         types: [],
//         filter: {
//             language_id: '',
//             resource_type: ''
//         },
//         selectedLanguage: '',
//         selectedType: ''
//     },
//     mounted() {
//         axios.get('/resources')
//         .then(response => {
//             this.resources = response.data.sort((a, b) => a.name > b.name);
//             this.types = this.resources.map(v => v.resource_type).filter((v, i, a) => a.indexOf(v) === i).sort((a, b) => a > b);
//         })
//         .catch(error => console.log(error));
//         axios.get('/languages')
//         .then(response => {
//             this.languages = response.data.sort((a, b) => a.name > b.name);
//         })
//         .catch(error => console.log(error));
//     },
//     methods: {
//         filterResources() {
//             axios.get('/resources', {
//                 params: {
//                     language: this.filter.language_id,
//                     resource_type: this.filter.resource_type
//                 }
//             })
//             .then(response => {
//                 this.resources = response.data.sort((a, b) => a.name > b.name);
//             })
//             .catch(error => console.log(error));
//         },
//         clearFilters() {
//             this.filter.language_id = '';
//             this.filter.resource_type = '';
//         },
//         filterByLanguage(id) {
//             this.filter.language_id = id;
//             this.filterResources();
//         },
//         filterByType(type) {
//             this.filter.resource_type = type;
//             this.filterResources();
//         }
//     },
//     watch: {
//         selectedLanguage() {
//             this.filterByLanguage(this.selectedLanguage);
//         },
//         selectedType() {
//             this.filterByType(this.selectedType);
//         }
//     },
//     components: {
//         'fe-resource-list': ResourceList,
//         'fe-resource-item': ResourceItem
//     }
// });
/******/ })()
;