<template>
    <div class="w-1/2 md:w-1/3 pr-2 pb-2">
        <input
            type="checkbox"
            :id="language.name"
            :value="language.id"
            :checked="checked"
            ref="boxChecked"
            @change="check"
        >
        <label
            class="font-display text-xs hover:text-yellow"
            :class="{ 'text-yellow underline':isChecked }"
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