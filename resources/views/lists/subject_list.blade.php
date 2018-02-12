@extends('school')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Предметы</h3>
        </div>
        <div class="panel-body">
            <div class="list-group">
                <form id="edit" action="" method="post">
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
                                    <button id="edit{{$sub->id}}" name="{{$sub->id}}" type="button" class="btn btn-success btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </button>
                                    <button id="delete{{$sub->id}}" name="{{$sub->id}}" type="button" class="btn btn-danger btn-xs">
                                        <span class="glyphicon glyphicon-remove"></span>
                                    </button>
                                </div>
                            </td>
                        </tr>

                    @endforeach
                </table>
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                </form>
            </div>

        </div>
    </div>

@endsection
@section ('script')
    <script type="text/javascript">
        jQuery("button[id^='delete']").click(function(){
            jQuery("#edit").attr("action","/subjects/"+this.name);
            jQuery("#edit").submit();
        });
        jQuery("button[id^='edit']").click(function(){
            jQuery("#edit").attr("action","/subjects/"+this.name+'/edit');
            jQuery("input[name='_method']").val('get');
            jQuery("#edit").submit();
        });
    </script>
@endsection