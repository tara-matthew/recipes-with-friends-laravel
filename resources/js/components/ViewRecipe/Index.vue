<template>
    <page-header></page-header>
    <div class="ml-4 mr-4 mt-4">

        <div class="mb-10 shadow-md">
            <recipe-details v-if="Object.keys(recipe).length !== 0 && finished" :recipe="recipe"></recipe-details>
        </div>

        <div class="flex items-center mb-10">
            <div class="w-1/2 inline-block mr-12 shadow-md">
                <recipe-story :recipe="recipe"></recipe-story>
            </div>

            <div class="w-1/2 inline-block shadow-md">
                <recipe-tips :recipe="recipe"></recipe-tips>
            </div>
        </div>

        <div class="flex mb-10">
            <div class="w-1/3 inline-block mr-12 shadow-md">
                <recipe-ingredients></recipe-ingredients>
            </div>

            <div class="w-2/3 inline-block shadow-md">
                <recipe-steps></recipe-steps>
            </div>
        </div>

    </div>
</template>

<script lang="js">
    import RecipeDetails from '@/js/components/ViewRecipe/Details'
    import RecipeStory from '@/js/components/ViewRecipe/Story'
    import RecipeTips from '@/js/components/ViewRecipe/Tips'
    import RecipeIngredients from '@/js/components/ViewRecipe/Ingredients'
    import RecipeSteps from '@/js/components/ViewRecipe/Steps'

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
            RecipeDetails,
            RecipeStory,
            RecipeTips,
            RecipeIngredients,
            RecipeSteps
        }
    }
</script>
