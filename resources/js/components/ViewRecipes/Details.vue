<template>
    <h1>View all recipes</h1>
    <div v-if="recipes" v-for="recipe in recipes" :key="recipe">
        <p>{{ recipe.title }}</p>
    </div>
</template>

<script>
export default {
    props: {
      recipes: {}
    },
}
</script>
