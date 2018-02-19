<?php
require_once 'autoloader.php';
output::header("contact");
?>
    <aside>
        <article>
            <h2>Get Social</h2>
            <ul>
                <li class="facebook"><a href="facebook.com"></a></li>
                <li class="instagram"><a href="facebook.com"></a></li>
            </ul>
        </article>
        <article>
            <h2>Contact Info</h2>
            <ul>
                <li>Sloane Square, SW1W</li>
                <li>07707 079 470</li>
                <li><a href="mailto:info@stephaniejackson.co.uk">info@stephaniejackson.co.uk</a></li>
            </ul>
        </article>
    </aside>
    <section>
        <h1>Get in touch with Stephanie</h1>
        <p>To enquire about your potential treatments contact Stephanie at steffjackson1@googlemail.com or call 07707079470 to discuss further. Alternatively, you can fill out the contact form below and you will receive a response as soon as possible.</p>
        <input id="name" name="name" required placeholder="Your name" type="text">
        <input id="email" name="email" required placeholder="Email" type="text">
        <input id="phonenumber" name="phonenumber" required placeholder="Phone Number" type="text">
        <input type="submit">
    </section>


<?php
output::footer();
?>