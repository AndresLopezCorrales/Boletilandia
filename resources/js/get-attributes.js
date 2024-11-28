document.addEventListener('DOMContentLoaded', () => {
    // Acceder a los datos que se inyectaron en el objeto global
    const evento = window.eventoData.evento;
    const secciones = window.eventoData.secciones;
    let disponibilidadAsientos = {}; //Guardar que asientos estan ocupados

    // Imprimir en la consola la información de la sección y los asientos
    console.log(`Evento: ${evento.NombreEvento}`); // Imprime el nombre del evento


    // Iterar sobre las secciones
    secciones.forEach(seccion => {
        let letraSeccion = `${seccion.letra_seccion}`;

        seccion.asientos.forEach(asiento => {

            let numeroAsiento = `${asiento.numero_asiento}`;
            let asientoElement = document.querySelector(`.asiento[xlink\\:data-asiento='${numeroAsiento}'][xlink\\:data-seccion='${letraSeccion}'] circle`);

            console.log(asientoElement);

            //Bloquear asientos y ponerlos en rojo los que ya estan ocupados
            if (asientoElement) {
                asientoElement.classList.add('desactivado');
                disponibilidadAsientos[`${letraSeccion}_${numeroAsiento}`] = false;

            } else {
                disponibilidadAsientos[`${letraSeccion}_${numeroAsiento}`] = true;

            }
        });

    });

    //------------------Comienza el Get Attributes-------------------------
    var asiento = document.querySelectorAll(".asiento");
    var asientoPintado = null;

    asiento.forEach(asiento => {
        asiento.addEventListener('click', (event) => {
            event.preventDefault();

            if (asientoPintado) {
                asientoPintado.style.fill = "";
            }

            asiento.style.fill = "green";

            asientoPintado = asiento;


            let title = asiento.getAttribute('xlink:title');
            let seccion = asiento.getAttribute('xlink:data-seccion');
            let numeroAsiento = asiento.getAttribute('xlink:data-asiento');
            let precio = asiento.getAttribute('xlink:data-precio');
            let visi = asiento.getAttribute('xlink:data-visi');

            const claveAsiento = `${seccion}_${numeroAsiento}`;
            if (!disponibilidadAsientos[claveAsiento]) {
                // Mostrar la información en el DIV de Seleccion Boleto
                document.getElementById('mostrarInfoAsiento').innerHTML = `
                <h1 class="text-6xl text-bold mt-14 group-hover:text-blue-900">Asiento: ${title}</h1>

                <div class="mt-20">
                    <p class="text-center text-gray-900 text-3xl mb-2">Sección:<br> ${seccion}</p>
                    <p class="text-center text-blue-950 text-3xl mb-2">Precio:<br> $${precio}</p>
                    <p class="text-center text-gray-800 text-2xl mb-8">Visibilidad:<br> ${visi}</p> 
                </div>
                
                
                <button id="comprarBtn" 
                        data-asiento="${numeroAsiento}" 
                        data-seccion="${seccion}" 
                        data-precio="${precio}" 
                        data-visi="${visi}"
                        class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    Comprar
                </button>
            `;
            } else {
                document.getElementById('mostrarInfoAsiento').innerHTML = `
                <p>Asiento: NO DISPONIBLE</p>`;
            }



        });
    });
});
