document.addEventListener('DOMContentLoaded',function(){
    document.querySelector('form').addEventListener('submit',function(event){
        var nombre=document.querySelector('[name="nombre"]').value;
        var email=document.querySelector('[name="email"]').value;
        var mensaje=document.querySelector('[name="mensaje"]').value;

        if(nombre === '' || email === '' || mensaje === '' ){
            alert('Todos los campos son obligatorios');
            event.preventDefault();
    }else if (!/\S+@\S+\.\S+/.test(email)){
        alert('El correo electronico no es valido');
        event.preventDefault();
    }
    }); 
});