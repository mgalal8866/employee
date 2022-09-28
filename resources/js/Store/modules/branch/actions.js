import axios from "axios";
const baseUrl = 'http://192.168.1.2:5645/api/v1'
const headers = {
    'Authorization': '44b48f2305bf2680'
  }
export const getbranch = ({ commit }) => {
    axios.get(baseUrl + '/allbranch',{headers: headers}).then(response => {
        commit('SET_Branch', response.data.data);
    })
}
export const newbranch= ({ commit},{nameall}) => {
    const data = {'name':nameall};
            // errors.value='';
    try{
        axios.post(baseUrl +'/new/branch' ,data,{headers: headers})
    .then(response => {commit('SET_Branch', response.data.data);})
    }catch(e){
        if(e.response.state === 422){
            console.log( 'errors');
            // console.log( e.response.data.errors);
            // errors.value = e.response.data.errors;
        }
    };
}
export const editbranch= ({ commit},{id,nameall}) => {

    const data = {'id':id,'name':nameall};
    try{
        axios.post(baseUrl +'/edit/branch' ,data,{headers: headers})
    .then(response => {commit('SET_Branch', response.data.data);})
    }catch(e){
        if(e.response.state === 422){
            console.log( 'errors');
        }
    };
}
export const deletebranch= ({ commit},id) => {
    axios.get(baseUrl +'/delete/branch/' + id ,{headers: headers})
   .then(response => {commit('SET_Branch', response.data.data) ;})
   .catch(error =>{ console.log(error);})
}
