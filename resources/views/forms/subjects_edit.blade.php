<form class="form-horizontal" action="{{!isset($sub)? url('/subjects'): url('/subjects/'.$sub->id)}}"
method="post">
<fieldset>

<!-- Form Name -->
<legend>Предмет</legend>

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
