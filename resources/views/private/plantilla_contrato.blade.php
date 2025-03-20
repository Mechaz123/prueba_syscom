<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: justify;
        }

        .title {
            text-align: center;
        }

        .custom-list {
            list-style-type: lower-alpha;
        }

        .firma {
            font-family: "Brush Script MT", "Lucida Handwriting", cursive;
            margin-top: 50px;
            font-size: 18px;
            font-style: italic;
            font-weight: bold;
        }

        .linea {
            margin-top: 5px;
            width: 200px;
            border-top: 2px solid black;
            margin-left: 0;
            margin-right: auto;
        }

        .firma .texto {
            font-family: Arial, sans-serif;
        }
    </style>
    <title>Documento Contrato</title>
</head>

<body>
    <h3 class="title">CONTRATO DE TRABAJO ENTRE SYSCOM Y {{ strtoupper($usuario->nombre) }}</h3>

    <p>Entre las partes, por un lado SYSCOM, domiciliado en la ciudad de Bogotá, representante legal
        <b> Pepito Perez </b>, con NIT <b>12345678</b>, quien en adelante y para los efectos del
        presente contrato se denomina como <b>EL EMPLEADOR</b>, y por el otro, <b>{{ $usuario->nombre }}</b>,
        domiciliado en la ciudad de Bogotá, quien en adelante y para los efectos del presente contrato se
        denomina como <b>EL TRABAJADOR</b>, ambos mayores de edad, identificados como aparece al pie de las
        firmas, hemos acordado suscribir este contrato de trabajo.
    </p>

    <p><b>Artículo 1.</b> Naturaleza y Objeto. Se trata de un contrato de trabajo a término indefinido, en vigencia
        del cual el <b>EMPLEADOR</b> contrata al <b>TRABAJADOR</b> para que este, de forma personal, dirija su capacidad
        de trabajo en aras de la presentación de servicios y desempeño de las actividades propias del cargo de
        <b>{{ $rol->nombre_cargo}}</b>, y como contraprestación el <b>EMPLEADOR</b> pagará una remuneración.
    </p>

    <p><b>Artículo 2.</b> Obligaciones de las partes</p>
    <ol>
        <li> Del <b>EMPLEADOR</b></li>
        <ol class="custom-list">
            <li>Pagar en la forma pactada el monto equivalente a la remuneración.</li>
            <li >Realizar la afiliación y correspondiente aporte a parafiscales.</li>
            <li>Dotar al <b>TRABAJADOR</b> de los elementos de trabajo necearios para el correcto
                desempeño de la gestión contratada.</li>
            <li>Las obligaciones especiales enunciadas en los artículos 56 y 57 del Código Sustantivo del
                Trabajo.</li>
        </ol>
        <li> Del <b>TRABAJADOR</b></li>
        <ol class="custom-list">
            <li>Cumplir a cabalidad con el objeto del contrato, en la forma convenida.</li>
            <li>Las obligaciones especiales enunciadas en los artículos 56 y 58 dle Código Susstantivo
                del Trabajo.</li>
        </ol>
    </ol>
    <p><b>Artículo 3.</b> Lugar de prestación del servicio. El <b>TRABAJADOR</b> prestará sus servicios de forma
        personal, en la <b>Cra. 90a #64c-38, Bogotá</b>;
        dirección que corresponde al domicilio de la empresa.
    </p>
    <p><b>Artículo 4.</b> Jornada de trabajo. La jornada de trabajo será de: <b>7:00 AM</b> a <b>4:00 PM</b></p>
    <p><b>Artículo 5.</b> Remuneración. El <b>EMPLEADOR</b> deberá pagar al <b>TRABAJADOR</b>, a título de remuneración
        por las actividades, un monto de <b>3'800.000</b>.</p>
    <p><b>Artículo 6.</b> Forma de pago. La forma de pago del salario señalado en la cláusula anterior, será así:
        <b>Mensualmente, el último día de cada mes</b>.
        El pago se hará por <b>consignación a la cuenta bancaria del TRABAJADOR.</b>
    </p>
    <p><b>Artículo 7.</b> Duración del contrato. La duración del presente contrato es indefinida. Para tales efectos,
        inicia a regir desde el día <b>{{ $usuario->fecha_ingreso }}</b> y permanecerá vigente mientras subsistan las
        causas
        que le dieron origen, salvo que de común acuerdo las partes consientan en darlo por terminarlo, o se incurra en
        alguna
        de las situaciones de ley que permitan la terminación unilateral del mismo.
    </p>
    <p><b>Artículo 8.</b> Terminación unilateral del contrato. El presente contrato se podrá terminar unilateralmente y
        sin indemnización
        alguna, por cualquiera de las partes, siempre y cuando se configure algunas de las situaciones previstas en el
        artículo 62 del Código Sustantivo
        del Trabajo. Se considera incumplimiento grave el desconocimiento de las obligaciones o prohibiciones previstas
        en el contrato.
    </p>
    <p><b>Artículo 9.</b> Domicilio de las partes. Para todos los efectos legales y convencionales, el domicilio de las
        partes es: el <b>EMPLEADOR</b>:
        la ciudad de Bogotá, en la dirección <b>Cra 17#27-29 Norte</b>; y el <b>TRABAJADOR</b>, la ciudad de Bogotá, en
        la dirección <b>Cra 18#28-30 Sur</b>.
    </p>
    <p><b>Artículo 10.</b> Integridad. El presente contrato, reemplaza en su integridad y deja sin efecto cualquier
        acuerdo de voluntades que se haya pactado
        con anterioridad a la suscripción del mismo.
    </p>
    <p>En señal de conformidad, las partes suscriben el presente contrato, en dos ejemplares del mismo tenor.</p>

    <div class="firma">
        <p>{{ $usuario->firma }}</p>
        <div class="linea"></div>
        <p class="texto">Firma del TRABAJADOR</p>
    </div>
</body>

</html>
