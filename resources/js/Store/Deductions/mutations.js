export const SET_PRODUCTS = (state, products) => {
    state.products = products;
    // state.products.push("Kiwi");
    // const map1 = new Map();

    state.products.forEach(object => {
        object.quantity = 1;
    });

    // map1.set(state.products, { qty: 'Santiago' });
    console.log(state.products);

}
export const SET_PRODUCTSBYCAT = (state, products) => {
    state.products = products;

}
export const SET_pagination = (state, pagination) => {
    state.pagination = pagination;

}

export const SET_OFFERS = (state, offers) => {
    state.offers = offers;
}

export const SET_CATEGORYS = (state, categorys) => {
    state.categorys = categorys;
}


export const increase = (state, id) => {
    state.products.map((p) => {
        if (p.id == id) {
            p.quantity += 1
        }
    })
}

export const decrease = (state, id) => {
    state.products.map((p) => {
        if (p.id == id && p.quantity > 1) {
            p.quantity -= 1
        }
    })
}
export const SET_EMPLOYEES = (state, employeess) => {
    state.employes = employeess;
}


export const SET_Branch = (state, branch) => {
    state.branch = branch;
}

export const SET_Position = (state, position) => {
    state.position = position;
}

export const SET_Department = (state, department) => {
    state.department = department;
}


