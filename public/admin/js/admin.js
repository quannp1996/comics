$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
const adminJS =
{
    sendRequest: function (element, method="POST", customData = null) {
        $(element).attr('data-href')
        new Swal({
            title: 'Bạn có chắc chắn?',
            showClass: {
                popup: 'animate__animated animate__fadeInDown'
            },
            hideClass: {
                popup: 'animate__animated animate__fadeOutUp'
            },
            text: "",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Hủy',
            confirmButtonText: 'Xác nhận'
        }).then(result => {
            if (result.isConfirmed) {
                $.ajax({
                    url: $(element).attr('data-href'),
                    method: method,
                    data: customData,
                    success: response => {
                        location.reload();
                    }
                });
            }
        });
    }
}