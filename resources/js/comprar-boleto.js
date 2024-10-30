import { disponibilidadAsientos } from '/resources/js/get-attributes.js'; // Importar la variable


document.addEventListener('click', (event) => {
    if (event.target.id === 'comprarBtn') {

        let asiento = event.target.getAttribute('data-asiento');
        let seccion = event.target.getAttribute('data-seccion');
        let precio = event.target.getAttribute('data-precio');
        let visi = event.target.getAttribute('data-visi');
        let idEvento = document.getElementById('mostrarInfoAsiento').getAttribute('data-idEvento');
        //let asientoElement = document.querySelector(`.asiento[data-asiento='${asiento}'][data-seccion='${seccion}']`);

        // Cambiar la disponibilidad del asiento
        const claveAsiento = `${seccion}_${asiento}`; // Crear una clave combinando sección y asiento
        disponibilidadAsientos[claveAsiento] = false; // Marcar como no disponible

        // Guardar en localStorage con el id del evento
        localStorage.setItem(`disponibilidadAsientos_${idEvento}`, JSON.stringify(disponibilidadAsientos)); // Guardar en localStorage

        // Cambiar el color del círculo en el SVG
        let asientoElement = document.querySelector(`.asiento[xlink\\:data-asiento='${asiento}'][xlink\\:data-seccion='${seccion}'] circle`);
        if (asientoElement) {
            asientoElement.classList.add('desactivado'); // Cambiar visualmente el estado del asiento
        }


        var form = document.createElement('form');
        form.style.display = 'none';
        form.method = 'POST';
        form.action = '/comprar-asiento'; // Ruta a la que se envía el formulario

        var inputAsiento = document.createElement('input');
        var inputSeccion = document.createElement('input');
        var inputPrecio = document.createElement('input');
        var inputVisi = document.createElement('input');
        var inputIdEvento = document.createElement('input');
        var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content'); // CSRF token

        // Agregar el token CSRF
        var inputToken = document.createElement('input');
        inputToken.type = 'hidden';
        inputToken.name = '_token';
        inputToken.value = csrfToken;

        // Definir los valores de los campos
        inputAsiento.type = 'hidden';
        inputAsiento.name = 'numero_asiento';
        inputAsiento.value = asiento;

        inputSeccion.type = 'hidden';
        inputSeccion.name = 'letra_seccion';
        inputSeccion.value = seccion;

        inputPrecio.type = 'hidden';
        inputPrecio.name = 'precio';
        inputPrecio.value = precio;

        inputVisi.type = 'hidden';
        inputVisi.name = 'info-visibilidad';
        inputVisi.value = visi;

        inputIdEvento.type = 'hidden';
        inputIdEvento.name = 'id_evento';
        inputIdEvento.value = idEvento;

        // Agregar los campos al formulario
        form.appendChild(inputAsiento);
        form.appendChild(inputSeccion);
        form.appendChild(inputPrecio);
        form.appendChild(inputVisi);
        form.appendChild(inputIdEvento);
        form.appendChild(inputToken); // Token CSRF

        // Agregar el formulario al documento
        document.body.appendChild(form);

        // Enviar el formulario
        form.submit();






    }
});
