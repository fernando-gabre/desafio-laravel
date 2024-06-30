<x-app-layout>
    @include('layouts.navigation')
    <div class="container-fluid p-4 vh-100">
        <x-alert />
        @if($products && count($products) < 1)
            <div class="card">
                <div class="card-body">
                    <h3>Nenhum produto cadastrado <a href="{{route('products.create')}}" class="btn btn-color-1">cadastrar agora</a></h3>
                    
                </div>
            </div>
        @else
        <div class="col bg-white p-3 brt-10">
            <h2>Produtos</h2>
        </div>
        <table class="table table-bordered p-2 ">
            <thead class="br-10">
                <tr>
                    <th class="text-center" scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach($products as $product)
                        <th class="text-center" scope="row">{{$product->id}}</th>
                            <td>{{$product->name}}</td>
                            <td>R${{$product->value}}</td>
                            <td>{{$product->category->name}}</td>
                            <td class="d-flex">
                                <a class="btn" href="{{route('products.edit', $product->id)}}"><i class="bi bi-pencil-square p-2 text-primary"></i></a>
                                <span>
                                    <form action="{{route('products.destroy')}}" method="post">
                                        @csrf() @method('delete')
                                        <input type="hidden" name="productId" value="{{$product->id}}">
                                        <button class="btn" type="submit"><i class="bi bi-trash text-danger"></i></button>
                                    </form>
                                </span>
                            </td>
                        </tr>
                    @endforeach
                
            </tbody>
        </table>
        @endif
    </div>
</x-app-layout>