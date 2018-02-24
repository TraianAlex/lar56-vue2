<template>
    <table class="table">
        <thead>
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
</template>

<script>
    export default {
        created() {
            axios.get('/gibberish').then( response => this.gibberishes  = response.data);
        },
        data(){
            return {
                gibberishes: []
            }
        }
    }
</script>
