@extends('layouts.plantilla')

@section('title', 'Cursos Create')

@section('content')
    <h1>En esta pagina podras crear un curso</h1>
    <form action="{{route('cursos.store')}}" method="POST">

        @csrf

        <label>Nombre:
            <br>
            <input type="text" name="name" value="{{old('name')}}">
        </label>

        @error('name')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror

        <br>

        <label>Slug:
            <br>
            <input type="text" name="slug" value="{{old('slug')}}">
        </label>

        @error('slug')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror

        <br>
        <label>
            Descripcion:
            <br>
            <textarea name="description" cols="30" rows="5">{{old('description')}}</textarea>
        </label>

        @error('description')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror

        <br>
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{old('categoria')}}">
        </label>

        @error('categoria')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror
        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection
