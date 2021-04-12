<template>
    <div class="border-t-2 border-l-2 border-r-2 border-b-2 border-black ml-4 mr-4 mt-4">
        <div class="border-b-2 border-black h-12 flex items-center justify-center"><h1> {{ recipe.title }}</h1></div>
        <div>
            <div class="border-b-2 p-4">
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
                        <p class="font-bold">Mood: Sexy</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            recipe: {}
        }
    }
</script>
