function addFavourite(e) {
    e.preventDefault();
    let url = $(this).data('url');
    $.ajax({
        type: 'GET',
        url: url,
        dataType: 'json',
        success: function (data) {
            if (data.code == 200) {
                $('#success_modal').modal('show');
            } else {
                $('#error_modal').modal('show');
            }
        },
        error: function () {

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
        success: function (data) {
            if (data.code == 200) {
                $('#delete_modal').modal('show');
            }
            location.reload();
        },
        error: function () {

        }

    })
};
//update luowtj nghe
function updateSong(e) {
    e.preventDefault();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    let url = $(this).data('url');
    // console.log(url);
    $.ajax({
        type: 'Post',
        url: url,
        dataType: 'json',
        success: function (data) {

        },
        error: function () {

        }

    })
}

function updateSongD(e) {
    // e.preventDefault();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    let url = $(this).data('url');
    // console.log(url);
    $.ajax({
        type: 'Post',
        url: url,
        dataType: 'json',
        success: function (data) {

        },
        error: function () {

        }

    })
}

function get_song(id) {
    $.get('/home/detail/' + id, function (data) {
        console.log(id + ':' + data);
        console.log(data);
        var obj = JSON.parse(data);
        $(document).ready(function () {
            $("#jquery_jplayer_1").jPlayer({
                ready: function () {
                    $(this).jPlayer("setMedia", {
                        image: obj.img_path,
                        title: obj.name,
                        artist: "Unknown",
                        mp3: obj.song_path,
                    });
                },
                cssSelectorAncestor: "#jp_container_1",
                swfPath: "/js",
                supplied: "mp3",
                useStateClassSkin: true,
                autoBlur: false,
                smoothPlayBar: true,
                keyEnabled: true,
                remainingDuration: true,
                toggleDuration: true,
                playlistOptions: {
                    autoPlay: true,
                }
            });
        })

    })
}

function test() {
    
    alert(sessionStorage.getItem('30'.id))
}

function checkLang(){
    var checkedValue =  $('.check:checked').val();
        let url = 'http://localhost:8000/language/'+checkedValue;
        console.log(url);
        $.ajax({
            type: 'Get',
            url: url,
            dataType: 'json',
            success: function (data) {
    
            },
            error: function () {
    
            }
    
        })
}

$(function () {
    $('.add_favourite').on('click', addFavourite);
    $('.song_delete').on('click', deleteFavourite);
    $('.song_play').on('click', updateSong);
    $('.ms_clear').on('click', test);
    $('.ms_lang').on('click', checkLang);
    $('.download').on('click', updateSongD);
});

///getttt audio
var myPlayListOtion = '<ul class="more_option"><li><a href="#"><span class="opt_icon" title="Add To Favourites"><span class="icon icon_fav"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Add To Queue"><span class="icon icon_queue"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Download Now"><span class="icon icon_dwn"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Add To Playlist"><span class="icon icon_playlst"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Share"><span class="icon icon_share"></span></span></a></li></ul>';
$(document).ready(function(){
    var playList = [];
        for (let i = 0; i < sessionStorage.length; i++) {
            var art = [];
            var obj2 = JSON.parse(sessionStorage.getItem(Object.keys(sessionStorage)[i]));
            for (let i = 0; i < obj2.artists.length; i++) {
                art.push(obj2.artists[i].name)
            };
            playList.push({
                id: obj2.id,
                image: obj2.img_path,
                title: obj2.name,
                artist: art.join(' & '),
                mp3: obj2.song_path,
                option: myPlayListOtion
            });

        }

        console.log(playList);

        if (playList.length) {
            var myPlaylist = new jPlayerPlaylist({
                jPlayer: "#jquery_jplayer_1",
                cssSelectorAncestor: "#jp_container_1"
            }, playList, {
                swfPath: "/MusicLayout/js/plugins/player",
                supplied: "mp3",
                solution: "flash, html",
                wmode: "window",
                useStateClassSkin: true,
                autoBlur: true,
                smoothPlayBar: true,
                toggleDuration: true,
                keyEnabled: true,
                playlistOptions: {
                    autoPlay: true,
                    removeItemClass: "jp-playlist-item-remove",
                    //xoá bài hát khỏi list:
                    enableRemoveControls: true
                }
            });
            $("#jquery_jplayer_1").on($.jPlayer.event.ready + ' ' + $.jPlayer.event.play, function (event) {
                var current = myPlaylist.current;
                var playlist = myPlaylist.playlist;
                $.each(playlist, function (index, obj) {
                    if (index == current) {
                        $(".jp-now-playing").html("<div class='jp-track-name'><span class='que_img'><img width='50' height='50' src='" + obj.image + "'></span><div class='que_data'>" + obj.title + " <div class='jp-artist-name'>" + obj.artist + "</div></div></div>");
                    }
                });
                $('.knob-wrapper').mousedown(function () {
                    $(window).mousemove(function (e) {
                        var angle1 = getRotationDegrees($('.knob')),
                            volume = angle1 / 270

                        if (volume > 1) {
                            $("#jquery_jplayer_1").jPlayer("volume", 1);
                        } else if (volume <= 0) {
                            $("#jquery_jplayer_1").jPlayer("mute");
                        } else {
                            $("#jquery_jplayer_1").jPlayer("volume", volume);
                            $("#jquery_jplayer_1").jPlayer("unmute");
                        }
                    });

                    return false;
                }).mouseup(function () {
                    $(window).unbind("mousemove");
                });


                function getRotationDegrees(obj) {
                    var matrix = obj.css("-webkit-transform") ||
                        obj.css("-moz-transform") ||
                        obj.css("-ms-transform") ||
                        obj.css("-o-transform") ||
                        obj.css("transform");
                    if (matrix !== 'none') {
                        var values = matrix.split('(')[1].split(')')[0].split(',');
                        var a = values[0];
                        var b = values[1];
                        var angle = Math.round(Math.atan2(b, a) * (180 / Math.PI));
                    } else {
                        var angle = 0;
                    }
                    return (angle < 0) ? angle + 360 : angle;
                }

                var timeDrag = false;
                $('.jp-play-bar').mousedown(function (e) {
                    timeDrag = true;
                    console.log('Test:' + timeDrag);
                    updatebar(e.pageX);

                });
                $(document).mouseup(function (e) {
                    if (timeDrag) {
                        timeDrag = false;
                        updatebar(e.pageX);
                    }
                });
                $(document).mousemove(function (e) {
                    if (timeDrag) {
                        updatebar(e.pageX);
                    }
                });
                var updatebar = function (x) {
                    var progress = $('.jp-progress');
                    var position = x - progress.offset().left;
                    console.log(position);
                    console.log(progress.width());
                    var percentage = 100 * position / progress.width();
                    if (percentage > 100) {
                        percentage = 100;
                    }
                    if (percentage < 0) {
                        percentage = 0;
                    }
                    $("#jquery_jplayer_1").jPlayer("playHead", percentage);
                    $('.jp-play-bar').css('width', percentage + '%');
                };
                $('#playlist-toggle, #playlist-text, #playlist-wrap li a').unbind().on('click', function () {
                    $('#playlist-wrap').fadeToggle();
                    $('#playlist-toggle, #playlist-text').toggleClass('playlist-is-visible');
                });
                $('.hide_player').unbind().on('click', function () {
                    $('.audio-player').toggleClass('is_hidden');
                    $(this).html($(this).html() == '<i class="fa fa-angle-down"></i> HIDE' ? '<i class="fa fa-angle-up"></i> SHOW PLAYER' : '<i class="fa fa-angle-down"></i> HIDE');
                });
                $('body').unbind().on('click', '.audio-play-btn', function () {
                    $('.audio-play-btn').removeClass('is_playing');
                    $(this).addClass('is_playing');
                    var playlistId = $(this).data('playlist-id');
                    myPlaylist.play(playlistId);
                    console.log(playlistId);
                });

            });
        }
})
