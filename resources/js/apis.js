import axios from "axios";
// const baseUrl = 'http://192.168.1.2:5645/api/v1'

const Api = axion.create({
    baseUrl:'http://192.168.1.2:5645/api/v1'
})    
export default Api;
// export default{

//     all(){
//         return Api.get('allallowances');
//     }
// }