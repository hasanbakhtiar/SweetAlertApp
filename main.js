var header = "Sweet Alert";
var info   = "This Functions use Sweet Alert";

$("#klck").click(function(){
    // swal(header,info,"error");
    // swal(header,info,"success");
    // swal(header,info,"info");
    swal({
        title : header,
        text  : info,
        icon  : "info",
        button: "close"
    })

    .then((value) =>{
            swal("Then event", "Best Content", "success");
    });

})
