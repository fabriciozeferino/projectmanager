<template>
    <nav>
        <v-toolbar flat app>
            <v-toolbar-side-icon @click="drawer = !drawer"></v-toolbar-side-icon>
            
            <v-toolbar-title>
                <span class="title">Project&nbsp;
                    <span class="font-weight-light">Manager</span>
                </span>
            </v-toolbar-title>
            
            <v-spacer></v-spacer>

            <v-btn flat color="grey darken-1">
                <span>Sign Out</span>
                <v-icon>exit_to_app</v-icon>
            </v-btn>
        </v-toolbar>
        
        <v-navigation-drawer 
            app 
            v-model="drawer" 
            :mini-variant.sync="mini"
            hide-overlay
            stateless
            dark
            width="200px"
            class="grey darken-3"
        >    
            <v-toolbar flat class="transparent">
                
                <v-list class="pa-0" dense>
                    <v-list-tile avatar>
                        <v-list-tile-avatar>
                            <img src="https://randomuser.me/api/portraits/men/85.jpg">
                        </v-list-tile-avatar>

                        <v-list-tile-content>
                          <v-list-tile-title>John Leider</v-list-tile-title>
                        </v-list-tile-content>

                        <v-list-tile-action>
                            <v-btn
                                icon
                                @click.stop="mini = !mini"
                            >
                                <v-icon>chevron_left</v-icon>
                            </v-btn>
                        </v-list-tile-action>
                    </v-list-tile>
                </v-list>
            </v-toolbar>
            
           

            <v-list class="pt-0" dense >
                

                <v-list-tile 
                    v-for="item in items" 
                    :key="item.url" 
                    router :to="item.url"
                >
                    <v-list-tile-action>
                        <v-icon>{{ item.icon }}</v-icon>
                    </v-list-tile-action>

                    <v-list-tile-content>
                        <v-list-tile-title>{{ item.text}}</v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>
            </v-list>
        </v-navigation-drawer>  
    </nav>
</template>



<script>

export default {
    data() {
        return {
            drawer: true,
            items: [
                { icon: 'lightbulb_outline', text: 'Home', url: '/' },
                { icon: 'touch_app', text: 'About', url: '/about' },
            ],
            mini: true,
            right: null
        }
    }
}

</script>



