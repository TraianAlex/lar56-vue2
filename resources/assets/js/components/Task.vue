<template>
    <li class="list-group-item list-group-item-warning d-flex justify-content-between align-items-center">
        {{description}}<span class="badge badge-danger badge-pill">{{status}}</span><button class="btn" @click="$emit('remove')">X</button>
    </li>
</template>

<script>
    export default {
        props: ['description','status'],
        mounted() {
            console.log('Task mounted');
        }
    }
</script>
