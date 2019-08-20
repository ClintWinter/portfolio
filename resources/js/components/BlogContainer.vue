<template>

    <div class="px-5 py-8">
        <button class="px-6 py-2 rounded bg-blue-600 text-white uppercase shadow hover:bg-blue-700">New Blog Post</button>
        <div class="flex flex-col">
            <slot></slot>
        </div>
    </div>

</template>
    
<script>
export default {

};
</script>