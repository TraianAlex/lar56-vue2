<template>
    <div class="box">
        <h6>Private count: {{private.count}}</h6>
        <p>Shared count: {{shared.count}}</p>
        <button class="button" @click="private.count++">Private Increment</button>
        <button class="button" @click="shared.count++">Shared Increment</button>
    </div>
</template>

<script>


    export default {
        data() {
            return {
                private: {
                    count: 0
                },
                shared: {
                    count: 0
                }
            }
        },
    }
</script>
