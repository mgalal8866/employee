import axios from "axios";
const baseUrl = 'http://192.168.1.2:5645/api/v1'
const headers = {
    'Authorization': '44b48f2305bf2680'
  }
export const getallowances = ({ commit }) => {
    axios.get(baseUrl + '/allallowances',{headers: headers}).then(response => {
        commit('SET_Allowances', response.data.data);
    })
}
export const newallowances=async  ({ commit},{nameall,description,amount}) => {
    const data = {'name':nameall,'description':description,'amount':amount};

    await  axios.post(baseUrl +'/new/allowances' ,data,{headers: headers})
    .then(response => {commit('SET_Allowances', response.data.data);})
    .catch(e       => {commit('SET_Errors',   e.response.data.errors);
                        console.log(e.response.data.errors);})

    //.catch(function (e) {
    //     if (e.response) {response => {commit('SET_Errors', e.response.data.errors);}
    //       console.log(e.response.data.errors);
    //       console.log(error.response.status);
    //     //   console.log(error.response.headers);
    //     } else if (error.request) {
    //       console.log(error.request);
    //     } else {
    //       console.log('Error', error.message);
    //     }
    //   })
}
export const deleteallowances= ({ commit},id) => {
    axios.get(baseUrl +'/delete/allowances/' + id,{headers: headers})
   .then(response => {commit('SET_Allowances', response.data.data) ;})
   .catch(error =>{ console.log(error);})
}
