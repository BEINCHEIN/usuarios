//@Andres Santacruz
		
var formulario = document.getElementById('registro');
var respuesta = document.getElementById('respuesta');
formulario.addEventListener('submit',function(e){ 

    e.preventDefault();
    console.log('dio click')
    
    var datos = new FormData(formulario);
    //imprimir por consola los datos capturados
    console.log(datos)
    console.log(datos.get('nombres'))
    console.log(datos.get('apellidos'))
    console.log(datos.get('fecha_nac'))
    console.log(datos.get('profesion'))
    console.log(datos.get('departamento'))
    console.log(datos.get('estado'))
    
    fetch('add_forms1.php', {
        method: 'POST',
        body: datos
    })
        .then(res => res.json())
        .then(data=>{
            console.log(data)
            if(data === 'error'){
                respuesta.innerHTML= `
                <div class="alert alert-danger"role="alert">
                    error no se logro insertar datos
                </div>
                `
            }else{

                respuesta.innerHTML=`
                <div class="alert alert-primary"role="alert">
                    ${data}
                </div>
                `
                document.getElementById("registro").reset();
            }

        })
        
})

