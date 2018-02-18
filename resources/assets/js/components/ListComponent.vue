<template>
    <div class="card bg-primary mb-3 text-white">
        <div class="card-body">
            <h5 class="card-title text-center"><strong><i>To do list</i></strong></h5>
            <ul class="list-group">
                <li class="list-group-item list-group-item-warning d-flex justify-content-between align-items-center"
                    v-for="task in tasks">{{task.description}}<span
                        class="badge badge-danger badge-pill">{{task.status}}</span>
                </li>
            </ul>
            <h5 class="card-title text-center mt-3"><strong><i>Incomplete tasks</i></strong></h5>
            <ul class="list-group">
                <li class="list-group-item list-group-item-warning d-flex justify-content-between align-items-center"
                    v-for="task in incompletedTasks">{{task.description}}<span
                        class="badge badge-danger badge-pill">{{task.status}}</span>
                </li>
            </ul>
            <!--<div class="card-body">-->
                <!--<form>-->
                    <!--<div class="form-group">-->
                        <!--<input type="text" class="form-control" placeholder="Enter description" v-model="newDesc">-->
                    <!--</div>-->
                    <!--<div class="form-group">-->
                        <!--<input type="text" class="form-control" placeholder="Status" v-model="newStatus">-->
                    <!--</div>-->
                    <!--<button type="submit" class="btn btn-success" @click="addTask">Add task</button>-->
                <!--</form>-->
            <!--</div>-->
        </div>
    </div>
</template>

<script>
    export default { //TODO: finish the form for adding task in component
        mounted() {
            console.log('Lists-component mounted.');
        },
        methods: {
            addTask(){
                this.tasks.push({description: this.newDesc, status: this.newStatus});
                this.newDesc = '';
                this.newStatus = '';
            }
        },
        data() {
            return {
                tasks: [
                    {
                        description: 'learn vue',
                        status: 'In progress',
                        completed: true,
                    },
                    {
                        description: 'eat pizza',
                        status: 'Ordered',
                        completed: false,
                    },
                    {
                        description: 'go to sleep',
                        status: 'obvious',
                        completed: true,
                    },
                    {
                        description: 'finish cast',
                        status: 'obvious',
                        completed: false,
                    },
                    {
                        description: 'push to github',
                        status: 'important',
                        completed: false,
                    },
                ],
                // newDesc: '',
                // newStatus: ''
            }
        }, 
        computed: {
            incompletedTasks: function () {
                return this.tasks.filter(task => !task.completed);
            }
        }
    }
</script>
