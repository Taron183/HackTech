$(".chat").click(function () {
	$(".wrapper").show();
	var to_id = $(this).attr("data-id");
	$(".send").attr("data-to_id", to_id);


    $.ajax({
        url:'#',
        method:'GET',
        data:{to_id:to_id},
        success:function(response){



        	}


    })

})


$('.send').keypress(function (e) {
    var key = e.which;
    if(key == 13){
    	var text = $('.send').val();
    	var to_id = $('.send').attr("data-to_id");
    	console.log(text)
		console.log(to_id)


        $.ajax({
            url:'/messenges/create',
            method:'GET',
            data:{text:text,to_id: to_id},
            dataType: "json",
            success:function(response){

            }

        })



        var text = $('.send').val('');

	}


})



