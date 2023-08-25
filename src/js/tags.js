(function() {
    const tagsInput = document.querySelector('#tags_input')

    if(tagsInput){

        let tags = [];

        //Escuchar los cambios
        tagsInput.addEventListener('keypress', guardarTag)

        function guardarTag(e){
            if(e.keycode === 44) {
                if(e.target.value.trim() === '' || e.target.value < 1) {
                    return
                }
                e.preventDefault();
                tags = [...tags, e.target.value.trim()];
                tagsInput.value = '';

                mostrarTags();
            }
        }

        function mostrarTags() {
            tagsDiv.textContent = '';
            
            tags.forEach( tag => {
                const etiqueta = document.createElement('LI');
                etiqueta.classList.add('formulario__tag')
                etiqueta.textContent = tag;
                tagsDiv.appendChild(etiqueta)
            })
        }
    }
})()
