@extends('layouts.plantilla')


@section('content')
    
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
        
    <form class="bg-white shadow rounded py-3 px-4" 
    action="{{route('formulario.send')}}"method="POST">
        @csrf
        
        <div class="form-group">
            <Label for=""  class="form-label" >    
                Nombres:</Label> 
            <input type="text" name='nombre' class="form-control bg-light shadow-sm  @error('nombre')is-invalid  @enderror" value="{{old('nombre')}}" tabindex="1">
        @error('nombre')
        
            <span class="invalid-feedback" role="alert">
            <strong>*{{$message}}</strong>
            </span>
            @enderror
        </div>   
        

        <div class="form-group">
        <Label for="name">Apellidos</Label>
            <input type="text" name='apellidos' class="form-control bg-light shadow-sm  @error('apellidos')is-invalid  @enderror" value="{{old('apellidos')}}" tabindex="2">
        @error('apellidos')
            
            <span class="invalid-feedback" role="alert">
                <strong>*{{$message}}</strong>
                </span>
            
        @enderror
            </div>

            <div class="form-group">
        <Label for="name">Telefono:</Label>
            <input type="text" name='telefono' class="form-control bg-light shadow-sm  @error('telefono')is-invalid  @enderror" value="{{old('telefono')}}" tabindex="3">
        @error('telefono')
        
            <span class="invalid-feedback" role="alert">
                <strong>*{{$message}}</strong>
                </span>
            
        @enderror
            </div>
        
            <div class="form-group">
        <Label for="name">Correo:</Label>
            <input type="email" name='correo' class="form-control bg-light shadow-sm  @error('correo')is-invalid   @enderror" value="{{old('correo')}}" tabindex="4">
        @error('correo')
            
            <span class="invalid-feedback" role="alert">
                <strong>*{{$message}}</strong>
                </span>
            
        @enderror

            </div>
           <div class="form-group"> 
        <Label for="name">Fecha de Nacimiento:</Label>
            <input type="date" name='fecha' class="form-control bg-light shadow-sm  @error('fecha')is-invalid   @enderror"  value="{{old('fecha')}}" tabindex="5">
        @error('fecha')
            
            <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
                </span>
            
        @enderror
           </div> 
           <div>   
        <button type="submit" class="btn btn-warning text-white btn-lg btn-block" tabindex="6">Guardar Formulario</button>
           </div>
    </form>
</div>
        </div>
    </div>
@endsection