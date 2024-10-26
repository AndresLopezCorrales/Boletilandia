export let disponibilidadAsientos = {};

// Inicializar los asientos en disponibilidad
document.addEventListener('DOMContentLoaded', () => {
    const idEvento = document.getElementById('mostrarInfoAsiento').getAttribute('data-idEvento');

    let savedDisponibilidad = localStorage.getItem(`disponibilidadAsientos_${idEvento}`);
    if (savedDisponibilidad) {
        disponibilidadAsientos = JSON.parse(savedDisponibilidad);

        // Actualizar los colores de los círculos según la disponibilidad
        for (const [claveAsiento, disponible] of Object.entries(disponibilidadAsientos)) {
            if (!disponible) { // Si no está disponible
                let [seccion, numeroAsiento] = claveAsiento.split('_'); // Descomponer la clave en sección y asiento
                let asientoElement = document.querySelector(`.asiento[xlink\\:data-asiento='${numeroAsiento}'][xlink\\:data-seccion='${seccion}'] circle`);
                if (asientoElement) {
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
            if (disponibilidadAsientos[claveAsiento]) {
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
