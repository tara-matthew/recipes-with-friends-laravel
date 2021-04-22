<template>
    <panel-outer-container containerClass="w-full">
        <panel>
            <template v-slot:header>
                <h1 class="text-white text-xl">{{ recipe.title }}</h1>
            </template>

            <template v-slot:body>
                <div class="image-container w-full md:w-2/5 sm:w-full h-72 border-black border-2 inline-flex items-center justify-center">
                    <p class="font-bold">Photo</p>
                </div>
                <div class="details-container w-full md:w-3/5 sm:w-full h-72 border-black border-2 inline-flex align-top">
                    <div class="mt-52 w-6/12 text-center">
                        <p class="font-bold">Prep: 20 mins</p>
                        <p class="font-bold">Cook: 30 mins</p>
                    </div>
                    <div class="mt-52 w-6/12 text-center">
                        <p class="font-bold">Cuisine: Japanese</p>
                        <p class="font-bold">Mood: Sus</p>
                    </div>
                </div>
            </template>
        </panel>
    </panel-outer-container>
</template>

<script>
    export default {
        props: {
            recipe: {}
        }
    }
</script>
