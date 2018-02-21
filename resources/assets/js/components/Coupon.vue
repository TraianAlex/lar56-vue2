<template>
    <div class="input-group input-group-lg">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-lg">Enter your gibberish code:</span>
        </div>
        <input type="text" class="form-control" aria-label="Gibberish" aria-describedby="inputGroup-sizing-sm" @blur="$emit('applied')">
    </div>
</template>

<script>
    export default {
    }
</script>
