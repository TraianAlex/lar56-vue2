<div :class="className">
    <div class="row">
        <div class="col-md-12">
            <coupon @applied="onCouponApplied"></coupon>
            <div class="alert alert-info mt-3" v-show="couponApplied" role="alert">
                You used a coupon!
            </div>
        </div>
    </div>
</div>