<?php include_once __DIR__ . '/header.php'; ?>

<section class="payment_details">




    <div class="container list-container ">
        <div class="row">
            <div class="full-width">
                <div id="header-list-area">
                    <!---->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="full-width">
                <div id="list-area">
                    <!---->
                    <div id="ember999" class="ember-view"><!---->
                        <!---->
                        <div id="ember1071" class="ember-view"><!----></div>

                        <div class="contents">
                            <!---->
                            <div class="user-navigation my-new-list" id="filters-listing">
                                <h6> Categories </h6>
                                <ul class="action-list nav-stacked z-depth-1 white">
                                    <li class="noGlyph " id="category_all"><a class="badge-wrapper bullet categoryFilter" onclick="highlightCat('all')" href="/c/all">All</a></li>
                                    <?php foreach ($get_forum_category as $category) { ?>
                                        <li class="noGlyph " ><a class="badge-wrapper bullet categoryFilter" id="category_academic" data-id="<?= $category->forum_category_id ?>"><?= $category->category_name ?></a></li>
                                    <?php } ?>

                                </ul></div>

                            <div class="topic-list">
                                <h3>Top Stories for you</h3>
                                    <hr />
                                    <div class="user_info_in_forum">
                                        <ul>

                                            <li><a href=""><?= $this->session->userdata('username') ?></a></li>
                                        </ul>
                                        <h3><a href="" type="button" data-toggle="modal" data-target="#myModal">What is your question?</a></h3>
                                    </div>
                                    <hr />
                                <div id="ajax_result"></div>
                                <?php foreach ($get_forum as $get_forum) {?>
                                    
                                    <div class="forum_post">
                                        <ul>
                                            <li><a href="">Answer written .</a></li>
                                            <li><a href="">Philosophy .</a></li>
                                            <li><a href="">Dec 18</a></li>
                                        </ul>
                                        <h3><a href=""><?= $get_forum->forum_description ?></a></h3>
                                        <div class="post_user_info">
                                            <ul>
                                                <li><a href=""><img src="<?= base_url() ?>uploads/expert_image/14568122_1130656720344527_6916688072930586451_n.jpg" alt="" /></a></li>
                                                <li><a href="">Desmond Ng, studied at Nanyang Polytechnic</a> <br /> <a>Written Dec 18</span></a></li>
                                            </ul>


                                            <ul>
                                                <li><button class="btn btn-primary">Upvote</button></li>
                                                <li><a href="">Downvote</a></li>
                                                <li><a href="">Comments 25+</a></li>
                                            </ul>
                                        </div>
                                        <hr />
                                    </div>
                                <?php }?>
                                <!--                                <h3>Top Stories for you</h3>
                                                                <hr />
                                                                <div class="user_info_in_forum">
                                                                    <ul>
                                                                        <li><a href=""><img src="<?= base_url() ?>uploads/expert_image/14568122_1130656720344527_6916688072930586451_n.jpg" alt="" /></a></li>
                                                                        <li><a href="">Sonjoy Biswas</a></li>
                                                                    </ul>
                                                                    <h3><a href="" type="button" data-toggle="modal" data-target="#myModal">What is your question?</a></h3>
                                                                </div>
                                                                <hr />
                                                                <div class="forum_post">
                                                                    <ul>
                                                                        <li><a href="">Answer written .</a></li>
                                                                        <li><a href="">Philosophy .</a></li>
                                                                        <li><a href="">Dec 18</a></li>
                                                                    </ul>
                                                                    <h3><a href="">What's a statistic that many people would be surprised by?</a></h3>
                                                                    <div class="post_user_info">
                                                                        <ul>
                                                                            <li><a href=""><img src="<?= base_url() ?>uploads/expert_image/14568122_1130656720344527_6916688072930586451_n.jpg" alt="" /></a></li>
                                                                            <li><a href="">Desmond Ng, studied at Nanyang Polytechnic</a> <br /> <a>Written Dec 18</span></a></li>
                                                                        </ul>
                                                                        <p>To be in the world’s top 50% by wealth, you only need $3600. To be in the world’s top 25%, you only need $55,000.
                                
                                                                            During WWI, 65% of Britain’s glass optics (used in military binoculars) came from Germany, and 70% of Germany’s rubber came from Britain.
                                
                                                                            The world produces enough food for 12 billion people, enough water for 16 billion and enough energy for 20 billion. The only problem is distribution.
                                
                                                                            All the explosives used in WWII would only equal about one Mk V atomic bomb.</p>
                                
                                                                        <ul>
                                                                            <li><button class="btn btn-primary">Upvote</button></li>
                                                                            <li><a href="">Downvote</a></li>
                                                                            <li><a href="">Comments 25+</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <hr />
                                                                </div>-->
                            </div>
