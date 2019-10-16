<template>
    <div class="w-1/2 lg:w-1/3 xl:w-1/4 mb-4 px-2">
        <div class="px-4 py-2 rounded bg-gray-100 shadow-md">
            <h3 class="mb-2">
                <a
                    :href="resource.url"
                    target="_blank"
                    rel="noreferrer noopener"
                >
                    <span class="text-xl text-blue-500 hover:underline font-bold">{{ resource.name }}</span><br>
                    <small class="text-gray-700">{{ resource.url }}</small>
                </a>
            </h3>
            <p class="mb-4">{{ resource.resource_type }}</p>
            <div class="flex flex-wrap -mx-1">
                <div
                    class="mx-1 px-1 py-1 bg-gray-300 shadow rounded"
                    v-for="language in resource.languages"
                    :key="language.id"
                >{{ language.name }}</div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['resource'],

    mounted() {

    }
}
</script>

<style>

</style>