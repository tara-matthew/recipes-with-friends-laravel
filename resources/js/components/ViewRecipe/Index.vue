<template>
    <page-header></page-header>
    <div class="ml-4 mr-4 mt-4">
        <div class="w-100 border-t-2 border-l-2 border-r-2 border-black mb-10">
            <recipe-details v-if="Object.keys(recipe).length !== 0 && finished" :recipe="recipe"></recipe-details>
        </div>
        <div class="w-100 flex items-center">
            <div class="w-1/2 border-t-2 border-l-2 border-r-2 border-black inline-block mr-12">
                <recipe-story :recipe="recipe"></recipe-story>
            </div>
            <div class="w-1/2 border-t-2 border-l-2 border-r-2 border-black inline-block">
                <recipe-tips :recipe="recipe"></recipe-tips>
            </div>
        </div>
    </div>
</template>

<script lang="ts">
    import RecipeDetails from '@/js/components/ViewRecipe/Details'
    import RecipeStory from '@/js/components/ViewRecipe/Story'
    import RecipeTips from '@/js/components/ViewRecipe/Tips'

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
            RecipeTips
        }
    }
</script>
