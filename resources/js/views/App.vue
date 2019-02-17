<template>
    <v-app>
                
        <NavbarComponent />

        <v-content class="m-2">
            <router-view></router-view>
        </v-content>
    </v-app>
</template>

<script>
import NavbarComponent from '@/js/components/NavbarComponent.vue'

export default {
    name: 'App',
    components: { NavbarComponent },
}
</script>

<style>
a:hover {
    text-decoration: none;
    }

.v-navigation-drawer__border {
    display: none;
}
</style>
