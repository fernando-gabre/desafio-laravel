<x-app-layout>
@include('layouts.navigation')
<div class="container-fluid p-4 vh-100">
        <div class="col bg-white p-3 brt-10">
            <h2>Produtos</h2>

        </div>
            <table class="table table-bordered p-2 ">
                <thead class="br-10">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                      <th scope="col">Ações</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                      <td><a href=""><i class="bi bi-pencil-square p-2"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@mdo</td>
                        <td><a href=""><i class="bi bi-pencil-square p-2"></i></a></td>
                    </tr>
                  </tbody>
                  
                </table>
      </div>
</x-app-layout>
