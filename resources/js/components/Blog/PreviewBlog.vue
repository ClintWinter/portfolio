<template>
    <div
        :class="{'hidden': !preview.active}"
        class="fixed inset-0 flex items-center justify-center z-50 py-24 px-1"
    >
        <div class="absolute inset-0 bg-darkbg opacity-75"></div>
        <div
            class="w-full md:w-2/3 xl:w-1/2 z-20 shadow-xl bg-darkbg h-full px-1 py-6 md:px-12 md:py-12 overflow-y-auto border-2 border-teal"
        >
            <div class="flex items-center justify-between border-b border-dark">
                <h1 class="text-2xl leading-tight text-purple"><strong>{{ preview.title }}</strong></h1>

                <button class="text-4xl" @click="closePreview"><i class="fas fa-times"></i></button>
            </div>

            <div class="h-4"></div>

            <div class="blogpost text-sm sm:text-base" v-html="bodyPreview"></div>
        </div>
    </div>
</template>

<script>
import hljs from 'highlight.js';
import MarkdownIt from 'markdown-it';
import 'highlight.js/styles/dracula.css';

export default {
    props: ['preview'],

    data() {
        return {
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
        };
    },

    computed: {
        bodyPreview() {
            return this.md.render(this.preview.body);
        }
    },

    methods: {
        closePreview() {
            this.$emit('closepreview');
        }
    }
}
</script>