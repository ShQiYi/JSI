<?php
/*
Template Name:NEWS
*/
?>
<?php
   include 'header.php';
?>
<div class="news">
    <div class="container">
        <ul>

            <li class="li-row">
                <?php
                $catid =$categoryNameToId['NEWS'];//获取id
                $data = get_posts(['category'=>$catid,'numberposts'=>3]);
                ?>
                <?php foreach ($data as $ietm):
                    //切割标题
                $title=$ietm->post_title;
                $titles=explode('/',$title);
                //切割摘要
                $excerpt=$ietm->post_excerpt;
                $explode=explode('/',$excerpt);
                ?>
                <?php  $img_id = get_post_thumbnail_id($ietm->ID);
                $img_url = wp_get_attachment_image_src($img_id,'full');
                $img_url = $img_url[0];?>
                <div class="news_introduce">
                    <img src="<?php echo $img_url; ?>" alt="">
                    <p><?php echo($titles[0]);?></p>
                    <p><?php echo($titles[1]);?></p>
                    <span>
                        <h5><?php echo($explode[0]);?></h5>
                        <?php echo($explode[1]);?>11111
                    </span>
                    <br>
                    <a href="">Read more</a>
                </div>
                <?php endforeach;?>
<!--                <div class="news_introduce">-->
<!--                    <img src="--><?php //echo $templateUrl; ?><!--/img/news-2.png" alt="">-->
<!--                    <p>JSI in</p>-->
<!--                    <p>Iran ConMin 2017</p>-->
<!--                    <span>-->
<!--                        <h5>Nov 7, 2017</h5>-->
<!--                        From 05th to 08th Nov, 2017, JSI Rock Tools introduced its products and services in IranConmin 2017. During the exhibition, JSI Rock Tools has-->
<!--                        From 05th to 08th Nov, 2017, JSI Rock Tools introduced its products and services in IranConmin 2017. During the exhibition, JSI Rock Tools has-->
<!--                        From 05th to 08th Nov, 2017, JSI Rock Tools introduced its products and services in IranConmin 2017. During the exhibition, JSI Rock Tools has [...]-->
<!--                    </span>-->
<!--                    <a href="">Read more</a>-->
<!--                </div>-->
<!---->
<!--                <div class="news_introduce">-->
<!--                    <img src="--><?php //echo $templateUrl; ?><!--/img/news-3.png" alt="">-->
<!--                    <p>JSI in</p>-->
<!--                    <p>Iran ConMin 2017</p>-->
<!--                    <span>-->
<!--                        <h5>Nov 7, 2017</h5>-->
<!--                        From 05th to 08th Nov, 2017, JSI Rock Tools introduced its products and services in IranConmin 2017. During the exhibition, JSI Rock Tools has-->
<!--                        From 05th to 08th Nov, 2017, JSI Rock Tools introduced its products and services in IranConmin 2017. During the exhibition, JSI Rock Tools has [...]-->
<!--                    </span>-->
<!--                    <a href="">Read more</a>-->
<!--                </div>-->
            </li>

            <li class="li-row">
                <?php
                $catid =$categoryNameToId['NEWS'];//获取id
                $data = get_posts(['category'=>$catid,'numberposts'=>3]);
                ?>
                <?php foreach ($data as $ietm):
                //切割标题
                $title=$ietm->post_title;
                $titles=explode('/',$title);
                //切割摘要
                $excerpt=$ietm->post_excerpt;
                $explode=explode('/',$excerpt);
                ?>
                <?php  $img_id = get_post_thumbnail_id($ietm->ID);
                $img_url = wp_get_attachment_image_src($img_id,'full');
                $img_url = $img_url[0];?>
                <div class="news_introduce">
                    <img src="<?php echo $img_url; ?>" alt="">
                    <p><?php echo($titles[0]);?></p>
                    <p><?php echo($titles[1]);?></p>
                    <span>
                        <h5><?php echo($explode[0]);?></h5>
                        <?php echo($explode[1]);?>
                     2222222
                    </span>
                    <a href="">Read more</a>
                </div>
                <?php endforeach;?>
