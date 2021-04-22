<template>
    <panel-outer-container containerClass="w-2/3">
        <panel componentClass="h-60">
            <template v-slot:header>
                <h1 class="text-white text-xl">{{ title }}</h1>
            </template>

            <template v-slot:body>
                <ul>
                    <li v-for="step in steps">
                        {{ step }}
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
            title: 'Steps',
            steps: [
                'Crush garlic',
                'Do not eat garlic',
                'Eat garlic',

            ]
        }
    },
    props: {
        recipe: {},
    }
}
</script>
