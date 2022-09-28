<template>
  <v-card elevation="5">
    <v-dialog v-model="dialog" persistent max-width="600px">
      <template v-slot:activator="{ on, attrs }">
        <v-btn
          md
          class="m-2 elevation-2 darken-3"
          color="green"
          dark
          @click="createoredit='create'; createoredit1();"
          v-bind="attrs"
          v-on="on"
        >New Branch</v-btn>
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
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="item in itembranch" :key="item.id">
            <td>{{ item.name }}</td>
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
                    <v-list-item @click="createoredit='edit'; createoredit1(); nameall=item.name; id=item.id;">
                      <v-icon small color="orange" >mdi-pencil</v-icon>
                      <v-list-item-title small>Edit</v-list-item-title>
                    </v-list-item>
                    <v-list-item  @click="deletebranch(item.id)">
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
    this.getbranch();
  },
  computed: {
    ...mapState({itembranch: state=> state.branch.branch}),

  },
  data: () => ({
    dialog:false,
    dialogedit:false,
    id:'',
    nameall:'',
    dialogtitle:'New Branch',
    createoredit:''
  }),
  methods: {
    ...mapActions("branch", ["getbranch","newbranch","editbranch","deletebranch"]),
    submitForm() {
        if(this.createoredit == 'create'){
            this.newbranch({nameall:this.nameall});
            this.dialog=false;
        }else
        {

            this.editbranch({id:this.id,nameall:this.nameall});
            this.dialog=false;
        }
        },
    createoredit1(){

        if( this.createoredit == 'create'){
            this.dialogtitle='New Branch';
            this.nameall='';
            this.id='';
            this.dialog=true;
        }else
        {
            this.dialogtitle='Edit Branch';
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
