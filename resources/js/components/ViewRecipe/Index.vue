<template>
    <page-header></page-header>
    <recipe-details v-if="Object.keys(recipe).length !== 0" :recipe="recipe"></recipe-details>
</template>

<script>
    import RecipeDetails from '@/js/components/ViewRecipe/Details'
    export default {
        data() {
          return {
              id: this.$route.params.recipeId,
              recipe: {}
          }
        },
        mounted() {
            window.axios.get('/api/recipes/' + this.id).then(response => {
                this.recipe = response.data;
            })
        },
        components: {
            RecipeDetails
        }
    }
</script>
