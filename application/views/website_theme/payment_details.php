<?php include_once __DIR__ . '/header.php'; ?>
<section class="payment_details">
    <div class="container">
        <div class="col-md-6 col-xs-12" style="border-right: 1px solid #e67e22;background: #F1F1F1;">
            <div class="margin">
                <h3>Nearly there!</h3>
                <p>You have requested for an appointment</p>
                <div class="exper_payment_info">
                    <div class="info_group">
                        <label for="">Expert :</label><span> Stuti Pardhe</span>
                    </div>
                    <div class="info_group">
                        <label for="">Date :</label><span> 14 Feb 2017</span>
                    </div>
                    <div class="info_group">
                        <label for="">Time :</label><span> 2.00pm</span>
                    </div>
                    <div class="info_group">
                        <label for="">Type :</label><span> Voice Call</span>
                    </div>
                    <div class="info_group">
                        <label for="">Charges :</label><span> &#2547;400 </span>
                    </div>
                </div>
                <div class="coupon">
                    <input type="text" placeholder="Enter Your Coupon">
                    <button class="btn btn-success">Apply</button>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xs-12">
            <div class="margin ">
                <h3>Please provide/confirm your contact information</h3>
                <p>So we can update you on the status of the appointment</p>
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword2">Phone</label>
                        <input type="text" class="form-control" id="exampleInputPassword2" placeholder="Phone">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword3">User Name</label>
                        <input type="text" class="form-control" id="exampleInputPassword3" placeholder="Username">
                    </div>
                    <button type="submit" class="btn btn-success btn-lg btn-block">CONTINUE BOOKING</button>
                </form>
            </div>
        </div>
    </div>
</section>
    <div class="feedback_form">
        <a href="" type="button" data-toggle="modal" data-target="#myModal">Feedback Form</a>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title" id="myModalLabel">Share your Feedback</h3>
                    <p class="modal-title">We would love to hear your thoughts, concerns or problems with anything so we can
                        improve!</p>
                </div>
                <div class="modal-body">
                    <div class="margin feedback">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" value="<?php echo $this->session->userdata('user_name')?>" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" value="<?php echo $this->session->userdata('email')?>"  placeholder="Email">
                            </div>
                            <div class="form-group">
                                <textarea name="Your Feedback" id="" cols="30" rows="10" class="form-control"><?php echo $this->session->userdata()?></textarea>
                            </div>
                            <button type="submit" class="btn btn-warning btn-lg btn-block ">Share Feedback</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include_once __DIR__ . '/footer.php'; ?>