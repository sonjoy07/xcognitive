<?php
if (empty($getSubjectWiseExpert)){
    echo '<h2 class="text-center">No Content Found</h2>>';
}else{
foreach ($getSubjectWiseExpert as $expert){
    foreach ($expert as $ex){
//        print_r($ex);die;?>
    <div class="col-sm-4 ">
        <div class="ex-one">
            <div class="media">
                <div class="media-left">
                    <img src="<?= base_url() ?>assets/uploads/files/<?=$ex->experts_image?>" alt="..." class="img-circle">
                </div>
                <div class="media-body">
                    <h4 class="media-heading"><a href=""><?=$ex->expert_name?></a></h4>
                    <p>Conversation: 3000</p>
                    <p>Last Active: Available</p>
                </div>
            </div>
        </div>
        <ul>
            <li><a href=""><i class="fa fa-calendar"></i> Appoinment</a></li>
            <li><a href=""><i class="fa fa-envelope"></i> Message</a></li>
            <li><a href=""><i class="fa fa-comment-o"></i> Chat</a></li>
        </ul>
    </div>
<?php } } }?>