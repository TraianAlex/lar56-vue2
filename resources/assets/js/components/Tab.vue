<template>
    <div v-show="isActive">
       <slot></slot>
    </div>
</template>

<script>
    export default {
        mounted() {
            this.isActive = this.selected;
            console.log('Tabs mounted');
        },
        props: {
            name: {
                required: true
            },
            selected: {default: false}
        },
        data(){
            return {
                isActive: false
            }
        },
        computed:{
            href(){
                return '#' + this.name.toLowerCase().replace(/ /g,'-');
            }
        }
    }
</script>
