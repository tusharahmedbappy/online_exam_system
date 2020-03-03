@extends('Admin_panel.Pages.table_header')
@section('table')
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
            @foreach (\App\Model\Question::where('draft_status',1)->paginate(10) as $userData)
                <tr>
                    <th scope="row">{{$userData->id}}</th>
                    <td>{{$userData->question}} ?</td>
                    <td class="text-center">
                            <a class="btn btn-danger btn-sm" href="{{url('/ques_unpublished',[$userData->id])}}">
                                <i class="fa fa-eye-slash"></i>
                            </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection

