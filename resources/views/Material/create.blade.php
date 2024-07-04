<h1>Crear Material</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('materials.store') }}" method="post">
    @csrf
    <div>
        <label for="descripcion">Descripción</label>
        <input type="text" name="descripcion" id="descripcion">
        @error('descripcion')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="unidadMedida">Unidad de Medida</label>
        <input type="text" name="unidadMedida" id="unidadMedida">
        @error('unidadMedida')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="ubicacion">Ubicación</label>
        <input type="text" name="ubicacion" id="ubicacion">
        @error('ubicacion')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="categoria_id">Categoría</label>
        <select name="categoria_id" id="categoria_id">
            <option value=""></option>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
            @endforeach
        </select>
        @error('categoria_id')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit">Crear Material</button>
</form>
