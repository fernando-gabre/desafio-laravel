<div class="mb-2">
    <label for="name" class="form-label">Nome</label>
    <input type="text" class="form-control" name="name" id="name" value="{{isset($product)?$product->name:old('name')}}">
</div>

<div class="mb-2">
    <label for="value" class="form-label">Valor</label>
    <input type="text" class="form-control" name="value" id="value" value="{{isset($product)?$product->value:old('value')}}">
</div>

<div class="mb-2">
          <label for="category" class="form-label">Categoria</label>
          <select class="form-select" name="category_id" aria-label="default">
            <option>Selecione a categoria</option>
          @foreach($categories as $key => $category)
          <option value="{{$key}}"
            @if(isset($product) && $product->category_id == $key)
                selected
            @endif

          >{{$category}}</option>
          @endforeach
          </select>
        </div>

<button type="submit" class="mt-5 btn btn-color-1 col-12">{{__('salvar')}}</button>