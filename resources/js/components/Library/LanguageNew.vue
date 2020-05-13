<template>
    <div
        :class="{'hidden': !active}"
        class="fixed inset-0 flex items-center justify-center z-50 py-24 px-1"
    >
        <div class="absolute inset-0 bg-darkbg opacity-75"></div>

        <div class="w-full md:w-2/3 xl:w-1/2 z-20 shadow-xl bg-darkbg px-1 py-6 md:px-12 md:py-12 overflow-y-auto">
            <form @submit.prevent="saveLanguage" class="flex flex-col">
                <input
                    class="w-full flex-grow px-4 py-2 mb-6 text-xl bg-darkbg border-2 border-teal"
                    type="text"
                    name="name"
                    id="name"
                    v-model="name"
                    ref="languageName"
                    placeholder="Name"
                >

                <div v-if="errors" class="mb-6">
                    <p class="text-md text-red-400" v-for="error in errors" :key="error">{{ error }}</p>
                </div>

                <div class="flex justify-between">
                    <button
                        class="w-1/2 mr-4 px-6 py-2 text-yellow hover:bg-yellow hover:text-darkbg"
                        type="button"
                        @click="cancel"
                    ><strong>$cancel</strong></button>

                    <button
                        class="w-1/2 px-6 py-2 bg-orange text-darkbg"
                        type="submit"
                    ><strong>$save</strong></button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    props: ['active'],

    data() {
        return {
            name: '',
            errors: []
        }
    },

    methods: {
        saveLanguage() {
            axios.post('/admin/languages', {
                name: this.name
            })
            .then(response => {
                this.$emit('addlanguage', response.data);
                this.errors = [];
                this.name = '';
            })
            .catch(error => {
                this.errors = error.response.data.errors.name;
            });
        },

        cancel() {
            this.$emit('closelanguage');
            this.errors= [];
            this.name = '';
        }
    },

    watch: {
        active: function() {
            if (this.active) {
                this.$nextTick(() => {
                    this.$refs.languageName.focus();
                });
            }
        }
    }
}
</script>