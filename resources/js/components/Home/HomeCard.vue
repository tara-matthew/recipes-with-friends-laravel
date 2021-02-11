<template>
    <div class="border-t-2 border-l-2 border-r-2 border-b-2 border-black mt-4 odd:ml-4 mr-4">
        <div class="border-b-2 border-black h-12 flex items-center justify-center"><h1>{{ data.title }}</h1></div>
        <div class="h-without-header flex flex-col overflow-y-auto">
            <div class="border-b-2 flex items-center p-4 last:border-b-0 flex-grow min-h-0 flex-shrink flex" v-for="content in data.contents" :key="content">
                <span> {{ content.title }} </span>
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
