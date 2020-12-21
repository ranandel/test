function rez() {
    var a   = $('#formx').serialize();
    $.ajax({
        type: 'POST',
        url: 'action_form.php',
        data: a,
        success: function(data) {
            $('#results').html(data);
        },
        error:  function(xhr, str){
            alert('Возникла ошибка: ' + xhr.responseCode);
        }
    });
}