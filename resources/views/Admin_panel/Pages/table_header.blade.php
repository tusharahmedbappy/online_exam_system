@extends('Admin_panel.dashboard')
@section('dashboard_content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0 ml-auto">
                        <div class="">

                            <a href="{{url('/ques-list')}}" class="btn ">
                                <span class="text-info">All Questions <strong>{{\App\Model\Question::count()}}</strong></span>

                            </a>
                            ||
                            <a href="{{url('/published-ques')}}" class="btn ">
                                <span class="text-success">Published <strong>{{\App\Model\Question::where('status',1)->count()}}</strong></span>
                            </a>
                            ||
                            <a href="{{url('/draft-ques')}}" class="btn ">
                                <span class="text-warning" >Draft <strong>{{\App\Model\Question::where('draft_status',1)->count()}}</strong></span>
                            </a>
                            ||
                            <a href="{{url('/trash-ques')}}" class="btn ">
                                <span class="text-danger" >Trash <strong>{{\App\Model\Question::where('trash_status',1)->count()}}</strong></span>
                            </a>
                        </div>
                    </div>
                    @yield('table')
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
