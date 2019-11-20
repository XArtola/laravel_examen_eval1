@extends('layouts.app')

@section('title', 'Examen')

@section('content')

  <h3>Nueva tienda</h3>
  <form action="{{route('tiendas.store')}}" method="POST">
    @csrf
    Nombre:<br>
    <input type="text" name="name">
    <br><br>
    Descripción:<br>
    <input type="text" name="description">
    <br><br>
    contraseña:<br>
    <input type="text" name="password">
    <br><br>
    email:<br>
    <input type="email" name="email">
    <br><br>
    likes:<br>
    <input type="number" name="likes">
    <br><br>

    <button class="buttonform" type="submit" name="submit">Crear</button>
  </form>
  <br>

@endsection
