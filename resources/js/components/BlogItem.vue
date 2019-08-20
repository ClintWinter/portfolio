<template>

    <div class="bg-gray-200 shadow-lg mb-5">
        <header class="px-5 py-2 flex justify-between items-center">
            <h1 
                class="text-2xl font-bold cursor-pointer text-blue-700"
                @click="getBlogPost">{{ blog.title }}</h1>
            <div class="flex flex-col flex-end items-end">
                <button 
                    class="text-xs text-white rounded px-4 py-2 uppercase leading-none shadow-md mb-2" 
                    :class="blog.published ? 'bg-red-800 hover:bg-red-700' : 'bg-blue-800 hover:bg-blue-700'" 
                    v-text="blog.published ? 'Unpublish' : 'Publish'"
                    @click="publishBlogPost"></button>
                <div class="text-xs text-gray-600" v-if="blog.published">Published: {{ publishedDate }}</div>
            </div>
        </header>
        <div class="px-5 py-2 leading-loose">
            {{ body }}
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
            return moment(this.blog.published_at).fromNow();
        }
    },

    methods: {
        getBlogPost() {
            this.$emit('editblogpost', this.index);
            // axios('/admin/blogposts/' + this.blog.slug)
            // .then(response => {
            //     this.$emit('editblogpost', response.data);
            // })
            // .catch(error => console.log(error));
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