<template>
    <v-app>
        <v-navigation-drawer
        absolute
        v-model="drawer" app >
        <template  v-slot:prepend>  
             
            <v-list-item two-line>
                <v-list-item-avatar>
                    <v-img src="https://ra6ndomuser.me/api/portraits/women/81.jpg"></v-img>
                </v-list-item-avatar>
                <v-list-item-content>
                    <v-list-item-title>Jane Smith</v-list-item-title>
                    <v-list-item-subtitle>Logged In</v-list-item-subtitle>
                </v-list-item-content>
            </v-list-item>
            
 
        </template>

        <v-divider></v-divider>

        <v-list dense>
          <v-list-item
            v-for="item in items"
            :key="item.title"
            :to="item.link"
          >
            <v-list-item-icon>
              <v-icon>{{ item.icon }}</v-icon>
            </v-list-item-icon>
            <v-list-item-content>
              <v-list-item-title>{{ item.title }}</v-list-item-title>
            </v-list-item-content>
          </v-list-item>
        </v-list>
      </v-navigation-drawer>

      <v-app-bar app>
        <v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>
        <v-toolbar-title color="red">ERP EMPLOYEESS</v-toolbar-title>
      </v-app-bar>
            <v-main>
                <v-container fluid>
                    <router-view></router-view>
                </v-container>
            </v-main>
        <!-- <Footer /> -->
      </v-app>


   </template>
   <style lang="scss">
    @import "./scss/variables.scss";



    v-app {
      font-family: $body-font-family !important;
    }

    </style>

   <script>
    import Footer from "./components/Footer";
        export default {
        name: 'app',
       data: () =>  {
         return {
            drawer: null ,
           items: [
             { title:  ('Employee'), icon: 'mdi-account-tie', link: 'Employee' },
             { title:  ('Deductions'), icon: 'mdi-currency-usd-off', link: 'deductions' },
             { title:  ('Allowances'), icon: 'mdi-currency-usd', link: 'allowances' },
             { title:  ('Branch'), icon: 'mdi-bank-outline', link: 'branch' },
             { title:  ('Position '), icon: 'mdi-ballot', link: 'position' },
             { title:  ('Department'), icon: 'mdi-badge-account-horizontal', link: 'department' },
             { title: 'About', icon: 'mdi-help-box',link: 'About' },
           ],
         }
       },
       components:
       {
          Footer,
       }
     }
   </script>

