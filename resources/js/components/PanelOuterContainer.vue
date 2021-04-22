<template>
    <div class="inline-block shadow-md" :class="containerClass">
        <slot></slot>
    </div>
</template>

<script>
    export default {
        props: [
            'containerClass'
        ]
    }
</script>
