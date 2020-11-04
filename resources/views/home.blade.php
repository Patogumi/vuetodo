@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Notas de Cosas para Hacer</div>
                <div class="card-body">
                    <tareas />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection