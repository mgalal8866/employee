import axios from "axios";
const baseUrl = 'http://192.168.1.2:5645/api/v1'


export const getemploye = ({ commit }) => {
    axios.get(baseUrl + '/employe').then(response => {
        commit('SET_EMPLOYEES', response.data.data);
    })
}
// export const getallbranch = ({ commit }) => {
//     axios.get(baseUrl + '/allbranch').then(response => {

//         commit('SET_Branch', response.data.data);
//     })
// }
// export const getallposition = ({ commit }) => {
//     axios.get(baseUrl + '/allposition').then(response => {
//         commit('SET_Position', response.data.data);
//     })
// }
// export const getalldepartment = ({ commit }) => {
//     axios.get(baseUrl + '/alldepartment').then(response => {
//         commit('SET_Department', response.data.data);
//     })
// }

export const newemploye = ({ commit},data1) => {
    const data = {name:data1.name,phone:data1.phone,date_hire:data1.date1,
        date_birth:data1.date2,gender:data1.gender,address:data1.address,
        branch_id:data1.branch,department_id:data1.department,position_id:data1.position};
            // errors.value='';
        try{

        axios.post(baseUrl +'/new/employe' ,data)
    .then(response => {commit('SET_EMPLOYEES', response.data.data);})
    }catch(e){
        if(e.response.state === 422){
            console.log( 'errors');
            // console.log( e.response.data.errors);
            // errors.value = e.response.data.errors;
        }
    };
}
