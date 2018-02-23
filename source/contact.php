<?php
require_once 'autoloader.php';
output::header("contact");
?>
<div id="contact" class="innerwidth container">
    <div class="row">
        <aside class="col-md-4">
            <article>
                <h2>Get Social</h2>
                <ul>
                    <li class="sociallink"><a href="facebook.com"><i class="fab fa-facebook-f "></i></a></li>
                    <li class="sociallink"><a href="instagram.com"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </article>
            <article>
                <h2>Contact Info</h2>
                <ul>
                    <li class="infoitem"><i class="fas fa-map-marker"></i>Sloane Square, SW1W</li>
                    <li class="infoitem"><i class="fas fa-phone"></i>07707 079 470</li>
                    <li class="infoitem"><i class="fas fa-envelope"></i><a href="mailto:info@stephaniejackson.co.uk">info@stephaniejackson.co.uk</a></li>
                </ul>
            </article>
        </aside>
        <section class="col-md-8">
            <h1>Get in touch with Stephanie</h1>
            <p>To enquire about your potential treatments contact Stephanie at steffjackson1@googlemail.com or call 07707079470 to discuss further. Alternatively, you can fill out the contact form below and you will receive a response as soon as possible.</p>
            <input id="name" name="name" required placeholder="Your name" type="text">
            <input id="email" name="email" required placeholder="Email" type="text">
            <input id="phonenumber" name="phonenumber" required placeholder="Phone Number" type="text">
            <input type="submit">
        </section>
    </div>
</div>

<?php
output::footer();
?>