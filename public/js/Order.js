$(document).ready(function () {
    $('#order').submit(function (e) {
        e.preventDefault();

        var childName = $("#childName").val().trim();
        var nameOfParents = $("#nameOfParents").val().trim();
        var email = $("#email").val().trim();
        var phone = $("#phone").val().trim();
        var year = $("#year").val().trim();
        var date = $("#date").val().trim();

        if (!childName || !nameOfParents || !phone || !year || !date || !email) {
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
        phoneError.textContent = 'Вводите корректный номер телефона';
    }
});

function validatePhoneNumber(phoneNumber) {
    var phonePattern = /^\+?[78]\d{10}$/;
    return phonePattern.test(phoneNumber);
  }
