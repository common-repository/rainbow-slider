<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * rainbow Elementor Team Widget.
 *
 * Elementor widget that inserts heading into the page
 *
 * @since 1.0.0
 */
class Rainbow_Slider extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve heading  widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'rainbow-slider';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve heading widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'Rainbow Slider', 'rainbow-slider' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve heading  widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-user-circle-o';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the heading widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'rainbow-slider-cat' ];
	}

	/**
	 * Register heading widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _register_controls() {
		
		// start of the Content tab section
	   $this->start_controls_section(
	       'content-section',
		    [
		        'label' => esc_html__('Content','rainbow-slider'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
	    );		

		// rainbow Image
		$this->add_control(
			'rainbow_image',
			[
				'label' => esc_html__( 'Choose Image', 'rainbow-slider' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'separator' => 'before',
				'description' => 'Image size 400px x 420px would be best',
			]
		);

		// rainbow Name
		$this->add_control(
			'rainbow_name',
			[
				'label' => esc_html__( 'Type Name', 'rainbow-slider' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'John Doe', 'rainbow-slider' ),
				'placeholder' => esc_html__( 'Type your name here', 'rainbow-slider' ),
				'separator' => 'before',
				'label_block' => true
			]
		);

		// rainbow Designation
		$this->add_control(
			'rainbow_designation',
			[
				'label' => esc_html__( 'Type Designtion', 'rainbow-slider' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Web Developer', 'rainbow-slider' ),
				'placeholder' => esc_html__( 'Type your designation here', 'rainbow-slider' ),
				'separator' => 'before',
				'label_block' => true
			]
		);


		// rainbow fb url
		$this->add_control(
			'rainbow_fb_link', [
				'label' => esc_html__( 'Type Your Facebook Link', 'rainbow-slider' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'rainbow-slider' ),
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);


		// rainbow tw url
		$this->add_control(
			'rainbow_tw_link', [
				'label' => esc_html__( 'Type Your Twitter Link', 'rainbow-slider' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'rainbow-slider' ),
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);


		// rainbow ld url
		$this->add_control(
			'rainbow_ld_link', [
				'label' => esc_html__( 'Type Your Linkedin Link', 'rainbow-slider' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'rainbow-slider' ),
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);

		// rainbow ins url
		$this->add_control(
			'rainbow_ins_link', [
				'label' => esc_html__( 'Type Your instagram Link', 'rainbow-slider' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'rainbow-slider' ),
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);

	
	$this->end_controls_section();
	}


	/**
	 * Render heading  widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {
		// get our input from the widget settings.
		$settings = $this->get_settings_for_display();	
		$rainbow_image = $settings['rainbow_image'];
		$rainbow_name = $settings['rainbow_name'];
		$rainbow_designation = $settings['rainbow_designation'];
		$rainbow_fburl = $settings['rainbow_fb_link'];
		$rainbow_twurl = $settings['rainbow_tw_link'];
		$rainbow_insurl = $settings['rainbow_ins_link'];
		$rainbow_ldurl = $settings['rainbow_ld_link'];

		?>
	<!-- Start rainbow Team Style Area -->
<section class="carousel" aria-label="Gallery">
  <ol class="carousel__viewport">
    <li id="carousel__slide1"
        tabindex="0"
        class="carousel__slide">
      <div class="carousel__snapper">
        <a href="#carousel__slide4"
           class="carousel__prev">Go to last slide</a>
        <a href="#carousel__slide2"
           class="carousel__next">Go to next slide</a>
      </div>
    </li>
    <li id="carousel__slide2"
        tabindex="0"
        class="carousel__slide">
      <div class="carousel__snapper"></div>
      <a href="#carousel__slide1"
         class="carousel__prev">Go to previous slide</a>
      <a href="#carousel__slide3"
         class="carousel__next">Go to next slide</a>
    </li>
    <li id="carousel__slide3"
        tabindex="0"
        class="carousel__slide">
      <div class="carousel__snapper"></div>
      <a href="#carousel__slide2"
         class="carousel__prev">Go to previous slide</a>
      <a href="#carousel__slide4"
         class="carousel__next">Go to next slide</a>
    </li>
    <li id="carousel__slide4"
        tabindex="0"
        class="carousel__slide">
      <div class="carousel__snapper"></div>
      <a href="#carousel__slide3"
         class="carousel__prev">Go to previous slide</a>
      <a href="#carousel__slide1"
         class="carousel__next">Go to first slide</a>
    </li>
    <li id="carousel__slide5"
        tabindex="0"
        class="carousel__slide">
      <div class="carousel__snapper"></div>
      <a href="#carousel__slide3"
         class="carousel__prev">Go to previous slide</a>
      <a href="#carousel__slide1"
         class="carousel__next">Go to first slide</a>
    </li>
    <li id="carousel__slide6"
        tabindex="0"
        class="carousel__slide">
      <div class="carousel__snapper"></div>
      <a href="#carousel__slide3"
         class="carousel__prev">Go to previous slide</a>
      <a href="#carousel__slide1"
         class="carousel__next">Go to first slide</a>
    </li>
    <li id="carousel__slide7"
        tabindex="0"
        class="carousel__slide">
      <div class="carousel__snapper"></div>
      <a href="#carousel__slide3"
         class="carousel__prev">Go to previous slide</a>
      <a href="#carousel__slide1"
         class="carousel__next">Go to first slide</a>
    </li>
  </ol>
  <aside class="carousel__navigation">
    <ol class="carousel__navigation-list">
      <li class="carousel__navigation-item">
        <a href="#carousel__slide1"
           class="carousel__navigation-button">Go to slide 1</a>
      </li>
      <li class="carousel__navigation-item">
        <a href="#carousel__slide2"
           class="carousel__navigation-button">Go to slide 2</a>
      </li>
      <li class="carousel__navigation-item">
        <a href="#carousel__slide3"
           class="carousel__navigation-button">Go to slide 3</a>
      </li>
      <li class="carousel__navigation-item">
        <a href="#carousel__slide4"
           class="carousel__navigation-button">Go to slide 4</a>
      </li>
      <li class="carousel__navigation-item">
        <a href="#carousel__slide5"
           class="carousel__navigation-button">Go to slide 5</a>
      </li>
      <li class="carousel__navigation-item">
        <a href="#carousel__slide6"
           class="carousel__navigation-button">Go to slide 6</a>
      </li>
      <li class="carousel__navigation-item">
        <a href="#carousel__slide7"
           class="carousel__navigation-button">Go to slide 7</a>
      </li>
    </ol>
  </aside>
</section>




	<?php 
	}
}