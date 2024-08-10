<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="codigo" class="form-label">{{ __('Codigo') }}</label>
            <input type="text" name="codigo" class="form-control @error('codigo') is-invalid @enderror" value="{{ old('codigo', $producto?->codigo) }}" id="codigo" placeholder="Codigo">
            {!! $errors->first('codigo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="producto" class="form-label">{{ __('Producto') }}</label>
            <input type="text" name="producto" class="form-control @error('producto') is-invalid @enderror" value="{{ old('producto', $producto?->producto) }}" id="producto" placeholder="Producto">
            {!! $errors->first('producto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            {{-- <label for="idcategoria" class="form-label">{{ __('Idcategoria') }}</label> --}}
            {{-- <input type="text" name="idcategoria" class="form-control @error('idcategoria') is-invalid @enderror" value="{{ old('idcategoria', $producto?->idcategoria) }}" id="idcategoria" placeholder="Idcategoria"> --}}
            {{-- {!! $errors->first('idcategoria', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!} --}}

            <label for="categorias" class="form-label">Categorias:</label>
            <select name="destino" id="categorias" class="form-control">
              <option label="Selecciona una categoria" disabled selected></option>

              @foreach ($categorias as $item)
                <option value="{{ $item->id }}">{{ $item->categoria }}</option>  
              @endforeach
            </select>
        </div>
        <div class="form-group mb-2 mb20">
            <label for="existencia" class="form-label">{{ __('Existencia') }}</label>
            <input type="text" name="existencia" class="form-control @error('existencia') is-invalid @enderror" value="{{ old('existencia', $producto?->existencia) }}" id="existencia" placeholder="Existencia">
            {!! $errors->first('existencia', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>