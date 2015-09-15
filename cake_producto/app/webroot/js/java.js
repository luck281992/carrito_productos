

//valida el formulario y enviarlo al archivo

function registro(email,nombre,direccion,ciudad,estado,telefono,user,contra) {



$(document).ready(function() {   

if(email=="")

{

  alert("falta contenido email ");

return false;

}

 if(nombre=="")

{

  alert("falta contenido nombre ");

return false;

}

if(direccion=="")

{

  alert("falta contenido direccion ");

return false;

}

if(ciudad=="")

{

  alert("falta contenido ciudad ");

return false;

}

 if(estado=="")

{

  alert("falta contenido estado ");

return false;

}

if(telefono=="")

{

  alert("falta contenido telefono ");

return false;

}

 if(user=="")

{

  alert("falta contenido usuario ");

return false;

}

 if(contra=="")

{

  alert("falta contenido contraseña ");

return false;

}

   $("body").load("registro.php",{email: email, nombre: nombre, direccion: direccion, ciudad: ciudad, estado: estado, telefono: telefono, user: user, contra: contra},function(){

        

        });

            });

          

}





function validarlogin(user,contra){



  

       $(document).ready(function() {   

       if(user=="")

      {

     alert("falta contenido Nombre ");

      return false;

      }

     if(contra=="")

      {

      alert("falta contenido contraseña ");

      return false;

      }

      

                  $("body").load("test.php",{user: user, contra: contra},function(){

      

        });

            });

     

      

      

   }







function validarsub(sku,nombre,precio,existencia,descripcion,destacado,ndestacado,marcas,usos,statusa,statusn,generos,imagen) {





if(sku=="")

{

  alert("falta contenido sku ");

return false;

}

 if(nombre=="")

{

  alert("falta contenido nombre ");

return false;

}

if(precio=="")

{

  alert("falta contenido precio ");

return false;

}

 if(existencia=="")

{

  alert("falta contenido existencia ");

return false;

}

if(descripcion=="")

{

  alert("falta contenido descripcion ");

return false;

}



 if(marcas=="-marcas-")

{

  alert("elija opcion en marcas ");

return false;

}

if(usos=="-usos-")

{

  alert("elija opcion en usos ");

return false;

}

if(generos=="-genero-")

{

  alert("elija opcion en el genero");

return false;

}

if(imagen=="")

{

  alert("escriba el nombre de la imagen ");

return false;

}

 return true; 

       

}





function textnomb() {

 if ((event.keyCode != 32) && (event.keyCode < 65) || (event.keyCode > 90) && (event.keyCode < 97) || (event.keyCode > 122))

  event.returnValue = false;

}



function textnumero() {

 if ((event.keyCode < 48) || (event.keyCode > 57) ) 

  event.returnValue = false;

 } 



 function numero() {

 if ((event.keyCode < 48) || (event.keyCode > 57)) 

  event.returnValue = false;



 } 



 function borrar(id){

$(document).ready(function() {

  if(confirm("estas seguro que deseas borrar?")){

  $("#abajo").load("admin_delete.php?id="+id);

  }     

        });

 }





   function editar(id){

  $(document).ready(function() {

    if(confirm("estas seguro que deseas modificar?")){

    $("html").load("admin_edit.php?id="+id);

  }

        });

                     

  }





  function validar(nombre,email){



  

       $(document).ready(function() {   

       if(nombre=="")

      {

      alert("falta contenido Nombre ");

      return false;

      }

      if(email=="")

      {

      alert("falta contenido email ");

      return false;

      }

      

                  $("#abajo").load("email.php",{nombre: nombre, email: email},function(){

      

        });

            });

     

      

      

   }



  

    function borrarcarrito(id){

$(document).ready(function() {

  if(confirm("estas seguro que deseas borrar?")){

  $("html").load("borrarcarrito.php?id="+id);

  }     

        });

 }





    function buscar(texto){

$(document).ready(function() {

  if(confirm("estas seguro que deseas buscar esto?")){

  $("#table1").load("buscar?texto="+texto);

  }     

        });

 }



 function key(){

   document.getElementById('busca').value="";

 }



