<template>
    <div class="px-5 py-8 w-full lg:w-2/3 xl:w-1/2 mx-auto">
        <a class="cursor-pointer block text-blue-500 underline mb-8" @click="$emit('changestate', 'index')"><i class="fas fa-arrow-left"></i> Back to Blog Posts</a>
        <form @submit.prevent="createBlog">
            <div class="flex flex-col sm:flex-row mb-5">
                <!-- <label class="w-full sm:w-1/6 mr-3" for="title">Title</label> -->
                <input 
                    class="w-full text-3xl font-bold rounded font-body flex-grow border-2 border-gray-200 px-3 py-1" 
                    type="text" 
                    name="title" 
                    id="title" 
                    v-model="title" 
                    placeholder="Title">
            </div>
            <div class="flex flex-col sm:flex-row mb-5 items-start">
                <!-- <label class="w-full sm:w-1/6 mr-3" for="body">Body</label> -->
                <textarea 
                    class="w-full leading-relaxed font-body flex-grow border-2 border-gray-200 rounded px-3 py-1 h-128" 
                    style="resize:none;" 
                    name="body" 
                    id="body" 
                    v-model="body"
                    placeholder="Body"
                ></textarea>
            </div>
            <div class="flex justify-end mb-3">
                <button type="button" class="cursor-pointer shadow rounded uppercase px-6 py-2 text-green-500 hover:bg-gray-100 mr-4" @click="openPreview">Preview</button>
                <input class="cursor-pointer shadow rounded uppercase px-6 py-2 bg-green-500 hover:bg-green-600 text-white" type="submit" value="Save">
            </div>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            title: '',
            body: ''
        }
    },

    methods: {
        createBlog() {
            axios.post('/admin/blogposts/', {
                title: this.title,
                body: this.body
            })
            .then(response => {
                this.$emit('addblogpost', response.data);
            })
            .catch(error => console.log(error));
        },

        openPreview() {
            this.$emit('previewpost', {'body': this.body, 'title': this.title});
        }
    }
}
</script>