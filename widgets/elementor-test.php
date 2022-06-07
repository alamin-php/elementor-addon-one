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
                'label_block' => true,
                'placeholder' => esc_html__( 'Enter your title', 'elementor-addon' ),
            ]
        );

        $this->add_control(
            'number',
            [
                'type' => \Elementor\Controls_Manager::NUMBER,
                'label' => esc_html__( 'Number', 'elementor-addon' ),
                'label_block' => true,
                'placeholder' => esc_html__( 'Enter your number', 'elementor-addon' ),
            ]
        );

        $this->add_control(
            'details',
            [
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'label' => esc_html__( 'Descriptions', 'elementor-addon' ),
                'placeholder' => esc_html__( 'Write your short details', 'elementor-addon' ),
                'separator' => 'before'
            ]
        );
        $this->add_control(
            'more_details',
            [
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'label' => esc_html__( 'More Details', 'elementor-addon' ),
                'placeholder' => esc_html__( 'Write your more details', 'elementor-addon' ),
                'separator' => 'before'
            ]
        );
        $this->add_control(
            'code_editor',
            [
                'type' => \Elementor\Controls_Manager::CODE,
                'label' => esc_html__( 'Code editor', 'elementor-addon' ),
                'placeholder' => esc_html__( 'Write your code here', 'elementor-addon' ),
                'separator' => 'before'
            ]
        );

        $this->add_control(
            'hidden_data',
            [
                'type' => \Elementor\Controls_Manager::HIDDEN,
                'label' => esc_html__( 'Hidden data', 'elementor-addon' ),
                'default' => 'traditional'
            ]
        );

        $this->add_control(
            'show_field',
            [
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label' => esc_html__( 'Are you show?', 'elementor-addon' ),
            ]
        );

        $this->add_control(
            'show_toggle',
            [
                'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'elementor-addon' ),
				'label_on' => esc_html__( 'Custom', 'elementor-addon' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
        );

        $this->add_control(
            'border_style',
            [
                'type' => \Elementor\Controls_Manager::SELECT,
                'label' => esc_html__( 'Border Style', 'elementor-addon' ),
                'default' => 'solid',
                'options' => [
                    'solid' => esc_html__( 'Solid', 'elementor-addon' ),
                    'dashed'   => esc_html__( 'Dashed', 'elementor-addon' ),
                    'dotted'   => esc_html__( 'Dotted', 'elementor-addon' ),
                    'double'   => esc_html__( 'Double', 'elementor-addon' ),
                    'none'   => esc_html__( 'None', 'elementor-addon' ),
                ]
            ]
        );

        $this->add_control(
            'show_elements',
            [
                'type' => \Elementor\Controls_Manager::SELECT2,
                'label' => esc_html__( 'Show Elements', 'elementor-addon' ),
                'label_block' => true,
                'multiple' => true,
                'options' => [
                    'title' => esc_html__( 'Title', 'elementor-addon' ),
                    'description' => esc_html__( 'Description', 'elementor-addon' ),
                    'button' => esc_html__( 'Button', 'elementor-addon' )
                ],
                'default' => ['title', 'description'],
            ]
        );

        $this->add_control(
            'text_align',
            [
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'label' => esc_html__( 'Alignment', 'elementor-addon' ),
                'options' => [
                    'left' => [
                        'title' => esc_html__( 'Left', 'elementor-addon' ),
                        'icon' => 'eicon-text-align-left'
                    ],
                    'center' => [
                        'title' => esc_html__( 'Center', 'elementor-addon' ),
                        'icon' => 'eicon-text-align-center'
                    ],
                    'right' => [
                        'title' => esc_html__( 'Right', 'elementor-addon' ),
                        'icon' => 'eicon-text-align-center'
                    ],
                ],
                    'default' => 'center',
                    'toggle' => true
            ]
        );

        $this->add_control(
            'set_color',
            [
                'label' => esc_html__( 'Beckground Color', 'elementor-addon' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .title' => 'color: {{VALUE}}',
                ]
            ]
        );

        $this->add_control(
            'font_family',
            [
                'label' => esc_html__( 'Font Family', 'elementor-addon' ),
                'type' => \Elementor\Controls_Manager::FONT,
                'default' => "'Open Sans', sans-serif",
                'selectors'=> [
                    '{{WRAPPER}} .title' => 'font-family: {{VALUE}}'
                ]
            ]
        );

        $this->add_control(
            'due_date',
            [
                'label' => esc_html__( 'Due Date', 'elementor-addon' ),
                'type' => \Elementor\Controls_Manager::DATE_TIME,
                'separator' => 'before'
            ]
        );

        $this->add_control(
            'image_gallery',
            [
                'label' => esc_html__( 'Gallery', 'elementor-addon' ),
                'type' => \Elementor\Controls_Manager::GALLERY,
                'separator' => 'before'
            ]
        );

        $this->end_controls_section();
    }

    protected function render(){
        $settings = $this->get_settings_for_display();
        $due_date = strtotime($this->get_settings( 'due_date' ));
        $due_date_in_days = $due_date / DAY_IN_SECONDS;
        ?>
<div
    style="border:2px <?php echo $settings['border_style']; ?> #444; padding: 10px; text-align: <?php echo $settings['text_align']; ?>; background-color: <?php echo $settings['set_color']; ?>;">
    <h2 style="font-family: <?php echo $settings['font_family']; ?>"><?php echo $settings['title']; ?></h2>
    <p><?php echo $settings['number']; ?></p>
    <p><?php echo $settings['details']; ?></p>
    <p><?php echo $settings['more_details']; ?></p>
    <?php if('yes' == $settings['show_field']) : ?>
    <p><?php echo $settings['code_editor']; ?></p>
    <p><?php echo $settings['hidden_data']; ?></p>
    <?php endif; ?>
    <ul>
        <?php foreach($settings['show_elements'] as $element) :?>
        <li><?php echo $element; ?></li>
        <?php endforeach; ?>
    </ul>
    <p><?php printf( esc_html__( 'Something will happen in %s days.', 'plugin-name' ), $due_date_in_days ); ?></p>

    <div>
        <ul>
            <?php foreach($settings['image_gallery'] as $gallery) : ?>
            <li><img src="<?php echo $gallery['url']; ?>" alt="" srcset=""></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<?php
    }

}