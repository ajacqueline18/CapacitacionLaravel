@extends('layouts.app')
@section('content')

<div class="container">

<div class="card">
  <div class="card-header bg-primary text-white">
   Ingreso de Categorias
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="{{ route('categories.index') }}" class="btn btn-danger">REGRESAR</a>

    <hr/>
    <table> 
        <tr>
            <th> ID</th>
            <th> NOMBRE</th>
            <th> SLUG</th>
            <th> ACCIONES </th>
        </tr>

    </table> 

  </div>
</div>
</div>
@endsection