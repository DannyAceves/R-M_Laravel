$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
    function cambiarColorFondo(locationId) {
        var color;
        if (locationId >= 1 && locationId <= 50) {
            color = 'green';
        } else if (locationId >= 51 && locationId <= 80) {
            color = 'blue';
        } else {
            color = 'red';
        }
        $('#bodybg').css('background-color', color);
        localStorage.setItem('bgColor', color);
    }

    function recuperarColorFondo() {
        var storedColor = localStorage.getItem('bgColor');
        if (storedColor) {
            if (storedColor !== 'white') {
                $('#bodybg').css('background-color', storedColor);
            } else {
                $('#bodybg').css('background-color', '');
            }
        }
    }

    recuperarColorFondo();
    $('.character-image').click(function () {
        var characterInfo = $(this).data('character-info');
        $('#characterModal').find('.modal-title').text(characterInfo.name);
        $('#characterModal').find('.modal-body').html(
            '<p>Status: ' + characterInfo.status + '</p>' +
            '<p>Species: ' + characterInfo.species + '</p>' +
            '<p>Origin: ' + characterInfo.origin + '</p>' +
            '<img src="' + characterInfo.image + '" alt="Character Image">'
        );

        $('#characterModal').modal('show');
    });

    $('form').submit(function () {
        var locationId = $('#locationId').val();
        cambiarColorFondo(locationId);
    });
});