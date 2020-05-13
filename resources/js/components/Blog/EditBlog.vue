<template>
    <div class="px-5 py-8 w-full lg:w-2/3 xl:w-1/2 mx-auto">
        <a
            class="cursor-pointer block text-yellow hover:underline"
            @click="$emit('changestate', 'index')"
        >&lt;- Back to Blog Posts</a>

        <div class="h-8"></div>

        <form @submit.prevent="updateBlogPost">
            <div class="flex flex-col sm:flex-row">
                <input
                    class="w-full px-3 py-1 text-3xl font-display font-black text-purple border-2 border-teal bg-darkbg"
                    type="text"
                    name="title"
                    id="title"
                    v-model="title"
                    placeholder="Title">
            </div>

            <div class="h-5"></div>

            <div class="flex flex-col sm:flex-row items-start">
                <textarea
                    class="w-full px-3 py-1 h-128 leading-relaxed flex-grow border-2 border-teal bg-darkbg"
                    style="resize:none;"
                    name="body"
                    id="body"
                    v-model="body"
                    placeholder="Body"
                ></textarea>
            </div>

            <div class="h-5"></div>

            <div class="flex justify-end">
                <button
                    type="button"
                    class="cursor-pointer px-6 py-2 text-yellow hover:bg-yellow hover:text-darkbg"
                    @click="openPreview"
                ><strong>$preview</strong></button>

                <div class="w-4"></div>

                <button
                    class="cursor-pointer px-6 py-2 bg-orange text-darkbg"
                    type="submit"
                ><strong>$save</strong></button>
            </div>

            <div class="h-3"></div>
        </form>
    </div>
</template>

<script>
export default {
    props: {
        blog: { required: true },
        index: { required: true }
    },

    data() {
        return {
            title: this.blog.title,
            body: this.blog.body
        }
    },

    methods: {
        updateBlogPost() {
            axios.post('/admin/blogposts/' + this.blog.slug, {
                title: this.title,
                body: this.body,
                slug: this.blog.slug
            })
            .then(response => {
                this.$emit('updateblogpost', { blogPost: response.data, index: this.index });
            })
            .catch(error => console.log(error));
        },

        openPreview() {
            this.$emit('previewpost', {'body': this.body, 'title': this.title});
        }
    }
}
</script>