<template>
    <div class="border-t-2 border-l-2 border-r-2 border-b-2 border-black ml-4 mt-4">
        <div class="border-b-2 border-black h-12 flex items-center justify-center"><h1>{{ data.title }}</h1></div>
        <div class="h-without-header">
            <div class="border-b-2 h-auto flex items-center min-h-1/4 p-4"><span>{{ data.contents[0] }}</span></div>
            <div class="border-b-2 h-auto flex items-center min-h-1/4 p-4"><span>{{ data.contents[1] }}</span></div>
            <div class="border-b-2 h-auto flex items-center min-h-1/4 p-4"><span>{{ data.contents[2] }}</span></div>
            <div class="h-auto flex items-center min-h-1/4 p-4"><span>{{ data.contents[3] }}</span></div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            data: {}
        },

        mounted() {
        }
    }
</script>
