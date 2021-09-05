function requestAjax (param) {
    $.ajax({
        method: 'POST',
        url: 'mail.php',
        data: param,
        dataType: 'json',
        statusCode: {
            404: () => {
                $('body').text('ERROR 404 - Page not found');
            }
        },
        success: (data) => {
            messageMail(data);
            resetForm();
                      
        },
        error: (data, error, status) => {
            $('body').text(`ERROR: ${data.status} - ${error} - ${status}`);
        }
    })
}