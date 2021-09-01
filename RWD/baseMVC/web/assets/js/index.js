var coursesViewApp = new Vue({
    el: '#coursesView',
    data: {
        coursesData:null,
        selectCourseNo:"",
        registrationData:null
    },
    methods: {
        getCoursesData:function(){
            var self = this;
            $.ajax({
                url: '/getCoursesData',
                type: 'POST',
                data:{},
                error: function(xhr) {
                    console.log('Ajax request 發生錯誤');
                },
                success: function(response) {
                    self.coursesData=response;
                }
            }); 
        },
        courseSelectButtonSubmit:function(){
            var self = this;
            $.ajax({
                url: '/getRegistrationData',
                type: 'POST',
                data:{course_no:self.selectCourseNo},
                error: function(xhr) {
                    console.log('Ajax request 發生錯誤');
                },
                success: function(response) {
                    self.registrationData=response;
                }
            });
        },
        init:function(){
            this.getCoursesData();
        }
    }
});

coursesViewApp.init();
