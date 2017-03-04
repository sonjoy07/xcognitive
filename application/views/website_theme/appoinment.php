<?php include_once __DIR__ . '/header.php'; ?>
<span id="message"></span>
<section class="blog_home">
    <div class="container">
        <h3 style="text-align:center">CHOOSE APPOINTMENT</h3>
        <hr/>
        <h4>Provide some additional information</h4>
        <form method="post" action="<?= site_url('user_controller/save_appoinment') ?>" id="appoinment_form">
            <div class="form-group">
                <label for="datepicker">Appointment Date</label>
                <input type="text" class="form-control datepicker" name="appoinment_date" id="appoinment_date"
                       placeholder="Appoinment Date">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword2">Appointment Time</label>
                <select name="appoinment_time" id="appoinment_time" class="form-control">
                    <option value="">Select Time</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword3">Consultation mode:</label><br>
                <label class="radio-inline">
                    <input type="radio" name="consultation" id="inlineRadio1" value="1"> <i
                            class="fa fa-commenting"></i> Text Chat
                </label>
                <label class="radio-inline">
                    <input type="radio" name="consultation" id="inlineRadio2" value="2"> <i
                            class="fa fa-video-camera"></i> Video Chat
                </label>
                <label class="radio-inline">
                    <input type="radio" name="consultation" id="inlineRadio3" value="3"> <i
                            class="fa fa-phone"></i> Phone Chat
                </label>
            </div>
            <button type="submit" class="btn btn-success">Next</button>
        </form>
    </div>
</section>
<section class="useful_information">
    <div class="container">
        <div class="col-md-4">
            <h3>USEFUL LINKS</h3>
            <hr/>
            <ul style="list-style-type:square">
                <span class="col-md-6">
                    <li><a href="">link</a></li>
                    <li><a href="">link</a></li>
                    <li><a href="">link</a></li>
                    <li><a href="">link</a></li>
                    <li><a href="">link</a></li>
                    <li><a href="">link</a></li>
                    <li><a href="">link</a></li>
                    <li><a href="">link</a></li>
                </span>
                <span class="col-md-6">
                    <li><a href="">link</a></li>
                    <li><a href="">link</a></li>
                    <li><a href="">link</a></li>
                    <li><a href="">link</a></li>
                    <li><a href="">link</a></li>
                    <li><a href="">link</a></li>
                    <li><a href="">link</a></li>
                    <li><a href="">link</a></li>
                </span>

            </ul>
        </div>
        <div class="col-sm-4">
            <h3>STAY IN TOUCH</h3>
            <hr/>
            <p>Subscribe to our Newsletter</p>
            <form action="">
                <input type="email" placeholder="Email" class="form-control"/>
                <button>SUBSCRIBE</button>
            </form>
            <hr/>
            <a href="" class="contact_link">Contact Us</a>
        </div>
        <div class="col-sm-4">
            <h3>FOLLOW US</h3>
            <hr/>
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FHuman.Development.Hub%2F&tabs=timeline&width=340&height=550&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=true&appId=124690277922354"
                    width="100%" height="210" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                    allowTransparency="true"></iframe>

        </div>
    </div>
</section>

<?php include_once __DIR__ . '/footer.php'; ?>
<style type="text/css">
    .inline-error{
        color: red;
    }
</style>   

<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="<?= $theme_asset_url ?>js/jquery.validate.min.js"></script>
<script>
    $(function () {
        $('#appoinment_date').Datetime();
           $("#appoinment_form").validate({
                rules: {
                    appoinment_date: {
                        required: true
                    },
                    appoinment_time: {
                        required: true
                    },
                    consultation: {
                        required: true
                    },

                },
                errorElement: "span",
                errorClass: "inline-error",
                messages: {
                    appoinment_date: {
                        required: "Please Enter Appoinment Date ",
                    },
                    appoinment_time: {
                        required: "Please Select Appoinment Time",
                    },
                    consultation: {
                        required: "Please Select Consultation Type",
                    },
                }
            });
        }
    );




</script>
