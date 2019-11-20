@extends('layouts.app')

@section('title', 'Examen')

@section('content')

  <h3>Nueva tienda</h3>
  <form action="{{route('tiendas.store')}}" method="POST">
    @csrf
    Nombre:<br>
    <input type="text" name="name" value="{{old('name')}}">
    @if($errors->has('name'))
    <span>{{$errors->first('name')}}</span>
    @endif
    <br><br>
    Descripción:<br>
    <input type="text" name="description" value="{{old('description')}}">
    @if($errors->has('description'))
    <span>{{$errors->first('description')}}</span>
    @endif
    <br><br>
    contraseña:<br>
    <input type="text" name="password" value="{{old('password')}}">
    @if($errors->has('password'))
    <span>{{$errors->first('password')}}</span>
    @endif
    <br><br>
    email:<br>
    <input type="email" name="email" value="{{old('email')}}">
    @if($errors->has('email'))
    <span>{{$errors->first('email')}}</span>
    @endif
    <br><br>
    likes:<br>
    <input type="number" name="likes" value="{{old('likes')}}">
    @if($errors->has('likes'))
    <span>{{$errors->first('likes')}}</span>
    @endif
    <br><br>

    <button class="buttonform" type="submit" name="submit">Crear</button>
  </form>
  <br>

@endsection
