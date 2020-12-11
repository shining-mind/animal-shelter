
$(() => {
    $('#modal-form-feedback').on('submit', (e) => {
        e.preventDefault();
        $.ajax({
            url: e.target.action,
            dataType: 'json',
            method: e.target.method,
            data: $(e.target).serializeArray(),
        })
            .done((data) => {
                // TODO: Use other modal
                if (data.error) {
                    alert(data.error.message);
                } else {
                    alert(data.message);
                }
            })
            .fail(() => {
                alert('Отправка не удалась!');
            })
    });
});
