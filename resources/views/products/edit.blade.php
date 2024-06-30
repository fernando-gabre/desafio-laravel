<x-app-layout>
  @include('layouts.navigation')
  <x-alert />
  <div class="container col-md-6 p-4 vh-100">
    <div class="col bg-white p-3 brt-10">
      <h2>Atualizar Produto [{{$product->id}}]</h2>
      <hr>
    </div>
    <div class="container col-12 bg-white p-4 pb-5 brb-10">
      @if($errors->any())
      @foreach ($errors->all() as $error)
      <span class=" text-danger">{{$error}} <br></span>

    @endforeach
    @endif
      <form action="{{route('products.update')}}" method="post">
        @csrf()
        @method('put')
        <input type="hidden" name="product_id"  value="{{$product->id}}">
        @include('products.partials.formproducts', [$product,$categories])

      </form>
    </div>

  </div>
</x-app-layout>