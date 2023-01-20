<label for='precio'>Precio</label>
<input type='number' step='any' id='precio' name='precio' value='{{ $producto->precio ?? '' }}'/>
<br>
<label for='nombre'>Nombre</label>
<input type='text' id='nombre' name='nombre' value='{{ $producto->nombre ?? '' }}'/>
<br>
{{--<label for='categoria'>Categoría</label>--}}
{{--<input type='text' id='categoria_id' name='categoria_id' value='{{ $producto->categoria_id ?? '' }}'/>--}}
<br>
<label for='categoria_id'>Categoría</label>
<select id='categoria_id' name='categoria_id'>
    <optgroup label='Categorías'>
        @foreach($categorias as $categoria)
            <option
                @selected($categoria->id == ($producto->categoria_id ?? '')) value='{{ $categoria->id}}'> {{ $categoria->nombre }}</option>
        @endforeach
    </optgroup>
</select>
<br>
<label for='stock'>Stock</label>
<input type='number' id='stock' name='stock' value='{{ $producto->stock ?? '' }}'/>
<br>
