<template>
    <article class="message is-primary">
        <div class="message-header">
            <p>Create new gibberish quote from someone extremely stupid</p>
        </div>
        <div class="message-body">
            <form class="mt-3"
                  :method="method"
                  :src="url"
                  @submit.prevent="onSubmit"
                  @keydown="form.errors.clear($event.target.name)"
            >
                <div class="form-group">
                    <label for="author">Gibberish Author</label>

                    <input type="text" class="form-control" id="author" aria-describedby="gibberishAuthor"
                           placeholder="for ex. Batman (Brolo Waynolo)"
                           v-model="form.author"
                           name="author">

                    <span class="help is-danger"
                          v-if="form.errors.has('author')"
                          v-text="form.errors.get('author')"></span>
                </div>

                <div class="form-group">
                    <label for="cite">Cite</label>

                    <input type="text" class="form-control" id="cite" placeholder="Never loot a gibbet."
                           v-model="form.cite"
                           name="cite">

                    <span class="help is-danger"
                          v-if="form.errors.has('cite')"
                          v-text="form.errors.get('cite')"></span>

                </div>

                <div class="form-group">
                    <label for="date">Data</label>

                    <input type="date" class="form-control" id="date" placeholder="1667-02-02"
                           v-model="form.date"
                           name="date">

                    <span class="help is-danger"
                          v-if="form.errors.has('date')"
                          v-text="form.errors.get('date')"></span>

                </div>

                <button type="submit" class="btn btn-primary"
                        :disabled="form.errors.any()">Submit
                </button>
            </form>
        </div>
    </article>


</template>

<script>
    import Form from './../form.es6';

    export default {
        props: ['method', 'url'],
        data() {
            return {
                form: new Form({
                    author: '',
                    cite: '',
                    date: '',
                }),
            }
        },
        methods: {
            onSubmit() {
                this.form.submit(this.method, this.url)
                    .then(data => alert('handling it!'))
                    .catch(error => alert('something went wrong!'));
            }
        }
    }
</script>
