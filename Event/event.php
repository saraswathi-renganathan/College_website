<?php 
    include_once '../view/header.php'

    include_once '../controller/overall_controller.php';


    $raw_data = single_event($_GET['event_id']);
    // print_r($raw_data);
 ?>

<main class="content-offset">
    <section class="testimonials-banner inner-page-banner">
        <div class="container-inner">
            <h1 data-aos="fade-down" data-aos-duration="900" class="banner-heading inner-page-banner__heading">Shanmugha <span class="text-orange">Events</span> </h1>
            <!-- <img src="../wp-content/themes/techaspirants/img/arrow.svg" alt="down arrow" class="down-arrow" /> -->
        </div>
    </section>
    <section class="clients-testimonials-section">
        <div class="container-inner-fluid">
            <?php 
                    foreach ($raw_data as $key => $value) {
                        $raw_data = explode("[gallery",$value['post_content']);


                       $raw_data[0] = str_replace("pstyle","p style",$raw_data[0]);


                        echo '<div class="client-testimonial-card " style="width: 80%;padding: 25px 0;">
                <div data-aos="fade-left" data-aos-duration="1100" data-aos-delay="200" class="client-testimonial-card__image">
                    <h3>'.date('d M Y', strtotime($value['post_date'])).'</h3></div>
                <div data-aos="fade-right" data-aos-duration="1100" data-aos-delay="200" class="client-testimonial-card__info">
                    <blockquote class="client-testimonial-card__quote">
                        <h2 style="color: #e21760;">'.$value['post_title'].'</h2>
                        '.$raw_data['0'].'
                        </blockquote></div>            </div>';
                        
                        // print_r($raw_data);
                        if(isset($raw_data['1'])){
                            echo '<section class="blog-card-section">
                <div class="container-inner">
                    <div class="blog-landing-header">
                        <h3 data-aos="fade-right" data-aos-duration="1200" class="section-heading slope-divider">We like Sharing Thoughts</h3>
                    </div>
                    <div class="blog-cards-main">';
                            $image_ids = preg_replace('/[^0-9\.,]+/', '', $raw_data['1']);
                            $image_id = explode(",", $image_ids);
                            foreach ($image_id as $key => $id) {
                                $where = '`id` = '.$id;
                                $selected_row = select('`guid`', '`wp_posts`', $where, db_connect());
                                // echo '<img src="'.$selected_row['0']['guid'].'">';
                                echo '<article data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300" class="blog-cards" data-aos="fade-up" data-aos-duration="1200">
                            <div class="blog-cards__image-container">
                                <a href="#" class="blog-cards__detail-link">
                                    <div class="blog-cards__image" style="background-image:url('.$selected_row['0']['guid'].')"><img src="#" alt="Blog Image" class="sr-only" /></div>
                                </a>
                            </div>
                        </article>';
                            }
                            echo '</div></div></section>';
                        }
                       
                    }
                 ?>
                    
    </section>
</main>

<?php 
include_once '../view/footer.php'
 ?>