<!--                <div class="news_introduce">-->
<!--                    <img src="--><?php //echo $templateUrl; ?><!--/img/news-4.jpg" alt="">-->
<!--                    <p>JSI in</p>-->
<!--                    <p>Iran ConMin 2017</p>-->
<!--                    <span>-->
<!--                        <h5>Nov 7, 2017</h5>-->
<!--                        From 05th to 08th Nov, 2017, JSI Rock Tools introduced its products and services in IranConmin 2017. During the exhibition, JSI Rock Tools has-->
<!--                        From 05th to 08th Nov, 2017, JSI Rock Tools introduced its products and services in IranConmin 2017. During the exhibition, JSI Rock Tools has-->
<!--                        From 05th to 08th Nov, 2017, JSI Rock Tools introduced its products and services in IranConmin 2017. During the exhibition, JSI Rock Tools has [...]-->
<!--                    </span>-->
<!--                    <br>-->
<!--                    <a href="">Read more</a>-->
<!--                </div>-->
<!--                <div class="news_introduce">-->
<!--                    <img src="--><?php //echo $templateUrl; ?><!--/img/news-1.jpg" alt="">-->
<!--                    <p>JSI in</p>-->
<!--                    <p>bauma China 2016</p>-->
<!--                    <span>-->
<!--                        <h5>Nov 7, 2017</h5>-->
<!--                        From 22nd to 25th Nov, 2016, JSI Rock Tools introduced its products and services in bauma China 2016. During the exhibition, JSI Rock Tools has [...]-->
<!--                    </span><br>-->
<!--                    <a href="">Read more</a>-->
<!--                </div>-->
            </li>
            <li class="li-row">
                <?php
                $catid =$categoryNameToId['NEWS'];//获取id
                $data = get_posts(['category'=>$catid,'numberposts'=>3]);
                ?>
                <?php foreach ($data as $ietm):
                //切割标题
                $title=$ietm->post_title;
                $titles=explode('/',$title);
                //切割摘要
                $excerpt=$ietm->post_excerpt;
                $explode=explode('/',$excerpt);
                ?>
                <?php  $img_id = get_post_thumbnail_id($ietm->ID);
                $img_url = wp_get_attachment_image_src($img_id,'full');
                $img_url = $img_url[0];?>
                <div class="news_introduce">
                    <img src="<?php echo $img_url; ?>" alt="">
                    <p><?php echo($titles[0]);?></p>
                    <p><?php echo($titles[1]);?></p>
                    <span>
                        <h5><?php echo($explode[0]);?></h5>
                        <?php echo($explode[1]);?>
                        333333
                    </span>
                    <br>
                    <a href="">Read more</a>
                </div>
                <?php endforeach;?>
<!--                <div class="news_introduce">-->
<!--                    <img src="--><?php //echo $templateUrl; ?><!--/img/news-4.jpg" alt="">-->
<!--                    <p>JSI in</p>-->
<!--                    <p>Iran ConMin 2017</p>-->
<!--                    <span>-->
<!--                        <h5>Nov 7, 2017</h5>-->
<!--                        From 05th to 08th Nov, 2017, JSI Rock Tools introduced its products and services in IranConmin 2017. During the exhibition, JSI Rock Tools has-->
<!--                    </span>-->
<!--                    <br>-->
<!--                    <a href="">Read more</a>-->
<!--                </div>-->
<!--                <div class="news_introduce">-->
<!--                    <img src="--><?php //echo $templateUrl; ?><!--/img/news-4.jpg" alt="">-->
<!--                    <p>JSI in</p>-->
<!--                    <p>PERUMIN 33</p>-->
<!--                    <p>EXTEMIN 2017</p>-->
<!--                    <span>-->
<!--                        <h5>Nov 7, 2017</h5>-->
<!--                        From 18th to 22nd Sep, 2017, JSI Rock Tools introduced its products and services in PERUMIN33 EXTEMIN 2017. During the exhibition[...]-->
<!--                    </span><br>-->
<!--                    <a href="">Read more</a>-->
<!--                </div>-->
            </li>
        </ul>
    </div>
</div>

<script>


</script>

<?php
  include 'footer.php';
?>