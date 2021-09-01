// Vue 3.0 with options-base style
const vm = Vue.createApp({
    data () {
        return {
            stid: "",
			sname: null,
			semail: "",
			ssex: "",
			sclass: "",
        }
    },
});

//掛載至指定的元素id
vm.mount('#app');


