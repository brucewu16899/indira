<?php 
return array( 'id' => 14, 'created_at' => '1376788483', 'updated_at' => '', 'name' => 'promocodes', 'active' => 'true', 'settings' => array('id' => array('editable' => 'false', 'editor' => 'true', 'table' => 'false', 'validator' => 'predetermined', 'field' => array('type' => 'hidden', 'attributes' => array('style' => 'display%3Anone', 'class' => 'hidden', ), ), ), 'created_at' => array('editable' => 'false', 'editor' => 'false', 'table' => 'false', 'validator' => 'required', 'field' => array('type' => 'datetime', ), ), 'updated_at' => array('editable' => 'false', 'editor' => 'false', 'table' => 'false', 'validator' => 'required', 'field' => array('type' => 'datetime', ), ), 'code' => array('editable' => 'false', 'editor' => 'true', 'table' => 'true', 'validator' => 'required%7Cmin%3A1%7Cmax%3A40', 'field' => array('type' => 'text', 'attributes' => array('required' => 'true', 'maxlength' => '40', ), ), ), 'owner' => array('editable' => 'false', 'editor' => 'true', 'table' => 'true', 'validator' => 'email', 'field' => array('type' => 'email', ), ), 'used' => array('editable' => 'false', 'editor' => 'false', 'table' => 'true', 'validator' => 'false', ), 'level' => array('editable' => 'false', 'editor' => 'true', 'table' => 'true', 'validator' => 'required', 'field' => array('type' => 'select', 'attributes' => array('required' => 'true', ), ), ), ), 'default_settings' => '', 'link' => 'false', 'access' => '600', 'view_access' => '400',  );