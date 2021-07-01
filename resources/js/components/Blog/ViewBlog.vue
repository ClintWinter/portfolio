<template>
    <div class="flex flex-col items-center">

        <div class="w-full">
            <div class="">
                <h1 class="mb-2 leading-tight text-2xl md:text-3xl text-purple"><strong>{{ post.title }}</strong></h1>
                <p class="text-dark text-sm"><em>{{ publishedDate }}</em></p>
            </div>
        </div>

        <div class="h-16"></div>

        <div class="blogpost text-base leading-relaxed w-full" v-html="body"></div>
    </div>
</template>

<script>
import moment from 'moment';
import hljs from 'highlight.js';
import MarkdownIt from 'markdown-it';

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
