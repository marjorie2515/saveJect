@props(['titulo', 'tipo','rex'])
<div>
    <label for="">{{$titulo}}</label>
            <input name={{$rex}} type={{ $tipo}}>
            @error($rex)
            <! --<p>{{ $message }}</p>
            @enderror()
</div>
