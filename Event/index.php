<?php 
    include_once '../view/header.php'

    include_once '../controller/overall_controller.php';
    if (isset($_GET['year'])) {
        $raw_data = news_archive($_GET['year']);
        $count = count($raw_data);

    }
    else{
        $raw_data = news_archive('2017');
        $count = count($raw_data);
    }
 ?>

<main class="content-offset">
    <section class="testimonials-banner inner-page-banner">
        <div class="container-inner">
            <h1 data-aos="fade-down" data-aos-duration="900" class="banner-heading inner-page-banner__heading">Shanmugha <span class="text-orange">Events</span> (<?php echo $count; ?>)</h1>
            <a href="?year=2017" class="cta-more ">2017</a>&nbsp;&nbsp;&nbsp;
            <a href="?year=2016" class="cta-more ">2016</a>&nbsp;&nbsp;&nbsp;
            <a href="?year=2015" class="cta-more">2015</a>&nbsp;&nbsp;&nbsp;
            <a href="?year=2014" class="cta-more">2014</a>&nbsp;&nbsp;&nbsp;
            <a href="?year=2013" class="cta-more">2013</a>
            <!-- <img src="../wp-content/themes/techaspirants/img/arrow.svg" alt="down arrow" class="down-arrow" /> -->
        </div>
    </section>
    <section class="clients-testimonials-section">
        <div class="container-inner-fluid">
          
            <?php 
                // date('d M Y', strtotime($value['post_date_gmt']))
                foreach ($raw_data as $key => $value) {
                  echo '<div class="client-testimonial-card " style="width: 60%;padding: 25px 0;height: 90px;margin-bottom: 10px">
                <div data-aos="fade-left" data-aos-duration="1100" data-aos-delay="200" class="client-testimonial-card__image">
                    <h3>'.date("M d,Y",strtotime($value["post_date"])).'</h3></div>
                <div data-aos="fade-right" data-aos-duration="1100" data-aos-delay="200" class="client-testimonial-card__info">
                    <blockquote class="client-testimonial-card__quote"><a href="event.php?event_id='.$value['ID'].'" style="color: #e21760;">'.$value['post_title'].'</a></blockquote>
                </div>
            </div>';  
                }

             ?>
            
    </section>
</main>
<?php 
include_once '../view/footer.php'
 ?>