<?php
require_once 'autoloader.php';
output::header("index");
?>
    <section class="frontpagecarousel">
        <div class="innerwidth clearfix" >
            <div id="carouselFront" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselFront" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselFront" data-slide-to="1"></li>
                    <li data-target="#carouselFront" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="img/A1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="img/A2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="img/A3.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselFront" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselFront" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <section>
        <div class="innerwidth">
            <article>
                <h2>Eyebrows</h2>
                <p>Your eyebrows are the most dominant facial feature, and a crucial part to structuring the beauty of your face. A pair of well groomed and healthy looking eye brows can enhance your natural beauty as well as maintain your vitality.</p>
            </article>
            <article>
                <h2>Eyeliner</h2>
                <p>This treatment allows you to achieve the most from your eyes. Whether you want an eyelash enhancement or a total refinement, this procedure is the ideal method for long lasting eyeliner.</p>
            </article>
            <article>
                <h2>Lips</h2>
                <p>Semi Permanent Lip Liner redefines the lips with a subtle use of colour to enhance the shape, also giving the illusion of fullness. Stephanie can restore and reshape fading lip lines, whether caused by the ageing process, cold sores or even scarring.</p>
            </article>
            <article>
                <h2>Beauty Spot</h2>
                <p>A simple beauty spot strategically placed on your face, can add a touch of glamour. However, a more natural placement can deter ones eye from any imperfections.</p>
            </article>
        </div>
    </section>
    <section>
        <div class="innerwidth">
            <h2>What others say about their experience with Stephanie</h2>
            <blockquote>
                "
                <p>
                    I was pleasantly surprised with my experience Stephanie she is very professional & listened to what I wanted, I had no issues at all in this whole process. I had a terrible experience with my brows a long time ago & never thought I could get them fixed but she exceeded my expectations and I absolutely love them. Aside from her great work ethic her work environment is really one of the best I have been in it is very tidy, sterile and made me feel at ease when I came in. I would highly recommend Stephanie her work is meticulous and she literally changed my confidence and now has a customer for life xxx
                </p>
                "
                <em>Fara Cherry Muche</em>
            </blockquote>
            <blockquote>
                "
                <p>
                    Stephanie is simply the best!!! Really happy with the result and she’s such a lovely lady! I postponed having this treatment as I feared the worst…I am not the bravest person but the procedure wasn’t painful whatsoever and Stephanie made me feel at ease. Thank you Stephanie for my new eyebrows! Big hugs and look forward to seeing you soon
                </p>
                "
                <em>Ana Pojar</em>
            </blockquote>
        </div>
    </section>
    <section>
        <div class="innerwidth">
            <h2>Contact Stephanie & start your amazing treatment today!</h2>
            <em>CLICK HERE</em>
        </div>
    </section>
<?php
output::footer();
?>