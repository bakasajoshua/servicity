<?php
	$form_attributes = array('class' => 'form-group', 'id' => 'myform');
	$business_name = array(
        'name'          => 'business_name',
        'id'            => 'business_name',
        'placeholder'   => 'Business Name',
        'required'		=> 'true'
	);
	$business_pin_number = array(
        'name'          => 'business_pin',
        'id'            => 'business_pin',
        'placeholder'   => 'Business Pin Number',
        'required'		=> 'true'
	);
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
	$confirm_password = array(
		'name'          => 'confirm_password',
        'id'            => 'confirm_password',
        'placeholder'   => 'Confirm Password',
        'required'		=> 'true'
	);
	$button = array(
        'name'          => 'button',
        'id'            => 'button',
        'class'         => 'button',
        'value'         => 'true',
        'type'          => 'submit',
        'content'       => 'SIGN UP'
);

?>
<div>
	<?php echo form_open(base_url().'home/registration', $form_attributes);?>
		<?php echo form_input($business_name); ?>
		<?php echo form_input($business_pin_number); ?>
		<?php echo form_input($email_field); ?>
		<?php echo form_password($password_field); ?>
		<?php echo form_password($confirm_password); ?>
		<?php echo form_button($button);?>
	<?php echo form_close();?>
</div>