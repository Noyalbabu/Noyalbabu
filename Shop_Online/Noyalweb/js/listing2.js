

$('.getPreview2').on('click',function(ev){
    ev.preventDefault();
    var myVars = {'playerID': $(this).data('id')};
    var detailsNode = $(this).parents('.grid').find('.fullDetails');
    var currentNode = $(this);
    if($(this).html() === 'Preview'){
        $.getJSON('data/getPreview2.php',myVars, function(data){
            $(detailsNode).html(data.playerNat).slideDown();
        })
        $(currentNode).html('Hide Preview')
    }else{
        $(detailsNode).html('').hide();
        $(currentNode).html('Preview');
    }
    
   
})
