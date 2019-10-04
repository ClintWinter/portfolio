<template>
    <div class="px-5 py-8 w-full lg:w-2/3 xl:w-1/2 mx-auto">
        <form @submit.prevent="createResource">
            <div class="flex flex-col sm:flex-row mb-5">
                <input 
                    class="w-full text-3xl font-bold rounded font-body flex-grow border-2 border-gray-200 px-3 py-1" 
                    type="text" 
                    name="name" 
                    id="name" 
                    v-model="name" 
                    placeholder="Name">
            </div>
            <div class="flex flex-col sm:flex-row mb-5">
                <input 
                    class="w-full text-3xl font-bold rounded font-body flex-grow border-2 border-gray-200 px-3 py-1" 
                    type="text" 
                    name="url" 
                    id="url" 
                    v-model="url" 
                    placeholder="URL">
            </div>
            <div class="flex flex-col sm:flex-row mb-5">
                <input 
                    class="w-full text-3xl font-bold rounded font-body flex-grow border-2 border-gray-200 px-3 py-1" 
                    type="text" 
                    name="resource_type"
                    id="resource_type"
                    v-model="resource_type"
                    placeholder="Type">
            </div>
            <div class="flex flex-col sm:flex-row mb-5 items-start">
                <language-checkbox 
                    v-for="language in languages" 
                    :key="language.name"
                    :language="language"
                    v-model="checkedLanguages"
                ></language-checkbox>
            </div>
            <div class="flex justify-end mb-3">
                <input class="cursor-pointer shadow rounded uppercase px-6 py-2 bg-green-500 hover:bg-green-600 text-white" type="submit" value="Save">
            </div>
        </form>
    </div>
</template>

<script>
import LanguageCheckbox from './LanguageCheckbox';

export default {
    props: ['languages'],

    data() {
        return {
            name: '',
            url: '',
            resource_type: '',
            checkedLanguages: []
        };
    },

    components: {
        'language-checkbox': LanguageCheckbox
    }
}
</script>

<style>

</style>