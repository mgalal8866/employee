import axios from "axios";
const baseUrl = 'http://192.168.1.2:5645/api/v1'
const headers = {'Authorization': '44b48f2305bf2680'}

export const getposition = ({ commit }) => {
    axios.get(baseUrl + '/allposition',{headers: headers}).then(response => {
        commit('SET_Position', response.data.data);
    })
}

export const newposition= ({ commit},{nameall,description}) => {
    const data = {'name':nameall};
            // errors.value='';
    try{
        axios.post(baseUrl +'/new/position' ,data,{headers: headers})
    .then(response => {commit('SET_Position', response.data.data);})
    }catch(e){
        if(e.response.state === 422){
            console.log( 'errors');
            // console.log( e.response.data.errors);
            // errors.value = e.response.data.errors;
        }
    };
}
export const editposition= ({ commit},{id,nameall}) => {
    const data = {'id':id,'name':nameall};
    try{
        axios.post(baseUrl +'/edit/position' ,data,{headers: headers})
    .then(response => {commit('SET_Position', response.data.data);})
    }catch(e){
        if(e.response.state === 422){
            console.log( 'errors');
        }
    };
}
export const deleteposition= ({ commit},id) => {
    axios.get(baseUrl +'/delete/position/' + id,{headers: headers})
   .then(response => {commit('SET_Position', response.data.data) ;})
   .catch(error =>{ console.log(error);})
}
