<template>
    <div class="flex-grow max-w-full sm:max-w-1/2 lg:max-w-1/3 xl:max-w-1/4 px-2 mb-4">
        <div class="h-full px-4 py-2 border-2 border-teal flex flex-col justify-between">
            <div class="flex mb-4 items-start">
                <h1 class="mr-2 flex-grow">
                    <a
                        href="javascript:;"
                        @click="getResource"
                    >
                        <span class="leading-none text-base hover:underline text-yellow"><strong>{{ resource.name }}</strong></span>
                    </a>
                </h1>

                <p class="leading-tight text-xs p-1 bg-purple text-darkbg"><em>{{ resource.resource_type }}</em></p>
            </div>

            <div class="h-8"></div>

            <div class="flex flex-wrap text-md -mx-1">
                <div
                    class="mx-1 mb-2 p-1 text-xs bg-teal text-darkbg"
                    v-for="language in resource.languages"
                    :key="language.name"
                ><strong>{{ language.name }}</strong></div>
            </div>
        </div>

        <div class="h-2"></div>
    </div>
</template>

<script>
export default {
    props: ['resource', 'index'],

    methods: {
        getResource() {
            this.$emit('editresource', this.index);
        }
    }
}
</script>

<style>

</style>