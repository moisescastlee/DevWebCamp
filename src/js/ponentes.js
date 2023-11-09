(function(){
    const ponentesInput = document.querySelector('#ponentes');
    
    if(ponentesInput) {
        let ponentes = [];
        let ponentesFiltrados = [];

        obtenerPonentes();

        async function obtenerPonentes() {

           const url = `/api/eventos-horario?dia_id=${dia}&categoria_id=${categoria_id}`;
           const resultado = await fetch(url);
           const eventos = await resultado.json();
           
        }
    }

})();