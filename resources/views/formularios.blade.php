<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento PDF</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        /* Define el tamaño de letra para el cuerpo del documento */
        body {
            font-size: 10px; /* Tamaño de letra de 12px */
        }
    </style>

        <style>
                  h3 {
            color: #ffa500; /* Cambia el color del texto a azul */
            font-size: 18px; /* Tamaño de letra */
            width: 100%;
        }
        /* Estilos para el título h1 */
        h4 {
            color: #333; /* Color del texto */
            font-size: 16px; /* Tamaño de letra */
            font-weight: bold; /* Peso de la fuente */
            /* Otros estilos que desees aplicar */
        }
        
        /* Estilos para el título h2 */
        h5 {
            color: #333; /* Color del texto */
            font-size: 12px; /* Tamaño de letra */
            /* Otros estilos que desees aplicar */
        }
        h2 {
            text-align: right; /* Alinea el texto a la derecha */
            color: #ffa500;
            font-size: 16px; /* Tamaño de letra */
        }
    </style>
            <style>

        /* Estilos para la tabla */
        table {
            border-collapse: collapse;
            width: 100%;
        }

         th, td {
            border: 1px solid #000;
            padding: 1px;
            text-align: left;
        }
    </style>
    
</head>
<body>
 <h3>Equipo de Computación COTEL RL-Sistemas</h3>   <h5>Datos del usuario</h5>
<table class="table table-sm"> 

  <tbody>
    <tr>
        <th>Codigo: <td>{{$formulariopdf->usuario->codigo}}</td></th>
        <th>Usuario: <td>{{$formulariopdf->usuario->usuario}}</td></th>
        <th>Regional: <td>{{$formulariopdf->usuario->regional}}</td></th>
    </tr>
    <tr>
        <th>Piso: <td>{{$formulariopdf->usuario->piso}}</td></th>
        <th>Departamento: <td colspan="3">{{$formulariopdf->usuario->departamento}}</td></th>
    </tr>
  </tbody>
</table>
<h5>Datos del Cpu</h5>    
<table class="table table-sm">
  <tbody>
    <tr>
        <th>Codigo: <td colspan="2">{{$formulariopdf->cpu->codigo}}</td></th>
        <th>Marca: <td>{{$formulariopdf->cpu->marca}}</td></th>
        <th>Modelo: <td colspan="2">{{$formulariopdf->cpu->modelo}}</td></th>
    </tr>
    <tr>
        <th>Procesador: <td>{{$formulariopdf->cpu->procesador}}</td></th>
        <th>RAM: <td>{{$formulariopdf->cpu->ram}}</td></th>
        <th>HDD: <td colspan="3">{{$formulariopdf->cpu->hdd}}</td></th>
    </tr>
    <tr>
        <th>CD: <td>{{$formulariopdf->cpu->cd}}</td></th>
        <th>DVD: <td>{{$formulariopdf->cpu->dvd}}</td></th>
        <th>Floppy: <td colspan="3">{{$formulariopdf->cpu->floppy}}</td></th>
        <tr><th >Serie: <td colspan="7">{{$formulariopdf->cpu->serie}}</td></th></tr>
    </tr>
  </tbody>
</table>

<h5>Datos del Monitor</h5> 
<table class="table table-sm">   
  <tbody>
    <tr>
        <th>Codigo: <td colspan="1">{{$formulariopdf->monitor->codigo}}</td></th>
        <th>Marca: <td>{{$formulariopdf->monitor->marca}}</td></th>
        <th>Modelo: <td colspan="2">{{$formulariopdf->monitor->modelo}}</td></th>
    </tr>
    <tr>
        <th>Serie: <td>{{$formulariopdf->monitor->serie}}</td></th>
        <th>Tamaño: <td>{{$formulariopdf->monitor->tamaño}}</td></th>
        <th>Tipo: <td colspan="2">{{$formulariopdf->monitor->tipo}}</td></th>
    </tr>
  </tbody>
</table>

<h5>Datos del Teclado</h5> 
<table class="table table-sm">   
  <tbody>
    <tr>
        <th>Codigo: <td>{{$formulariopdf->teclado->codigo}}</td></th>
        <th>Marca: <td>{{$formulariopdf->teclado->marca}}</td></th>
        <th>Serie: <td>{{$formulariopdf->teclado->serie}}</td></th>
    </tr>
  </tbody>
