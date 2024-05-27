<!-- history shops -->
<x-app-layout>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-app.navbar />
        <div class="px-5 py-4 container-fluid">
            <div class="mt-4 row">
                <div class="col-12">
                    <div class="card">
                        <div class="pb-0 card-header">
                            <div class="row">
                                <div class="col-6">
                                    <h5 class="">Historial de compras</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="">
                                @if (session('success'))
                                    <div class="alert alert-success" role="alert" id="alert">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                @if (session('error'))
                                    <div class="alert alert-danger" role="alert" id="alert">
                                        {{ session('error') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table text-secondary text-center">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-left text-uppercase font-weight-bold bg-transparent border-bottom text-secondary">
                                            ID</th>
                                        <th
                                            class="text-left text-uppercase font-weight-bold bg-transparent border-bottom text-secondary">
                                            Fecha y hora</th>
                                        <th
                                            class="text-left text-uppercase font-weight-bold bg-transparent border-bottom text-secondary">
                                            Total comprado</th>
                                        <th
                                            class="text-left text-uppercase font-weight-bold bg-transparent border-bottom text-secondary">
                                            Estatus</th>
                                        <th
                                            class="text-center text-uppercase font-weight-bold bg-transparent border-bottom text-secondary">
                                            Direccion de compra</th>
                                        <th
                                            class="text-center text-uppercase font-weight-bold bg-transparent border-bottom text-secondary">
                                            Editar</th>
                                        </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="align-middle bg-transparent border-bottom">1</td>
                                        <td class="align-middle bg-transparent border-bottom">
                                        </td>
                                        <td class="align-middle bg-transparent border-bottom">Admin</td>
                                        <td class="align-middle bg-transparent border-bottom">admin@softui.com</td>
                                        <td class="text-center align-middle bg-transparent border-bottom">16/08/18</td>
                                        <td class="text-center align-middle bg-transparent border-bottom">
                                            <a href="#"><i class="fas fa-user-edit" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fas fa-trash" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle bg-transparent border-bottom">2</td>
                                        <td class="align-middle bg-transparent border-bottom">
                                           </td>
                                        <td class="align-middle bg-transparent border-bottom">Creator</td>
                                        <td class="align-middle bg-transparent border-bottom">creator@softui.com</td>
                                        <td class="text-center align-middle bg-transparent border-bottom">Creator</td>
                                        <td class="text-center align-middle bg-transparent border-bottom">
                                            <a href="#"><i class="fas fa-user-edit" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fas fa-trash" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle bg-transparent border-bottom">3</td>
                                        <td class="align-middle bg-transparent border-bottom">
                                            </td>
                                        <td class="align-middle bg-transparent border-bottom">Member</td>
                                        <td class="align-middle bg-transparent border-bottom">member@softui.com</td>
                                        <td class="text-center align-middle bg-transparent border-bottom">Member</td>
                                        <td class="text-center align-middle bg-transparent border-bottom">
                                            <a href="#"><i class="fas fa-user-edit" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fas fa-trash" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle bg-transparent border-bottom">4</td>
                                        <td class="align-middle bg-transparent border-bottom">
                                            </td>
                                        <td class="align-middle bg-transparent border-bottom">Peterson</td>
                                        <td class="align-middle bg-transparent border-bottom">peterson@corporateui.com
                                        </td>
                                        <td class="text-center align-middle bg-transparent border-bottom">Member</td>
                                        <!-- <td class="text-center align-middle bg-transparent border-bottom">05/05/20</td> -->
                                        <td class="text-center align-middle bg-transparent border-bottom">
                                            <a href="#"><i class="fas fa-user-edit" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fas fa-trash" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle bg-transparent border-bottom">5</td>
                                        <td class="align-middle bg-transparent border-bottom">
                                            <!-- <div class="d-flex justify-content-center align-items-center">
                                                <img src="../assets/img/marie.jpg" class="rounded-circle mr-2"
                                                    alt="user5" style="height: 36px; width: 36px;">
                                            </div> -->
                                        </td>
                                        <td class="align-middle bg-transparent border-bottom">Marie</td>
                                        <td class="align-middle bg-transparent border-bottom">marie@corporateui.com
                                        </td>
                                        <td class="text-center align-middle bg-transparent border-bottom">Creator</td>
                                        <!-- <td class="text-center align-middle bg-transparent border-bottom">05/05/20</td> -->
                                        <td class="text-center align-middle bg-transparent border-bottom">
                                            <a href="#"><i class="fas fa-user-edit" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fas fa-trash" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-app.footer />
    </main>

</x-app-layout>

<script src="/assets/js/plugins/datatables.js"></script>
<script>
    const dataTableBasic = new simpleDatatables.DataTable("#datatable-search", {
        searchable: true,
        fixedHeight: true,
        columns: [{
            select: [2, 6],
            sortable: false
        }]
    });
</script>
