<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<div class="wrapper">
    <div class="main">
        <section class="top" id="top">
            <div class="container">
                <div class="top__inner">
                    <div class="top__info">
                        <h1 class="top__title">
                            Corporate Legal Representation
                        </h1>
                        <p class="top__text">
                            We understand the difficulties and stress that your legal issues bring. Our team is
                            committed to providing you with the individual attention, communication, and dedication
                            you deserve.
                        </p>
                        <a class="top__btn btn" href="#">Request Consultation</a>
                    </div>
                    <div class="top__img">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/top-img.png" alt="building">
                    </div>
                </div>
            </div>
        </section>
        <section class="practice" id="services">
            <div class="container">
                <div class="practice__inner">
                    <h3 class="practice__title">
                        Areas of Practice
                    </h3>
                    <p class="practice__text">
                        Our disciplined approach to resolving your legal issues will produce the best-possible
                        outcome.
                    </p>
                    <div class="practice__row">
                        <div class="practice__col">
                            <div class="practice__card">
                                <div class="practice__card-img">
                                    <img class="practice__card-icon" src="<?php bloginfo('template_url'); ?>/assets/images/practice-icon1.svg" alt="icon1">
                                </div>
                                <div class="practice__card-info">
                                    <h6 class="practice__card-title">
                                        Intellectual Property
                                    </h6>
                                    <p class="practice__card-text">
                                        Intellectual Property law deals with laws to protect creators and owners of
                                        inventions, writing, music, designs and other works.
                                    </p>
                                </div>
                                <a class="practice__card-link link" href="#">
                                    Learn More
                                </a>
                            </div>
                        </div>
                        <div class="practice__col">
                            <div class="practice__card">
                                <div class="practice__card-img">
                                    <img class="practice__card-icon" src="<?php bloginfo('template_url'); ?>/assets/images/practice-icon2.svg" alt="icon2">
                                </div>
                                <div class="practice__card-info">
                                    <h6 class="practice__card-title">
                                        Real Estate
                                    </h6>
                                    <p class="practice__card-text">
                                        Real estate law is a branch of civil law that covers the right to possess,
                                        use, and enjoy land.
                                    </p>
                                </div>
                                <a class="practice__card-link link" href="#">
                                    Learn More
                                </a>
                            </div>
                        </div>
                        <div class="practice__col">
                            <div class="practice__card">
                                <div class="practice__card-img">
                                    <img class="practice__card-icon" src="<?php bloginfo('template_url'); ?>/assets/images/practice-icon1.svg" alt="icon1">
                                </div>
                                <div class="practice__card-info">
                                    <h6 class="practice__card-title">
                                        Tax Law
                                    </h6>
                                    <p class="practice__card-text">
                                        Tax law cover income, corporate, excise, luxury, estate and property taxes,
                                        to name a few.
                                    </p>
                                </div>
                                <a class="practice__card-link link" href="#">
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about" id="about">
            <div class="container">
                <div class="about__inner">
                    <div class="about__content">
                        <div class="about__info">
                            <h3 class="about__title">
                                Personalized Legal Services
                            </h3>
                            <p class="about__text">
                                One size does not fit all when it comes to your legal needs. We craft a team and
                                strategy specific to your desired outcome.
                            </p>
                            <a class="about__link btn" href="#">
                                About Our Firm
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="reviews">
            <div class="container">
                <div class="reviews__inner">
                    <div class="reviews__slider">
                    <?php
global $post;

$myposts = get_posts([ 
	'numberposts' => -1,
]);

if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
		?>
		<div class="reviews__item-wrapp">
                            <div class="reviews__item">
                                <p class="reviews__item-text">
                                <?php the_title(); ?>
                                </p>
                                <span class="reviews__item-author">
                                <?php the_content(); ?>
                                </span>
                            </div>
                        </div>
		<?php 
	}
} else {
	
}

wp_reset_postdata();
?>
                        
                    </div>
                </div>
            </div>
        </section>
        <section class="articles" id="articles">
            <div class="container">
                <div class="articles__inner">
                    <h3 class="articles__title">
                        Recent Articles
                    </h3>
                    <div class="articles__row">
                        <div class="articles__col">
                            <div class="articles__card">
                                <div class="articles__card-img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/article1.png" alt="article1">
                                </div>
                                <div class="articles__card-content">
                                    <div class="articles__card-info">
                                        <span class="articles__card-date">
                                            December 13, 2020
                                        </span>
                                        <h6 class="articles__card-title">
                                            12 Things About Web Design Your Boss Wants To Know
                                        </h6>
                                    </div>
                                    <a href="#" class="articles__card-link link">
                                        Learn More
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="articles__col">
                            <div class="articles__card">
                                <div class="articles__card-img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/article2.png" alt="article2">
                                </div>
                                <div class="articles__card-content">
                                    <div class="articles__card-info">
                                        <span class="articles__card-date">
                                            December 10, 2020
                                        </span>
                                        <h6 class="articles__card-title">
                                            The History Of Web Design
                                        </h6>
                                    </div>
                                    <a href="#" class="articles__card-link link">
                                        Learn More
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="articles__col">
                            <div class="articles__card">
                                <div class="articles__card-img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/article3.png" alt="article3">
                                </div>
                                <div class="articles__card-content">
                                    <div class="articles__card-info">
                                        <span class="articles__card-date">
                                            December 10, 2020
                                        </span>
                                        <h6 class="articles__card-title">
                                            How to improve Web Design Process
                                        </h6>
                                    </div>
                                    <a href="#" class="articles__card-link link">
                                        Learn More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="subscribe">
            <div class="container">
                <div class="subscribe__inner">
                    <h3 class="subscribe__title">
                        Need professional legal advice?
                    </h3>
                    <p class="subscribe__text">
                        Get a free consultation with our legal experts
                    </p>
                    <a href="#" class="subscribe__btn btn">
                        Request Consultation
                    </a>
                </div>
            </div>
        </section>
    </div>
    
    <?php get_footer(); ?>