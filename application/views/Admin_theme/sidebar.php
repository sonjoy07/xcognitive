<!-- Main sidebar -->
<div class="sidebar sidebar-main">
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="category-content">
                <div class="media">
                    <a href="#" class="media-left"><img src="<?=base_url()?>assets/website/images/logooo.png" class="img-circle img-sm" alt=""></a>
                    <div class="media-body">
                        <span class="media-heading text-semibold">Xcognitive</span>
                        <div class="text-size-mini text-muted">
                            <!--<i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA-->
                        </div>
                    </div>

                    <div class="media-right media-middle">
                        <ul class="icons-list">
                            <li>
                                <a href="#"><i class="icon-cog3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">

                    <!-- Main -->
                    <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
                    <li class="active"><a href="<?=  site_url('admin')?>"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
                    <li>
                        <a href=""><i class="icon-stack2"></i> <span>Blogs</span></a>
                        <ul>
                            <li><a href="<?=  site_url('admin/blogCategory')?>">Add Category</a></li>
                            <li><a href="<?=  site_url('admin/blog_list')?>">Blogs</a></li>
                        </ul>
                    </li><li>
                        <a href=""><i class="icon-stack2"></i> <span>Experts</span></a>
                        <ul>
                            <li><a href="<?=  site_url('admin/add_subject')?>">Add Subject</a></li>
                            <li><a href="<?=  site_url('admin/expert_list')?>">Expert List</a></li>
                            <li><a href="<?=  site_url('admin/expert_schedule')?>">Expert schedule</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=""><i class="icon-stack2"></i> <span>Homepage</span></a>
                        <ul>

                            <li><a href="<?=  site_url('admin/settings')?>"><i class="icon-cog3"></i> Settings</a></li>
                        </ul>
                    </li>

                    <li><a href="<?=  site_url('admin/services')?>"><i class="icon-windows"></i> Services</a></li>
                    <li><a href="<?=  site_url('admin/book_download')?>"><i class="icon-download"></i> Book Download</a></li>
                    <!--<li><a href="http://demo.interface.club/limitless/layout_1/RTL/default/index.html"><i class="icon-width"></i> <span>RTL version</span></a></li>-->
                    <!-- /main -->

                    <!-- Forms -->
                    <li class="navigation-header"><span>Forms</span> <i class="icon-menu" title="Forms"></i></li>
                    

                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>
<!-- /main sidebar -->