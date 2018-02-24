<template>
    <div>
        <div :class="className">
            <ul>
                <li v-for="tab in tabs"
                    :class="{'is-active': tab.isActive}"
                    @click="selectTab(tab)"
                >
                    <a :href="tab.href">
                        {{tab.name}}
                    </a>
                </li>
            </ul>
        </div>
        <div class="tabs-details">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['centered'],
        data() {
            return {
                tabs: []
            }
        },
        created() {
            this.tabs = this.$children
        },
        methods: {
            selectTab(selectedTab){
                this.tabs.forEach((tab)=>{
                    tab.isActive = (tab.name === selectedTab.name);
                });
            }
        },
        computed: {
            className(){
                return (this.centered === true) ? 'tabs is-centered' : 'tabs';
            }
        }
    }
</script>
