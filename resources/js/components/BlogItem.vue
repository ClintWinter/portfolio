<template>

    <div class="bg-gray-100 shadow-lg my-5 rounded-lg border border-gray-500">
        <header class="px-5 py-2 bg-gray-300 rounded-t-lg flex justify-between items-center">
            <h1 class="font-bold cursor-pointer text-blue-700">{{ blog.title }}</h1>
            <button 
                class="text-white rounded px-6 py-2 uppercase leading-none shadow" 
                :class="blog.published ? 'bg-red-800 hover:bg-red-700' : 'bg-blue-800 hover:bg-blue-700'" 
                v-text="blog.published ? 'Unpublish' : 'Publish'"></button>
        </header>
        <div class="px-5 py-2">
            <p>{{ blog.body }}</p>
        </div>
    </div>

</template>
    
<script>
export default {
    props: {
        blog: { 
            type: Object
        }
    }
};
</script>