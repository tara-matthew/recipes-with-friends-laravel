<template>
    <div class="border-b-2 border-black h-12 flex items-center justify-center">
        <slot name="header"></slot>
    </div>
    <div class="border-b-2 p-4">
        <slot name="body"></slot>
    </div>
</template>

<script>
    export default {
        props: [
            'title'
        ]
    }
</script>
