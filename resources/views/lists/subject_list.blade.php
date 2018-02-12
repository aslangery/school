@extends('school')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Предметы</h3>
        </div>
        <div class="panel-body">
            <div class="list-group">
                <table class="table table-bordered">
                    <tr>
                        <th>#</th>
                        <th>Название</th>
                        <th>Действия</th>
                    </tr>
                    @foreach($sub_list as $sub)
                        <tr>
                            <td>{{$sub->id}}</td>
                            <td><a href="{{url('/subjects/'.$sub->id.'/edit')}}">{{$sub->title}}</a></td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-xs">
                                        <span class="glyphicon glyphicon-remove"></span>
                                    </button>
                                </div>
                            </td>
                        </tr>

                    @endforeach
                </table>
            </div>

        </div>
    </div>
@endsection