// Vue 3.0 with options-base style
const vm = Vue.createApp({
    data () {
        return {
            unitnum: 5, 
            unitprice: 10, 
        }
    },
    methods: {
        totalprice: function(){
            var self = this;
            return self.unitnum * self.unitprice; //回傳值
        }
    }
});

//掛載至指定的元素id
vm.mount('#app');


