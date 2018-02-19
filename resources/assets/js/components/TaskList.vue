<template>
    <div class="card bg-primary mb-3 text-white">
        <div class="card-body">

            <h5 class="card-title text-center" ><strong><i>To do list</i></strong></h5>
            <ul class="list-group" v-if="tasks.length">
                <task v-for="(task,index) in tasks"
                      :key="task.id"
                      :index="index"
                      :description="task.description"
                      :status="task.status"
                      v-on:remove="tasks.splice(task.id, 1)"
                />
            </ul>
            <p v-else>No tasks left</p>
            <h5 class="card-title text-center mt-3"><strong><i>Incomplete tasks</i></strong></h5>
            <ul class="list-group" v-if="tasks.length">
                <task v-for="(task,index) in incompletedTasks"
                      :key="task.id"
                      :index="index"
                      :description="task.description"
                      :status="task.status"
                      v-on:remove="incompletedTasks.splice(task.id, 1)"
                />
            </ul>
            <p v-else>No tasks left</p>
        </div>
        <input
                class="form-control mx-auto w-75 mb-4"
                v-model="newTaskDescription"
                v-on:keyup.enter="addTask"
                placeholder="Add a task"
        >
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Lists-component mounted.');
        },
        methods: {
            addTask() {
                this.tasks.push({description: this.newTaskDescription, status: 'new', completed: false});
                this.newTaskDescription = '';
            }
        },
        data() {
            return {
                newTaskDescription: '',
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
