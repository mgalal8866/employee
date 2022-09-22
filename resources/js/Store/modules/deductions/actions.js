import axios from "axios";
const baseUrl = 'http://192.168.1.2:5645/api/v1'

export const getdeductions = ({ commit }) => {
    axios.get(baseUrl + '/alldeductions').then(response => {
        commit('SET_Deductions', response.data.data);
    })
}
export const newdeductions= ({ commit},{nameall,description}) => {
    const data = {'name':nameall,'description':description};
     axios.post(baseUrl +'/new/deductions' ,data)
    .then(response => {commit('SET_Deductions', response.data.data) ;})
    .catch(error =>{ console.log(error);})
}

export const deletedeductions= ({ commit},id) => {
     axios.post(baseUrl +'/delete/deductions/' + id)
    .then(response => {commit('SET_Deductions', response.data.data) ;})
    .catch(error =>{ console.log(error);})
}
