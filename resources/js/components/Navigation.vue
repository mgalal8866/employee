<template>

      <v-navigation-drawer
        absolute
        v-model="drawer" app >
        <template v-slot:prepend>
          <v-list-item two-line>
            <v-list-item-avatar>
              <img src="https://randomuser.me/api/portraits/women/81.jpg">
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

  </template>
  <script>
    export default {
      data () {
       
        return {
       
          items: [
            { title: 'الموظفين', icon: 'mdi-home-city' },
            { title: 'الخصومات', icon: 'mdi-account' },
            { title: 'بدلات', icon: 'mdi-account-group-outline' },
          ],
        }
      },
    }
  </script>
