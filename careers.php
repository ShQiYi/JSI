<?php
/*
Template Name:CAREERS
*/
?>
<?php
include 'header.php';
?>
    <div class="careers container">
        <img class="img" src="<?php echo $templateUrl ?>/img/caerres-top.png" width="1400" />
        <div class="careers-hear">
            <h2>Careers at JSI Rock Tools</h2>
            <p>
                As an innovative company, <b>JSI Rock Tools</b> does recongnise that a specialised service system will bring JSI future growth and success. We also realise that the most valuable competitive advantage coming from our specialised employees.
            </p>
        </div>
        <div class="careers-hear">
            <p>
                We look for motivated team players to join our JSI family. For more information, please contact:
            </p>
        </div>
        <div class="careers-hear">
            <h2>Headquarters</h2>
            <span>JSI Rock Tools Co., Ltd.</span>
            <span>11F, Jiulian bldg, 213 North Baoshan Rd</span>
            <span>Guiyang, Guizhou   550004   CHINA</span>
            <span>Tel: +86 851 86780702 86780703 86780705</span>
            <span>Fax: +86 851 86780960</span>
            <span>E-mail: marketing@jsintl.com.cn, marketing@jsirocktools.com</span>
        </div>
        <div class="careers-hear">
            <h2>Featured Jobs</h2>
            <ul class="careers-list clearfloat">

                <?php
                $catid =$categoryNameToId['CAREERS'];//获取id
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
                          <div class="careers-hear">
                           <h3>'.$ietm->post_title.'</h3>
                            <p class="careers-p">'.$ietm->post_excerpt.'</p>
                           <a>Contact us for more information</a>
                        </div>
                     </li>
                      <li>
                         <img src="'.$img_url.'">
                          <div class="careers-hear">
                           <h3>'.$ietm->post_title.'</h3>
                            <p>'.$ietm->post_excerpt.'</p>
                           <a>Contact us for more information</a>
                        </div>
                     </li>
                      <li>
                         <img src="'.$img_url.'">
                          <div class="careers-hear">
                           <h3>'.$ietm->post_title.'</h3>
                            <p>'.$ietm->post_excerpt.'</p>
                           <a>Contact us for more information</a>
                        </div>
                     </li>
                    ';
                }
                ?>
            </ul>
        </div>
    </div>
    <script>
    </script>
<?php
include 'footer.php';
?>