function validar() {
    let nombre = document.querySelector("input[name='nombre']").value.trim();
    let correo = document.querySelector("input[name='correo_electronico']").value.trim();
    let rol = document.querySelector("select[name='id_rol']").value;
    let fechaIngreso = document.querySelector("input[name='fecha_ingreso']").value;

    if (nombre == "" || correo == "" || rol == "" || fechaIngreso == "") {
        alert("Todos los campos son obligatorios.");
        return false;
    }

    return true;
}