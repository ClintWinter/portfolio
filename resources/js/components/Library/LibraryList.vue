<template>

    <div class="px-5 py-8">
        <button class="px-6 py-2 rounded bg-blue-600 text-white uppercase shadow hover:bg-blue-700 mb-8" @click="$emit('changestate', 'new')">New Resource</button>
        <div class="flex">
            <slot></slot>
        </div>
    </div>

</template>
    
<script>
export default {

};
</script>