<template>
    <panel componentClass="h-40">
        <template v-slot:header>
            <h1 class="text-white text-xl">{{ title }}</h1>
        </template>

        <template v-slot:body>
            <p>{{ description }}</p>
        </template>
    </panel>
</template>

<script>
export default {
    data() {
        return {
            title: 'Hot Tips',
            description: "Don't burn the onions",
            componentClass: 'h-60'
        }
    },
    props: {
        recipe: {},
    }
}
</script>
