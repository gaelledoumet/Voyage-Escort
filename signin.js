$(document).ready(function($)
      {


          $("#bt_signin").click(function()
            {
                $.ajax({ url: 'signin.php',
                    type: 'POST',
                    data:{
                          "email":$("#exampleInputEmail1").val(),
                          "password":$("#exampleInputPassword1").val(),
                    },
                    dataType: 'text',
                          success: function(txt) {
                              if(txt.indexOf("successfully logged in")>-1)
                              {
                                    alert(txt);
                                    carid = findGetParameter("carid");
                                    hotelid = findGetParameter("hotelid");
                                    if(carid == null && hotelid == null){
                                        window.location.assign("package.php"); 
                                    } else {
                                        window.location.assign("reserve.php?carid="+carid+"&hotelid="+hotelid); 
                                    }
                              }
                              else if(txt.indexOf("wrong password or username")>-1)
                              alert(txt); 
                          },
                    
                      });
          });
      });

function findGetParameter(parameterName) {
    var result = null,
        tmp = [];
    var items = location.search.substr(1).split("&");
    for (var index = 0; index < items.length; index++) {
        tmp = items[index].split("=");
        if (tmp[0] === parameterName) result = decodeURIComponent(tmp[1]);
    }
    return result;
}