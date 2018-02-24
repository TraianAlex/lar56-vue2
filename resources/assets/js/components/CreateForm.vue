<template>
    <article class="message is-primary">
        <div class="message-header">
            <p>Create new gibberish quote from someone extremely stupid</p>
        </div>
        <div class="message-body">
            <form class="mt-3" :method="method" :src="url" @submit.prevent="onSubmit">
                <div class="form-group">
                    <label for="author">Gibberish Author</label>
                    <input type="text" class="form-control" id="author" aria-describedby="gibberishAuthor"
                           placeholder="for ex. Batman (Brolo Waynolo)" v-model="author" name="author">
                </div>
                <div class="form-group">
                    <label for="cite">Password</label>
                    <input type="text" class="form-control" id="cite" placeholder="Never loot a gibbet." v-model="cite" name="cite">
                </div>
                <div class="form-group">
                    <label for="date">Password</label>
                    <input type="date" class="form-control" id="date" placeholder="1667-02-02" v-model="date" name="date">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </article>


</template>

<script>
    export default {
        props: ['method', 'url'],
        data() {
            return {
                author: '',
                cite: '',
                date: '',
            }
        },
        methods:{
            onSubmit(){
               axios.post(this.url,{
                   author: this.author,
                   cite: this.cite,
                   date: this.date
               });
            }
        }
    }
</script>
