<label for='precio'>Precio</label>
<input type='number' id='precio' name='precio' value='{{ $productos->precio ?? '' }}' />

<label for='nombre'>Nombre</label>
<input type='text' id='nombre' name='nombre' value='{{ $productos->nombre ?? '' }}' />

<label for='categoria'>Categoría</label>
<input type='text' id='categoria' name='categoria' value='{{ $productos->categoria ?? '' }}' />

{{--<label for='categoria_id'>Categoría</label>--}}
{{--<select id='categoria_id' name='categoria_id'>--}}
{{--    <optgroup label='Categorías'>--}}
{{--        @foreach($categorias as $categoria)--}}
{{--            <option @selected($categoria->id == ($producto->categoria_id ?? '')) value='{{ $categoria->id}}'> {{ $categoria->nombre }}</option>--}}
{{--        @endforeach--}}
{{--    </optgroup>--}}
{{--</select>--}}

<label for='disponibilidad'>Disponibilidad</label>
<input type='number' id='disponibilidad' name='disponibilidad' value='{{ $productos->disponibilidad ?? '' }}' />
