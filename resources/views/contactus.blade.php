<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <section class="title-hero-bg parallax-effect" style="background-image: url('1.jpg');">
        <div class="container">
            <div class="page-title text-center white-color">
                <h1>Contact</h1>
            </div>
        </div>
    </section>
    <!-- === Page Title End === -->
    <!--=== Page Title Text Start ===-->
    <section class="white-bg">
        <div class="container">
            <div class="row pt-10">
                <div class="col-md-12 section-heading mt-2">
                    <div class="text-center mt-2">
                        <h2 class="mt-2 dark-color " data-backletter="Contact">Get in Touch</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-0 white-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 mt-2">
                    <div class="col-inner spacer light-br-r">
                        <div class="text-center">
                            <i class="fa fa-map-marker text-danger display-3" aria-hidden="true"></i>
                        </div>
                        <div class="text-center">
                            <h3 class=" font-weight-bold"> Office Address</h3>
                            <p>Apex College, Baneshwor<br /> Kathmandu, Nepal</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-2">
                    <div class="col-inner spacer light-br-r">
                        <div class="text-center">
                            <i class="fa fa-envelope text-primary display-3" aria-hidden="true"></i>
                        </div>
                        <div class="text-center">
                            <h3>Email Us</h3>
                            <p class="mb-0"><a href="mailto:nabin.kattel@apexcollege.edu.np">nabin.kattel@apexcollege.edu.np</a></p>
                            <p class="mb-0"><a href="mailto:sachin.khadka@apexcollege.edu.np">sachin.khadka@apexcollege.edu.np</a></p>
                            <p class="mb-0"><a href="mailto:saugat.shrestha@apexcollege.edu.np">saugat shrestha@apexcollege.edu.np</a></p>
                            <p class="mb-0"><a href="mailto:sushil.aryal16@apexcollege.edu.np">sushil.aryal16@apexcollege.edu.np</a></p>
                            <!-- <p><a href="maito:nepalmedia.com@gmail.com">nepalmedia.com@gmail.com</a<</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-2">
                    <div class="col-inner spacer">
                        <div class="text-center">
                            <i class="fa fa-phone text-success display-3" aria-hidden="true"></i>
                        </div>
                        <div class="text-center">
                            <h3>Call Us</h3>
                            <p class="mb-0"><a href="tel:9866951623">9866951623</a> (Nabin kattel)</p>
                            <p class="mb-0"><a href="tel:9849394099">9849394099</a> (Sachin khadka)</p>
                            <p class="mb-0"><a href="tel:9860103980">9860103980</a> (Saugat Shrestha)</p>
                            <p class="mb-0"><a href="tel:9861230210">9861230210</a> (Sushil Aryal)</p>
                            <!-- <p><a href="tel:+1 562 502 7239">+1 562 502 7239</a> (VoIP)</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="white-bg form-style-one">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 section-heading pb-0 text-center">
                        <h2 class="mt-2">Feel free to write us</h2>
                    </div>
                </div>
                <div class="row mt-20">
                    <div class="col-md-12">
                        <div class="messages mt-2"></div>
                        <form id="ContactForm" action="contact.html" method="post" name="ContactForm" novalidate="">
                            <input type="hidden" name="formid" style="display:none;" value="ContactForm" />
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group"><label class="sr-only" for="name">Name</label> <input id="name" class="form-control" name="Name" required="" type="text" placeholder="Your Name" data-error="Your Name is Required" value="" />
                                        <div class="help-block with-errors mt-10">&nbsp;</div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group"><label class="sr-only" for="email">E-mail</label> <input id="email" class="form-control" name="email" required="" type="email" placeholder="Your Email" data-error="Please Enter Valid Email" value="" />
                                        <div class="help-block with-errors mt-10">&nbsp;</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group"><label class="sr-only" for="country">Country</label> <input id="country" class="form-control" name="country" required="" type="text" placeholder="Your Country" data-error="Your Country is Required" value="" />
                                        <div class="help-block with-errors mt-10">&nbsp;</div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group"><label class="sr-only" for="city">City</label> <input id="city" class="form-control" name="city" required="" type="text" placeholder="Your City" data-error="Your City is Required" value="" />
                                        <div class="help-block with-errors mt-10">&nbsp;</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group"><label class="sr-only" for="phone">Phone</label> <input id="phone" class="form-control" name="phone" required="" type="text" placeholder="Your Phone" data-error="Your Phone is Required" value="" />
                                        <div class="help-block with-errors mt-10">&nbsp;</div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group"><label class="sr-only" for="webiste">Website</label> <input id="website" class="form-control" name="website" type="text" placeholder="Your Website (if any)" data-error="Your Website" value="" />
                                        <div class="help-block with-errors mt-10">&nbsp;</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group"><label class="sr-only" for="message">Your Requirements</label> <textarea id="message" class="form-control" name="message" required="" rows="7" placeholder="Your Requirements" data-error="Please, let us know your requirements"></textarea>
                                <div class="help-block with-errors mt-10">&nbsp;</div>
                                <input type="text" name="ip" maxlength="30" readonly="readonly" style="display:none;" value="27.34.27.29" />
                                <input id="Subject" type="text" name="subject" style="display:none;" value="Message from website." />
                            </div>
                            <div class="row">
                                <!-- <div class="col-md-4 col-sm-4">
    <div class="form-group">
        <img src="https://www.nepalmedia.com/manager/includes/veriword.php?rand=213927013" alt="verification code" border="1" class="no-float" />
        <div class="help-block with-errors mt-10">&nbsp;</div>
    </div></div> -->
                                <!-- <div class="col-md-4 col-sm-4">
    <div class="form-group">
        <label class="sr-only" for="vericode">Captcha Code</label>
        <input type="text" name="vericode" class="form-control" size="20" id="vericode" placeholder="Captcha Code" value="" />
        <div class="help-block with-errors mt-10">&nbsp;</div>
    </div>
</div> -->
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-color btn-md btn-circle btn-animate remove-margin" name="submit">Send Message </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>