<x-app-layout>
    @include('layouts.navigation')
    <div class="container-fluid p-4 vh-100">
        <x-alert />
        <div class="col bg-white p-3 brt-10">
            <h2>Categorias</h2>
        </div>
        <table class="table table-bordered p-2 ">
            <thead class="br-10">
                <tr>
                    <th class="text-center" scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach($categories as $category)
                        <th class="text-center" scope="row">{{$category->id}}</th>
                            <td>{{$category->name}}</td>
                            <td class="d-flex">
                                <a class="btn" href="{{route('categories.edit', $category->id)}}"><i class="bi bi-pencil-square p-2 text-primary"></i></a>
                                <span>
                                    <form action="{{route('categories.destroy')}}" method="post">
                                        @csrf() @method('delete')
                                        <input type="hidden" name="categoryId" value="{{$category->id}}">
                                        <button class="btn" type="submit"><i class="bi bi-trash text-danger"></i></button>
                                    </form>
                                </span>
                            </td>
                        </tr>
                    @endforeach
            </tbody>

        </table>
    </div>
</x-app-layout>