

$('.getPreview').on('click',function(ev){
    ev.preventDefault();
    var myVars = {'fixtureID': $(this).data('id')};
    var detailsNode = $(this).parents('.grid').find('.fullDetails');
    var currentNode = $(this);
    if($(this).html() === 'Preview'){
        $.getJSON('data/getPreview.php',myVars, function(data){
            $(detailsNode).html(data.fixtureDesc).slideDown();
        })
        $(currentNode).html('Hide Preview')
    }else{
        $(detailsNode).html('').hide();
        $(currentNode).html('Preview');
    }
    
   
})
