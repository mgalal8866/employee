import axios from "axios";
import Swal from 'sweetalert2'

const baseUrl = 'http://192.168.1.2:5645/api/v1'
const headers = {
    'Authorization': '44b48f2305bf2680'
  }
export const getallowances = ({ commit }) => {
    axios.get(baseUrl + '/allallowances',{headers: headers}).then(response => {
        commit('SET_Allowances', response.data.data);
    });
    // Swal.fire({
    //     title: 'هل تريد الاستمرار؟',
    //     icon: 'question',
    //     iconHtml: '؟',
    //     confirmButtonText: 'نعم',
    //     cancelButtonText: 'لا',
    //     showCancelButton: true,
    //     showCloseButton: true
    //   })
 
}
export const newallowances=async  ({ commit},{nameall,description,amount}) => {
    const data = {'name':nameall,'description':description,'amount':amount};

    await  axios.post(baseUrl +'/new/allowances' ,data,{headers: headers})
    .then(response => {commit('SET_Allowances', response.data.data);})
    .catch(e       => {commit('SET_Errors',   e.response.data.errors);
                        console.log(e.response.data.errors);})
}
export const editallowances=async  ({ commit},{id,nameall,description,amount}) => {
    const data = {'id':id,'name':nameall,'description':description,'amount':amount};

    await  axios.post(baseUrl +'/edit/allowances' ,data,{headers: headers})
    .then(response => {commit('SET_Allowances', response.data.data);})
    .catch(e       => {commit('SET_Errors',   e.response.data.errors);
                        console.log(e.response.data.errors);})
}
export const deleteallowances= ({ commit},id) => {
    axios.get(baseUrl +'/delete/allowances/' + id,{headers: headers})
   .then(response => {commit('SET_Allowances', response.data.data) ;})
   .catch(error =>{ console.log(error);})
}


export const add_allowances = ({ commit},dataallowances) => {
    const data = {employee_id:dataallowances.employee_id,allowances_id:dataallowances.allowances_id,amount:dataallowances.amount, effective_date:dataallowances.date, type:dataallowances.type};
    try{
            axios.post(baseUrl +'/add/empolyee/allowances' ,data,{headers: headers})
            .then( response => {commit('SET_EmpolyeeAllowance', response.data.data);});
            Swal.fire({icon:'success',title:'Success',text:''});

            //   this.$swal({icon:'success',title:'Success',text:''});
        }catch(e){
            if(e.response.state === 422){
                console.log( 'errors');
            }
        };
}

export const getempolyeeallowances = ({ commit},id) => {
    try{
            axios.get(baseUrl +'/getbyid/empolyee/allowances/'+id ,{headers: headers})
            .then(response => {commit('SET_EmpolyeeAllowance', response.data.data);})
        }catch(e){
            if(e.response.state === 422){
                console.log( 'errors');
            }
    };
}



