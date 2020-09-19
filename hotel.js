$(document).ready(function($)
{
    $(".loader").hide();
  

     $("#bt_search").click(function()
      { 
        if(( $("#checkin").val()=="")||( $("#checkout").val()=="")||($("#budget option:selected").val()=="Budget in USD")||($("#country option:selected").val()=='City'))
            alert("Please, select all options");
        else if( (new Date( $("#checkin").val()).getTime() > new Date($("#checkout").val()).getTime()))
        {
            alert("please select a valid date");
        }
        else{

            var date1 = new Date($("#checkin").val()); 
            var date2 = new Date($("#checkout").val()); 
            var Difference_In_Time = date2.getTime() - date1.getTime(); 
            var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24); 
            var country = $("option:selected").parent().attr("label");
            var city = $("option:selected").html();
            var budget=$("#budget option:selected").html();
            //alert(country+" "+city+" "+budget);
            $("#toadd").html("");
           $(".tohide").css("background","none");
            $(".tohide").html("");
            $(".loader").show();
          $.ajax({ url: 'http://localhost:8080/get_rooms',
               type: 'POST',
               data:{
               
                "country":country,
                "city":city,
	            "checkin": $("#checkin").val(),
                "checkout": $("#checkout").val(),
                "num_entries":2,

                    },
                dataType: 'json',
                success: function(txt) {
                    save(txt, budget,country,city, $);
                        
                    }
                });
            }
     });
});

function save(txt, budget,country,city, $){
    for(i=0;i<txt.length;i++)
    {
        txt[i]["budget"] = budget;
        txt[i]["country"]=country;
        txt[i]["city"]=city;
        $.ajax({ url: "hotel.php",
        type: 'POST',
        data: txt[i],
        dataType: 'json',
        success: function(txt1) {
            $(".tohide").hide();
            $(".loader").hide();
            $("#toadd").html("");
            $("#toadd").append("<tr style=\"border:inset\"><td></td><td><strong>Hotel id</strong></td> <td></td><td><strong>Residence</strong></td><td> </td><td><strong>Hotel price/night</strong></td><td> </td><td><strong>Car type</strong></td><td> </td><td><strong>Car price/day</strong></td><td> </td><td><strong>Car code</strong></td></tr>");
            for(j=0;j<txt1["choices"].length;j++)
                {
                    $(".clara").append("<tr style=\"border:inset\"  onClick=\"sendtophp("+txt1["choices"][j]["carcode"]+","+txt1["choices"][j]["hotelid"]+")\">\
                    <td><img width=300px, height=250px, src=\""+txt1["choices"][j]["hotelphoto"]+"\"/></td>\
                    <td>"+txt1["choices"][j]["hotelid"]+"</td>\
                    <td> </td><td>"+txt1["choices"][j]["hotelname"]+"</td>\
                    <td> </td><td>"+txt1["choices"][j]["hotelprice"]+"</td>\
                    <td> </td><td>"+txt1["choices"][j]["cartype"]+"</td>\
                    <td> </td><td>"+txt1["choices"][j]["carprice"]+"</td>\
                    <td> </td><td>"+txt1["choices"][j]["carcode"]+"</td>\
                    <td> </td></tr>");
                }
            }
        });
    }

   
}
function sendtophp(carid,hotelid)
{
    console.log("hellooo");
    window.location.assign("sendto.php?carid="+carid+"&hotelid="+hotelid); 

}