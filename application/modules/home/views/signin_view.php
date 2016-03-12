<?php
	$form_attributes = array('class' => 'form-group', 'id' => 'myform');
	$email_field = array(
		'type'			=> 'email',
        'name'          => 'email_address',
        'id'            => 'email_address',
        'placeholder'   => 'Email Address',
        'required'		=> 'true'
	);
	$password_field = array(
		'name'          => 'password',
        'id'            => 'password',
        'placeholder'   => 'Password',
        'required'		=> 'true'
	);
	$button = array(
        'name'          => 'button',
        'id'            => 'button',
        'class'         => 'button',
        'value'         => 'true',
        'type'          => 'submit',
        'content'       => 'SIGN IN'
);

?>
<div>
	<?php echo form_open(base_url().'home/login_services', $form_attributes);?>
		<?php echo form_input($email_field); ?>
		<?php echo form_password($password_field); ?>
		<?php echo form_button($button);?>
	<?php echo form_close();?>
</div>