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

$(function(){
    $('.add_favourite').on('click',addFavourite);
});