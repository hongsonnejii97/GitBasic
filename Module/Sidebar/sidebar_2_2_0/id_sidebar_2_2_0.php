<?php

/*SIDEBAR 2.2.0*/
'id_sidebar_2_2_0' => array(
    'key' => 'id_sidebar_2_2_0',
    'name' => 'sidebar_2_2_0',
    'label' => 'Sidebar 2.2.0',
    'display' => 'block',
    'sub_fields' => array(
        /*Bắt đầu field*/

        array(
            'key' => 'id_sidebar_2_2_0_sub',
            'label' => 'Sidebar',
            'name' => 'sidebar',
            'type' => 'flexible_content',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'layouts' => array(
                'id_sidebar_2_2_0_sub_layout1' => array(
                    'key' => 'id_sidebar_2_2_0_sub_layout1',
                    'name' => 'sidebar_title',
                    'label' => 'Tiêu Đề SideBar',
                    'display' => 'block',
                    'sub_fields' => array(
                        array(
                            'key' => 'id_sidebar_2_2_0_sub_layout1_sub1',
                            'label' => 'Tiêu đề chuyên mục',
                            'name' => 'title',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                    ),
                    'min' => '',
                    'max' => '',
                ),
                'id_sidebar_2_2_0_sub_layout2' => array(
                    'key' => 'id_sidebar_2_2_0_sub_layout2',
                    'name' => 'sidebar_img',
                    'label' => 'Hình Ảnh',
                    'display' => 'block',
                    'sub_fields' => array(
                        array(
                            'key' => 'id_sidebar_2_2_0_sub_layout2_box1',
                            'label' => 'Hình ảnh',
                            'name' => 'img_place',
                            'type' => 'repeater',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'hide_admin' => 0,
                            'collapsed' => '',
                            'min' => 0,
                            'max' => 0,
                            'layout' => 'table',
                            'button_label' => '',
                            'sub_fields' => array(
                                array(
                                    'key' => 'id_sidebar_2_2_0_sub_layout2_box1_sub1',
                                    'label' => 'Tiêu đề ảnh',
                                    'name' => 'place_title',
                                    'type' => 'text',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'hide_admin' => 0,
                                    'default_value' => '',
                                    'placeholder' => '',
                                    'prepend' => '',
                                    'append' => '',
                                    'maxlength' => '',
                                ),
                                array(
                                    'key' => 'id_sidebar_2_2_0_sub_layout2_box1_sub2',
                                    'label' => 'Link ảnh',
                                    'name' => 'place_url',
                                    'type' => 'text',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'hide_admin' => 0,
                                    'default_value' => '',
                                    'placeholder' => '',
                                    'prepend' => '',
                                    'append' => '',
                                    'maxlength' => '',
                                ),
                            ),
                        ),
                    ),
                    'min' => '',
                    'max' => '',
                ),
                'id_sidebar_2_2_0_sub_layout4' => array(
                    'key' => 'id_sidebar_2_2_0_sub_layout4',
                    'name' => 'sidebar_clip',
                    'label' => 'Video Clip',
                    'display' => 'block',
                    'sub_fields' => array(
                        array(
                            'key' => 'id_sidebar_2_2_0_sub_layout4_box1',
                            'label' => 'Chi tiết video',
                            'name' => 'detail_video',
                            'type' => 'textarea',
                            'instructions' => '
                                Dòng 1 : Tiêu đề video <br>
                                Dòng 2 : Link ảnh thumb video ( Size 267x150 ) <br>
                                Dòng 3 : Link youtube
                            ',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                            'maxlength' => '',
                            'rows' => 4,
                            'new_lines' => '',
                        ),
                    ),
                    'min' => '',
                    'max' => '',
                ),
                'id_sidebar_2_2_0_sub_layout3' => array(
                    'key' => 'id_sidebar_2_2_0_sub_layout3',
                    'name' => 'sidebar_new',
                    'label' => 'Tin tức',
                    'display' => 'block',
                    'sub_fields' => array(
                        array(
                            'key' => 'id_sidebar_2_2_0_sub_layout3_sub',
                            'label' => 'Bài viết quan tâm',
                            'name' => 'content',
                            'type' => 'relationship',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'post_type' => '',
                            'taxonomy' => '',
                            'filters' => array(
                                0 => 'search',
                                1 => 'post_type',
                                2 => 'taxonomy',
                            ),
                            'elements' => '',
                            'min' => '',
                            'max' => '',
                            'return_format' => 'object',
                        ),
                    ),
                    'min' => '',
                    'max' => '',
                ),
                'id_sidebar_2_2_0_sub_layout6' => array(
                    'key' => 'id_sidebar_2_2_0_sub_layout6',
                    'name' => 'sidebar_postlist',
                    'label' => 'Đọc nhiều & Phản hồi',
                    'display' => 'block',
                    'sub_fields' => array(
                        array(
                            'key' => 'id_sidebar_2_2_0_sub_layout6_box1',
                            'label' => 'Đọc nhiều & Phản hồi',
                            'name' => 'postlist_place',
                            'type' => 'repeater',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'hide_admin' => 0,
                            'collapsed' => '',
                            'min' => 0,
                            'max' => 0,
                            'layout' => 'block',
                            'button_label' => '',
                            'sub_fields' => array(
                                array(
                                    'key' => 'id_sidebar_2_2_0_sub_layout6_box1_sub1',
                                    'label' => 'Tiêu đề tab',
                                    'name' => 'place_tab',
                                    'type' => 'text',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'hide_admin' => 0,
                                    'default_value' => '',
                                    'placeholder' => '',
                                    'prepend' => '',
                                    'append' => '',
                                    'maxlength' => '',
                                ),
                                array(
                                    'key' => 'id_sidebar_2_2_0_sub_layout6_box1_sub2',
                                    'label' => 'Bài viết',
                                    'name' => 'content2',
                                    'type' => 'relationship',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'post_type' => '',
                                    'taxonomy' => '',
                                    'filters' => array(
                                        0 => 'search',
                                        1 => 'post_type',
                                        2 => 'taxonomy',
                                    ),
                                    'elements' => '',
                                    'min' => '',
                                    'max' => '',
                                    'return_format' => 'object',
                                ),
                            ),
                        ),
                    ),
                    'min' => '',
                    'max' => '',
                ),
            ),
            'button_label' => 'Add Row',
            'min' => '',
            'max' => '',
        ),
        /*End field*/
    ),
    'min' => '',
    'max' => '',
),
/*END SIDEBAR 2.2.0*/

?>