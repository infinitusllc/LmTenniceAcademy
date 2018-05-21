<?php
    include "includes/get_generics.inc.php";
    require_once "includes/tr.inc.php";
    $language_key = $_SESSION['lang_key'];
    $translations = getTranslationsByKey($language_key);
?>

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1489.2505910631169!2d44.7992067!3d41.7097029!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40440d27a50b3d81%3A0x49e76550bfc845c0!2sLeila+Meskhi+Tennis+Academy+Fitness+And+Pool!5e0!3m2!1sen!2sge!4v1525943274832" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>        <div class="row">
            <div class="col-md-5">
                <!-- REVIEW FORM -->
                <form id="review-form" class="common-style" action="includes/make_review.inc.php" method="post" accept-charset="UTF-8"
                      style="text-align: left; margin-bottom: 20px; margin-top: 100px">
                    <p style="color: darkgray; margin-bottom: 10px;"> <h4> <?php echo $translations['leave_review']; ?> </h4></p>
                    <input name="e_mail" placeholder="<?php echo $translations['e-mail']; ?>" style="width: 450px;"><br/>
                    <input name="subject" placeholder="<?php echo $translations['subject']; ?>" style="width: 450px;">
                    <textarea name="review" style="width: 450px;height: 100px;"><?php echo $translations['review']; ?></textarea> <br/>
                    <input type="submit" name="submit" value="<?php echo $translations['to_leave_review']; ?>">
                </form>
                <!-- REVIEW FORM -->
            </div>
            <div class="col-md-5">
                <address class="contact-info">
                    <h4> <?php echo $generics['contact'][$lang_key]['title'];  ?> </h4>
                    <?php echo $generics['contact'][$lang_key]['intro'];  ?>
                </address>
            </div>
            <div class="col-md-2">
                <ul class="inline-list text-center text-lg-center">
                    <li>
                        <a class="icon-xs fa-facebook" href="#"></a>
                    </li>
                    <li>
                        <a class="icon-xs fa-google-plus" href="#"></a>
                    </li>
                    <li>
                        <a class="icon-xs fa-linkedin" href="#"></a>
                    </li>
                    <li>
                        <a class="icon-xs fa-twitter" href="#"></a>
                    </li>
                </ul>
				<img src="images/QR_toptravel.png" alt="" width="190" height="190">   
            </div>
        </div>
    </div>
</footer>