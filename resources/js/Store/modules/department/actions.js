import axios from "axios";
const baseUrl = 'http://192.168.1.2:5645/api/v1'
const headers = {
    'Authorization': '44b48f2305bf2680'
  }
export const getdepartment = ({ commit }) => {
    axios.get(baseUrl + '/alldepartment',{headers: headers}).then(response => {
        commit('SET_Department', response.data.data);
    })
}
export const newdepartment= ({ commit},{nameall}) => {
    const data = {'name':nameall};
            // errors.value='';
    try{
        axios.post(baseUrl +'/new/department' ,data,{headers: headers})
    .then(response => {commit('SET_Department', response.data.data);})
    }catch(e){
        if(e.response.state === 422){
            console.log( 'errors');
            // console.log( e.response.data.errors);
            // errors.value = e.response.data.errors;
        }
    };
}
export const deletedepartment= ({ commit},id) => {
    axios.get(baseUrl +'/delete/department/' + id,{headers: headers})
   .then(response => {commit('SET_Department', response.data.data) ;})
   .catch(error =>{ console.log(error);})
}
