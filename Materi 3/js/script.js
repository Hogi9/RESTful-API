function searchMovie(){
    $('#movie-list').html('');
    $.ajax({
        url: 'http://www.omdbapi.com/',
        type :'get',
        dataType : 'json', //type data returnnya
        data : {
            'apikey' : 'b7a3de7e',
            's' : $('#search-input').val()
        },
        success : function(result) {
            //Title, Type, Year, Poster, imdbID
            if(result.Response == "True"){
                movies = result.Search;
                console.log(movies);
                $.each(movies,function(i, data){
                    $('#movie-list').append(`
                        <div class = "col-md-4">
                            <div class="card mb-3">
                                <img src="`+ data.Poster +`" class="card-img-top">
                                <div class="card-body">
                                <h5 class="card-title">`+ data.Title+`</h5>
                                <h6 class="card-subtitle mb-2 text-muted">`+ data.Year +`</h6>
                                <a href="#" class="card-link" data-bs-toggle="modal" data-bs-target="#exampleModal">See Detail</a>
                                </div>
                            </div>
                    </div>
                    `);
                });

                $('#search-input').val('');
            }else{
                $('#movie-list').html(`
                    <div class="col">
                        <h1 class="text-center">`+result.Error+`</h1>
                    </div>
                `);
            }
        }
    });
}

$('#search-button').on('click',function(){
    searchMovie();
});

//e = event
$('#search-input').on('keyup',function(e){
    //13 adalah tombol enter 
    //which bisa diganti dengan keyCode
    //dapat dicari di web keycode.info
    if(e.keyCode === 13){
        searchMovie();
    }
});