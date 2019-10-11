<template>
    <div
        :class="{'hidden': !active}"
        class="fixed inset-0 flex items-center justify-center z-50 py-24 px-1 text-gray-200"
    >
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div
            class="w-full md:w-2/3 xl:w-1/2 z-20 shadow-xl rounded bg-gray-800 px-1 py-6 md:px-12 md:py-12 overflow-y-auto"
        >
            <form @submit.prevent="saveLanguage" class="flex flex-col">
                <input
                    class="w-full font-bold rounded font-body flex-grow px-4 py-2 bg-gray-600 mb-6 text-xl shadow-md"
                    type="text"
                    name="name"
                    id="name"
                    v-model="name"
                    ref="languageName"
                    placeholder="Name">
                <div v-if="errors" class="mb-6">
                    <p v-for="error in errors" :key="error">{{ error }}</p>
                </div>
                <div class="flex justify-between">
                    <button class="w-1/2 mr-4 cursor-pointer shadow rounded uppercase px-6 py-2 bg-gray-500 hover:bg-gray-600 text-gray-100 text-shadow" type="button" @click="cancel">CANCEL</button>
                    <input class="w-1/2 cursor-pointer shadow rounded uppercase px-6 py-2 bg-indigo-500 hover:bg-indigo-600 text-white" type="submit" value="SAVE">
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
                console.log(response);
                this.$emit('addlanguage', response.data);
            })
            .catch(error => {
                this.errors = error.response.data.errors.name;
            });
        },

        cancel() {
            this.$emit('closelanguage');
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