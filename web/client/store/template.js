export default {
  namespace: true,
  state: () => ({

  }),
  actions: {
    startLoading() {
      if (process.browser) {
        window.$nuxt.$root.$loading.start();
      }
    },
    finishLoading() {
      if (process.browser) {
        window.$nuxt.$root.$loading.finish();
      }
    },
  },
  mutations: {

  }
}
