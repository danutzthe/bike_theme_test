

	jQuery.ajax({
		type:"POST",
		url: ajaxurl,
		data: {
          		  'action':'example_ajax_request',
       		},

		success: function( data ) {
			console.log("return: " + data);
			//var jsonData = JSON.parse(data);
			jQuery("#my_img_111").attr("src",data);
			
		},
 		error: function(errorThrown){
          	  console.log(errorThrown);
      		}
	 });  


	console.log("ssss");

