$(document).ready(function () {
    const reglas = {
        re_password: {
            equalTo: "#password"
        }
    };
    const mensajes = {
        re_password: {
            equalTo: 'Las contraseñas no coinciden'
        }
    };
    Biblioteca.validacionGeneral('form-general', reglas, mensajes);

});
