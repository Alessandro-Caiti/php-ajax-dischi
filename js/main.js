$(document).ready(function() {

    var source = document.getElementById("card-template").innerHTML;
    var template = Handlebars.compile(source);

    $.ajax( {
        url: 'server.php',
        method: 'GET',
        success: function (data) {
            var albums = data;
            for (var i = 0; i < albums.length; i++) {
                var album = albums[i];
                var context = {
                    cover: album.cover,
                    title: album.title,
                    author: album.author
                };
                var html = template(context);
                $('.cards-container').append(html);
            }
        },
        error: function (error) {
            alert('Boom');
        }
    });


});
