<template>

    <article class="message is-success">
        <div class="message-header">
            <p>Fetched from database asynchronously</p>
        </div>
        <div class="message-body">
            <table class="table table-striped">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Author</th>
                    <th scope="col">Cite</th>
                    <th scope="col">Date</th>
                </tr>
                </thead>
                <tbody>

                <tr v-for="gibberish in gibberishes">
                    <th scope="row">{{gibberish.id}}</th>
                    <td>{{gibberish.author}}</td>
                    <td>{{gibberish.cite}}</td>
                    <td>{{gibberish.date}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </article>

</template>

<script>
    export default {
        created() {
            axios.get('/gibberish').then(response => this.gibberishes = response.data);
        },
        data() {
            return {
                gibberishes: []
            }
        }
    }
</script>

<style>
    table{
        border: 1px solid #0b2e13;
    }
</style>