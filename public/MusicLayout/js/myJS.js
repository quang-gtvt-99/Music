function addFavourite(e){
    e.preventDefault();
    let url=$(this).data('url');
    $.ajax({
        type:'GET',
        url:url,
        dataType:'json',
        success:function(data){
            if(data.code==200){
                $('#success_modal').modal('show');
            }else{
                $('#error_modal').modal('show');
            }
        },
        error:function(){

        }

    })
};

function deleteFavourite(e) {
   e.preventDefault();
    let url = $('.ms_weekly_wrapper').data('url');
    let id = $(this).data('id');
    $.ajax({
        type: 'GET',
        url: url,
        data: {
            id: id
        },
        success: function(data) {
            if (data.code == 200) {
                $('#delete_modal').modal('show');
            } 
            location.reload();
        },
        error: function() {

        }

    })
};
//update luowtj nghe
function updateSong(e){
    e.preventDefault();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    let url=$(this).data('url');
    $.ajax({
        type: 'POST',
        url: url,
        dataType:'json',
        success: function(data) {
            
        },
        error: function() {
            
        }

    })
}

$(function(){
    $('.add_favourite').on('click',addFavourite);
    $('.song_delete').on('click', deleteFavourite);
    $('.song_play').on('click', updateSong);

});