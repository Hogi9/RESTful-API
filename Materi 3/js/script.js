$('#search-button').on('click',function(){
    $.ajax({
        url: 'http://www.omdbapi.com/',
        type :'get',
        dataType : 'json', //type data returnnya
        data : {
            'apikey' : 'b7a3de7e',
            's' : $('#search-input').val()
        },
        success : function(result) {
            console.log(result);
        }
    });
});