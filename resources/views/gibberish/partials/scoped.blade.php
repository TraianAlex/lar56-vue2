<div :class="className">
    <div class="row">
        <div class="col-md-12">
            <scoped-slot :items="['one','two','three']">
                <template scope="{bar}">
                    <h4 v-text="props.bar"></h4>
                </template>
            </scoped-slot>
        </div>
    </div>
</div>