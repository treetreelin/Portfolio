// Vue 3.0 with options-base style
const courseviewvm = Vue.createApp({
    data () {
        return {
            coursename: '',
			cosdata:[],
        }
    },
	methods: {
		getcos(){
			var self = this;
		
			//建立axios需要的參數
			var params = new URLSearchParams();
			params.append('coursename', self.coursename);

			//使用axios元件，與API界接資料
			axios.post(
				"http://localhost/getcos", 
				params
			)     
			.then(function (response) {
				//將回傳的資料指定給變數
				self.cosdata = response.data;
				console.log(self.cosdata);
			})
			.catch(function (error) {
			   console.log(error)
			});
		}

	}
});

//掛載至指定的元素id
courseviewvm.mount('#courseviewapp');