<?php
require_once 'autoloader.php';
output::header("contact");
?>
    <div id="contact" class="innerwidth container">
        <div class="row">
            <aside class="col-md-4">
                <article>
                    <h2>Get Social</h2>
                    <ul class="">
                        <li class="sociallink float-left"><a href="facebook.com"><i class="fab fa-facebook-f "></i></a></li>
                        <li class="sociallink float-left"><a href="instagram.com"><i class="fab fa-instagram"></i></a></li>
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
                <p>To enquire about your potential treatments contact Stephanie at steffjackson1@googlemail.com or call
                    07707079470 to discuss further. Alternatively, you can fill out the contact form below and you will
                    receive a response as soon as possible.</p>
                <div id="mailform">
                    <form action="">
                        <div class="input-group row">
                            <label class="col-1 col-form-label"><i class="fas fa-user"></i></label>
                            <div class="col-11">
                                <input type="text" class="form-control" id="name" required
                                       placeholder="Your name">
                            </div>
                        </div>
                        <div class="input-group row">
                            <label class="col-1 col-form-label"><i class="fas fa-envelope"></i></label>
                            <div class="col-11">
                                <input type="email" class="form-control" id="email" required
                                       placeholder="Your email">
                            </div>
                        </div>
                        <div class="input-group row">
                            <label class="col-1 col-form-label"><i class="fas fa-phone"></i></label>
                            <div class="col-11">
                                <input type="text" pattern="[0-9-+]{7,12}" class="form-control" id="phone"
                                       placeholder="Phone number">
                            </div>
                        </div>
                        <div class="input-group row">
                            <label class="col-1 col-form-label"><i class="fas fa-pencil-alt"></i></label>
                            <div class="col-11">
                                <textarea class="form-control" id="textarea" placeholder="Leave your message" rows="5"
                                          required></textarea>
                            </div>
                        </div>
                        <div class="input-group row">
                            <div class="col-1"></div>
                            <div class="col-11">
                                <input type="submit" value="send message">
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

<?php
output::footer();
?>