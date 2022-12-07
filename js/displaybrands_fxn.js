function displaybrands_fxn(){
   
        // alert ("this button is working.");
        
        $.ajax({
            type: 'POST',
            url: '../actions/displayBrands.php',
            data:  {
                brandname: "hello",
            } ,
            success: function(data,status) {
                // alert('AJAX call was successful!');
                $('#content').html(data);
                //alert(data);
                //alert(data);
                //alert(data);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert("Error:"+xhr.status);
                alert(thrownError);
            }
        });
}
