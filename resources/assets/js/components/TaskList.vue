<template>
    <div class="card bg-primary mb-3 text-white">
        <div class="card-body">
            <h5 class="card-title text-center"><strong><i>To do list</i></strong></h5>
            <ul class="list-group">
                <task v-for="task in tasks"
                      :key="task.id"
                      :description="task.description"
                      :status="task.status"
                />
            </ul>
            <h5 class="card-title text-center mt-3"><strong><i>Incomplete tasks</i></strong></h5>
            <ul class="list-group">
                <task v-for="task in incompletedTasks"
                      :key="task.id"
                      :description="task.description"
                      :status="task.status"
                />
            </ul>
        </div>
    </div>
</template>

<script>
    export default { //TODO: finish the form for adding task in component
        mounted() {
            console.log('Lists-component mounted.');
        },
        methods: {
            addTask() {
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
