document.addEventListener('DOMContentLoaded', () => {
    // Acceder a los datos que se inyectaron en el objeto global
    const evento = window.eventoData.evento;
    const secciones = window.eventoData.secciones;
    let disponibilidadAsientos = {};

    // Imprimir en la consola la información de la sección y los asientos
    console.log(`Evento: ${evento.NombreEvento}`); // Imprime el nombre del evento


    // Iterar sobre las secciones
    secciones.forEach(seccion => {
        //console.log(`Sección: ${seccion.letra_seccion}`); // Imprime la letra de la sección
        let letraSeccion = `${seccion.letra_seccion}`;

        seccion.asientos.forEach(asiento => {
            //console.log(`Asiento: ${asiento.numero_asiento}`); // Imprime el número de asiento y su disponibilidad
            let numeroAsiento = `${asiento.numero_asiento}`;

            let asientoElement = document.querySelector(`.asiento[xlink\\:data-asiento='${numeroAsiento}'][xlink\\:data-seccion='${letraSeccion}'] circle`);
            console.log(asientoElement);
            if (asientoElement) {
                asientoElement.classList.add('desactivado');


                disponibilidadAsientos[`${letraSeccion}_${numeroAsiento}`] = false;

            } else {
                disponibilidadAsientos[`${letraSeccion}_${numeroAsiento}`] = true;

            }
        });

    });

    /*
    asientoElement.setAttribute('fill', 'red'); // Cambiar el color del círculo a rojo
                    }
                }
            }
        }
    
        // Inicializar los asientos en disponibilidad
        document.querySelectorAll('.asiento').forEach(asiento => {
            const numeroAsiento = asiento.getAttribute('xlink:data-asiento');
            const seccion = asiento.getAttribute('xlink:data-seccion'); // Obtener la sección del asiento
            const claveAsiento = `${seccion}_${numeroAsiento}`; // Crear clave
    
            if (!(claveAsiento in disponibilidadAsientos)) {
                disponibilidadAsientos[claveAsiento] = true; // 'true' significa disponible
            }
        });
        */




    //------------------Comienza el Get Attributes-------------------------
    var asiento = document.querySelectorAll(".asiento");


    asiento.forEach(asiento => {
        asiento.addEventListener('click', (event) => {
            event.preventDefault();

            let title = asiento.getAttribute('xlink:title');
            let seccion = asiento.getAttribute('xlink:data-seccion');
            let numeroAsiento = asiento.getAttribute('xlink:data-asiento');
            let precio = asiento.getAttribute('xlink:data-precio');
            let visi = asiento.getAttribute('xlink:data-visi');

            const claveAsiento = `${seccion}_${numeroAsiento}`;
            if (!disponibilidadAsientos[claveAsiento]) {
                // Mostrar la información en el modal
                document.getElementById('mostrarInfoAsiento').innerHTML = `
                <p>Asiento: ${title}</p>
                <p>Sección: ${seccion}</p>
                <p>Precio: $${precio}</p>
                <p>Visibilidad: ${visi}</p>
                <button id="comprarBtn" data-asiento="${numeroAsiento}" data-seccion="${seccion}" data-precio="${precio}" data-visi="${visi}">
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
