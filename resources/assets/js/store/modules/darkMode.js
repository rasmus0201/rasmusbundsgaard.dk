const state = {
    enabled: false,
};

const actions = {
    toggle({ commit }, data) {
        commit('toggle', data);
    },
};

const mutations = {
    toggle(state, data) {
        state.enabled = !state.enabled;

        localStorage.setItem('darkMode', state.enabled);
    },
};

export default {
    namespaced: true,
    state,
    actions,
    mutations
};
