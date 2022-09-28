<template>
  <v-card elevation="5">
    <v-dialog v-model="dialog" persistent max-width="600px">
      <template v-slot:activator="{ on, attrs }">
        <v-btn
          md
          class="m-2 elevation-2 darken-3"
          color="green"
          dark
          @click="createoredit='create';createoredit1();"
          v-bind="attrs"
          v-on="on"
        >New Allowances</v-btn>
      </template>
      <v-card>

        <v-form @submit.prevent="submitForm">
        <v-card-title color="blue darken-1"  >
          <span class="text-h5"  >{{ dialogtitle }}</span>
        </v-card-title>
        <v-card-text>

          <v-container>
            <v-row>
              <v-col cols="12">
                <v-text-field label="Name *" required v-model="nameall" ></v-text-field>
              </v-col>
              <v-col cols="12">
                <v-text-field label="Description *" required v-model="description" ></v-text-field>
              </v-col>
              <v-col cols="12">
                <v-text-field label="Amount *" required v-model="amount" ></v-text-field>
              </v-col>
            </v-row>
          </v-container>
        </v-card-text>
        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn color="blue darken-1" text @click="dialog = false">Close</v-btn>
          <v-btn color="blue darken-1" text  type="submit" >Save</v-btn>
        </v-card-actions>
    </v-form>
      </v-card>
    </v-dialog>
    <v-simple-table class="mt-3" v-slot:default>
      <template elevation="5">
        <thead>
          <tr>
            <th>Name</th>
            <th>Discription</th>
            <th>Amount</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="item in itemallowances" :key="item.id">
            <td>{{ item.name }}</td>
            <td>{{ item.description }}</td>
            <td>{{ item.amount }}</td>
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
                    <v-list-item @click="createoredit='edit'; createoredit1();   nameall=item.name;description=item.description ; id=item.id;">
                      <v-icon small color="orange" >mdi-pencil</v-icon>
                      <v-list-item-title small>Edit</v-list-item-title>
                    </v-list-item>
                    <v-list-item  @click="deleteallowances(item.id)">
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
    import { mapState, mapActions } from "vuex";
export default {
  mounted() {
    this.getallowances();
  },
  computed: {
    ...mapState({itemallowances: state=> state.allowances.allowances}),
    ...mapState({itemerrors:     state=> state.errors.errors}),
  },
  data: () => ({
    // errors:[],
    dialog:false,
    id:'',
    nameall:'',
    description:'',
    amount:0,
    createoredit:'',
    dialogtitle:'New Allowances'
  }),
  methods: {
    ...mapActions("allowances", ["getallowances","newallowances","editallowances","deleteallowances"]),
    submitForm()
    {
        if(this.createoredit == 'create'){
            this.newallowances({nameall:this.nameall, description:this.description,amount:this.amount});
            this.dialog=false;
        }else
        {
            console.log('edite');
          this.editallowances({ id:this.id,nameall:this.nameall, description:this.description,amount:this.amount});
            this.dialog=false;
        }
    },
    createoredit1(){
        if( this.createoredit == 'create'){
            this.dialogtitle='New Allowances';
            this.nameall='';
            this.description='';
            this.amount='';
            this.dialog=true;
        }else
        {
            this.dialogtitle='Edit Allowances';
            this.dialog=true;
        }
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
