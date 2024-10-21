

var asiento = document.querySelectorAll(".asiento");


asiento.forEach(asiento => {
    asiento.addEventListener('click', (event) => {
        event.preventDefault();

        let title = asiento.getAttribute('xlink:title');
        let seccion = asiento.getAttribute('xlink:data-seccion');
        let numeroAsiento = asiento.getAttribute('xlink:data-asiento');
        let precio = asiento.getAttribute('xlink:data-precio');
        let visi = asiento.getAttribute('xlink:data-visi');
        let dispo = asiento.getAttribute('xlink:data-dispo');

        if (dispo === 'Si') {
            // Mostrar la información en el modal
            document.getElementById('mostrarInfoAsiento').innerHTML = `
                <p>Asiento: ${title}</p>
                <p>Sección: ${seccion}</p>
                <p>Precio: $${precio}</p>
                <p>Visibilidad: ${visi}</p>
                <button id="comprarBtn" data-asiento="${numeroAsiento}" data-seccion="${seccion}" data-precio="${precio}" data-visi="${visi}" data-dispo="${dispo}">
                    Comprar
                </button>
            `;
        }
    });
});
