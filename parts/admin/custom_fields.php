<?php
    //select specializations for doctor
    function specializations_metabox_callback($post){
	    $specializations = get_pages(array(
            'meta_key' => '_wp_page_template',
            'meta_value' => 'service-inner.php'
        ));
        $specializationsIds = get_post_meta($post->ID, 'specialization_id', true);
        if(!is_array($specializationsIds)) $specializationsIds = array($specializationsIds);
        if ($specializations) {
            foreach ($specializations as $specialization) {
                if (in_array($specialization->ID, $specializationsIds)) {
                    echo '<input type="radio" value="'.$specialization->ID.'" checked  name="specializations"/>';
                    echo '<span>'.$specialization->post_title.'</span>';
                    echo '<br>';
                } else {
                    echo '<input type="radio" value="'.$specialization->ID.'" name="specializations"/>';
                    echo '<span>'.$specialization->post_title.'</span>';
                    echo '<br>';
                }
            }
        }
    }

    function init_specializations_metabox() {
        add_meta_box(
            'specialization_list',
            'Специализация',
            'specializations_metabox_callback',
            ['post_doctor', 'post_price', 'post_faq', 'post_symptoms', 'post_review'],
            'side',
            'high'
        );
    }
    add_action('add_meta_boxes', 'init_specializations_metabox');

    function specializations_save($post_id){
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {return;}
        if (!current_user_can('edit_post', $post_id)) {return;}
        $specializationsIds = $_POST['specializations'];
        if($specializationsIds){
            update_post_meta($post_id, 'specialization_id', $specializationsIds);
        }
    }
    add_action('save_post', 'specializations_save');
    //end select specializations for doctor
?>