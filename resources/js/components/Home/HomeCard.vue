<template>
    <div class="border-t-2 border-l-2 border-r-2 border-b-2 border-black mt-4 odd:ml-4 mr-4">
        <div class="border-b-2 border-black h-12 flex items-center justify-center"><h1>{{ data.title }}</h1></div>
        <div class="h-without-header flex flex-col">
            <div class="border-b-2 h-auto flex items-center min-h-1/4 p-4 last:border-b-0 flex-grow" v-for="content in data.contents" :key="content">
                <span> {{ content }} </span>
            </div>
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
