<template>
    <div>
        <input 
            type="checkbox" 
            :id="language.name" 
            :value="language.id" 
            v-model="checkedLanguages"
        >
        <label :for="langauge.name">{{ language.name }}</label>
    </div>
</template>

<script>
export default {
    props: ['language']
}
</script>

<style>

</style>