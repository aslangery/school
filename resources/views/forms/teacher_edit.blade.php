<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Учителя</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="family">Фамилия</label>  
  <div class="col-md-4">
  <input id="family" name="family" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Имя</label>  
  <div class="col-md-4">
  <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="otchestvo">Отчество</label>  
  <div class="col-md-4">
  <input id="otchestvo" name="otchestvo" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="studyyear_id">Учебный год</label>
  <div class="col-md-4">
    <select id="studyyear_id" name="studyyear_id" class="form-control">
      <option value="1">Option one</option>
      <option value="2">Option two</option>
    </select>
  </div>
</div>

<!-- Select Multiple -->
<div class="form-group">
  <label class="col-md-4 control-label" for="subjects_id">Предметы</label>
  <div class="col-md-4">
    <select id="subjects_id" name="subjects_id" class="form-control" multiple="multiple">
      <option value="1">Option one</option>
      <option value="2">Option two</option>
    </select>
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

