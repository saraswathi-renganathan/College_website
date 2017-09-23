<?php 
    include_once '../view/header.php'

    include_once '../model/db.php';
    $raw_data = select('*','gallery','1',db_connect());
 ?>


 
<main class="content-offset">
    <section class="client-section">
        <div class="container-inner">
            <h3 class="section-heading">GALLERY</h3>
            <div class="client-section__info">
                <!-- <p class="section-heading">2012-16 BATCH</p> -->
            </div>
            <ul class="client-logo-list">
                <?php 
                    if ($raw_data == 'empty') {
                        echo "<h2>No pic found</h2>";
                    }
                    else {
                        foreach ($raw_data as $key => $value) {
                            echo '<li class="client-logo-list__items"><img width="100%" height="250px" src="images/'.$value['path'].'" alt="" /></li>';
                        }
                        
                    }

                 ?>
            </ul>

        </div>
    </section>
</main>
<!-- footer start -->
<footer class="inner-footer">
    <div class="container-inner inner-footer--container">
        <div class="inner-footer-col1">
            <ul class="quick-contact">
                <li class="quick-contact__item quick-contact__item--inner-footer"><a href="mailto:info@shanmugha.edu.in"><span class="fa fa-envelope-o"></span>info@shanmugha.edu.in</a></li>
                <li class="quick-contact__item quick-contact__item--inner-footer"><a href="tel:+91 7373595555"><span class="fa fa-phone"></span>+91 7373595555</a></li>
            </ul>
        </div>
        <div class="inner-footer-col2">
            <ul class="social-links inner-footer-social-links">
                <li class="social-icon">
                    <a href="https://www.facebook.com/shanmugha.edu.in/" target="_blank" class="fa fa-facebook"></a>
                </li>
                <li class="social-icon">
                    <a href="https://twitter.com/sscettwit" target="_blank" class="fa fa-twitter"></a>
                </li>
                <li class="social-icon">
                    <a href="https://www.linkedin.com/school/15118683/" target="_blank" class="fa fa-linkedin"></a>
                </li>
                <li class="social-icon">
                     <a href="https://plus.google.com/116682144851067676284" target="_blank" class="fa fa-google-plus"></a>
                </li>
            </ul>
        </div>
    </div>
    
<?php 
include_once '../view/footer.php'
 ?>