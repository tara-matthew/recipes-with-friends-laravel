<template>
    <page-header></page-header>
    <div class="grid w-100 grid-cols-2 grid-rows-2 h-viewport-without-header">
        <keep-alive><home-card v-if="data.recentlyViewed.contents.length > 0" :data="data.recentlyViewed"></home-card></keep-alive>
        <keep-alive><home-card v-if="data.favourites.contents.length > 0" :data="data.favourites"></home-card></keep-alive>
        <keep-alive><home-card v-if="data.recentlyAdded.contents.length > 0" :data="data.recentlyAdded"></home-card></keep-alive>
        <keep-alive><home-card v-if="data.mostSearched.contents.length > 0" :data="data.mostSearched"></home-card></keep-alive>

    </div>
</template>

<script>
    import HomeCard from '@/js/components/Home/HomeCard';

    export default {
        data() {
            return {
                data: {
                    recentlyViewed: {
                        title: 'Recently Viewed',
                        contents: []
                    },
                    favourites: {
                        title: 'Favourites',
                        contents: []
                    },
                    recentlyAdded: {
                        title: 'Recently Added',
                        contents: []
                    },
                    mostSearched: {
                        title: 'Most Searched',
                        contents: []
                    },
                },
                recipes: {}
            }
        },
        mounted() {
            window.axios.get('/api/recipes').then(response => {
                this.data.recentlyAdded.contents = response.data;
                //TODO Change these as relevant controllers are built
                this.data.recentlyViewed.contents = response.data;
                this.data.favourites.contents = response.data;
                this.data.mostSearched.contents = response.data;
            })
        },

        components: {
            HomeCard
        }
    }
</script>
