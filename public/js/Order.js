$(document).ready(function() {
    $('#order').submit(function(e) {
        e.preventDefault();

        var childName = $("#childName").val().trim();
        var surnameСhild = $("#surnameСhild").val().trim();
        var nameOfParents = $("#nameOfParents").val().trim();
        var phone = $("#phone").val().trim();
        var year = $("#year").val().trim();
        var date = $("#date").val().trim();

        if(!childName || !surnameСhild || !nameOfParents || !phone || !year || !date ) {
            $('#orderSuccess').hide();
            $('#orderError').hide();
            return false;
        }

        $.ajax({
            url: '/order',
            method: 'post',
            data: {
                childName: $('#childName').val().trim(),
                surnameСhild: $('#surnameСhild').val().trim(),
                nameOfParents: $('#nameOfParents').val().trim(),
                phone: $('#phone').val().trim(),
                year: $('#year').val().trim(),
                date: $('#date').val().trim(),
                '_token': $('meta[name="csrf-token"]').attr('content'),
            },
            beforeSend: ()=> {
                $("#orderService").prop("disabled", true);
                $('#orderSuccess').hide();
                $('#orderError').hide();
            },
            success: (response)=> {
                $('#orderSuccess').show();
                $("#orderService").prop("disabled", false);
            },
            error: (xhr)=> {
                $('#orderError').show();
                $("#orderService").prop("disabled", false);
            }
        });
    });
});
