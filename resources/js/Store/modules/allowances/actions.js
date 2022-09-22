import axios from "axios";
const baseUrl = 'http://192.168.1.2:5645/api/v1'

export const getallowances = ({ commit }) => {
    axios.get(baseUrl + '/allallowances').then(response => {
        commit('SET_Allowances', response.data.data);
    })
}
export const newallowances= ({ commit},{nameall,description}) => {
    const data = {'name':nameall,'description':description};
            // errors.value='';
    try{
        axios.post(baseUrl +'/new/allowances' ,data)
    .then(response => {commit('SET_Allowances', response.data.data);})
    }catch(e){
        if(e.response.state === 422){
            console.log( 'errors');
            // console.log( e.response.data.errors);
            // errors.value = e.response.data.errors;
        }
    };
}
export const deleteallowances= ({ commit},id) => {
    axios.post(baseUrl +'/delete/allowances/' + id)
   .then(response => {commit('SET_Allowances', response.data.data) ;})
   .catch(error =>{ console.log(error);})
}