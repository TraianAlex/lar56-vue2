<template>
    <div class="row">
        <div class="col-md-12">
            <div class="card mx-3 my-3">
                <div class="card-content">
                    <p class="title">
                        “Friendship at the solar sphere was the metamorphosis of starlight travel, lowered to a ugly ship. Your progress on way to VUE galaxy is
                        <strong>{{progressRatio}}%</strong>."
                    </p>
                    <p class="subtitle">
                        - Your Spirit guide
                    </p>
                </div>
                <footer class="card-footer">
                    <p class="card-footer-item">
                        <button class="btn btn-danger" @click="progressRatio -= 10">Regeress</button>
                    </p>
                    <p class="card-footer-item">
                        <button class="btn btn-success" @click="progressRatio += 10">Progress</button>
                    </p>
                </footer>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                progressRatio: 40
            }
        }
    }
</script>
