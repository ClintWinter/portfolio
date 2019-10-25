<template>
    <div class="max-w-full sm:max-w-1/2 lg:max-w-1/3 xl:max-w-1/4 mb-4 px-2">
        <div class="h-full px-4 py-2 border border-gray-200 bg-gray-100">
            <div class="flex items-end mb-4">
                <h3 class="mr-2 flex-grow" :title="resource.url">
                    <a
                        :href="resource.url"
                        target="_blank"
                        rel="noreferrer noopener"
                    >
                        <span class="text-xl text-blue-500 hover:underline font-bold">{{ resource.name }}</span>
                    </a><br>
                    <!-- <small class="text-gray-700">{{ resource.url }}</small> -->
                </h3>
                <p>{{ resource.resource_type }}</p>
            </div>
            <div class="flex flex-wrap justify-between">
                <p class="text-gray-700 text-xs">{{ languageList }}</p>
                <!-- <div
                    class="px-2 py-1 text-pink-700 font-bold text-sm"
                    v-for="language in resource.languages"
                    :key="language.id"
                >{{ language.name }}</div> -->
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['resource'],

    computed: {
        languageList() {
            return this.resource.languages.map(v => v.name).join(', ');
        }
    }
}
</script>

<style>

</style>