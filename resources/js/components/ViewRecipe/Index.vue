<template>
    <page-header></page-header>
    <recipe-details v-if="Object.keys(recipe).length !== 0 && finished" :recipe="recipe"></recipe-details>
</template>

<script>
    import RecipeDetails from '@/js/components/ViewRecipe/Details'
    export default {
        data() {
          return {
              id: this.$route.params.recipeId,
              recipe: {},
              finished: false
          }
        },
        activated() {
            if (this.id != this.$route.params.recipeId) {
                this.finished = false;
            }
            this.id = this.$route.params.recipeId;
            window.axios.get('/api/recipes/' + this.id).then(response => {
                //TODO store this response somewhere when it's been retrieved, to save having to perform the request again
                this.recipe = response.data;
                this.finished = true;
            })
        },
        components: {
            RecipeDetails
        }
    }
</script>
