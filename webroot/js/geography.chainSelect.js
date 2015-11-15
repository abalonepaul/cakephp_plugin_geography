function get_states(source,targetId)
{
    var country = source.value;
    var target = targetId;
    $.get('/geography/states/list_by_country/'+country, function(resp) {
        //alert(resp);
        //$.each(resp, function(key){
          //  alert(key);
            //$(targetId).append(optionHtml);
         //});
          $(target).html(resp);
     });
    
}
