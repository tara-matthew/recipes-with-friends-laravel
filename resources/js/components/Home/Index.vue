<template>
    <page-header></page-header>
    <div class="grid w-100 grid-cols-2 grid-rows-2 h-viewport-without-header">
        <home-card v-if="data" :data="data.recentlyViewed"></home-card>
        <home-card v-if="data" :data="data.favourites"></home-card>
        <home-card v-if="data" :data="data.recentlyAdded"></home-card>
        <home-card v-if="data" :data="data.mostSearched"></home-card>
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
                        contents: ['Sexy ramen', 'Butt of Caroline', 'Sexy spaghetti', 'Less sexy penne']
                    },
                    favourites: {
                        title: 'Favourites',
                        contents: ['Sweet Caroline','Sweet Caroline','Sweet Caroline','Sweet Caroline']
                    },
                    recentlyAdded: {
                        title: 'Recently Added',
                        contents: ['Carolime Clark', 'Carol','Sweet Caroline','Sweet Caroline']
                    },
                    mostSearched: {
                        title: 'Most Searched',
                        contents: ['Carolime Clark', 'Carol']
                    },
                }
            }
        },
        mounted() {
        },

        components: {
            HomeCard
        }
    }
</script>
