<?php $categories = array(); ?>
<p>
	<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title', 'call_me_now'); ?>:</label>
	<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
</p>
<p>
	<label for="<?php echo $this->get_field_id( 'label' ); ?>"><?php _e('Label', 'call_me_now'); ?>:</label>
	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('label')); ?>" name="<?php echo $this->get_field_name( 'label' ); ?>" type="text" value="<?php echo esc_attr( $label ); ?>">
</p>
<p>
	<label for="<?php echo $this->get_field_id( 'button' ); ?>"><?php _e('Button text', 'call_me_now'); ?>:</label>
	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('button')); ?>" name="<?php echo $this->get_field_name( 'button' ); ?>" type="text" value="<?php echo esc_attr( $button ); ?>">
</p>
<p>
	<label for="<?php echo $this->get_field_id( 'class' ); ?>"><?php _e('Class', 'call_me_now'); ?>:</label>
	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('class')); ?>" name="<?php echo $this->get_field_name( 'class' ); ?>" type="text" value="<?php echo esc_attr( $class ); ?>">
</p>