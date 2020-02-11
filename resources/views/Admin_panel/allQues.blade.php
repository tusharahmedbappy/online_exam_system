@extends('Admin_panel.dashboard')
@section('dashboard_content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0 ml-auto">
                    <div class="">

                        <a href="" class="btn ">
                            <span class="text-info">Questions <strong>11</strong></span>

                        </a>
                        ||
                        <a href="" class="btn ">
                            <span class="text-success">Published <strong>2</strong></span>
                        </a>
                        ||
                        <a href="" class="btn ">
                            <span class="text-warning" >Draft<strong>4</strong></span>
                        </a>
                        ||
                        <a href="" class="btn ">
                            <span class="text-danger" >Trash <strong>7</strong></span>
                        </a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th width="4%" scope="col">Q.No</th>
                                <th scope="col">Questions</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach (\App\Model\Question::paginate(10) as $userData)
                            <tr>
                                <th scope="row">{{$userData->id}}</th>
                                <td>{{$userData->question}} ?</td>
                                <td class="text-center">
                                    <a class="btn btn-success btn-sm" href="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                    <a class="btn btn-info btn-sm" href="">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
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
                                <a class="page-link" href="http://laravel.app?page=2">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="http://laravel.app?page=3">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="http://laravel.app?page=4">
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
@endsection
