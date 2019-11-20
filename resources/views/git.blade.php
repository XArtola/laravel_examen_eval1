@extends('layouts.app')

@section('title', 'UD5. ORM Eloquent')

@section('content')

  Introduce el resultado del ejercicio de git (ejercicio 2).
  <h1>¿Qué deberías realizar para fusionar esta rama con la rama master? Indica los co
mandos necesarios para ello.</h1>
  <ol>
      <li>Movernos a la rama master con git checkout master</li>
      <li>git merge tarea1</li>
    </ol>

   <h1> Indica en que consiste el modelo vista-controlador. Describe brevemente cada uno de los componente
s que lo forman.</h1>
<p>El modelo vista controlador es una tipo de arquitectura software utilizado para el diseño de aplicaciones web. Consta de tres componentes principales</p>
<ol>
      <li>Modelo: Se encarga de la gestioón de los datos. Esta será la encargada de los select, insert, update y delete</li>
      <li>Vista: Es lo que es usuario ve la parte que se mostrará en el navegador. Muestra la información de las BD</li>
      <li>Controlador: Atiende a los eventos que genera el usuario. Es el puente entre Vista y modelo</li>
    </ol>

@endsection