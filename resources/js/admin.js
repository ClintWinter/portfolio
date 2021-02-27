// import axios from 'axios';
// window.axios = axios;

// import Vue from 'vue';
// import BlogContainer from './components/Blog/BlogContainer';
// import BlogItem from './components/Blog/BlogItem';
// import NewBlog from './components/Blog/NewBlog';
// import EditBlog from './components/Blog/EditBlog';
// import PreviewBlog from './components/Blog/PreviewBlog';

// import LibraryList from './components/Library/LibraryList';
// import LibraryResource from './components/Library/LibraryResource';
// import LibraryNew from './components/Library/LibraryNew';
// import LibraryEdit from './components/Library/LibraryEdit';

// import LanguageNew from './components/Library/LanguageNew';

// const app = new Vue({
//     el: '#app',

//     data: {
//         activeTab: 'blog',
//         tabState: 'index',
//         blogs: [],
//         currentBlog: 0,
//         library: [],
//         languages: [],
//         language: {
//             active: false,
//             name: ''
//         },
//         currentResource: 0,
//         preview: {
//             active: false,
//             title: '',
//             body: ''
//         }
//     },

//     created() {
//         // Get Blog Posts
//         axios.get('/admin/blogposts')
//         .then(function(response) {
//             this.blogs = response.data;
//         }.bind(this))
//         .catch(error => console.log(error));

//         // Get Resources
//         axios.get('/resources')
//         .then(function(response) {
//             this.library = response.data;
//         }.bind(this))
//         .catch(error => console.log(error));

//         // Get Languages
//         axios.get('admin/languages')
//         .then(response => {
//             this.languages = response.data;
//         })
//         .catch(error => console.log(error));
//     },

//     methods: {
//         setActiveTab(tabName) {
//             this.changeState('index');
//             this.activeTab = tabName;
//         },

//         changeState(state) {
//             this.tabState = state;
//         },

//         // Resources
//         addResource(resource) {
//             this.library.unshift(resource);
//             this.changeState('index');
//         },

//         editResource(index) {
//             this.changeState('edit');
//             this.currentResource = index;
//         },

//         updateResource({resource, index}) {
//             this.$set(this.library, index, resource);
//             this.changeState('index');
//         },

//         deleteResource(index) {
//             this.library = this.library.filter((v, i) => i != index);
//             this.changeState('index');
//         },

//         // Languages
//         newLanguage() {
//             this.language.active = true;
//         },

//         addLanguage(language) {
//             this.languages.unshift(language);
//             this.closeLanguage();
//         },

//         closeLanguage() {
//             this.language.active = false;
//         },

//         // Blog Posts
//         addBlogPost(blogPost) {
//             this.blogs.unshift(blogPost);
//             this.changeState('index');
//         },

//         editBlogPost(index) {
//             this.changeState('edit');
//             this.currentBlog = index;
//         },

//         updateBlogPost({blogPost, index}) {
//             this.$set(this.blogs, index, blogPost);
//             this.changeState('index');
//         },

//         publishBlogPost({blogPost, index}) {
//             this.$set(this.blogs, index, blogPost);
//         },

//         previewPost({body, title}) {
//             this.preview.active = true;
//             this.preview.title = title;
//             this.preview.body = body;
//         },

//         closePreview() {
//             this.preview.active = false;
//             this.preview.body = '';
//         }
//     },

//     components: {
//         'blog-container': BlogContainer,
//         'blog-item': BlogItem,
//         'new-blog': NewBlog,
//         'edit-blog': EditBlog,
//         'preview-blog': PreviewBlog,
//         'library-list': LibraryList,
//         'library-resource': LibraryResource,
//         'library-new': LibraryNew,
//         'library-edit': LibraryEdit,
//         'language-new': LanguageNew
//     }
// });
