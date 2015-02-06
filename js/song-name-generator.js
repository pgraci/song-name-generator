$(document).ready(function() {
    $('#song-name-form').ajaxForm({
        dataType:  'json',
        success:   getsongname
    });
});

function getsongname(data) { 
  $('#new-song-name').html(data.songname);
}
