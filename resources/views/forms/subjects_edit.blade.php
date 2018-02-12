@extends('school')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Предмет</h3>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" action="{{!isset($sub)? url('/subjects'): url('/subjects/'.$sub->id)}}"
method="post">
            <fieldset>

<!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="subject">Предмет</label>
                <div class="col-md-4">
                    <input id="subject" name="title" type="text" placeholder="" class="form-control input-md" required=""
    value="{{$sub->title or ''}}">
                    {{csrf_field()}}
                    {{method_field(isset($sub)? 'PUT':'POST')}}
                </div>
            </div>

<!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="save"></label>
                <div class="col-md-4">
                    <button id="save" name="save" class="btn btn-default">Сохранить</button>
                </div>
            </div>

        </fieldset>
    </form>
        </div>
    </div>
@endsection