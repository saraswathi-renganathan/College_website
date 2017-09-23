<?php 
    include_once '../view/header.php'
    
    include_once '../controller/overall_controller.php';
    $raw_data = news_feed();
 ?>

<main class="content-offset">
    <section class="testimonials-banner inner-page-banner">
        <div class="container-inner">
            <h1 data-aos="fade-down" data-aos-duration="900" class="banner-heading inner-page-banner__heading">Shanmugha <span class="text-orange">Events</span> </h1>
            <!-- <img src="../wp-content/themes/techaspirants/img/arrow.svg" alt="down arrow" class="down-arrow" /> -->
        </div>
    </section>
    <section class="clients-testimonials-section" style="height: 50%">
        <div class="container-inner-fluid">
           
                <!-- <div data-aos="fade-left" data-aos-duration="1100" data-aos-delay="200" class="client-testimonial-card__image aos-init aos-animate">
                    <h3>11 Jul 2017</h3>
                </div> -->
                <?php 
                    if ($raw_data != 'empty') {
                        foreach ($raw_data as $key => $value) {
                            echo '<div class="client-testimonial-card " style="width: 80%;padding: 25px 0;height:80px;margin-bottom:10px"><div data-aos="fade-right" data-aos-duration="1100" data-aos-delay="200" class="client-testimonial-card__info aos-init aos-animate">
                                <blockquote class="client-testimonial-card__quote">
                                    <h2 style="color: #e21760;">
                                        <a href="event.php?event_id='.$value['ID'].'" style="color: #e21760;">'.$value['post_title'].'</a>
                                    </h2>
                                </blockquote></div></div>';
                        }    
                    }
                    else{
                        echo '<div class="client-testimonial-card " style="width: 80%;padding: 25px 0;height:80px;margin-bottom:10px"><div data-aos="fade-right" data-aos-duration="1100" data-aos-delay="200" class="client-testimonial-card__info aos-init aos-animate">
                                <blockquote class="client-testimonial-card__quote">
                                    <h2 style="color: #e21760;">
                                        No Event
                                    </h2>
                                </blockquote></div></div>';
                    }
                    
                 ?>
                
            </div>       
    </section>
</main>
<?php 
include_once '../view/footer.php'
 ?>

