(function(){
    const horas = document.querySelector('#horas')

    if(horas) {
        let busqueda = {
            categoria_id: '',
            dia: ''
        }

       const categoria = document.querySelector('[name="categoria_id"]');
       const dias = document.querySelectorAll('[name="dia"]');
       const inputHiddenDia = document.querySelector('[name="dia_id"]');
       const inputHiddenHora = document.querySelector('[name="hora_id"]');

       categoria.addEventListener('change', terminoBusqueda) 
       dias.forEach( dia => dia.addEventListener('change', terminoBusqueda))

       function terminoBusqueda(e) {

        busqueda[e.target.name] = e.target.value;

        //Reiniciar los campos ocultos y selector de horas
        inputHiddenHora.value = '';
        inputHiddenDia.value = '';
        const horaPrevia = document.querySelector('.horas__hora--seleccionada')
            if(horaPrevia) {
                horaPrevia.classList.remove('horas__hora--seleccionada')
              }

        
        if(Object.values(busqueda).includes('')) {
                return
          }
            buscarEventos();
        }

       async function buscarEventos() {
          const {dia, categoria_id} = busqueda 
          const url = `/api/eventos-horario?dia_id=${dia}&categoria_id=${categoria_id}`;
          
          const resultado = await fetch(url);
          const eventos = await resultado.json();

         
          
          obtenerHorasDisponibles(eventos);
       }

       function obtenerHorasDisponibles(eventos) {
        //Reiniciar las horas
            const listadoHoras = document.querySelectorAll('#horas li');
            listadoHoras.forEach(li=> li.classList.add('horas__hora--deshabilitada'))
        
        // Comprobar eventos ya tomados, y quitar la varibale de deshabilitado
            const horasTomadas = eventos.map( evento => evento.hora_id);
            const listadoHorasArray = Array.from(listadoHoras);
            
            const resultado = listadoHorasArray.filter( li => !horasTomadas.includes(li.dataset.horaId) );
            resultado.forEach(li => li.classList.remove('horas__hora--deshabilitada'))

            const HorasDisponibles = document.querySelectorAll('#horas li:not(.horas__hora--deshabilitada)');
            HorasDisponibles.forEach( hora => hora.addEventListener('click', seleccionarHora));
       }

       function seleccionarHora(e) {

            //Desabilitar hora previa
            const horaPrevia = document.querySelector('.horas__hora--seleccionada')
                if(horaPrevia) {
                    horaPrevia.classList.remove('horas__hora--seleccionada')
                 }

            //Agregar clase de seleccionado
            e.target.classList.add('horas__hora--seleccionada')
            inputHiddenHora.value = e.target.dataset.horaId
            //Llenar campo oculto de ID
            inputHiddenDia.value = document.querySelector('[name="dia"]:checked').value
       }
    }
})();