@extends('layouts.index')

@section('contenido')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="pb-2">
                        Editar campo
                    </h3>

                    <form method="POST" action="{{url('config/tiposactividad/'.$tipoactividad->id)}}" autocomplete="off">
                        {{csrf_field()}}
                        {{method_field('PATCH')}}
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input required
                                           type="text"
                                           class="form-control"
                                           value="{{$tipoactividad->nombre}}"
                                           name="nombre">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Precio Base $us</label>
                                    <input required
                                           type="text"
                                           class="form-control"
                                           value="{{$tipoactividad->precio_base}}"
                                           name="precio_base">
                                </div>
                            </div>
                        </div>

                        <a href="{{url('config/tiposactividad')}}" class="btn btn-warning">Atras</a>
                        <button type="submit" class="btn btn-info">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
