<template>
    <div>
        <h1><a :href="resource.url" target="_blank" rel="noreferrer noopener">{{ resource.name }}</a></h1>
        <div><small>{{ resource.resource_type }}</small></div>
        <div 
            v-for="language in resource.languages" 
            :key="language.name"
        >{{ language.name }}</div>
    </div>
</template>

<script>
export default {
    props: ['resource']
}
</script>

<style>

</style>