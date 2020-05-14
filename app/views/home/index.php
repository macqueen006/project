<?php use Core\View; ?>

<?php View::start("body"); ?>
<!--The begining of the page header  -->
<div class=akea-page-wrapper id=akea-page-wrapper>
    <div class=gdlr-core-page-builder-body>
        <!-- first section -->
        <div class="gdlr-core-pbf-wrapper " id="div_2207_0" id=gdlr-core-wrapper-1>
            <div class=gdlr-core-pbf-background-wrap></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class=gdlr-core-pbf-element>
                        <div class="gdlr-core-post-slider-item gdlr-core-item-pdb gdlr-core-item-pdlr clearfix "
                            id="div_2207_1">
                            <div class="gdlr-core-flexslider flexslider gdlr-core-js-2 " data-type=slider
                                data-effect=default data-disable-autoslide=1>
                                <ul class=slides>
                                    <?php $i = 0; foreach($this->bgImages as $post): $active = ""; if($i == 0){$active = "navigation";} ?>
                                    <li>
                                        <div class=gdlr-core-post-slider-slide >
                                            <div class="gdlr-core-post-slider-image gdlr-core-media-image" data-nav="<?=$active;?>">
                                                <a href=#>                                          
                                                  <img src="<?=PROOT;?><?=$post->images;?>"
                                                        alt width=1500 height=635 title=pexels-photo-736166>
                                                        <span
                                                        class=gdlr-core-post-slider-overlay id="span_2207_0"></span>
                                                    
                                                    </a>
                                            </div>
                                            <div class="gdlr-core-post-slider-caption gdlr-core-center-align">
                                                <h3 class="gdlr-core-post-slider-title" id="h3_2207_0"><a href=#>
                                                    <?php echo $post->title; ?>
                                                </a></h3>
                                                    <div class=gdlr-core-post-slider-widget-info><span
                                                    class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span
                                                    class=gdlr-core-blog-info-sep>/</span><a href=#>November 6,
                                                        2019</a></span><span
                                                        class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span
                                                            class=gdlr-core-blog-info-sep>/</span><a href=#
                                                            title="Posts by Paul Newman" rel=author><?php echo $post->author; ?></a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php $i++; endforeach;?>
                                    
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of first section -->
        <!-- second section -->
        <div class="gdlr-core-pbf-sidebar-wrapper ">
            <div
                class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
                <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-40 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left"
                    id="div_2207_2">
                    <div class=gdlr-core-pbf-sidebar-content-inner data-skin="Blog List">
                        <div class=gdlr-core-pbf-element>
                            <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-full">
                                <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout=fitrows>
                                   
                                    <?php foreach($this->posts as $post): ?>
                                    <div class="gdlr-core-item-list gdlr-core-blog-full  gdlr-core-item-mglr gdlr-core-style-left">
                                        <div class="gdlr-core-blog-thumbnail-wrap clearfix">
                                            <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                <a href=#>
                                                    <img src="<?=PROOT;?><?=$post->images; ?>" width=1000 height=400 >
                                                </a>
                                            </div>
                                            <a href=# class=zilla-likes id=zilla-likes-6611 title="Like this">
                                                <span class=zilla-likes-count>138</span>
                                                <span class=zilla-likes-postfix></span>
                                            </a>
                                        </div>
                                        <div class=gdlr-core-blog-full-content-wrap>
                                            <div class="gdlr-core-blog-full-head clearfix">
                                                <div class=gdlr-core-blog-full-head-right>
                                                    <h3 class="gdlr-core-blog-title gdlr-core-skin-title"
                                                        id="h3_2207_4">
                                                        <a href=#><?php echo $post->title; ?></a>
                                                    </h3>
                                                    <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                        <span
                                                            class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author">
                                                            <img alt src='<?=PROOT;?><?php echo $post->images; ?>'
                                                                class='avatar avatar-50 photo' height=50 width=50>
                                                            <a href=# title="Posts by Janet Jones" rel=author><?php echo $post->author; ?></a>
                                                        </span>
                                                        <span
                                                            class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                            <a href=#>October 26, 2019</a>
                                                        </span>
                                                        <span
                                                            class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category">
                                                            <a href=# rel=tag><?php echo $post->category; ?></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=gdlr-core-blog-content><?php echo $post->content; ?></div>
                                            <div class="gdlr-core-social-share-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-social-share-left-text gdlr-core-style-plain"
                                                id="div_2207_4">
                                                <span class=gdlr-core-social-share-wrap>
                                                    <a class=gdlr-core-social-share-facebook href="#" target=_blank>
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                    <a class=gdlr-core-social-share-google-plus href="#" target=_blank>
                                                        <i class="fa fa-google-plus"></i>
                                                    </a>
                                                    <a class=gdlr-core-social-share-pinterest href="#" target=_blank>
                                                        <i class="fa fa-pinterest-p"></i>
                                                    </a>
                                                    <a class=gdlr-core-social-share-stumbleupon href="#" target=_blank>
                                                        <i class="fa fa-stumbleupon"></i>
                                                    </a>
                                                    <a class=gdlr-core-social-share-twitter href="#" target=_blank
                                                        id="a_2207_5">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                                <!-- Pagination -->
                                <div class="gdlr-core-pagination  gdlr-core-style-circle gdlr-core-right-align gdlr-core-item-pdlr">
                                    <!-- <span aria-current=page class='page-numbers current'>1</span> -->
                                    <?php if($this->page == 1): ?>
                                   <?php echo "";//disable the button ?>
                                <?php else: ?>
                                    <a class="prev page-numbers" href="<?php echo PROOT;?>home?page=1"></a>
                                <?php endif; ?>
                                <!-- end of the previous button -->
                                <!-- The span button -->
                                
          
                               <?php for($i = 1; $i <= $this->totalPages; $i++): ?>
                                <?php if($i == $this->page): ?>
                                    <a aria-current=page class='page-numbers current gdlr-core-active' id="current" href='<?php echo PROOT;?>home?page=<?=$i;?>'><?=$i;?></a> 
                                <?php else: ?>
                                    <a class='page-numbers current gdlr-core-deactive' href='<?php echo PROOT;?>home?page=<?=$i;?>'><?=$i;?></a> 
                                <?php endif; ?>
                                <?php endfor;?>
                                <!-- this is the next button -->
                                <?php if($this->page == $this->totalPages): ?>
                                   <?php echo  "";//disable the next button ?>
                                    <?php else: ?>
                                    <a class="next page-numbers" href="<?php echo PROOT;?>home?page=<?=$this->page + 1;?>"></a>
                                <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right sidebar -->
                <div class="gdlr-core-pbf-sidebar-right gdlr-core-column-extend-right  akea-sidebar-area gdlr-core-column-20 gdlr-core-pbf-sidebar-padding  gdlr-core-line-height"
                    data-skin="Blog List" id="div_2207_9">
                    <div class="gdlr-core-sidebar-item gdlr-core-item-pdlr">
                        <div id=text-4 class="widget widget_text akea-widget">
                            <h3 class="akea-widget-title"><span class=akea-widget-head-text>About Me</span><span
                                    class=akea-widget-head-divider></span></h3><span class=clear></span>
                            <div class=textwidget>
                                <p><img class="alignnone size-full wp-image-6650"
                                        src="<?=PROOT;?>upload/about-image.png" alt width=120>
                                    <br> Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts. Separated.</p> <a
                                    class="gdlr-core-button gdlr-core-button-shortcode  gdlr-core-button-transparent gdlr-core-button-with-border"
                                    href=# target=_blank id="a_2207_10" rel="noopener noreferrer"><span
                                        class=gdlr-core-content>more about me</span><i
                                        class="gdlr-core-pos-right arrow_right"></i></a>
                            </div>
                        </div>
                        <div id=text-7 class="widget widget_text akea-widget">
                            <div class=textwidget>
                                <div class="gdlr-core-widget-box-shortcode  gdlr-core-center-align" id="div_2207_10">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top"
                                        id="div_2207_11">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_2207_9">
                                                Follow Us<span
                                                    class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align"
                                        id="div_2207_12"><a href=# target=_blank class=gdlr-core-social-network-icon
                                            title=facebook id="a_2207_11" rel="noopener noreferrer"><i
                                                class="fa fa-facebook"></i></a><a href=# target=_blank
                                            class=gdlr-core-social-network-icon title=pinterest id="a_2207_12"
                                            rel="noopener noreferrer"><i class="fa fa-pinterest-p"></i></a><a href=#
                                            target=_blank class=gdlr-core-social-network-icon title=skype id="a_2207_13"
                                            rel="noopener noreferrer"><i class="fa fa-skype"></i></a><a href=#
                                            target=_blank class=gdlr-core-social-network-icon title=twitter
                                            id="a_2207_14" rel="noopener noreferrer"><i class="fa fa-twitter"></i></a><a
                                            href=# target=_blank class=gdlr-core-social-network-icon title=instagram
                                            id="a_2207_15" rel="noopener noreferrer"><i class="fa fa-instagram"></i></a>
                                    </div>
                                    <br> <span class=gdlr-core-space-shortcode id="span_2207_3"></span>
                                    <br>
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top"
                                        id="div_2207_13">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title "
                                                id="h3_2207_10">Newsletter<span
                                                    class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                            </h3>
                                        </div>
                                    </div> Fill your email below to subscribe to my newsletter<span
                                        class=gdlr-core-space-shortcode id="span_2207_4"></span>
                                    <br>
                                    <div class="tnp tnp-subscription-minimal ">
                                        <form action="#" method=post>
                                            <input class=tnp-email type=email required name=ne value placeholder=Email>
                                            <input class=tnp-submit type=submit value=Subscribe>
                                        </form>
                                    </div> <span class=gdlr-core-space-shortcode id="span_2207_5"></span>
                                </div>
                            </div>
                        </div>
                        <!-- Popular posts -->
                        <div id=gdlr-core-recent-post-widget-2
                            class="widget widget_gdlr-core-recent-post-widget akea-widget">
                            <h3 class="akea-widget-title"><span class=akea-widget-head-text>Popular Post</span><span
                                    class=akea-widget-head-divider></span></h3><span class=clear></span>
                            <div class="gdlr-core-recent-post-widget-wrap gdlr-core-style-1">
                            <?php foreach($this->posts as $post): ?>
                                <div class="gdlr-core-recent-post-widget clearfix">
                                    <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image"><img
                                            src="<?=PROOT;?><?=$post->images;?>" alt
                                            width=150 height=150 title=qingbao-meng-330658-unsplash></div>
                                    <div class=gdlr-core-recent-post-widget-content>
                                        <div class=gdlr-core-recent-post-widget-title><a href=#><?=$post->title;?></a></div>
                                        <div class=gdlr-core-recent-post-widget-info><span
                                                class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><img
                                                    alt src='<?=PROOT;?><?=$post->images;?>'
                                                    class='avatar avatar-50 photo' height=50 width=50><a href=#
                                                    title="Posts by <?=$post->author;?>" rel=author><?=$post->author;?></a></span><span
                                                class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a
                                                    href=#>September 5, 2019</a></span></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                                
                            </div>
                        </div>
                        <!-- Add images -->
                        <div id=text-5 class="widget widget_text akea-widget">
                            <div class=textwidget>
                                <p>
                                    <a href=#><img src="<?=PROOT;?>upload/banner-600.jpg" alt width=300 height=600
                                            class="alignnone size-full wp-image-6652"></a>
                                </p>
                            </div>
                        </div>
                        <!-- Category -->
                        <div id=gdlr-core-category-background-widget-2
                            class="widget widget_gdlr-core-category-background-widget akea-widget">
                            <h3 class="akea-widget-title"><span class=akea-widget-head-text>Category</span><span
                                    class=akea-widget-head-divider></span></h3><span class=clear></span>
                            <ul class=gdlr-core-category-background-widget>
                                <?php foreach($this->category as $cat): ?>
                                <li class=gdlr-core-with-bg id="li_2207_0"><a href=#><span
                                            class=gdlr-core-category-background-widget-content><span
                                                class=gdlr-core-category-background-widget-title><?php echo $cat->category; ?></span><span
                                                class=gdlr-core-category-background-widget-count>5</span></span></a>
                                </li>
                                    <?php endforeach; ?>
                            </ul>
                        </div>

                        <div id=tag_cloud-2 class="widget widget_tag_cloud akea-widget">
                            <h3 class="akea-widget-title">
                                <span class=akea-widget-head-text>Tags</span>
                                <span class=akea-widget-head-divider></span>
                            </h3>
                            <span class=clear></span>
                            <div class=tagcloud>
                                <?php foreach($this->category as $cat): ?>
                                <a href=# class="tag-cloud-link tag-link-117 tag-link-position-1" id="a_2207_16"
                                    aria-label="Beach (2 items)"><?=$cat->category; ?></a>
                                <?php endforeach; ?>
                               
                            </div>
                        </div>
                        <!-- Widget for adds -->
                        <div id=text-6 class="widget widget_text akea-widget">
                            <div class=textwidget>
                                <p>
                                    <a href=#><img class="alignnone size-full wp-image-6651"
                                            src="<?=PROOT;?>upload/banner-250.jpg" alt width=300 height=250></a>
                                </p>
                            </div>
                        </div>
                        <div id=gdlr-core-recent-post-widget-3
                            class="widget widget_gdlr-core-recent-post-widget akea-widget">
                            <h3 class="akea-widget-title"><span class=akea-widget-head-text>Recent Post</span><span
                                    class=akea-widget-head-divider></span></h3><span class=clear></span>
                            <div class="gdlr-core-recent-post-widget-wrap gdlr-core-style-full">
                            <?php foreach($this->posts as $post): ?>
                                <div class="gdlr-core-recent-post-widget clearfix">
                                    <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image">
                                        <a class="gdlr-core-lightgallery gdlr-core-js "
                                            href="<?=PROOT;?>upload/post-vr.jpg"><img
                                                src="<?=PROOT;?><?=$post->images;?>" alt width=1000 height=486
                                                title=post-vr></a><span
                                            class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category"><a
                                                href=# rel=tag>Trending</a></span></div>
                                    <div class=gdlr-core-recent-post-widget-content>
                                        <div class="gdlr-core-recent-post-widget-title gdlr-core-title-font"><a
                                                href=#><?=$post->title;?></a></div>
                                        <div class=gdlr-core-recent-post-widget-info><span
                                                class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><img
                                                    alt src='<?=PROOT;?>upload/avatar.jpeg'
                                                    class='avatar avatar-50 photo' height=50 width=50><a href=#
                                                    title="Posts by Jane Smith" rel=author><?=$post->author;?></a></span><span
                                                class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a
                                                    href=#>November 7, 2019</a></span></div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div id=gdlr-core-instagram-widget-2
                            class="widget widget_gdlr-core-instagram-widget akea-widget">
                            <h3 class="akea-widget-title"><span class=akea-widget-head-text>Instagram</span><span
                                    class=akea-widget-head-divider></span></h3><span class=clear></span>
                            <div class="gdlr-core-instagram-widget clearfix">
                                <div class=" gdlr-core-column-20 gdlr-core-column-first gdlr-core-media-image">
                                    <a class="gdlr-core-lightgallery gdlr-core-js "
                                        href="<?=PROOT;?>upload/43984881_188819121994766_3216343442474950648_n7d5a.jpg"
                                        data-lightbox-group=gdlr-core-img-group-1><img
                                            src="<?=PROOT;?>upload/43984881_188819121994766_3216343442474950648_n7d5a.jpg"
                                            width=150 height=150 alt></a>
                                </div>
                                <div class=" gdlr-core-column-20 gdlr-core-media-image">
                                    <a class="gdlr-core-lightgallery gdlr-core-js "
                                        href="upload/45313783_2158345917812845_5821103427645807423_n7d5a.jpg"
                                        data-lightbox-group=gdlr-core-img-group-1><img
                                            src="<?=PROOT;?>upload/45313783_2158345917812845_5821103427645807423_n7d5a.jpg"
                                            width=150 height=150 alt></a>
                                </div>
                                <div class=" gdlr-core-column-20 gdlr-core-media-image">
                                    <a class="gdlr-core-lightgallery gdlr-core-js "
                                        href="<?=PROOT;?>upload/43914986_550843855339634_9131648220594836021_n7d5a.jpg"
                                        data-lightbox-group=gdlr-core-img-group-1><img
                                            src="<?=PROOT;?>upload/43914986_550843855339634_9131648220594836021_n7d5a.jpg"
                                            width=150 height=150 alt></a>
                                </div>
                                <div class=" gdlr-core-column-20 gdlr-core-column-first gdlr-core-media-image">
                                    <a class="gdlr-core-lightgallery gdlr-core-js "
                                        href="<?=PROOT;?>upload/44371528_263042657731432_6452096443180721983_n7d5a.jpg"
                                        data-lightbox-group=gdlr-core-img-group-1><img
                                            src="<?=PROOT;?>upload/44371528_263042657731432_6452096443180721983_n7d5a.jpg"
                                            width=150 height=150 alt></a>
                                </div>
                                <div class=" gdlr-core-column-20 gdlr-core-media-image">
                                    <a class="gdlr-core-lightgallery gdlr-core-js "
                                        href="<?=PROOT;?>upload/44292623_399451020592905_6536115609442328805_n7d5a.jpg"
                                        data-lightbox-group=gdlr-core-img-group-1><img
                                            src="<?=PROOT;?>upload/44292623_399451020592905_6536115609442328805_n7d5a.jpg"
                                            width=150 height=150 alt></a>
                                </div>
                                <div class=" gdlr-core-column-20 gdlr-core-media-image">
                                    <a class="gdlr-core-lightgallery gdlr-core-js "
                                        href="<?=PROOT;?>upload/44898222_267175490542576_6183516087002698981_n7d5a.jpg"
                                        data-sub-html="So blue" data-lightbox-group=gdlr-core-img-group-1><img
                                            src="<?=PROOT;?>upload/44898222_267175490542576_6183516087002698981_n7d5a.jpg"
                                            width=150 height=150 alt="So blue"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of second section -->
        <!-- Instagram section -->
        <div class="gdlr-core-pbf-wrapper " id="div_2207_14">
            <div class=gdlr-core-pbf-background-wrap></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class=gdlr-core-pbf-element>
                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"
                            id="div_2207_15">
                            <div class="gdlr-core-title-item-title-wrap ">
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_2207_11">Our
                                    Instagram<span
                                        class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3>
                            </div>
                        </div>
                    </div>
                    <div class=gdlr-core-pbf-element>
                        <div class="gdlr-core-instagram-item gdlr-core-item-pdb  gdlr-core-item-pdlr">
                            <div class="gdlr-core-instagram-item-content clearfix">
                                <div class=" gdlr-core-column-12 gdlr-core-column-first gdlr-core-media-image">
                                    <a class="gdlr-core-lightgallery gdlr-core-js "
                                        href="<?=PROOT;?>upload/43984881_188819121994766_3216343442474950648_n7d5a.jpg"
                                        data-lightbox-group=gdlr-core-img-group-2><img
                                            src="<?=PROOT;?>upload/43984881_188819121994766_3216343442474950648_n7d5a.jpg"
                                            width=640 height=640 alt></a>
                                </div>
                                <div class=" gdlr-core-column-12 gdlr-core-media-image">
                                    <a class="gdlr-core-lightgallery gdlr-core-js "
                                        href="<?=PROOT;?>upload/45313783_2158345917812845_5821103427645807423_n7d5a.jpg"
                                        data-lightbox-group=gdlr-core-img-group-2><img
                                            src="<?=PROOT;?>upload/45313783_2158345917812845_5821103427645807423_n7d5a.jpg"
                                            width=640 height=640 alt></a>
                                </div>
                                <div class=" gdlr-core-column-12 gdlr-core-media-image">
                                    <a class="gdlr-core-lightgallery gdlr-core-js "
                                        href="<?=PROOT;?>upload/43914986_550843855339634_9131648220594836021_n7d5a.jpg"
                                        data-lightbox-group=gdlr-core-img-group-2><img
                                            src="<?=PROOT;?>upload/43914986_550843855339634_9131648220594836021_n7d5a.jpg"
                                            width=640 height=640 alt></a>
                                </div>
                                <div class=" gdlr-core-column-12 gdlr-core-media-image">
                                    <a class="gdlr-core-lightgallery gdlr-core-js "
                                        href="<?=PROOT;?>upload/44371528_263042657731432_6452096443180721983_n7d5a.jpg"
                                        data-lightbox-group=gdlr-core-img-group-2><img
                                            src="<?=PROOT;?>upload/44371528_263042657731432_6452096443180721983_n7d5a.jpg"
                                            width=640 height=640 alt></a>
                                </div>
                                <div class=" gdlr-core-column-12 gdlr-core-media-image">
                                    <a class="gdlr-core-lightgallery gdlr-core-js "
                                        href="<?=PROOT;?>upload/44292623_399451020592905_6536115609442328805_n7d5a.jpg"
                                        data-lightbox-group=gdlr-core-img-group-2><img
                                            src="<?=PROOT;?>upload/44292623_399451020592905_6536115609442328805_n7d5a.jpg"
                                            width=640 height=640 alt></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- begining of the footer -->
