<template>
    <div class="bg-gray-600 px-6 py-4 shadow-md">
        <h1 class="text-xl font-semibold mb-4">
            <a
                href="javascript:;"
                @click="getResource"
            >
                {{ resource.name }}
                <small class="text-sm text-gray-800">{{ resource.resource_type }}</small>
            </a>
        </h1>
        <div class="flex text-md -mx-2">
            <div
                class="mx-2 px-2 py-1 rounded bg-gray-700 shadow"
                v-for="language in resource.languages"
                :key="language.name"
            >{{ language.name }}</div>
        </div>
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