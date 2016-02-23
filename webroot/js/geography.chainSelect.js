function get_states(source,targetId,keys)
{
    var country = source.value;
    if (keys == 'name' || keys == 'code') {
        country = country + '/' + keys;
    }
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
