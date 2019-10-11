<template>
    <div class="flex flex-col items-center">

        <div class="mb-16 w-full">
            <div class="">
                <h1 class="mb-2 leading-tight text-2xl md:text-3xl font-bold font-black text-gray-800 flex justify-between items-center">{{ post.title }}</h1>
                <p class="no-text-shadow font-normal text-gray-600 text-sm">{{ publishedDate }}</p>
            </div>
            <!-- <div class="h-2 w-full bg-teal-400 opacity-75"></div> -->
            <!-- <p class="font-normal text-gray-600 text-sm"></!-->
        </div>

        <div class="blogpost text-base leading-relaxed w-full" v-html="body"></div>
    </div>
</template>

<script>
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

export default {
    props: ['blogpost'],

    data() {
        return {
            post: JSON.parse(this.blogpost),

            md: MarkdownIt({
                highlight: function (str, lang) {
                    if (lang && hljs.getLanguage(lang)) {
                    try {
                        return hljs.highlight(lang, str).value;
                    } catch (__) {}
                    }
                    return '';
                }
            })
        }
    },

    computed: {
        publishedDate() {
            return moment(this.post.published_at).format('MMMM Do, YYYY');
        },

        body() {
            return md.render(this.post.body);
        }
    }
}
</script>