<!--                            <table id="ember1081" class="ember-view topic-list" style=""> 
                                <thead>




                                    <tr><th data-sort-order="posts" class="posts">Topic</th>


                                        <th data-sort-order="posts" class="posts sortable num">Replies</th>

                                        <th data-sort-order="activity" class="activity sortable">Last Post</th>





                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="ember1163" class="ember-view topic-list-item category-rum-c/career" data-topic-id="8569" style="background-color: rgb(255, 255, 255);">

                                        <td class="main-link clearfix">

                                            <a href="/forum/t/carrer-confusion/8569" class="title">Carrer confusion</a>
                                            <span class="topic-post-badges">
                                            </span>



                                            <div class="creator">
                                                <a href="/users/AmeetEminem" data-auto-route="true" data-user-card="AmeetEminem">AmeetEminem</a> <a href="/forum/t/carrer-confusion/8569"><span class="relative-date" title="March 13, 2017 6:05pm" data-time="1489406715807" data-format="tiny">8d</span></a>
                                            </div>
                                        </td>





                                        <td class="num posts-map posts heatmap-" title="This topic has 2 replies">
                                            <a href="" class="posts-map badge-posts heatmap-"><span class="number" title="2">2</span></a>
                                        </td>


                                        <td class="last-post">
                                            <div class="poster-avatar">
                                                <a href="" data-user-card="nikita-agarwal-57k7m"><img alt="" src="/forum/user_avatar/forum.yourdost.com/nikita-agarwal-57k7m/32/198203_1.png" class="avatar" title="nikita-agarwal-57k7m" height="32" width="32"></a>
                                            </div>
                                            <div class="poster-info">
                                                <a href="/forum/t/carrer-confusion/8569/3">
                                                    <span class="relative-date" title="March 21, 2017 12:37pm" data-time="1490078268797" data-format="tiny">3m</span>
                                                </a>
                                                <span class="editor"><a href="/users/nikita-agarwal-57k7m" data-auto-route="true" data-user-card="nikita-agarwal-57k7m">nikita-agarwal-57k7m</a></span>
                                            </div>
                                        </td>
                                    </tr><tr id="ember1090" class="ember-view topic-list-item category-rum-c/yd-forum" data-topic-id="8631">

                                        <td class="main-link clearfix">

                                            <a href="/forum/t/pulling-my-life-together-asking-for-general-advice-and-suggestions/8631" class="title">Pulling my life together; Asking for general advice and suggestions</a>
                                            <span class="topic-post-badges">
                                            </span>
                                            <div class="creator">
                                                <a href="/users/hypatia-d_alexandrie" data-auto-route="true" data-user-card="hypatia-d_alexandrie">hypatia-d_alexandrie</a> <a href="/forum/t/pulling-my-life-together-asking-for-general-advice-and-suggestions/8631"><span class="relative-date" title="March 21, 2017 8:04am" data-time="1490061864411" data-format="tiny">5h</span></a>
                                            </div>
                                        </td>
                                        <td class="num posts-map posts heatmap-" title="This topic has 1 reply">
                                            <a href="" class="posts-map badge-posts heatmap-"><span class="number" title="1">1</span></a>
                                        </td>


                                        <td class="last-post">
                                            <div class="poster-avatar">
                                                <a href="" data-user-card="amitac"><img alt="" src="/forum/user_avatar/forum.yourdost.com/amitac/32/60012_1.png" class="avatar" title="amitac" height="32" width="32"></a>
                                            </div>
                                            <div class="poster-info">
                                                <a href="/forum/t/pulling-my-life-together-asking-for-general-advice-and-suggestions/8631/2">
                                                    <span class="relative-date" title="March 21, 2017 12:29pm" data-time="1490077743508" data-format="tiny">11m</span>
                                                </a>
                                                <span class="editor"><a href="/users/amitac" data-auto-route="true" data-user-card="amitac">amitac</a></span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Ask Question</h4>
                </div>
                <div class="modal-body">
                    <form id="forum_form">
                        <div class="form-group">  
                            <select name="category_id" id="category_id" class="form-control">

                                <option value="">Select category</option>
                                <?php foreach ($get_forum_category as $category) { ?>
                                    <option value="<?= $category->forum_category_id ?>"><?= $category->category_name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea name="forum_description" class="form-control" id="forum_description" placeholder="What is your question?"></textarea>
                        </div>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Ask</button>
                    </form>
                </div>
            </div>
        </div>
    </div>    





</section>









<?php include_once __DIR__ . '/footer.php'; ?>
<script type="text/javascript">
    $('#category_academic').click(function () {
        var cat_id = $(this).data('id');
        alert(cat_id);
    });
    $(function () {
        $('body').on('submit', '#forum_form', function (e) {
            // alert('something');
            e.preventDefault();

            $.ajax({
                type: "POST",
                url: "<?php echo site_url("forum/save_forum"); ?>",
                data: $(this).serialize(),
                success: function (response) {
                    $('#myModal').modal('hide');
                    $('#ajax_result').html(response);
					$('#forum_description').val('');
					$('#category_id').val('');
                    // alert(response);
                },
                error: function () {
                    alert('Error');
                }
            });
        });
    });
</script>