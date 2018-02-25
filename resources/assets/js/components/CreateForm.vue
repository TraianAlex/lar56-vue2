<template>
    <article class="message is-primary">
        <div class="message-header">
            <p>Create new gibberish quote from someone extremely stupid</p>
        </div>
        <div class="message-body">
            <form class="mt-3" :method="method" :src="url" @submit.prevent="onSubmit"
                  @keydown="errors.clear($event.target.name)">
                <div class="form-group">
                    <label for="author">Gibberish Author</label>
                    <input type="text" class="form-control" id="author" aria-describedby="gibberishAuthor"
                           placeholder="for ex. Batman (Brolo Waynolo)" v-model="author" name="author">
                    <span class="help is-danger" v-if="errors.has('author')" v-text="errors.get('author')"></span>
                </div>
                <div class="form-group">
                    <label for="cite">Password</label>
                    <input type="text" class="form-control" id="cite" placeholder="Never loot a gibbet." v-model="cite"
                           name="cite">
                    <span class="help is-danger" v-if="errors.has('cite')" v-text="errors.get('cite')"></span>

                </div>
                <div class="form-group">
                    <label for="date">Password</label>
                    <input type="date" class="form-control" id="date" placeholder="1667-02-02" v-model="date"
                           name="date">
                    <span class="help is-danger" v-if="errors.has('date')" v-text="errors.get('date')"></span>

                </div>
                <button type="submit" class="btn btn-primary" :disabled="errors.any()">Submit</button>
            </form>
        </div>
    </article>


</template>

<script>
    import Errors from './../errors.es6'

    export default {
        props: ['method', 'url'],
        data() {
            return {
                author: '',
                cite: '',
                date: '',
                errors: new Errors()
            }
        },
        methods: {
            onSubmit() {
                axios.post(this.url, {
                    author: this.author,
                    cite: this.cite,
                    date: this.date
                })
                    .then(this.onSuccess)
                    .catch(error => {
                        this.errors.record(error.response.data.errors);
                    });
            },
            onSuccess(response) {
                alert(response.data.message);
                this.author = '';
                this.cite = '';
                this.date = '';
            }
        }
    }
</script>
