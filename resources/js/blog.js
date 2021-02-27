// import Vue from 'vue';
// import ViewBlog from './components/Blog/ViewBlog';

// const app = new Vue({
//     el: '#app',

//     components: {
//         'view-blog': ViewBlog
//     }
// });

import 'alpinejs';
import moment from 'moment';
import hljs from 'highlight.js';
import MarkdownIt from 'markdown-it';
import 'highlight.js/styles/dracula.css';

const md = MarkdownIt({
    highlight: function (str, lang) {
        if (lang && hljs.getLanguage(lang)) {
            try {
                return hljs.highlight(lang, str).value;
            } catch (__) {}
        }

        return '';
    }
});

let elArticleBody = document.querySelector('#article-body');
if (elArticleBody) elArticleBody.innerHTML = md.render(elArticleBody.innerHTML);
