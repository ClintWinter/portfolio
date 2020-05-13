<template>
    <div class="px-5 py-8 w-full lg:w-2/3 xl:w-1/2 mx-auto">
        <h2 class="text-xl text-purple uppercase"><strong>NEW RESOURCE</strong></h2>

        <div class="h-8"></div>

        <form @submit.prevent="createResource">
            <div class="flex flex-col">
                <input
                    class="w-full flex-grow px-4 py-2 mb-2 text-xl border-2 border-teal bg-darkbg"
                    type="text"
                    name="name"
                    id="name"
                    v-model="name"
                    placeholder="Name"
                >

                <div v-if="errors.name">
                    <p class="text-md text-red" v-for="error in errors.name" :key="error">{{ error }}</p>
                </div>
            </div>

            <div class="h-5"></div>

            <div class="flex flex-col mb-5">
                <input
                    class="w-full flex-grow px-4 py-2 text-xl border-2 border-teal bg-darkbg"
                    type="text"
                    name="url"
                    id="url"
                    v-model="url"
                    placeholder="URL"
                >

                <div class="h-2"></div>

                <div v-if="errors.url">
                    <p class="text-md text-red" v-for="error in errors.url" :key="error">{{ error }}</p>
                </div>
            </div>

            <div class="flex flex-col">
                <input
                    class="w-full flex-grow px-4 py-2 text-xl border-2 border-teal bg-darkbg"
                    type="text"
                    name="resource_type"
                    id="resource_type"
                    v-model="resource_type"
                    placeholder="Type"
                >

                <div class="h-2"></div>

                <div v-if="errors.resource_type">
                    <p class="text-md text-red" v-for="error in errors.resource_type" :key="error">{{ error }}</p>
                </div>
            </div>

            <div class="h-5"></div>

            <div class="flex flex-wrap flex-row">
                <language-checkbox
                    v-for="language in languages"
                    :key="language.name"
                    :language="language"
                    @checked="checked"
                ></language-checkbox>
            </div>

            <div class="h-5"></div>

            <div class="flex justify-between">
                <button
                    type="button"
                    class="px-6 py-2 border-2 border-yellow text-yellow hover:bg-yellow hover:text-darkbg"
                    @click="newLanguage"
                ><strong>$add_language</strong></button>

                <button
                    class="px-6 py-2 bg-orange text-darkbg"
                    type="submit"
                ><strong>$save</strong></button>
            </div>

            <div class="h-3"></div>
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