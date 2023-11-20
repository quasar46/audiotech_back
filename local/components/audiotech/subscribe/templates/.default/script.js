const form = document.querySelector('.subscribe__form');
form.addEventListener('submit', function (e) {
    e.preventDefault();
    // TODO сделать афкс обработчик и переачу эмеила
    let value = $('[name="email"]').val();
    let url = '/ajax/set_email.php';
    $.ajax(
        {
            url: url,
            type: 'POST',
            data: {
                email: value,
            },
            success: function (response) {
                console.log('success');
            },
            error: function() {
                console.log('ajax error');
            }
        }
    )
})