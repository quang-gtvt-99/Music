var myPlayListOtion = '<ul class="more_option"><li><a href="#"><span class="opt_icon" title="Add To Favourites"><span class="icon icon_fav"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Add To Queue"><span class="icon icon_queue"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Download Now"><span class="icon icon_dwn"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Add To Playlist"><span class="icon icon_playlst"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Share"><span class="icon icon_share"></span></span></a></li></ul>';
function get_detail_song(id) {
    $.get('/home/detail/' + id, function (data) {
        var obj = JSON.parse(data)
        var playList = [];
        sessionStorage.setItem(obj.id, data);
        setAudio();
    })
};

function get_detail_album() {
    $.get('home/play/album', function (data) {
        sessionStorage.clear();
        var rev = JSON.parse(data);
        for(let i=0;i<rev.length;i++){
            sessionStorage.setItem(rev[i].id, JSON.stringify(rev[i]));
            setAudio();
        }
    })
};

