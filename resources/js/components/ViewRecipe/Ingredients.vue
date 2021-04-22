<template>
    <panel-outer-container containerClass="w-1/3 mr-12">
        <panel componentClass="h-60">
            <template v-slot:header>
                <h1 class="text-white text-xl">{{ title }}</h1>
            </template>

            <template v-slot:body>
                <ul>
                    <li v-for="ingredient in ingredients">
                        {{ ingredient }}
                    </li>
                </ul>
            </template>
        </panel>
    </panel-outer-container>
</template>

<script>
export default {
    data() {
        return {
            title: 'Ingredients',
            ingredients: [
                '2 grams noodles',
                '300g chicken',
                '500000g garlic',
                '235406 grams ginger',
                '2 grams noodles',
                '300g chicken',
                '500000g garlic',
                '235406 grams ginger'

            ]
        }
    },
    props: {
        recipe: {},
    }
}
</script>
