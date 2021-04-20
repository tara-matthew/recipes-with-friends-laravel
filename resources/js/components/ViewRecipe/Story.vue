<template>
    <panel>
        <template v-slot:header>
            <h1>{{ title }}</h1>
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
            title: 'Story',
            description: 'An old recipe from my mother'
        }
    },
    props: {
        recipe: {},
    }
}
</script>