</table>

<h5>Datos del Raton</h5> 
<table class="table table-sm">   
  <tbody>
    <tr>
        <th>Codigo: <td>{{$formulariopdf->raton->codigo}}</td></th>
        <th>Marca: <td>{{$formulariopdf->raton->marca}}</td></th>
        <th>Serie: <td>{{$formulariopdf->raton->serie}}</td></th>
    </tr>
  </tbody>
</table>

<h5>Datos de los Parlantes</h5>
<table class="table table-sm">    
  <tbody>
    <tr>
        <th>Codigo: <td>{{$formulariopdf->parlante->codigo}}</td></th>
        <th>Marca: <td>{{$formulariopdf->parlante->marca}}</td></th>
        <th>Serie: <td>{{$formulariopdf->parlante->serie}}</td></th>
    </tr>
  </tbody>
</table>
<h5>Datos de la Impresora</h5>
<table class="table table-sm">    
  <tbody>
    <tr>
        <th>Codigo: <td>{{$formulariopdf->impresora->codigo}}</td></th>
        <th>Marca: <td>{{$formulariopdf->impresora->marca}}</td></th>
        <th>Modelo: <td>{{$formulariopdf->impresora->modelo}}</td> </th>
    </tr> 
    <tr>
        <th>Tipo: <td>{{$formulariopdf->impresora->tipo}}</td></th>
        <th>Serie: <td colspan="3">{{$formulariopdf->impresora->serie}}</td></th>
    </tr>
  </tbody>
</table>
<h5>Datos de Otro Dispositivo</h5>

<table class="table table-sm">    
  <tbody>
    <tr>
        <th>Codigo: <td>{{$formulariopdf->otrodispositivo->codigo}}</td></th>
        <th>Dispositivo: <td>{{$formulariopdf->otrodispositivo->dispositivo}}</td></th>
        <th>Marca: <td colspan="2">{{$formulariopdf->otrodispositivo->marca}}</td></th>
    </tr>
    <tr>
        <th>Modelo: <td>{{$formulariopdf->otrodispositivo->modelo}}</td> </th>
        <th>Tipo: <td>{{$formulariopdf->otrodispositivo->tipo}}</td></th>
        <th>Serie: <td colspan="2">{{$formulariopdf->otrodispositivo->serie}}</td></th>
    </tr>
  </tbody>
</table>



<h5>Datos del Formulario</h5> 
<table class="table table-sm">   
  <tbody>
    <tr>
        <th>Codigo: <td>{{$formulariopdf->codigo}}</td></th>
        <th>Nro de Formulario: <td>{{$formulariopdf->nroformulario}}</td></th>
        <th>Fecha: <td>{{$formulariopdf->fecha}}</td></th>
    </tr>
    <tr>
    <th>Detalle del trabajo: <td colspan="5">{{$formulariopdf->detalletrabajo}}</td></th>
    </tr>
  </tbody>
</table>

<h5>Nuevo Usuario</h5>  
<table class="table table-sm">  
  <tbody>
    <tr>
        <th>Codigo: <td>{{$formulariopdf->codigonuevo}}</td></th>
        <th>Nombre: <td>{{$formulariopdf->nombre}}</td></th>
        <th>Gerencia: <td>{{$formulariopdf->gerencia}}</td></th>
    </tr>
    <tr>
    <th>Regional: <td>{{$formulariopdf->regional}}</td></th>
    <th>Departamento: <td>{{$formulariopdf->departamento}}</td></th>
    <th>Fecha Actual: <td>{{$formulariopdf->fechaactual}}</td></th>
    <tr><th>Firma: <td colspan="5"></td> </th></tr>
    
    </tr>
  </tbody>
</table>
<h5>EL USUARIO es responsable del mantenimiento y cuidado del equipo de computacion que se encuentra bajo su responsabilidad, por lo que cualquier perdida, o daño o por mal uso sera responsabilidad del usuario al cual es asignado es este equipo</h5>
</body>
</html>