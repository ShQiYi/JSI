<?php
/*
Template Name:HIGHLIGHTS
*/
?>
<?php
include 'header.php';
?>
    <div class="highlights">
        <div class="highlights-top container">
            <div class="highlights-top-img">   <img src="<?php echo $templateUrl ?>/img/highlights-top-img.jpg"></div>
            <div class="highlights-top-img"> <img src="<?php echo $templateUrl ?>/img/highlights-top-img.jpg"></div>
        </div>
        <div class="highlights-content container">
            <ul class="highlights-contents">
<?php
//$categoryNameToId['HIGHLIGHTS'];

$data=get_posts( [ 'category' =>$categoryNameToId['HIGHLIGHTS'] ,'numberposts'=> 4,'offset'  => 0]);
//print_r($data);
foreach ($data as $TT){
    $excerpt=$TT->post_excerpt;
    $explode=explode('/',$excerpt);
//    print_r($explode);
    $img_id = get_post_thumbnail_id($TT->ID);
    $img_url = wp_get_attachment_image_src($img_id,'full');
    $img_url = $img_url[0];
?>
    <li class="highlights-contents-content">
        <a class="highlights-contents-content-a" href=""><img src="<?php echo $templateUrl ?>/img/highlights-contents-content1.png"></a>
        <img  src="<?php echo $img_url ?>" width="450"height="270">
        <h3><?php  print_r($TT->post_title) ?></h3>
        <h4> <?php  echo $explode[0] ?></h4>
        <h5><?php  echo $explode[1] ?></h5>
        <p><?php print_r($TT->post_content); ?></p>
        <a href=""> Read more</a>
    </li>
    <?php
}
?>


<!--                <li class="highlights-contents-content">-->
<!--                    <a class="highlights-contents-content-a" href=""><img src="--><?php //echo $templateUrl ?><!--/img/highlights-contents-content1.png"></a>-->
<!--                    <img src="--><?php //echo $templateUrl ?><!--/img/highlights-contents-content.jpg" width="450"height="270">-->
<!--                    <h3>Underground TOP HAMMER & Open pit DTH</h3>-->
<!--                       <h4> Cerro Vanguardia, Anglogold Ashanti</h4>-->
<!--                               <h5>San Julián, Argentina</h5>-->
<!--                       <p> In this project, JSI TOP HAMMER drilling bits, rods and shank adapters present a very high level performance which is better than other 3  [...]</p>-->
<!--                       <a href=""> Read more</a>-->
<!--                </li>-->
<!--                <li class="highlights-contents-content">-->
<!--                    <a class="highlights-contents-content-a" href=""><img src="--><?php //echo $templateUrl ?><!--/img/highlights-contents-content1.png"></a>-->
<!--                    <img src="--><?php //echo $templateUrl ?><!--/img/highlights-contents-content.jpg" width="450"height="270">-->
<!--                    <h3>Underground TOP HAMMER & Open pit DTH</h3>-->
<!--                    <h4> Cerro Vanguardia, Anglogold Ashanti</h4>-->
<!--                    <h5>San Julián, Argentina</h5>-->
<!--                    <p> In this project, JSI TOP HAMMER drilling bits, rods and shank adapters present a very high level performance which is better than other 3  [...]</p>-->
<!--                    <a href=""> Read more</a>-->
<!--                </li>-->
<!--                <li class="highlights-contents-content">-->
<!--                    <a class="highlights-contents-content-a" href=""><img src="--><?php //echo $templateUrl ?><!--/img/highlights-contents-content1.png"></a>-->
<!--                    <img src="--><?php //echo $templateUrl ?><!--/img/highlights-contents-content.jpg" width="450"height="270">-->
<!--                    <h3>Underground TOP HAMMER & Open pit DTH</h3>-->
<!--                    <h4> Cerro Vanguardia, Anglogold Ashanti</h4>-->
<!--                    <h5>San Julián, Argentina</h5>-->
<!--                    <p> In this project, JSI TOP HAMMER drilling bits, rods and shank adapters present a very high level performance which is better than other 3  [...]</p>-->
<!--                    <a href=""> Read more</a>-->
<!--                </li>-->
<!--                <li class="highlights-contents-content">-->
<!--                    <a class="highlights-contents-content-a" href=""><img src="--><?php //echo $templateUrl ?><!--/img/highlights-contents-content1.png"></a>-->
<!--                    <img src="--><?php //echo $templateUrl ?><!--/img/highlights-contents-content.jpg" width="450"height="270">-->
<!--                    <h3>Underground TOP HAMMER & Open pit DTH</h3>-->
<!--                    <h4> Cerro Vanguardia, Anglogold Ashanti</h4>-->
<!--                    <h5>San Julián, Argentina</h5>-->
<!--                    <p> In this project, JSI TOP HAMMER drilling bits, rods and shank adapters present a very high level performance which is better than other 3  [...]</p>-->
<!--                    <a href=""> Read more</a>-->
<!--                </li>-->
<!--                <li class="highlights-contents-content">-->
<!--                    <a class="highlights-contents-content-a" href=""><img src="--><?php //echo $templateUrl ?><!--/img/highlights-contents-content1.png"></a>-->
<!--                    <img src="--><?php //echo $templateUrl ?><!--/img/highlights-contents-content.jpg" width="450"height="270">-->
<!--                    <h3>Underground TOP HAMMER & Open pit DTH</h3>-->
<!--                    <h4> Cerro Vanguardia, Anglogold Ashanti</h4>-->
<!--                    <h5>San Julián, Argentina</h5>-->
<!--                    <p> In this project, JSI TOP HAMMER drilling bits, rods and shank adapters present a very high level performance which is better than other 3  [...]</p>-->
<!--                    <a href=""> Read more</a>-->
<!--                </li>-->
<!--                <li class="highlights-contents-content">-->
<!--                    <a class="highlights-contents-content-a" href=""><img src="--><?php //echo $templateUrl ?><!--/img/highlights-contents-content1.png"></a>-->
<!--                    <img src="--><?php //echo $templateUrl ?><!--/img/highlights-contents-content.jpg" width="450"height="270">-->
<!--                    <h3>Underground TOP HAMMER & Open pit DTH</h3>-->
<!--                    <h4> Cerro Vanguardia, Anglogold Ashanti</h4>-->
<!--                    <h5>San Julián, Argentina</h5>-->
<!--                    <p> In this project, JSI TOP HAMMER drilling bits, rods and shank adapters present a very high level performance which is better than other 3  [...]</p>-->
<!--                    <a href=""> Read more</a>-->
<!--                </li>-->
<!--                <li class="highlights-contents-content">-->
<!--                    <a class="highlights-contents-content-a" href=""><img src="--><?php //echo $templateUrl ?><!--/img/highlights-contents-content1.png"></a>-->
<!--                    <img src="--><?php //echo $templateUrl ?><!--/img/highlights-contents-content.jpg" width="450"height="270">-->
<!--                    <h3>Underground TOP HAMMER & Open pit DTH</h3>-->
<!--                    <h4> Cerro Vanguardia, Anglogold Ashanti</h4>-->
<!--                    <h5>San Julián, Argentina</h5>-->
<!--                    <p> In this project, JSI TOP HAMMER drilling bits, rods and shank adapters present a very high level performance which is better than other 3  [...]</p>-->
<!--                    <a href=""> Read more</a>-->
<!--                </li>-->


            </ul>
         <div class="yy"></div>

        </div>


    </div>

    <script>

    </script>

<?php
include 'footer.php';
?>