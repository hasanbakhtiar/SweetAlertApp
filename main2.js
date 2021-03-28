$("#infosend").submit(function(){
    event.preventDefault();
        

        $.ajax({
                        type:"POST",
                        url:"operation.php",
                        data:$("#infosend").serialize(),
                        success:function(data){
                            var infoData = JSON.parse(data);
                            swal("Your Information", infoData.message,infoData.status);
                        }
        });
        return false;
});