<template>
    <div class="input-group input-group-lg">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-lg">Enter your gibberish code:</span>
        </div>
        <input type="text" class="form-control" aria-label="Gibberish" aria-describedby="inputGroup-sizing-sm" @blur="onCouponApplied">
    </div>
</template>

<script>
    export default {
        methods:{
            onCouponApplied(){
                Event.fire('applied');
            }
        }
    }
</script>
