
  <h5>Add individual components of this plate</h5>
  <div class="wrapper">
    <div id="description">
      <input type="text" name="description[]" class="description" size="50" placeholder="Add description"><br>

      <input type="text" name="description[]" class="description" size="50" placeholder="Add another description"><br>
    </div>
    <div class="controls">
      <a href="#" id="add_more_description"><i class="fa fa-plus"></i>Add Description</a>
      <a href="#" id="remove_last_description"><i class="fa fa-minus"></i>Remove description</a>
    </div>
  </div>



<script>
		var survey_options = document.getElementById('description');
var add_more_fields = document.getElementById('add_more_description');
var remove_fields = document.getElementById('remove_last_description');

add_more_fields.onclick = function(){
  var newField = document.createElement('input');
  newField.setAttribute('type','text');
  newField.setAttribute('name','description[]');
  newField.setAttribute('class','description');
  newField.setAttribute('siz',50);
  newField.setAttribute('placeholder','Another Field');
  survey_options.appendChild(newField);
}

remove_fields.onclick = function(){
  var input_tags = description.getElementsByTagName('input');
  if(input_tags.length > 2) {
    description.removeChild(input_tags[(input_tags.length) - 1]);
  }
}
</script>
