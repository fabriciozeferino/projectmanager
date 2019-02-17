<template>
<div class="projects">
    <v-container fluid>
        <v-card 
            flat
            v-for="(project, index) in projects" 
            :key="index"
            class="project complete"
        > 
            <v-layout row wrap  class="pa-2 ma-0">
                <v-flex xs1 sm1 md1 d-flex child-flex>
                    <div light flat class="pa-1">
                        <span class="label font-weight-light">ID</span><br>
                        <span>{{ project.id}}</span>
                    </div>
                </v-flex>
                <v-flex xs3 sm3 md3 d-flex child-flex>
                   <div light flat class="pa-1">
                        <span class="label font-weight-light">TITLE</span><br>
                        <span>{{ project.title}}</span>
                    </div>
                </v-flex>
                <v-flex xs4 sm4 md4 d-flex child-flex>
                    <div light flat class="pa-1">
                        <span class="label font-weight-light">DESCRIPTION</span><br>
                        <span>{{ project.description}}</span>
                    </div>
                </v-flex>
                <v-flex xs2 sm2 md2 d-flex child-flex>
                    <div light flat class="pa-1">
                        <span class="label font-weight-light">CREATED</span><br>
                        <span>{{ project.created_at}}</span>
                    </div>
                </v-flex>
                <v-flex xs2 sm2 md2 d-flex child-flex>
                    <div light flat class="pa-1">
                        <div>
                            <v-btn depressed small color="error" v-on:click="deleteItem(project.id)">Delete</v-btn>
                        </div>
                    </div>
                </v-flex>
            
            </v-layout>
            <v-divider class="ma-0"></v-divider>
        </v-card>    
    </v-container>    
    <div class="text-xs-center">
        <v-pagination
            v-model="pagination.current"
            :length="pagination.total"
            @input="onPageChange"
            
        ></v-pagination>
    </div>
</div>
</template>

<script>
    
    
    export default {
        data() {
            return {
                projects: null,
                pagination: {
                    current: 1,
                    total: 0
                }
            }
        },
        created() {
            this.fetchData()
        },
        methods: {
            fetchData() {
                axios.get('/api/project/?page=' + this.pagination.current)
                .then( response => {
                    this.projects = response.data.data
                    this.pagination.current = response.data.current_page
                    this.pagination.total = response.data.last_page
                    console.log(response.data);
                })
            },
            onPageChange() {
                this.fetchData();
            },
            deleteItem (id){
                axios.delete('api/project/' + id).then( response => {
                    this.fetchData();
                }).catch(err => {
                    console.log(err);
                });
            }
        },
        mounted() {
            this.fetchData()
        }
    }
</script>

<style>
.project.complete {
    border-left: 4px solid #3cd1c2;
}
.project.ongoing {
    border-left: 4px solid orange;
}
.project.overdue {
    border-left: 4px solid tomato;
}
</style>
