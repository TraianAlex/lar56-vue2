<template>
    <div class="card bg-primary mb-3 text-white">
        <div class="card-body">
            <h5 class="card-title text-center">To do list</h5>
            <ul class="list-group">
                <li class="list-group-item list-group-item-warning d-flex justify-content-between align-items-center" v-for="task in tasks">{{task.description}}<span
                        class="badge badge-danger badge-pill">{{task.status}}</span>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('lists-component mounted.');
        },
        data: function () {
            return {
                tasks: [
                    {
                        description: 'learn vue',
                        status: 'In progress',
                    },
                    {
                        description: 'eat pizza',
                        status: 'Ordered'
                    },
                    {
                        description: 'go to sleep',
                        status: 'obvious'
                    },
                ]
            }
        }
    }
</script>
