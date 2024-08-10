@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? __('Show') . " " . __('Producto') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('productos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Codigo:</strong>
                                    {{ $producto->codigo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Producto:</strong>
                                    {{ $producto->producto }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Idcategoria:</strong>
                                    {{ $producto->idcategoria }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Existencia:</strong>
                                    {{ $producto->existencia }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
