<template>

    <div class="px-5 py-8">
        <button
            class="px-6 py-2 text-darkbg bg-orange"
            @click="$emit('changestate', 'new')"
        ><strong>$new_resource</strong></button>

        <div class="h-8"></div>

        <div class="flex flex-wrap">
            <slot></slot>
        </div>
    </div>

</template>

<script>
export default {

};
</script>