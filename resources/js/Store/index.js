import Vue from 'vue';
import Vuex from 'vuex'

Vue.use(Vuex);
import state from "./state";
import * as getters from './getters';
import * as mutations from "./mutations";
import * as actions from "./actions";
import empolye from "./modules/empolyeess"
import allowances from "./modules/allowances"
import deductions from "./modules/deductions"

export default new Vuex.Store({
    state,
    getters,
    mutations,
    actions,
    modules: {
        empolye,
        allowances,
        deductions
        // cart
    }
});
