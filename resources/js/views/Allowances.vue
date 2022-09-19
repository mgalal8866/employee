<template>
  <v-card elevation="5">
    <v-dialog v-model="dialog" persistent max-width="600px">
      <template v-slot:activator="{ on, attrs }">
        <v-btn
          md
          class="m-2 elevation-2 darken-3"
          color="green"
          dark
          v-bind="attrs"
          v-on="on"
        >New Employee</v-btn>
      </template>
      <v-card>

        <v-form @submit.prevent="submitForm">
        <v-card-title>
          <span class="text-h5">New Employee</span>
        </v-card-title>
        <v-card-text>

          <v-container>
            <v-row>
              <v-col cols="12" sm="6">
                <v-text-field label="Name *" required v-model="datanewemplyoe[0].name" ></v-text-field>
              </v-col>
              <v-col cols="12" sm="6">
                <v-text-field label="Phone *" v-model="datanewemplyoe[0].phone" ></v-text-field>
              </v-col>
              <v-col cols="12" sm="6">
                <v-menu
                  v-model="menu2"
                  :close-on-content-click="false"
                  :nudge-right="40"
                  transition="scale-transition"
                  offset-y
                  min-width="auto"
                >
                  <template v-slot:activator="{ on, attrs }">
                    <v-text-field
                      v-model="datanewemplyoe[0].date1"
                      label="Date Hire * "
                      prepend-icon="mdi-calendar"
                      readonly
                      v-bind="attrs"
                      v-on="on"
                    ></v-text-field>
                  </template>
                  <v-date-picker v-model="datanewemplyoe[0].date1" @input="menu2 = false"></v-date-picker>
                </v-menu>
              </v-col>
              <v-col cols="12" sm="6">
                <v-menu
                  v-model="menu3"
                  :close-on-content-click="false"
                  :nudge-right="40"
                  transition="scale-transition"
                  offset-y
                  min-width="auto"
                >
                  <template v-slot:activator="{ on, attrs }">
                    <v-text-field
                      v-model="datanewemplyoe[0].date2"
                      label="Date Birth * "
                      prepend-icon="mdi-calendar"
                      readonly
                      v-bind="attrs"
                      v-on="on"
                    ></v-text-field>
                  </template>
                  <v-date-picker v-model="datanewemplyoe[0].date2" @input="menu3 = false"></v-date-picker>
                </v-menu>
              </v-col>
              <v-col cols="12">
                <v-text-field label="Address * "  v-model="datanewemplyoe[0].address" persistent-hint required></v-text-field>
              </v-col>
              <v-col cols="12" sm="6">
                <v-select
                  :items="[{'id':'1','name':'Male'},{ 'id':'2','name':'Female'}]"
                  item-text="name"
                  item-value="id"
                  label="Gender *"  v-model="datanewemplyoe[0].gender"
                  required
                ></v-select>
              </v-col>
              <v-col cols="12" sm="6">
                <v-select
                  :items="this.$store.state.branch"
                  item-text="name"
                  item-value="id"
                  label="Branch *"  v-model="datanewemplyoe[0].branch"
                  required
                ></v-select>
              </v-col>
              <v-col cols="12" sm="6">
                <v-select
                  :items="this.$store.state.department"
                  item-text="name"
                  item-value="id"
                  label="Department *"  v-model="datanewemplyoe[0].department"
                  required
                ></v-select>
              </v-col>
              <v-col cols="12" sm="6">
                <v-select
                  :items="this.$store.state.position"
                  item-text="name"
                  item-value="id"
                  label="Position *" v-model="datanewemplyoe[0].position"
                  required
                ></v-select>
              </v-col>

              <!-- <v-col cols="12" sm="6">
                <v-autocomplete
                  :items="['Skiing', 'Ice hockey', 'Soccer', 'Basketball', 'Hockey', 'Reading', 'Writing', 'Coding', 'Basejump']"
                  label="Interests"
                  multiple
                ></v-autocomplete>
              </v-col>-->
            </v-row>
          </v-container>
          <small>*indicates required field</small>

        </v-card-text>
        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn color="blue darken-1" text @click="dialog = false">Close</v-btn>
          <v-btn color="blue darken-1" text  type="submit" @click="dialog = false">Save</v-btn>
        </v-card-actions>
    </v-form>
      </v-card>
    </v-dialog>
    <!-- <p v-if="error in field " :key="error" class="text-sm">
        {{ error }}
    </p> -->
    <!-- <p v-if="errors.length">
        <b>Please correct the following error(s):</b>
        <ul>
          <v-list :for="error in errors">{{ error }}</v-list>
        </ul>
    </p> -->
    <v-simple-table class="mt-3" v-slot:default>
      <template elevation="5">
        <thead>
          <tr>
            <th class="text-left">Name</th>
            <th class="text-left">Phone</th>
            <th class="text-left">gender</th>
            <th class="text-left">Date Hire</th>
            <th class="text-left">Date Birth</th>
            <th class="text-left">Address</th>
            <th class="text-left">Branch</th>
            <th class="text-left">Department</th>
            <th class="text-left">Position</th>
            <th class="text-left">State</th>
            <th class="text-left">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="item in employes" :key="item.id">
            <td>{{ item.name }}</td>
            <td>{{ item.phone }}</td>
            <td>{{ item.gender }}</td>
            <td>{{ item.date_hire }}</td>
            <td>{{ item.date_birth }}</td>
            <td>{{ item.address }}</td>
            <td>{{ item.branch }}</td>
            <td>{{ item.department_id }}</td>
            <td>{{ item.position_id }}</td>
            <td><v-chip color="green " dark> {{item.state}}</v-chip></td>
            <td>
              <v-menu offset-y>
                <template v-slot:activator="{ on, attrs }">
                  <v-btn
                    class="rounded-xl green darken-3 text-capitalize elevation-2 ml-2"
                    dark
                    small
                    v-bind="attrs"
                    v-on="on"
                  >
                    <v-icon large color="white darken-2">mdi-gear-</v-icon>Action
                  </v-btn>
                </template>

                <v-list>
                  <v-list>
                    <v-list-item>
                      <v-icon small color="orange">mdi-pencil</v-icon>
                      <v-list-item-title small>Edit</v-list-item-title>
                    </v-list-item>
                    <v-list-item>
                      <v-icon small color="red">mdi-cancel</v-icon>
                      <v-list-item-title>Delete</v-list-item-title>
                    </v-list-item>
                  </v-list>
                </v-list>
              </v-menu>
            </td>
          </tr>
        </tbody>
      </template>
    </v-simple-table>
  </v-card>
</template>
  <script>
export default {
  mounted() {
    this.$store.dispatch("getemploye");
    this.$store.dispatch("getallbranch");
    this.$store.dispatch("getallposition");
    this.$store.dispatch("getalldepartment");
  },
  computed: {
    employes() {
      return this.$store.state.employes;
    }
  },
  data: () => ({
    datanewemplyoe:[
        {date1: new Date(Date.now() - new Date().getTimezoneOffset() * 60000).toISOString().substr(0, 10),
         date2: new Date(Date.now() - new Date().getTimezoneOffset() * 60000).toISOString().substr(0, 10)}
        ],
    dialog: false,
    menu2: false,
    menu3: false,
  }),
  methods: {
    submitForm() {
        this.$store.dispatch("newemploye",this.datanewemplyoe[0]);
        }
    }
};
</script>
<style>
.my-menu {
  background-color: rgb(143, 188, 206);
  contain: initial;
  overflow: visible;
}
.my-menu::before {
  position: absolute;
  content: "";
  top: 0;
  right: 10px;
  transform: translateY(-100%);
  width: 10px;
  height: 13px;
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-bottom: 13px solid rgb(143, 188, 206);
}
</style>
