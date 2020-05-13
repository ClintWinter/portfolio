<template>
    <div class="flex-grow max-w-full sm:max-w-1/2 lg:max-w-1/3 xl:max-w-1/4 px-2 mb-4">
        <div class="h-full px-4 py-2 border-2 border-teal flex flex-col justify-between">
            <div class="flex mb-4 items-start">
                <h3 class="mr-2 flex-grow" :title="resource.url">
                    <a
                        :href="resource.url"
                        target="_blank"
                        rel="noreferrer noopener"
                    >
                        <span class="leading-none text-base hover:underline text-yellow"><strong>{{ resource.name }}</strong></span>
                    </a>
                </h3>

                <p class="leading-tight text-xs px-1 bg-purple text-darkbg"><em>{{ resource.resource_type }}</em></p>
            </div>
            <div class="flex flex-wrap justify-between">
                <p class="text-gray-700 text-xs">{{ languageList }}</p>
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