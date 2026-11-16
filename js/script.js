document.addEventListener("DOMContentLoaded", () => {

    /* =====================================================
       ELEMENTOS
    ====================================================== */

    const body = document.body;

    const pantallaInicio = document.getElementById("pantallaInicio");
    const especialidadPanel = document.getElementById("especialidadPanel");
    const contenido = document.getElementById("contenido");
    const materiasContainer = document.getElementById("materiasContainer");
    const talleresContainer = document.getElementById("talleresContainer");
    const materiasGrid = document.getElementById("materiasGrid");
    const talleresGrid = document.getElementById("talleresGrid");
    const tituloContenido = document.getElementById("tituloContenido");
    const etiquetaCurso = document.getElementById("etiquetaCurso");
    const especialidadTitulo = document.getElementById("especialidadTitulo");
    const especialidadDescripcion = document.getElementById("especialidadDescripcion");
    const especialidadCurso = document.getElementById("especialidadCurso");
    const imagenPrincipal = document.getElementById("imagenEspecialidadPrincipal");
    const imagenSecundaria = document.getElementById("imagenEspecialidadSecundaria");
    const btnMateriasEspecialidad = document.getElementById("btnMateriasEspecialidad");
    const btnTalleresEspecialidad = document.getElementById("btnTalleresEspecialidad");
    const volverEspecialidad = document.getElementById("volverEspecialidad");
    const volverInicio = document.getElementById("volverInicio");


    /* =====================================================
       ESTADO
    ====================================================== */

    let cursoActual = null;
    let especialidadActual = null;


    /* =====================================================
       FUNCIONES
    ====================================================== */

    function limpiarTemas() {
        body.classList.remove(
            "tema-informatica",
            "tema-aviacion",
            "tema-aerofotogrametria"
        );
    }

    function ocultarTodo() {
        pantallaInicio.classList.add("d-none");
        especialidadPanel.classList.add("d-none");
        contenido.classList.add("d-none");
    }

    function mostrarContenido() {
        pantallaInicio.classList.add("d-none");
        especialidadPanel.classList.add("d-none");
        contenido.classList.remove("d-none");
    }

    function mostrarEspecialidad() {
        pantallaInicio.classList.add("d-none");
        contenido.classList.add("d-none");
        especialidadPanel.classList.remove("d-none");
    }

    function actualizarImagenesEspecialidad() {
        imagenPrincipal.src = especialidadActual.imagen_principal;
        imagenPrincipal.alt = especialidadActual.nombre;

        if (especialidadActual.imagen_secundaria && especialidadActual.imagen_secundaria !== "") {
            imagenSecundaria.src = especialidadActual.imagen_secundaria;
            imagenSecundaria.alt = especialidadActual.nombre;
            imagenSecundaria.classList.remove("d-none");
        } else {
            imagenSecundaria.src = "";
            imagenSecundaria.alt = "";
            imagenSecundaria.classList.add("d-none");
        }
    }

    function mostrarMaterias(materias) {
        materiasContainer.classList.remove("d-none");
        talleresContainer.classList.add("d-none");
        tituloContenido.textContent = "Materias";

        materiasGrid.innerHTML = "";

        materias.forEach((materia, index) => {
            const columna = document.createElement("div");
            columna.className = "col-12 col-md-6 col-lg-4";

            columna.innerHTML = `
                <article class="materia-card">
                    <span class="materia-number">
                        ${(index + 1).toString().padStart(2, "0")}
                    </span>
                    <div class="materia-card-content">
                        <h3>${materia}</h3>
                        <span>Ver contenido</span>
                    </div>
                </article>
            `;

            materiasGrid.appendChild(columna);
        });
    }

    function mostrarTalleres(talleres) {
        materiasContainer.classList.add("d-none");
        talleresContainer.classList.remove("d-none");
        tituloContenido.textContent = "Talleres";

        talleresGrid.innerHTML = "";

        talleres.forEach((taller) => {
            const columna = document.createElement("div");
            columna.className = "col-12 col-md-6 col-lg-4";

            const imagen = taller.imagen
                ? `<img src="${taller.imagen}" alt="${taller.nombre}">`
                : "";

            columna.innerHTML = `
                <article class="flip-card" tabindex="0">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            ${imagen}
                            <div class="flip-card-overlay">
                                <h3>${taller.nombre}</h3>
                                <span>Click para conocer más</span>
                            </div>
                        </div>
                        <div class="flip-card-back">
                            <span class="back-label">TALLER</span>
                            <h3>${taller.nombre}</h3>
                            <p>${taller.descripcion}</p>
                            <span class="flip-hint">Click para volver</span>
                        </div>
                    </div>
                </article>
            `;

            talleresGrid.appendChild(columna);
        });

        activarFlipCards();
    }

    function activarFlipCards() {
        const tarjetas = document.querySelectorAll(".flip-card");

        tarjetas.forEach((tarjeta) => {
            tarjeta.addEventListener("click", () => {
                tarjeta.classList.toggle("girada");
            });

            tarjeta.addEventListener("keydown", (event) => {
                if (event.key === "Enter" || event.key === " " || event.code === "Space") {
                    event.preventDefault();
                    tarjeta.classList.toggle("girada");
                }
            });
        });
    }


    /* =====================================================
       CURSOS 1° - 3°
    ====================================================== */

    document.querySelectorAll(".opcion-contenido").forEach((boton) => {
        boton.addEventListener("click", () => {
            const numeroCurso = boton.dataset.curso;
            const tipo = boton.dataset.tipo;

            cursoActual = cursos[numeroCurso];
            especialidadActual = null;

            limpiarTemas();
            mostrarContenido();

            etiquetaCurso.textContent = cursoActual.nombre.toUpperCase();
            volverEspecialidad.classList.add("d-none");

            if (tipo === "materias") {
                mostrarMaterias(cursoActual.materias);
            } else {
                mostrarTalleres(cursoActual.talleres);
            }
        });
    });


    /* =====================================================
       ESPECIALIDADES
    ====================================================== */

    document.querySelectorAll(".opcion-especialidad").forEach((boton) => {
        boton.addEventListener("click", () => {
            const numeroCurso = boton.dataset.curso;
            const idEspecialidad = boton.dataset.especialidad;

            especialidadActual = especialidades[idEspecialidad];
            cursoActual = { nombre: `${numeroCurso}° año`, numero: parseInt(numeroCurso) };

            limpiarTemas();
            body.classList.add(especialidadActual.clase);

            especialidadTitulo.textContent = especialidadActual.nombre;
            especialidadDescripcion.textContent = especialidadActual.descripcion;
            especialidadCurso.textContent = cursoActual.nombre.toUpperCase();

            actualizarImagenesEspecialidad();
            mostrarEspecialidad();
        });
    });


    /* =====================================================
       BOTÓN MATERIAS DE ESPECIALIDAD
    ====================================================== */

    btnMateriasEspecialidad.addEventListener("click", () => {
        if (!especialidadActual) return;

        mostrarContenido();

        etiquetaCurso.textContent =
            cursoActual.nombre.toUpperCase() + " · " + especialidadActual.nombre.toUpperCase();

        volverEspecialidad.classList.remove("d-none");

        mostrarMaterias(especialidadActual.materias[cursoActual.numero] || []);
    });


    /* =====================================================
       BOTÓN TALLERES DE ESPECIALIDAD
    ====================================================== */

    btnTalleresEspecialidad.addEventListener("click", () => {
        if (!especialidadActual) return;

        mostrarContenido();

        etiquetaCurso.textContent =
            cursoActual.nombre.toUpperCase() + " · " + especialidadActual.nombre.toUpperCase();

        volverEspecialidad.classList.remove("d-none");

        mostrarTalleres(especialidadActual.talleres);
    });


    /* =====================================================
       VOLVER A ESPECIALIDAD
    ====================================================== */

    volverEspecialidad.addEventListener("click", () => {
        if (!especialidadActual) return;
        mostrarEspecialidad();
    });


    /* =====================================================
       VOLVER AL INICIO
    ====================================================== */

    volverInicio.addEventListener("click", (event) => {
        event.preventDefault();

        limpiarTemas();

        cursoActual = null;
        especialidadActual = null;

        contenido.classList.add("d-none");
        especialidadPanel.classList.add("d-none");
        pantallaInicio.classList.remove("d-none");

        volverEspecialidad.classList.add("d-none");
    });

});   
