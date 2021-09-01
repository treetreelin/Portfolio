// Vue 3.0 with options-base style
const vm = Vue.createApp({
    template: `<div>{{message }}</div>`,
    data () {
        return {
            message: 'Hello World V0624053, geting start the Vue.js 3.0!'
        }
    }
});

//掛載至指定的元素id
vm.mount('#app');

