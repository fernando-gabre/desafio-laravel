<x-app-layout>
    @include('layouts.navigation')
    <div class="container-fluid p-4 vh-100">
        <x-alert />
   
        <div class="col bg-white p-3 brt-10">
            <h2>Usuários</h2>
        </div>
        <table class="table table-bordered p-2 ">
            <thead class="br-10">
                <tr>
                    <th class="text-center" scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Nível usuário</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach($users as $user)
                        <th class="text-center" scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->level == 0 ? 'Usuário comum' : 'Admin'}}</td>
                        </tr>
                    @endforeach
                
            </tbody>
        </table>
    
    </div>
</x-app-layout>