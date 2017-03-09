<?php include_once __DIR__ . '/header.php'; ?>
<section class="blog_home">
    <div class="container">
        <div class="panel panel-flat">
            <div class="panel-heading">
                <?php
                $attributes = array(
                    'class' => 'form-horizontal',
                    'name' => 'form',
                    'method' => 'post');
                if ($this->session->userdata('user_type') == 2) {
                    echo form_open_multipart('user_controller/save_blog', $attributes);
                }if ($this->session->userdata('user_type') == 3) {
                    echo form_open_multipart('expert_controller/save_blog', $attributes);
                }
                ?>
                <?php
                if ($this->session->flashdata('message')) {
                    echo $this->session->flashdata('message');
                }
                ?>
                <fieldset class="content-group">
                    <legend class="text-bold">Basic inputs</legend>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Blog Title</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="blog_title" placeholder="Blog Title...">
                        </div>
                    </div>   
                    <div class="form-group">
                        <label class="control-label col-lg-2">Category List</label>
                        <div class="col-lg-10">
                            <select name="category_id" id="" class="form-control">
                                <option value="">Select Category</option>
                                <?php foreach ($get_category as $category) { ?>
                                    <option value="<?= $category->category_id ?>"><?= $category->category_name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>   
                    <div class="form-group">
                        <label class="control-label col-lg-2">Author Title</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" value="<?= $this->session->userdata('username') ?>" name="auther_name" placeholder="Author Title..." readonly="">
                        </div>
                    </div>   
                    <div class="form-group">
                        <label class="control-label col-lg-2">Author Email</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" value="<?= $this->session->userdata('email') ?>" name="author_email" placeholder="Author Email..." readonly="">
                        </div>
                    </div>   
                    <div class="form-group">
                        <label class="control-label col-lg-2">Blog Image</label>
                        <div class="col-lg-10">
                            <div class="uploader"><input class="file-styled" type="file" name="blog_image"></div>
                        </div>
                    </div>  


                    <div class="form-group">
                        <label class="control-label col-lg-2">Blog Short Description</label>
                        <div class="col-lg-10">
                            <?php echo $this->ckeditor->editor("short_description"); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Blog Long Description</label>
                        <div class="col-lg-10">
                            <?php echo $this->ckeditor->editor("long_description"); ?>
                        </div>
                    </div>

                </fieldset>





                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
                </div>
                <?= form_close(); ?>
            </div>
            <div class="panel-body"></div>
        </div>
    </div>
</section>
<?php include_once __DIR__ . '/footer.php'; ?>