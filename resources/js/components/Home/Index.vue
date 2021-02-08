<template>
    <page-header></page-header>
    <div class="grid w-100 grid-cols-2 grid-rows-2 h-screen">
        <recently-viewed></recently-viewed>
    </div>
</template>

<script>
    import RecentlyViewed from '@/js/components/Home/RecentlyViewed'

    export default {
        components: {
            RecentlyViewed
        }
    }
</script>
