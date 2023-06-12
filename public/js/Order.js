$(document).ready(function () {
    $('#order').submit(function (e) {
        e.preventDefault();

        var childName = $("#childName").val().trim();
        var nameOfParents = $("#nameOfParents").val().trim();
        var email = $("#email").val().trim();
        var phone = $("#phone").val().trim();
        var year = $("#year").val().trim();
        var date = $("#date").val().trim();

<<<<<<< HEAD
        if (!childName || !nameOfParents || !phone || !year || !date || !email) {
=======
        if(!childName || !surnameСhild || !nameOfParents || !phone || !year || !date || !email) {
>>>>>>> 86c8323531bbf312c52ab8c3ca49f634b0059f35
            $('#orderSuccess').hide();
            $('#orderError').hide();
            return false;
        }

        $.ajax({
            url: '/order',
            method: 'post',
            data: {
                childName: $('#childName').val().trim(),
                nameOfParents: $('#nameOfParents').val().trim(),
                email: $('#email').val().trim(),
                phone: $('#phone').val().trim(),
                year: $('#year').val().trim(),
                date: $('#date').val().trim(),
                '_token': $('meta[name="csrf-token"]').attr('content'),
            },
            beforeSend: () => {
                $("#orderService").prop("disabled", true);
                $('#orderSuccess').hide();
                $('#orderError').hide();
            },
            success: (response) => {
                $('#orderSuccess').show();
                $("#orderService").prop("disabled", false);
            },
            error: (xhr) => {
                $('#orderError').show();
                $("#orderService").prop("disabled", false);
            }
        });
    });
});
document.getElementById('phone').addEventListener('input', function () {
    var phoneInput = this.value.trim();
    var sanitizedInput = phoneInput.replace(/\D/g, ''); //
    var maxLength = 11;

    if (sanitizedInput.length > maxLength) {
        sanitizedInput = sanitizedInput.slice(0, maxLength);
    }

    this.value = sanitizedInput;

    var isValid = validatePhoneNumber(sanitizedInput);

    var phoneError = document.getElementById('phone-error');

    if (isValid) {
        this.classList.remove('error');
        phoneError.textContent = '';
    } else {
        this.classList.add('error');
        phoneError.textContent = 'Введите корректный номер телефона';
    }
});

function validatePhoneNumber(phoneNumber) {
    var phonePattern = /^[+]{1}[0-9]{1,3}[0-9]{9,10}$/;
    return phonePattern.test(phoneNumber);
}
