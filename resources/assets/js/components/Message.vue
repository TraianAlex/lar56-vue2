<template>
    <article class="message mb-3" v-show="isVisible">
        <div class="message-header">
            <p>{{title}}</p>
            <button class="delete" aria-label="delete" @click="isVisible = false;"></button>
        </div>
        <div class="message-body">
            {{body}}
        </div>
    </article>
</template>

<script>
    export default {
        props: ['title', 'body'],
        mounted() {
            console.log('Message mounted');
        },
        data() {
            return {
                isVisible: true
            }
        }
    }
</script>
