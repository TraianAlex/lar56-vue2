<template>
    <div class="modal is-active">
        <div class="modal-background"></div>
        <div class="modal-content">
            <div class="box">
                <p>{{content}}</p>
            </div>
        </div>
        <button class="modal-close" @click="$emit('close')"></button>
    </div>
</template>

<script>
    export default {
        props: ['content'],
        mounted() {
            console.log('Message mounted');
        },
    }
</script>
