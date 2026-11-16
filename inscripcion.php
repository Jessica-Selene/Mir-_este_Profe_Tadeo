<?php
$cursos = [
    1 => "1.º año",
    2 => "2.º año",
    3 => "3.º año",
    4 => "4.º año",
    5 => "5.º año",
    6 => "6.º año",
    7 => "7.º año"
];

$especialidades = [
    "informatica" => "Informática",
    "aerofotogrametria" => "Aerofotogrametría",
    "aviacion" => "Aviación"
];

// Variable para mostrar el mensaje de éxito
$enviado = false;

// Si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $enviado = true;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Inscripción | Escuela Técnica</title>

    
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Montserrat:wght@500;600;700&family=Playfair+Display:wght@600;700&display=swap"
        rel="stylesheet"
    >

    <link rel="stylesheet" href="css/style.css?v=10">

    <link rel="stylesheet" href="inscripcion.css">
    
</head>



















<body>

    <main class="inscripcion-page">

        <div class="inscripcion-wrapper">

            <!-- ENCABEZADO -->

            <header class="inscripcion-header">

                <h1>Formulario de inscripción</h1>

                <p>
                    Completá los siguientes datos para solicitar
                    la inscripción a nuestra institución.
                </p>

            </header>


            <?php if ($enviado): ?>

                <!-- MENSAJE DE ÉXITO -->

                <div class="mensaje-exito">

                    <h2>Inscripción enviada correctamente</h2>

                    <p>
                        Los datos fueron recibidos correctamente.
                        En este momento la solicitud es solo una demostración
                        del funcionamiento del formulario.
                    </p>

                </div>

            <?php endif; ?>


            <!-- FORMULARIO -->

            <form
                action="inscripcion.php"
                method="POST"
                class="formulario-card"
                id="formInscripcion"
            >

              
                <section class="form-section">

                    <div class="form-section-title">

                        <span class="form-section-number">1</span>

                        <h2>Datos del estudiante</h2>

                    </div>


                    <div class="row g-3">

                        <!-- Nombre -->

                        <div class="col-md-6">

                            <label
                                for="nombre"
                                class="form-label"
                            >
                                Nombre
                            </label>

                            <input
                                type="text"
                                class="form-control"
                                id="nombre"
                                name="nombre"
                                placeholder="Ingresá el nombre"
                                required
                            >

                        </div>


                        <!-- Apellido -->

                        <div class="col-md-6">

                            <label
                                for="apellido"
                                class="form-label"
                            >
                                Apellido
                            </label>

                            <input
                                type="text"
                                class="form-control"
                                id="apellido"
                                name="apellido"
                                placeholder="Ingresá el apellido"
                                required
                            >

                        </div>


                        <!-- DNI -->

                        <div class="col-md-6">

                            <label
                                for="dni"
                                class="form-label"
                            >
                                DNI
                            </label>

                            <input
                                type="text"
                                class="form-control"
                                id="dni"
                                name="dni"
                                placeholder="Ej.: 45123456"
                                inputmode="numeric"
                                required
                            >

                        </div>


                        <!-- Fecha de nacimiento -->

                        <div class="col-md-6">

                            <label
                                for="fecha_nacimiento"
                                class="form-label"
                            >
                                Fecha de nacimiento
                            </label>

                            <input
                                type="date"
                                class="form-control"
                                id="fecha_nacimiento"
                                name="fecha_nacimiento"
                                required
                            >

                        </div>

                    </div>

                </section>




    <!-- DATOS ACADÉMICOS -->



                <section class="form-section">

                    <div class="form-section-title">

                        <span class="form-section-number">2</span>

                        <h2>Datos académicos</h2>

                    </div>


                    <div class="row g-3">

                        <!-- Curso -->

                        <div class="col-md-6">

                            <label
                                for="curso"
                                class="form-label"
                            >
                                Curso al que desea ingresar
                            </label>

                            <select
                                class="form-select"
                                id="curso"
                                name="curso"
                                required
                            >

                                <option value="" selected disabled>
                                    Seleccioná un curso
                                </option>

                                <?php foreach ($cursos as $numero => $nombre): ?>

                                    <option value="<?= $numero ?>">
                                        <?= htmlspecialchars($nombre) ?>
                                    </option>

                                <?php endforeach; ?>

                            </select>

                        </div>


                        <!-- Especialidad -->

                        <div
                            class="col-md-6"
                            id="especialidadContainer"
                        >

                            <label
                                for="especialidad"
                                class="form-label"
                            >
                                Especialidad
                            </label>

                            <select
                                class="form-select"
                                id="especialidad"
                                name="especialidad"
                            >

                                <option value="" selected disabled>
                                    Seleccioná una especialidad
                                </option>

                                <?php foreach ($especialidades as $valor => $nombre): ?>

                                    <option value="<?= htmlspecialchars($valor) ?>">
                                        <?= htmlspecialchars($nombre) ?>
                                    </option>

                                <?php endforeach; ?>

                            </select>

                            <span class="campo-ayuda">
                                Las especialidades están disponibles
                                a partir de 4.º año.
                            </span>

                        </div>

                    </div>

                </section>


    <!-- CONTACTO -->

                <section class="form-section">

                    <div class="form-section-title">

                        <span class="form-section-number">3</span>

                        <h2>Datos de contacto</h2>

                    </div>


                    <div class="row g-3">

                        <!-- Responsable -->

                         <!-- Nombre -->

                        <div class="col-md-6">

                            <label
                                for="nombre"
                                class="form-label"
                            >
                                Nombre
                            </label>

                            <input
                                type="text"
                                class="form-control"
                                id="nombre"
                                name="nombre"
                                placeholder="Ingresá el nombre"
                                required
                            >

                        </div>


                        <!-- Apellido -->

                        <div class="col-md-6">

                            <label
                                for="apellido"
                                class="form-label"
                            >
                                Apellido
                            </label>

                            <input
                                type="text"
                                class="form-control"
                                id="apellido"
                                name="apellido"
                                placeholder="Ingresá el apellido"
                                required
                            >

                        </div>



                        <!-- Teléfono -->

                        <div class="col-md-6">

                            <label
                                for="telefono"
                                class="form-label"
                            >
                                Teléfono
                            </label>

                            <input
                                type="tel"
                                class="form-control"
                                id="telefono"
                                name="telefono"
                                placeholder="Ej.: 343 1234567"
                                required
                            >

                        </div>


                        <!-- Email -->

                        <div class="col-12">

                            <label
                                for="email"
                                class="form-label"
                            >
                                Correo electrónico
                            </label>

                            <input
                                type="email"
                                class="form-control"
                                id="email"
                                name="email"
                                placeholder="ejemplo@correo.com"
                                required
                            >

                        </div>

                    </div>

                </section>


    <!-- INFORMACIÓN ADICIONAL -->
