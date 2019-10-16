<template>
    <div class="px-5 py-8 w-full lg:w-2/3 xl:w-1/2 mx-auto">
        <h2 class="text-xl font-black mb-8 text-gray-500 tracking-wider">NEW RESOURCE</h2>
        <form @submit.prevent="createResource">
            <div class="flex flex-col mb-5">
                <input
                    class="w-full font-bold rounded font-body flex-grow px-4 py-2 bg-gray-600 mb-2 text-xl shadow-md"
                    type="text"
                    name="name"
                    id="name"
                    v-model="name"
                    placeholder="Name">
                <div v-if="errors.name">
                    <p class="text-md text-red-400" v-for="error in errors.name" :key="error">{{ error }}</p>
                </div>
            </div>
            <div class="flex flex-col mb-5">
                <input
                    class="w-full font-bold rounded font-body flex-grow px-4 py-2 bg-gray-600 mb-2 text-xl shadow-md"
                    type="text"
                    name="url"
                    id="url"
                    v-model="url"
                    placeholder="URL">
                <div v-if="errors.url">
                    <p class="text-md text-red-400" v-for="error in errors.url" :key="error">{{ error }}</p>
                </div>
            </div>
            <div class="flex flex-col mb-5">
                <input
                    class="w-full font-bold rounded font-body flex-grow px-4 py-2 bg-gray-600 mb-2 text-xl shadow-md"
                    type="text"
                    name="resource_type"
                    id="resource_type"
                    v-model="resource_type"
                    placeholder="Type">
                <div v-if="errors.resource_type">
                    <p class="text-md text-red-400" v-for="error in errors.resource_type" :key="error">{{ error }}</p>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row mb-5">
                <language-checkbox
                    v-for="language in languages"
                    :key="language.name"
                    :language="language"
                    @checked="checked"
                ></language-checkbox>
            </div>
            <div class="flex justify-between mb-3">
                <button
                    type="button"
                    class="text-sm font-bold tracking-wider px-6 py-2 rounded bg-gray-700 hover:bg-gray-600 text-gray-200 shadow"
                    @click="newLanguage"
                >ADD LANGUAGE</button>
                <input class="cursor-pointer shadow rounded uppercase px-6 py-2 bg-teal-500 hover:bg-teal-600 text-white" type="submit" value="Save">
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
            checkedLanguages: [],
            errors: {
                name: [],
                url: [],
                resource_type: []
            }
        };
    },

    methods: {
        createResource() {
            axios.post('/admin/resources', {
                name: this.name,
                url: this.url,
                resource_type: this.resource_type,
                languages: this.checkedLanguages.map(v => v.id)
            })
            .then((response) => {
                this.$emit('addresource', response.data);
            })
            .catch(error => {
                let errors = error.response.data.errors;
                if (errors.name)
                    this.errors.name = errors.name || '';
                if (errors.url)
                    this.errors.url = errors.url || '';
                if (errors.resource_type)
                    this.errors.resource_type = errors.resource_type || '';
            });
        },

        checked(isChecked, language) {
            if ( isChecked ) {
                this.checkedLanguages.push(language);
            } else {
                this.checkedLanguages = this.checkedLanguages.filter(v => v.id != language.id);
            }
        },

        newLanguage() {
            this.$emit('newlanguage');
        }
    },

    components: {
        'language-checkbox': LanguageCheckbox
    }
}
</script>

<style>

</style>