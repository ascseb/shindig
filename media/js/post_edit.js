$(document).ready(function(){
    $("input[name='title']").change(function(){
    	if( ! $("input[name='slug']").val() )
    	{
    		$.post('/shindig/ajax/slug',
    	              {'title':$(this).val()},
    	                  function (response){
    	                  	 $("input[name='slug']").val(response.slug);
    	                  	 
    	                  	 $("#slug_example").text(response.slug);
    	                 }, 
    	         'json');
    	}
    });
});
