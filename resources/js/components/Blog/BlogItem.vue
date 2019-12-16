<template>

    <div class="overflow-hidden relative bg-gray-900 shadow-lg mb-5 px-2 md:px-8 py-4 md:py-6">
        <div
            class="bg-blue-700 text-yellow-500 absolute pt-4 px-12 shadow"
            style="top: 0; left: 0; transform: rotate(-45deg) translate(-27px, -40px)"
            v-if="blog.published"
        ><i class="fas fa-star"></i></div>
        <header class="px-5 py-2 flex justify-between items-center">
            <h1
                class="text-2xl font-bold cursor-pointer text-blue-500 hover:underline"
                @click="getBlogPost"
            >{{ blog.title }}</h1>
        </header>
        <div class="px-5 py-2 leading-loose mb-8">
            {{ body }}
        </div>
        <div class="px-5">
            <button
                class="text-xs text-white rounded px-4 py-2 uppercase leading-none shadow-md mb-2"
                :class="blog.published ? 'bg-red-800 hover:bg-red-700' : 'bg-blue-800 hover:bg-blue-700'"
                v-text="blog.published ? 'Unpublish' : 'Publish'"
                @click="publishBlogPost"
            ></button>
            <div class="text-xs text-gray-600 whitespace-no-wrap" v-if="blog.published">{{ publishedDate }}</div>
            <div class="text-xs text-gray-600 whitespace-no-wrap" v-if="blog.published">Reads: {{ blog.reads }}</div>
        </div>
    </div>

</template>

<script>
import moment from 'moment';
export default {
    props: {
        blog: {
            type: Object
        },
        index: {
            type: Number
        }
    },

    computed: {
        body() {
            if (this.blog.body.length > 197)
                return this.blog.body.slice(0, 200) + '...';
            else
                return this.blog.body;
        },

        publishedDate() {
            return moment(this.blog.published_at).format('MMMM Do, YYYY H:mm');
        }
    },

    methods: {
        getBlogPost() {
            this.$emit('editblogpost', this.index);
        },

        publishBlogPost() {
            axios.post('/admin/blogposts/' + this.blog.slug + '/publish', {
                published: !this.blog.published
            })
            .then(response => {
                this.$emit('publishblogpost', { blogPost: response.data, index: this.index })
            })
            .catch(error => console.log(error));
        }
    }
};
</script>