<footer>
    <div class="akea-footer-wrapper ">
        <div class="akea-footer-container akea-container clearfix">
            <div class="akea-footer-column akea-item-pdlr akea-column-20">
                <div id=text-2 class="widget widget_text akea-widget">
                    <h3 class="akea-widget-title"><span class=akea-widget-head-text>Akea, blogger</span><span
                            class=akea-widget-head-divider></span></h3><span class=clear></span>
                    <div class=textwidget>
                        <p>23 King Street, 5th Avenue, New York
                            <br> <span class=gdlr-core-space-shortcode id="span_2207_6"></span>
                            <br> +1-2355-3345-5
                            <br> <span class=gdlr-core-space-shortcode id="span_2207_7"></span>
                            <br> <a id="a_2207_30" href=mailto:call@akeablog.co>call@akeablog.co</a></p>
                    </div>
                </div>
            </div>
            <div class="akea-footer-column akea-item-pdlr akea-column-20">
                <div id=gdlr-core-custom-menu-widget-2 class="widget widget_gdlr-core-custom-menu-widget akea-widget">
                    <h3 class="akea-widget-title"><span class=akea-widget-head-text>Category</span><span
                            class=akea-widget-head-divider></span></h3><span class=clear></span>
                    <div class=menu-category-container>
                        <ul id=menu-category class="gdlr-core-custom-menu-widget gdlr-core-menu-style-half">
                            <?php foreach($this->category as $cat): ?>
                            <li class="menu-item"><a href=#><?=$cat->category;?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="akea-footer-column akea-item-pdlr akea-column-20">
                <div id=text-3 class="widget widget_text akea-widget">
                    <h3 class="akea-widget-title"><span class=akea-widget-head-text>Follow Us</span><span
                            class=akea-widget-head-divider></span></h3><span class=clear></span>

                    <div class=textwidget>
                        <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align"
                            id="div_2207_16">
                            <a href=# target=_blank class=gdlr-core-social-network-icon title=facebook id="a_2207_31"
                                rel="noopener noreferrer">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href=# target=_blank class=gdlr-core-social-network-icon title=pinterest id="a_2207_32"
                                rel="noopener noreferrer">
                                <i class="fa fa-pinterest-p"></i>
                            </a>
                            <a href=# target=_blank class=gdlr-core-social-network-icon title=skype id="a_2207_33"
                                rel="noopener noreferrer">
                                <i class="fa fa-skype"></i>
                            </a>
                            <a href=# target=_blank class=gdlr-core-social-network-icon title=twitter id="a_2207_34"
                                rel="noopener noreferrer">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href=# target=_blank class=gdlr-core-social-network-icon title=instagram id="a_2207_35"
                                rel="noopener noreferrer">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=akea-copyright-wrapper>
        <div class="akea-copyright-container akea-container clearfix">
            <div class="akea-copyright-left akea-item-pdlr">Copyright 2019 Akea Blog, All Right Reserved</div>
            <div class="akea-copyright-right akea-item-pdlr">
                <a href=<?=PROOT;?>home>Home</a>
                <a href=<?=PROOT;?>about>About</a>
                <a href=#>Updates</a>
                <a href=#>Advertising</a>
                <a href=<?=PROOT;?>contact>Contact</a>
            </div>
        </div>
    </div>
</footer>
<!-- end of the footer -->
</div>
</div><a href=#akea-top-anchor class="akea-footer-back-to-top-button  akea-with-recent-post-bar "
    id=akea-footer-back-to-top-button><i class="fa fa-angle-up"></i></a>
<div class="akea-footer-recent-post-button " id=akea-footer-recent-post-button><i class=icon_plus></i></div>
<div class="akea-footer-recent-post-bar " id=akea-footer-recent-post-bar>
    <div class=akea-footer-recent-post-bar-close><i class=icon_minus-06></i></div>
    <div class="akea-footer-recent-post-bar-container akea-container clearfix">
        <h3 class="akea-footer-recent-post-bar-title">My New Stories</h3>
        <div class="akea-recent-post-bar-wrap clearfix">
        <?php foreach($this->posts as $post): ?>
            <div class=akea-recent-post-bar-item>
                <div class=akea-recent-post-bar-shadow></div>
                <a href=#><img src="<?=PROOT;?><?=$post->images;?>" alt width=150 height=150 title=post-vr></a>
            </div>
            <?php endforeach; ?>
            
        </div>
    </div>
</div>

<?php View::end(); ?>