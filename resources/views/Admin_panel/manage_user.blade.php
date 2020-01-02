@extends('Admin_panel.dashboard')
@section('dashboard_content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <h3 class="mb-0">Card tables</h3>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center text-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">01</th>
                                <td>Tushar</td>
                                <td><a href="">tusharahmed@gmail.com</a></td>
                                <td class="text-center">
                                    <a class="btn btn-success btn-sm" href="">
                                        Desable
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="">
                                            Remove
                                        </a>
                                </td>
                            </tr>
                            <tr>
                                    <th scope="row">01</th>
                                    <td>Ariyat</td>
                                    <td><a href="">ariyatsinha@gmail.com</a></td>
                                    <td class="text-center">
                                        <a class="btn btn-warning btn-sm" href="">
                                            Enable
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="">
                                                Remove
                                            </a>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer py-4">
                    <nav aria-label="...">
                        <ul class="pagination justify-content-end mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">
                                    <i class="fas fa-angle-left"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="fas fa-angle-right"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@stop