$('input[name=userRating]').on('change', function(){ 
    console.info('Fired'); });
    var sendVals = $('form').serialize();
    $.post("data/updateReview.php", sendVals, function(myData){ 
        console.dir(myData); 
        var noOfRatings = myData.Reviews; 
        var currentScore = myData.Score; 
        var newDisplayScore = (currentScore/noOfRatings); 
        newDisplayScore = Math.round(100*newDisplayScore)/100; 
        $('.currentRating').html(newDisplayScore); 
    }, "json");

    var myFilmName = $('h2').html();
    var suggestedFilms = new Array();

    $.ajax({ 
        type: 'GET',
        url: 
        'http://www.tastekid.com/api/similar?q='+myFilmName+'&type=movie&callback=handleTcReturn&k=291875-Demo-ZKE3KK4I', 
        crossDomain: true, 
        contentType: 'application/json', 
        dataType: 'jsonp' 
    });

    function handleTcReturn(myData){
        console.dir(myData); 
        console.dir(myData.Similar.Results); 
    }