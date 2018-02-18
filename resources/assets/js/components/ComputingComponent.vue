<template>
    <div class="card bg-danger mb-3 text-white">
        <div class="card-body">
            <h5 class="card-title">Computed Gibberish</h5>
            <p class="card-text" v-text="(new Date()).toLocaleString()"></p>
            <div class="alert alert-secondary" role="alert">
                <strong>Gua ca camole!</strong> {{this.$parent.reversedMessage}}
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Computing-component mounted.');
        },
    }
</script>
