<template>
    <div class="card mb-3 bg-success text-white">
        <div class="card-body">
            <h5 class="card-title">Binding Gibberish message:</h5>
            <div class="alert alert-primary" role="alert">
                <strong>Holy guacamole!</strong>
                {{message}}
            </div>
            <div class="input-group">
                <textarea class="form-control" aria-label="With textarea" v-model="message"></textarea>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Binding-component mounted.');
        },
        data() {
            return {
                message: 'Gibberish'
            }
        }
    }
</script>
