<template>
    <div class="bg-green-panel h-12 flex items-center justify-center rounded-t-md">
        <slot name="header"></slot>
    </div>
    <div :class="componentClass" class="p-4">
        <slot name="body"></slot>
    </div>
</template>

<script>
    export default {
        props: [
            'title',
            'componentClass'
        ]
    }
</script>
