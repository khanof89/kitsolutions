<!-- FOOTER -->
<footer class="background-dark text-grey" id="footer">
    <div class="footer-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-logo float-left">
                        <img alt="" src="/images/K-it-solutions_001_png_002.png">
                    </div>
                    <p style="margin-top: 12px;">
                        Kakraulia IT Solution is your one stop destination for a plethora of networking services and security. Initially registered as Sal Infotech in 2013, we have been quietly redefining the online networking solutions experience. Partner with us today for your data management; computer and hardware lease, rent and sale; and related IT services at workable rates.
                    </p>

                </div>
            </div>
            <div class="seperator seperator-dark seperator-simple"></div>
            <div class="row">


                <div class="col-md-6">
                    <div class="widget clearfix widget-contact-us" style="background-image: url('/images/world-map.png'); background-position: 50% 55px; background-repeat: no-repeat">
                        <h4 class="widget-title">Contact us</h4>
                        <ul class="list-large list-icons">
                            <li><i class="fa fa-map-marker"></i>
                                <strong>Address:</strong> Street no. 3, Sain Vihar
                                <br>NH-24, Ghaziabad-201001</li>
                            <li><i class="fa fa-phone"></i><strong>Phone:</strong> +91-9582687269 </li>
                            <li><i class="fa fa-envelope"></i><strong>Email:</strong> <a href="mailto:info@kakraulia.com">info@kakraulia.com</a>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="col-md-6">

                    <div class="widget clearfix widget-newsletter">
                        <form id="widget-subscribe-form" action="/include/subscribe-form.php" role="form" method="post" class="form-inline">
                            <h4 class="widget-title">Newsletter</h4>
                            <small>Stay informed on our latest news!</small>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
                                <input type="email" aria-required="true" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                                <span class="input-group-btn">
											<button type="submit" id="widget-subscribe-submit-button" class="btn btn-primary">Subscribe</button>
										</span>
                            </div>
                        </form>
                        <script type="text/javascript">
                            jQuery("#widget-subscribe-form").validate({
                                submitHandler: function(form) {
                                    jQuery(form).ajaxSubmit({
                                        dataType: 'json',
                                        success: function(text) {
                                            if (text.response == 'success') {
                                                $.notify({
                                                    message: "You have successfully subscribed to our mailing list."
                                                }, {
                                                    type: 'success'
                                                });
                                                $(form)[0].reset();

                                            } else {
                                                $.notify({
                                                    message: text.message
                                                }, {
                                                    type: 'warning'
                                                });
                                            }
                                        }
                                    });
                                }
                            });
                        </script>
                    </div>

                </div>



            </div>


        </div>
    </div>
    <div class="copyright-content">
        <div class="container">
            <div class="row">
                <div class="copyright-text col-md-6"> &copy; 2016 - Kakraulia IT Solution.All Rights Reserved.
                </div>
                <div class="col-md-6"><div class="social-icons">
                        <ul>
                            <li class="social-facebook"><a href="https://www.facebook.com/salinfotech/?fref=ts" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li class="social-youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                    </div></div>
            </div>
        </div>
    </div>
</footer>
<!-- END: FOOTER -->

</div>