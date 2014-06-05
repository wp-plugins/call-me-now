<?php
class Call_Me_Now_Widget extends WP_Widget {

	public function __construct() {
		parent::__construct(
			'call_me_now_widget', // Base ID
			'Call Me Now widget', // Name
			array('description' => __( 'Add a Call Me now form.', 'call_me_now' )) // Args
		);
	}

	public function widget($args, $instance) {
		wp_enqueue_script('call_me_now');
		
		extract($args, EXTR_SKIP);
		extract($instance);

		$cmn_id = $widget_id;
		
		include(CALL_ME_NOW_DIR . '/views/frontend/call-me-now.php');
	}

	public function form($instance) {
		
		extract($instance);

		$title 	= ( $title && $title !=='' ? $title : __('Call Me Now', 'call_me_now') );
		$label 	= ( $label && $label !=='' ? $label : __('Phonenumber', 'call_me_now') );
		$button = ( $button && $button !=='' ? $button : __('Call Me Now', 'call_me_now') );
		
		include(CALL_ME_NOW_DIR . '/views/admin/widget-settings.php');
	}

	public function update($new_instance, $old_instance) {
		$instance 				= $old_instance;
		$instance['title'] 		= $new_instance['title'];
		$instance['label'] 		= $new_instance['label'];
		$instance['button'] 	= $new_instance['button'];
		$instance['class'] 		= $new_instance['class'];

		return $instance;
	}
}
?>