<section class="form-section">

    <div class="form-section-title">
        <span class="form-section-number">4</span>
        <h2>Información adicional</h2>
    </div>

    <div>
        <label for="observaciones" class="form-label">
            Observaciones
        </label>

        <textarea
            class="form-control"
            id="observaciones"
            name="observaciones"
            maxlength="255"
            placeholder="Podés agregar información que consideres importante..."
        ></textarea>

        <span id="contador-obs" class="char-counter">255 caracteres restantes</span>
    </div>

</section>   


                <!-- AVISO -->

                <div class="aviso-inscripcion">

                    <strong>Importante:</strong>

                    La información ingresada en este formulario
                    se utilizará únicamente para la solicitud
                    de inscripción.

                </div>


                <!-- BOTONES -->

                <div class="form-buttons">

                    <a
                        href="index.php"
                        class="btn-volver"
                    >
                        Volver al inicio
                    </a>


                    <button
                        type="submit"
                        class="btn-enviar"
                    >
                        Enviar inscripción
                    </button>

                </div>

            </form>

        </div>

    </main>



    <!-- JavaScript de inscripción -->

    <script>

        document.addEventListener("DOMContentLoaded", function () {

            const curso = document.getElementById("curso");
            const especialidadContainer =
                document.getElementById("especialidadContainer");

            const especialidad =
                document.getElementById("especialidad");


            function actualizarEspecialidad() {

                const cursoSeleccionado =
                    parseInt(curso.value);


                if (cursoSeleccionado >= 4) {

                    especialidadContainer.classList.add("visible");

                    especialidad.required = true;

                } else {

                    especialidadContainer.classList.remove("visible");

                    especialidad.required = false;

                    especialidad.value = "";

                }

            }


            curso.addEventListener(
                "change",
                actualizarEspecialidad
            );


        });






/* JavaScript de contador de cantidad de caracteres restantes  */ 

      const obs = document.getElementById('observaciones');
      const contador = document.getElementById('contador-obs');
      const limite = 255; /* Guarda el número máximo de caracteres en una variable.
                           Así si algún día cambiás el límite, solo tocás un lugar. */

      obs.addEventListener('input', function () { /* Le dice al <textarea>: "cada vez que el usuario
                                                   escriba, borre o pegue algo, ejecutá esta función". 
                                                   El evento input se dispara en cada cambio
                                                   (no solo al soltar la tecla, sino en cada tecla) */
      const restantes = limite - this.value.length; /* this → se refiere al <textarea> mismo
                                                    (porque la función está adentro del listener de ese 
                                                    elemento).
                                                   .value → el texto que hay adentro en ese momento.
                                                   .length → cuántos caracteres tiene ese texto.
                                                   limite - this.value.length → 255 menos 
                                                   lo que ya escribiste = cuántos te quedan */
      contador.textContent = `${restantes} caracteres restantes`;

      // Cambia a rojo cuando quedan pocos
      contador.style.color = restantes <= 20 ? 'red' : '';
     });   


    </script>

</body>

</html>