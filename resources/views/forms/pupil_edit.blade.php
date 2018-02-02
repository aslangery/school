<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Ввод данных ученика</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="family">Фамилия</label>  
  <div class="col-md-4">
  <input id="family" name="family" type="text" placeholder="Иванов" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Имя</label>  
  <div class="col-md-4">
  <input id="name" name="name" type="text" placeholder="Иван" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="otchestvo">Отчество</label>  
  <div class="col-md-4">
  <input id="otchestvo" name="otchestvo" type="text" placeholder="Иванович" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="gender">Пол</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="gender-0">
      <input type="radio" name="gender" id="gender-0" value="0" checked="checked">
      мужской
    </label> 
    <label class="radio-inline" for="gender-1">
      <input type="radio" name="gender" id="gender-1" value="1">
      женский
    </label>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="birthday">Дата рождения</label>  
  <div class="col-md-4">
  <input id="birthday" name="birthday" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-default">Сохранить</button>
  </div>
</div>

</fieldset>
</form>

