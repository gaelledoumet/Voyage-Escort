$(document).ready(function($){
    $("#bt_signup").click(function(){
               $.ajax({
                    url: 'signupDB.php',
                    type: "POST",
                    datatype: "text",
                    data: {"email":$("#mail").val(),
                             "password":$("#pass10").val(),
                             "passwordconfirmed":$("#pass11").val(),
                             "number":$("#phone").val(),
                             "username":$("#name").val()},
                    async:false,

                    success: function(data){
                            alert(data);
                                if(data.indexOf("successfully signed up")>-1)
                                {
                                        window.location.assign("package.php"); 
                                }
                                else
                                {
                                    alert(data);
                                }
                        },
                        error: function(data) {
                            console.log("error " + data);
                        },
                        done: function(data) {
                            console.log(data + " success");
                        }
                 });
    });
});