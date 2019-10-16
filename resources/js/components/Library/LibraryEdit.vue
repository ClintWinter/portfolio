<template>
    <div class="px-5 py-8 w-full lg:w-2/3 xl:w-1/2 mx-auto">
        <h2 class="text-xl font-black mb-8 text-gray-500 tracking-wider">EDIT RESOURCE</h2>
        <form @submit.prevent="updateResource">
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
                    v-for="language in allLanguages"
                    :key="language.name"
                    :language="language"
                    :checked="languageNames.includes(language.name)"
                    @checked="checked"
                ></language-checkbox>
            </div>
            <div class="flex justify-between mb-3">
                <button
                    type="button"
                    class="text-sm font-bold tracking-wider px-6 py-2 rounded bg-gray-700 hover:bg-gray-600 text-gray-200 shadow"
                    @click="newLanguage"
                >ADD LANGUAGE</button>
                <div>
                    <button
                        type="button"
                        class="px-5 py-2mr-4 text-red-400 hover:text-red-500 text-shadow"
                        @click="deleteResource"
                    >DELETE</button>
                    <input class="cursor-pointer shadow rounded uppercase px-6 py-2 bg-teal-500 hover:bg-teal-600 text-white" type="submit" value="Save">
                </div>
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
            checkedLanguages: this.resource.languages,
            errors: {
                name: [],
                url: [],
                resource_type: []
            }
        }
    },

    computed: {
        languageNames() {
            return this.checkedLanguages.map(v => v.name);
        }
    },

    methods: {
        updateResource() {
            axios.post('/admin/resources/' + this.resource.id, {
                name: this.name,
                url: this.url,
                resource_type: this.resource_type,
                id: this.resource.id,
                languages: this.checkedLanguages.map(v => v.id)
            })
            .then(response => {
                console.log(response.data);
                this.$emit('updateresource', { resource: response.data, index: this.index });
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

        deleteResource() {
            axios.delete('/admin/resources/' + this.resource.id)
            .then(response => {
                console.log(response.data);
                if ( response.data == 0 ) {
                    this.$emit('deleteresource', this.index);
                }
            })
            .catch(error => {
                console.log(error.response);
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