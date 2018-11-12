<?php
/*
Template Name:HOME
*/
?>
 <?php
include 'header.php';
?>
<div class="index container">
    <div id="cf"></div>
<!--    <img class="index-img" style="display: block" src="--><?php //echo $templateUrl ?><!--/img/index-list.png" width="1400px" height="756px">-->
    <ul class="list">
        <li>
            <img src="<?php echo $templateUrl ?>/img/index-list.png">
            <div class="list-item">
                <h2>Sustainable Improvements</h2>
                <span>Beyond Your Expectations</span>
                <a>Applications</a>
                <a>Product</a>
            </div>
        </li>
        <li>
            <img src="<?php echo $templateUrl ?>/img/index-list.png">
            <div class="list-item">
                <h2>Sustainable Improvements</h2>
                <span>Beyond Your Expectations</span>
                <a>Applications</a>
                <a>Product</a>
            </div>
        </li>
        <li>
            <img src="<?php echo $templateUrl ?>/img/index-list.png">
            <div class="list-item">
                <h2>Sustainable Improvements</h2>
                <span>Beyond Your Expectations</span>
                <a>Applications</a>
                <a>Product</a>
            </div>
        </li>
    </ul>
    <ul class="list-bot clearfloat">
        <li>
            <img src="<?php echo $templateUrl ?>/img/index-list-bot.png">
                <h2>Creative Research & Development</h2>
                <p>
                    Driver of innovation in the rock tools research and development is one of the essential elements included in JSI’s brand definition.
                </p>
                <a href="#">READ MORE</a>
        </li>
        <li>
            <img src="<?php echo $templateUrl ?>/img/index-list-bot.png">
            <h2>Creative Research & Development</h2>
            <p>
                Driver of innovation in the rock tools research and development is one of the essential elements included in JSI’s brand definition.
            </p>
            <a>READ MORE</a>
        </li>
        <li>
            <img src="<?php echo $templateUrl ?>/img/index-list-bot.png">
            <h2>Creative Research & Development</h2>
            <p>
                Driver of innovation in the rock tools research and development is one of the essential elements included in JSI’s brand definition.
            </p>
            <a>READ MORE</a>
        </li>
    </ul>
    <div class="cent">
        <div class="projects">
            <h2>SUCCESSFUL PROJECTS</h2><span></span>
            <p>
                With a focus on products performance development, customized solution has always been an optimized option for our customers including global leading mining companies and reputed manufacturers.
            </p>
        </div>
        <div class="cent-c">
            <ul class="cent-list clearfloat">
                <li>
                    <a href="#">SHOW ALL</a>
                </li>
                <li>
                    <a href="#">DRIFTING</a>
                </li>
                <li>
                    <a href="#">TUNNELING</a>
                </li>
                <li>
                    <a href="#">PRODUCTION</a>
                </li>
                <li>
                    <a href="#">SURFACE DRILLING</a>
                </li>
                <li>
                    <a href="#">TAPERED DRILLING</a>
                </li>
                <li>
                    <a href="#">DOWN THE HOLE</a>
                </li>
                <li>
                    <a href="#">QUARRYING</a>
                </li>
                <li>
                    <a href="#">TAPHOLE DRILLING</a>
                </li>
                <li>
                    <a href="#">CONSTRUCTION</a>
                </li>
            </ul>
        </div>
        <div class="cent-img">
            <ul class="clearfloat">
                <li><img src="<?php echo $templateUrl ?>/img/index-cent-img.jpg"><img src="<?php echo $templateUrl ?>/img/index-cent-img.jpg"></li>
                <li class="item"><img src="<?php echo $templateUrl ?>/img/index-cent-img2.jpg"><img src="<?php echo $templateUrl ?>/img/index-cent-img2.jpg"></li>
                <li><img src="<?php echo $templateUrl ?>/img/index-cent-img.jpg"><img src="<?php echo $templateUrl ?>/img/index-cent-img.jpg"></li>
            </ul>
            <a class="btn" href="#">LOAD MORE</a>
        </div>
    </div>
    <div class="timebar">
        <ul class="clearfloat">
            <li><span>YEARS</span><span>21</span></li>
            <li><span>GLOBAL PRESENCE</span><span>72</span></li>
            <li><span>PROJECT DONE</span><span>386</span></li>
            <li><span>PUBLIC LISTING ON NEEQ</span><span>2017</span></li>
        </ul>
    </div>
    <div class="cent cent-bottom">
        <div class="projects cent-bottom-projects">
            <h2>PEOPLE</h2><span></span>
            <p>
                JSI includes a team of tool specialists, manufacturing experts and marketing professionals who also come with creative minds in the rock drilling tools industry.
            </p>
        </div>
        <ul class="cent-bottom-list clearfloat">
                <?php
                $catid =$categoryNameToId['PEOPLE'];//获取id
                $data = get_posts(['category'=>$catid,'numberposts'=>3]);
//                echo '<pre>';
//                print_r($data);
                foreach ($data as $ietm){
                    $img_id = get_post_thumbnail_id($ietm->ID);
                    $img_url = wp_get_attachment_image_src($img_id,'full');
                    $img_url = $img_url[0];
                    echo '
                        <li>
                            <img src="'.$img_url.'">
                            <span>'.$ietm->post_title.'</span>
                            <span>'.$ietm->post_excerpt.'</span>
                        </li>
                    ';
                }
                ?>
        </ul>
        <div class="projects cent-bottom-projects">
            <h2>FROM BLOG</h2><span></span>
            <p>
                Find company latest news, articles, videos and photos in our blog section.
            </p>
        </div>
        <ul class="cent-bottom-list2 clearfloat">
            <?php
            $catid =$categoryNameToId['FROM BLOG'];//获取id
            $data = get_posts(['category'=>$catid,'numberposts'=>3]);
//                            echo '<pre>';
//                            var_dump($data);
            foreach ($data as $ietm){
                $img_id = get_post_thumbnail_id($ietm->ID);
                $img_url = wp_get_attachment_image_src($img_id,'full');
                $img_url = $img_url[0];
                echo '
                        <li>
                            <img src="'.$img_url.'">
                            <span>'.$ietm->post_title.'</span>
                            <P>'.$ietm->post_excerpt.'</P>
                             <a href="#">READ MORE</a>
                             <span class="icon">
                                 <span>08</span>
                                 <span>NOV</span>
                             </span>
                        </li>
                    ';
            }
            ?>
        </ul>
    </div>
</div>
<div class="index-buttom  clearfloat">
    <div class="index-buttom-cent clearfloat">
        <div class="buttom-left">
            WELCOME TO JSI WEBSITE AND FEEL FREE TO CONTACT US
        </div>
        <div class="buttom-right">
            <a href="#"> <img src="<?php echo $templateUrl ?>/img/index-bottom-right.jpg"><span>READ MORE</span></a>
        </div>
    </div>
</div>
    <script src="<?php bloginfo('template_url'); ?>/js/CFigure.js"></script>
    <script>
      CFigure.config({
        "id":"cf",
        "with":1400,
        "height": 556,
        "img":{
          "1图片描述":["<?php echo $templateUrl ?>/img/index-list.png"],
          "2图片描述":["<?php echo $templateUrl ?>/img/index-list.png"],
          "3图片描述":["<?php echo $templateUrl ?>/img/index-list.png"]
        }
      });
    </script>

<?php
include 'footer.php';
?>