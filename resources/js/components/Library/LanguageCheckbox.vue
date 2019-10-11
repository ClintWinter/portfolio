<template>
    <div class="mr-4">
        <input
            type="checkbox"
            :id="language.name"
            :value="language.id"
            :checked="checked"
            ref="boxChecked"
            @change="check"
        >
        <label
            :class="{ 'text-teal-500 underline':isChecked }"
            :for="language.name"
        >{{ language.name }}</label>
    </div>
</template>

<script>
export default {
    props: ['language', 'checked'],

    data() {
        return {
            isChecked: this.checked
        };
    },

    mounted() {
        this.isChecked = this.$refs.boxChecked.checked;
    },

    methods: {
        check() {
            this.isChecked = !this.isChecked;
            this.$refs.boxChecked.checked = this.isChecked;
            this.$emit('checked', this.isChecked, this.language);
        }
    }
}
</script>

<style>

</style>