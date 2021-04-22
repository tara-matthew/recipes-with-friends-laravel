<template>
    <panel-outer-container class="w-1/2 mr-12">
        <panel componentClass="h-20">
            <template v-slot:header>
                <h1 class="text-white text-xl">{{ title }}</h1>
            </template>

            <template v-slot:body>
                <p>{{ description }}</p>
            </template>
        </panel>
    </panel-outer-container>
</template>

<script>
export default {
    data() {
        return {
            title: 'Story',
            description: 'An old recipe from my mother',
        }
    },
    props: {
        recipe: {},
    }
}
</script>
