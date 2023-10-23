document.getElementById('botonVender').addEventListener('click', function () {
    var nombreDiscoteca = document.getElementById('nombre_discoteca').value;
    var precio = document.getElementById('precio').value;
    var fecha = document.getElementById('fecha').value;

    console.log('Nombre de la Discoteca: ' + nombreDiscoteca);
    console.log('Precio: ' + precio);
    console.log('Fecha del Evento: ' + fecha);
});
