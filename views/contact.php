<main class="container">
    <div class="grid">
        <section>
            <article>
                <div class="top">
                    <h1 class="text-center mb-0">Contact</h1>
                    <p class="text-center mt-0 mb-0">Fill out the contact form below. It will be a great pleasure to
                        receive and respond to your message.</p>
                </div>
            </article>
        </section>

        <section class="content-grid">
            <form action="#">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group labelholder" data-label="name">
                            <label for="name" hidden>Name</label>
                            <input type="text" class="form-control padding-form" id="name" name="name"
                                   aria-describedby="name" placeholder="Enter your name and lastname">
                        </div>
                        <div class="form-group labelholder" data-label="email">
                            <label for="email" hidden>Email</label>
                            <input type="email" class="form-control padding-form" id="email" name="email"
                                   aria-describedby="email" placeholder="Enter your email">
                        </div>
                        <div class="form-group labelholder" data-label="email">
                            <label for="subject" hidden>subject</label>
                            <input type="text" class="form-control padding-form" id="subject" name="subject"
                                   aria-describedby="subject" placeholder="Enter your subject">
                        </div>
                    </div>
                    <div class="col-4 mr-5">
                        <div class="form-group labelholder" data-label="message">
                            <textarea class="form-control scrollbar" id="style-2" name="message" rows="10"
                                      placeholder="Enter your message"></textarea>
                        </div>
                        <div class="row float-right">
                            <div class="col-12">
                                <div class="form-group labelholder" data-label="Reset">
                                    <input type="reset" class="btn btn-dark btn-form" style="color: #e0e8e5"
                                           value="Reset">
                                    <input type="submit" class="btn btn-success btn-form" value="Send message">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 help-sidebar">
                        <section class="ml-5">
                            <article class="">
                                <div class="row">
                                    <h2>You need help?</h2>
                                    <ul class="mt-3">
                                        <li><a href="#"><i class="icon ion-ios-bolt mr-2" style="color: red"></i>I can
                                                not log into the system</a></li>
                                        <li><a href="#"><i class="icon ion-ios-bolt mr-2" style="color: red"></i>Does
                                                not the donation system work?</a></li>
                                        <li><a href="#"><i class="icon ion-ios-bolt mr-2" style="color: red"></i>I can
                                                not log into the system</a></li>
                                        <li><a href="#"><i class="icon ion-ios-bolt mr-2" style="color: red"></i>Does
                                                not the donation system work?</a></li>
                                    </ul>
                                </div>
                            </article>
                        </section>
                    </div>
                </div>
            </form>
    </div>
    </section>

    <!--Collaborative section-->
    <?php include 'includes/collaborative.php' ?>

    </div>


</main>
