<template>
    <div class="border-t-2 border-l-2 border-r-2 border-b-2 border-black ml-4 mr-4 mt-4">
        <div class="border-b-2 border-black h-12 flex items-center justify-center"><h1> {{ recipe.title }}</h1></div>
        <div class="flex flex-col overflow-y-auto">
            <div class="border-b-2 items-center p-4 last:border-b-0 min-h-0">
                <p>Story - {{ recipe.story }}</p>
                <p>Photo - {{ recipe.main_photo }}</p>
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
