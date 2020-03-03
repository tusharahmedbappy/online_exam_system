@extends('Admin_panel.Pages.table_header')
@section('table')
    @if(session('active'))
        <small class="text-success">
            {{session('active')}}
        </small>
    @endif
    @if(session('deactive'))
        <small class="text-success">
            {{session('deactive')}}
        </small>
    @endif
    @if(session('deleted'))
        <small class="text-success">
            {{session('deleted')}}
        </small>
    @endif
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
            @foreach (\App\Model\Question::where('status',1)->paginate(10) as $userData)
                <tr>
                    <th scope="row">{{$userData->id}}</th>
                    <td>{{$userData->question}} ?</td>
                    <td class="text-center">
                        @if($userData->status == 1)
                            <a class="btn btn-success btn-sm" href="{{url('/ques_publish',[$userData->id])}}">
                                <i class="fa fa-eye"></i>
                            </a>
                        @else
                            <a class="btn btn-danger btn-sm" href="{{url('/ques_unpublished',[$userData->id])}}">
                                <i class="fa fa-eye-slash"></i>
                            </a>
                        @endif
                        <a class="btn btn-info btn-sm" href="{{url('/ques_edit',[$userData->id])}}">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a class="btn btn-danger btn-sm" href="{{url('/ques_delete',[$userData->id])}}">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
