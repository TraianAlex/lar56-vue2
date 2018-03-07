<div :class="className">
    <div class="row">
        <div class="col-md-12">
            <scoped-slot :items="['one','two','three']">
                <template scope="props">
                    <h4 v-text="props.bar"></h4><p v-text="props.item"></p>
                </template>
            </scoped-slot>
        </div>
    </div>
</div>