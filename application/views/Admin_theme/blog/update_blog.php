<?php include_once __DIR__ . '/../header.php'; ?>
<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">
        <?php include_once __DIR__ . '/../sidebar.php'; ?>
        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Page header -->
            <div class="page-header page-header-default">
                <div class="page-header-content">
                    <div class="page-title">
                        <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Dashboard</h4>
                    </div>


                </div>

                <div class="breadcrumb-line">
                    <ul class="breadcrumb">
                        <li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ul>


                </div>
            </div>
            <!-- /page header -->
            <div class="content">
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <?php
                            $attributes = array(
                                'class' => 'form-horizontal',
                                'name' => 'form',
                                'method' => 'post');
                            echo form_open_multipart('admin/update_blog', $attributes)
                            ?>
                            <fieldset class="content-group">
                                <legend class="text-bold">Update Blog</legend>

                                <div class="form-group">
                                    <label class="control-label col-lg-2">Blog Title</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" value="<?=$get_blog_info->blog_title?>" name="blog_title" placeholder="Blog Title...">
                                        <input type="hidden"  value="<?=$get_blog_info->blog_id?>" name="blog_id">
                                    </div>
                                </div>   
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Author Title</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" value="<?=$get_blog_info->auther_name?>" name="auther_name" placeholder="Author Title...">
                                    </div>
                                </div>   
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Author Email</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" value="<?=$get_blog_info->author_email?>" name="author_email" placeholder="Author Email...">
                                    </div>
                                </div>   
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Blog Image</label>
                                    <div class="col-lg-10">
                                        <div class="uploader"><input class="file-styled" type="file" name="blog_image"><span class="filename" style="-moz-user-select: none;">No file selected</span><span class="action btn btn-default" style="-moz-user-select: none;">Choose File</span></div>
                                        <img src="<?=base_url()?>uploads/blog_image/<?=$get_blog_info->blog_image?>" alt="" width="150"/>
                                    </div>
                                </div>  


                                <div class="form-group">
                                    <label class="control-label col-lg-2">Blog Short Description</label>
                                    <div class="col-lg-10">
                                        <?php echo $this->ckeditor->editor("short_description",$get_blog_info->short_description);?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Blog Long Description</label>
                                    <div class="col-lg-10">
                                        <?php echo $this->ckeditor->editor("long_description",$get_blog_info->long_description);?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Publication Status</label>
                                    <div class="col-lg-10">
                                        <select name="publication_status" id="status" class="form-control">
                                            <option value="">Select Publication Status</option>
                                            <option value="1">Published</option>
                                            <option value="2">Unpublished</option>
                                        </select>
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
                <?php include_once __DIR__ . '/../footer.php'; ?>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$('#status').val(<?=$get_blog_info->publication_status?>);
</script>