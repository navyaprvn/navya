$(document).ready( function () {
    $('#myTable').DataTable();
    $("#myTable_filter :input").keyup(function() {
      $val=$(this).val();
      if($val){
      	myTable_filter($val);
      }

    });
    function myTable_filter($key){
    	$.ajax({
    		type:'POST',
    		url:'get_data',
    		asyn:false,
    		dataType:'json',
    		data:{key:$key},
    		success:function(data){
    			var html="";
    			if(data.length==0){
                      html+="<tr><td>No data available in this table</td></tr>";
    			}
    			else if(data.length!=0){
    				var i;
    				for(i=0;i<data.length;i++){
    					html+="<tr><td>"+data[i].email+"</td><td>"+data[i].password+"</td>\n\
    					<td>edit</td></tr>";
    				}
    				
    			} 
    			     $("#table_body").html(html);
                     $('#myTable').DataTable();
    		}
    	});

    }
} );