@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Empresas</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center">Empresas</h3>
                        <a class="btn btn-warning" href="{{route('empresas.create')}}">Nuevo</a>
                        <table class="table table-striped mt-2">
                            <thead style="background-color: #00a3e4">
                                <th style="color: #fff;">Nombre Empresa</th>
                                <th style="color: #fff;">Cuit</th>
                                <th style="color: #fff;">Acciones</th>
                            </thead>

                            <tbody>
                                @foreach($empresas as $empresa)
                                <tr>
                                    <td style="display: none">{{$empresa->id}}</td>
                                    <td>{{$empresa->nombre_empresa}}</td>
                                    <td>{{$empresa->cuit}}</td>
                                    <td>
                                        <form action="{{ route('empresas.destroy',$empresa->id) }}" method="POST">
                                            @can('editar-certificacion')
                                            <a class="btn btn-info" href="{{ route('empresas.edit',$empresa->id) }}">Editar</a>
                                            @endcan

                                            @csrf
                                            @method('DELETE')
                                            @can('borrar-certificacion')
                                            <button type="submit" class="btn btn-danger">Borrar</button>
                                            @endcan
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination justify-content-end">
                            {!!$empresas->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection