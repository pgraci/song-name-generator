$(document).ready(function() { 
    // bind form using ajaxForm
    $('#song-name-form').ajaxForm({
        // dataType identifies the expected content type of the server response
        dataType:  'json',

        // success identifies the function to invoke when the server response
        // has been received
        success:   getsongname
    });
});

function getsongname(data) {
  $('#new-song-name').html(data.songname);
}
