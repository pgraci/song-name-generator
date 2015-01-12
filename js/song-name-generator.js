$(document).ready(function() {
    $('#song-name-form').ajaxForm(function(data) {
        $('#new-song-name').html(data);
    });
});
