<div class="mb-2">
    <label for="name" class="form-label">Nome da categoria</label>
    <input type="text" class="form-control" name="name" id="name" value="{{isset($category)?$category->name:old('name')}}">
</div>

<button type="submit" class="mt-5 btn btn-color-1 col-12">{{__('salvar')}}</button>