@extends('layouts.app')

@section('template_title')
Calificacione
@endsection

@section('content')
<div class="section">
    <div class="section-header">
        <h3 class="page__heading">Calificaciones</h3>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <!-- <span id="card_title">
                                {{ __('Calificacione') }}
                            </span> -->

                        <div class="float-right">
                            <a href="{{ route('calificaciones.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                {{ __('Crear') }}
                            </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>

                                    <th>Alumno Id</th>
                                    <th>Curso Id</th>
                                    <th>Nota</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($calificaciones as $calificacione)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $calificacione->alumno_id }}</td>
                                    <td>{{ $calificacione->curso_id }}</td>
                                    <td>{{ $calificacione->nota }}</td>

                                    <td>
                                        <form action="{{ route('calificaciones.destroy',$calificacione->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('calificaciones.show',$calificacione->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                            <a class="btn btn-sm btn-success" href="{{ route('calificaciones.edit',$calificacione->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Borrar</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $calificaciones->links() !!}
        </div>
    </div>
</div>
@endsection