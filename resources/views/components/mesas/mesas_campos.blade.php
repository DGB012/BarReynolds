<label for='estado'>Estado</label>
<select name='estado'>
    <optgroup label='estado'>
        <option {{ ($mesa ->estado ?? '') == 'Vacia' ? 'selected' : ''}} value='Vacia'>Vac&iacute;a</option>
        <option {{ ($mesa ->estado ?? '') == 'Ocupada' ? 'selected' : ''}} value='Ocupada'>Ocupada</option>
    </optgroup>
</select>
