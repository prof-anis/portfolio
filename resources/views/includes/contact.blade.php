 <!--contact area starts-->

    <div class="contact-area section-padding" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header wow fadeInDown" data-wow-delay="0.2s">
                        <p class="line-one"></p>
                        <h2>Contact</h2>
                        <p class="line-one"></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-contact text-center wow fadeInDown" data-wow-delay="0.4s">
                        <i class="fa fa-home"></i>
                        <h2>Location</h2>
                        <p>Lane D2 ,Fatola, Camp.  <br> Abeokuata, Ogun state, Nigeria.</p> <!--edit here-->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-contact text-center wow fadeInDown" data-wow-delay="0.6s">
                        <i class="fa fa-phone"></i>
                        <h2>Phone:  </h2>
                        <a href="tel:+2347060953859"> 07060953859 </a><!--edit here-->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-contact text-center wow fadeInDown" data-wow-delay="0.8s">
                        <i class="fa fa-envelope-o"></i>
                           <h2>Email:  </h2>
                        <a href="mailto:tobexkee@gmail.com"> tobexkee@gmail.com </a><!--edit here-->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-contact text-center wow fadeInDown" data-wow-delay="1s">
                        <i class="fa fa-gg"></i>
                        <h2>Social Media: </h2>
                        <div class="socials">
                            <a href="https://www.facebook.com/AnifowoseTobi" target="_blank"><i class="fa fa-facebook"></i></a> <!--your facebook profile link here-->
                            <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a> <!--your linkedin profile link here-->
                            <a href="https://twitter.com/?lang=en" target="_blank"><i class="fa fa-twitter"></i></a> <!--your twitter profile link here-->
                            <a href="https://github.com/prof-anis" target="_blank"><i class="fa fa-github"></i></a> <!--your pinterest profile link here-->
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-10 col-md-offset-1">
                    <form id="my-contact-form" method="post" action="{{ route("contact") }}" class="wow fadeInDown" data-wow-delay="1.2s">

                        @csrf

                        <div class="messages"></div> <!--you can change the message in contact.php file -->

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Enter your full name *" required="required" data-error="Fullname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Enter your email *" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Your Message *" rows="4" required="required" data-error="Leave a message for me"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-send" value="" id="submit-button">Send message</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

    <script src="{{ asset('portfolio/js/jquery-3.2.1.min.js')}}"></script>

    <script type="text/javascript"  src="{{  asset('assets/swal.js') }}"></script>
    
    <script type="text/javascript">
        
        $(document).ready(function(){
            $("#submit-button").click(function(e){

                 e.preventDefault();

                var data = $("#my-contact-form").serializeArray();

                var url = "{{ route('contact') }}";

                $.post(url,data,function(info){

                  

                    if (info.code == 200) {

                   swal("yeah!","We are glad to reached out to us. We have recieved your message and would reply as soon as possible.","success");
                }
            })
                .fail(function(info){
                    swal("Opps!","sorry, we could not send your message at this moment. Please try again later","info");
                })
            })

        });
  

    </script>

    <!--contact area ends-->
