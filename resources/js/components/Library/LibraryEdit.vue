<template>
    <div class="px-5 py-8 w-full lg:w-2/3 xl:w-1/2 mx-auto">
        <form @submit.prevent="updateResource">
            <div class="flex flex-col sm:flex-row mb-5">
                <input
                    class="w-full font-bold rounded font-body flex-grow border-2 border-gray-500 px-3 py-1 bg-gray-600"
                    type="text"
                    name="name"
                    id="name"
                    v-model="name"
                    placeholder="Name">
            </div>
            <div class="flex flex-col sm:flex-row mb-5">
                <input
                    class="w-full font-bold rounded font-body flex-grow border-2 border-gray-500 px-3 py-1 bg-gray-600"
                    type="text"
                    name="url"
                    id="url"
                    v-model="url"
                    placeholder="URL">
            </div>
            <div class="flex flex-col sm:flex-row mb-5">
                <input
                    class="w-full font-bold rounded font-body flex-grow border-2 border-gray-500 px-3 py-1 bg-gray-600"
                    type="text"
                    name="resource_type"
                    id="resource_type"
                    v-model="resource_type"
                    placeholder="Type">
            </div>
            <div class="flex flex-col sm:flex-row mb-5 justify-center">
                <language-checkbox
                    v-for="language in allLanguages"
                    :key="language.name"
                    :language="language"
                    :checked="languageNames.includes(language.name)"
                ></language-checkbox>
            </div>
            <div class="flex justify-end mb-3">
                <input class="cursor-pointer shadow rounded uppercase px-6 py-2 bg-indigo-500 hover:bg-indigo-600 text-white" type="submit" value="Save">
            </div>
        </form>
    </div>
</template>

<script>
import LanguageCheckbox from './LanguageCheckbox';

export default {
    props: {
        resource: { required: true },
        index: { required: true },
        languages: { required: true }
    },

    data() {
        return {
            name: this.resource.name,
            url: this.resource.url,
            resource_type: this.resource.resource_type,
            allLanguages: this.languages,
            currentLanguages: this.resource.languages
        }
    },

    computed: {
        languageNames() {
            return this.currentLanguages.map(v => v.name);
        }
    },

    methods: {
        updateResource() {
            axios.post('/admin/resources/' + this.resource.id, {
                title: this.title,
                url: this.url,
                resource_type: this.resource_type,
                id: this.resource.id
            })
            .then(response => {
                this.$emit('updateresource', { resource: response.data, index: this.index });
            })
            .catch(error => console.log(error));
        }
    },

    components: {
        'language-checkbox': LanguageCheckbox
    }
}
</script>