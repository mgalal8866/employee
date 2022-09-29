import axios from "axios";
const baseUrl = 'http://192.168.1.2:5645/api/v1'
const headers = {
    'Authorization': '44b48f2305bf2680'
  }
export const getdeductions = ({ commit }) => {
    axios.get(baseUrl + '/alldeductions',{headers: headers}).then(response => {
        commit('SET_Deductions', response.data.data);
    })
}
export const newdeductions= ({ commit},{nameall,description,amount}) => {
    const data = {'name':nameall,'description':description,'amount':amount};
     axios.post(baseUrl +'/new/deductions' ,data,{headers: headers})
    .then(response => {commit('SET_Deductions', response.data.data) ;})
    .catch(error =>{ console.log(error);})
}
export const editdeductions= ({ commit},{id,nameall,description,amount}) => {
    const data = {'id':id,'name':nameall,'description':description,'amount':amount};
     axios.post(baseUrl +'/edit/deductions' ,data,{headers: headers})
    .then(response => {commit('SET_Deductions', response.data.data) ;})
    .catch(error =>{ console.log(error);})
}
export const deletedeductions= ({ commit},id) => {
     axios.get(baseUrl +'/delete/deductions/' + id,{headers: headers})
    .then(response => {commit('SET_Deductions', response.data.data) ;})
    .catch(error =>{ console.log(error);})
}
export const add_deductions = ({ commit},datadeductions) => {
    const data = {employee_id:datadeductions.employee_id,deductions_id:datadeductions.deductions_id,amount:datadeductions.amount, effective_date:datadeductions.date, type:datadeductions.type};

    try{
            axios.post(baseUrl +'/add/empolyee/deductions' ,data,{headers: headers})
            .then( response => {commit('SET_EmpolyeeDeductions', response.data.data);})
        }catch(e){
            if(e.response.state === 422){
                console.log( 'errors');
            }
        };
}

export const getempolyeedeductions = ({ commit},id) => {
    try{
            axios.get(baseUrl +'/getbyid/empolyee/deductions/'+id ,{headers: headers})
            .then(response => {commit('SET_EmpolyeeDeductions', response.data.data);})
        }catch(e){
            if(e.response.state === 422){
                console.log( 'errors');
            }
    };
}
