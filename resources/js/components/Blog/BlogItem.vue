<template>

    <div>
        <div class="overflow-hidden relative px-2 md:px-8 py-4 md:py-6 border-2 border-teal">
            <div
                class="border-b-2 border-teal text-yellow absolute pt-4 px-12"
                style="top: 0; left: 0; transform: rotate(-45deg) translate(-27px, -40px)"
                v-if="blog.published"
            ><i class="fas fa-star"></i></div>
            <header class="px-5 py-2 flex justify-between items-center">
                <h1
                    class="text-2xl cursor-pointer text-yellow hover:underline"
                    @click="getBlogPost"
                ><strong>{{ blog.title }}</strong></h1>
            </header>
            <div class="px-5 py-2 leading-loose mb-8">
                {{ body }}
            </div>
            <div class="px-5">
                <button
                    class="text-xs px-4 py-2 leading-none text-darkbg"
                    :class="blog.published ? 'bg-red' : 'bg-purple'"
                    @click="publishBlogPost"
                ><strong v-text="blog.published ? '$unpublish' : '$publish'"></strong></button>

                <div class="h-4"></div>

                <div class="text-xs text-dark whitespace-no-wrap"><em>
                    <span v-if="blog.published">{{ publishedDate }}</span>
                    <span v-if="blog.published">&nbsp;//&nbsp; Reads: {{ blog.reads }}</span>
                </em></div>
            </div>
        </div>

        <div class="h-6"></div>
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
