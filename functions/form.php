<?php
function form_edit($var)
{
?>
    <label for="$var">Change <?php echo $var ?> ?</label>
    <input id="$var" class="form-control" type="text" name="$var">


<?php

}
