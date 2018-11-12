<?php
/*
Template Name:PERFORMANCE
*/
?>
<?php
include 'header.php';
?>
    <div class="performance container">
        <div class="top-img">
            <img class="top-img-left-img1" src="<?php echo $templateUrl ?>/img/performance-top-img1.png" alt="">
            <img class="top-img-left-img2" src="<?php echo $templateUrl ?>/img/performance333610.png" alt="">
        </div>
        <div class="content-img">
            <div class="lajirongji">
                <ul class="clearfloat performance-clearfloat">
                    <?php
                    $catid =$categoryNameToId['PERFORMANCE'];//获取id
                    $data = get_posts(['category'=>$catid,'numberposts'=>6]);
                    ?>
                    <?php foreach ($data as $ietm):
                        $excerpt=$ietm->post_excerpt;
                        $explode=explode('/',$excerpt);
                        ?>
                    <?php  $img_id = get_post_thumbnail_id($ietm->ID);
                    $img_url = wp_get_attachment_image_src($img_id,'full');
                    $img_url = $img_url[0];?>
                    <li class="action-li">
                       <span class="ul-li-span">
                            <img class="sapn-img" src="<?php echo $img_url; ?>" alt="">
                            <h3><?php echo $ietm->post_title; ?></h3>
                            <p class="p1"> <?php echo($explode[0]);?> </p>
                            <p class="p2"><?php echo($explode[1]);?></p>
                            <p class="p3"><?php echo($explode[2]);?></p>
                            <span class="ul-li-span-span">
                               <a href="">Read more</a>
                            </span>
                       </span>
                    </li>
                    <?php endforeach;?>
<!--                    <li class="action-li re">-->
<!--                    <span class="ul-li-span teshu-span">-->
<!--                        <img class="sapn-img" src="--><?php //echo $templateUrl ?><!--/img/performance-content-img1.png" alt="">-->
<!--                        <h3>Underground TOP HAMMER & Open pit DTH</h3>-->
<!--                        <p class="p1">Cerro Vanguardia, Anglogold Ashanti</p>-->
<!--                        <p class="p2">San Julián, Argentina</p>-->
<!--                        <p class="p3">In this project, JSI TOP HAMMER drilling bits, rods and shank adapters present a very high level performance which is better than other 3  [...]</p>-->
<!--                        <span class="ul-li-span-span">-->
<!--                            <a href="">Read more</a>-->
<!--                        </span>-->
<!--                    </span>-->
<!---->
<!--                    </li>-->
<!--                    <li class="action-li rer">-->
<!--                    <span class="ul-li-span teshu-span tter">-->
<!--                        <img class="sapn-img" src="--><?php //echo $templateUrl ?><!--/img/performance-content-img1.png" alt="">-->
<!--                        <h3>Underground TOP HAMMER & Open pit DTH</h3>-->
<!--                      <p class="p1">Cerro Vanguardia, Anglogold Ashanti</p>-->
<!--                        <p class="p2">San Julián, Argentina</p>-->
<!--                        <p class="p3">In this project, JSI TOP HAMMER drilling bits, rods and shank adapters present a very high level performance which is better than other 3  [...]</p>-->
<!--                        <span class="ul-li-span-span">-->
<!--                            <a href="">Read more</a>-->
<!--                        </span>-->
<!--                    </span>-->
<!---->
<!--                    </li>-->
<!--                    <li class="action-li dandu">-->
<!--                    <span class="ul-li-span">-->
<!--                        <img class="sapn-img" src="--><?php //echo $templateUrl ?><!--/img/performance-content-img1.png" alt="">-->
<!--                        <h3>Underground TOP HAMMER & Open pit DTH</h3>-->
<!--                       <p class="p1">Cerro Vanguardia, Anglogold Ashanti</p>-->
<!--                        <p class="p2">San Julián, Argentina</p>-->
<!--                        <p class="p3">In this project, JSI TOP HAMMER drilling bits, rods and shank adapters present a very high level performance which is better than other 3  [...]</p>-->
<!--                        <span class="ul-li-span-span">-->
<!--                            <a href="">Read more</a>-->
<!--                        </span>-->
<!--                    </span>-->
<!--                    </li>-->
<!--                    <li class="action-li re dandu">-->
<!--                    <span class="ul-li-span teshu-span">-->
<!--                        <img class="sapn-img" src="--><?php //echo $templateUrl ?><!--/img/performance-content-img1.png" alt="">-->
<!--                        <h3>Underground TOP HAMMER & Open pit DTH</h3>-->
<!--                       <p class="p1">Cerro Vanguardia, Anglogold Ashanti</p>-->
<!--                        <p class="p2">San Julián, Argentina</p>-->
<!--                        <p class="p3">In this project, JSI TOP HAMMER drilling bits, rods and shank adapters present a very high level performance which is better than other 3  [...]</p>-->
<!--                        <span class="ul-li-span-span">-->
<!--                            <a href="">Read more</a>-->
<!--                        </span>-->
<!--                    </span>-->
<!---->
<!--                    </li>-->
<!--                    <li class="action-li rer dandu">-->
<!--                    <span class="ul-li-span teshu-span tter">-->
<!--                        <img class="sapn-img" src="--><?php //echo $templateUrl ?><!--/img/performance-content-img1.png" alt="">-->
<!--                        <h3>Underground TOP HAMMER & Open pit DTH</h3>-->
<!--                        <p class="p1">Cerro Vanguardia, Anglogold Ashanti</p>-->
<!--                        <p class="p2">San Julián, Argentina</p>-->
<!--                        <p class="p3">In this project, JSI TOP HAMMER drilling bits, rods and shank adapters present a very high level performance which is better than other 3  [...]</p>-->
<!--                        <span class="ul-li-span-span">-->
<!--                            <a href="">Read more</a>-->
<!--                        </span>-->
<!--                    </span>-->
<!---->
<!--                    </li>-->
                </ul>
            </div>
        </div>
    </div>
    <script>
    </script>
<?php
include 'footer.php';
?>