<?php
class Elementor_Test_Widget extends \Elementor\Widget_Base {
    public function get_name(){
        return 'test_widget';
    }

    public function get_title(){
        return esc_html__('Test Widget', 'elementor-addon');
    }

    public function get_icon(){
        return 'eicon-favorite';
    }

    public function get_custom_help_url(){
        return 'https://go.elementor/widget-name';
    }

    public function get_categories(){
        return ['elementor_addon_category'];
    }

    public function get_keywords(){
        return ['test', 'heading'];
    }

    public function register_controls(){
        $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__( 'content', 'elementor-addon' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'title',
            [
                'type' => \Elementor\Controls_Manager::TEXT,
                'label' => esc_html__( 'Title', 'elementor-addon' ),
                'placeholder' => esc_html__( 'Enter your title', 'elementor-addon' ),
            ]
        );

        $this->end_controls_section();
    }

    protected function render(){
        $settings = $this->get_settings_for_display();
        echo $settings['title'];
    }

}