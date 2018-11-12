<?php
/*
Template Name:COMPANY
*/
?>
<?php
include 'header.php';
?>
    <div class="company  container">
    <div class="company-top   container">
        <img src="<?php echo $templateUrl ?>/img/company-top.jpg">
        <h3>JSI	COMPANY</h3>
        <p>JSI Rock Tools is a leading specialized supplier of rock drilling tools in China, serving customers in more than 70
            countries. The company is publicly listed on NEEQ (National Equities Exchange and Quotations), China.</p>
    </div>
        <div class="company-middle">
            <div class="company-middle-l"> <img src="<?php echo $templateUrl ?>/img/company-middle1.jpg"></div>
            <div class="company-middle-r">
                <h3>COMPANY	PROFILE</h3>
                    <p>JSI mainly produces rock drilling tools for mining,
                    construction and related industries. Since its foundation in 1996, JSI has been
                    striving to provide customers with fast, stable and economical solutions for rock
                    drilling, and effectively help them reduce rock drilling cost. Now JSI has been a
                    specialized manufacturer of rock drilling tools with integration of R&D, production,
                    related products supply and solutionconsultancy.</p>
                    <p> With constant efforts for more than 20 years, not only does JSI own its own
                       factories and laboratory but also has established strategic partnership with
                       a number of qualified manufacturers. We can offer customers the most suitable
                       solution based upon the full understanding of their specific requirements, and a
                       wide range of actual performance tests of our products under the rigorous control
                       onproductionqualityandsupplyingsystem.</p>
            </div>
        </div>
        <div class="company-middle">
            <div class="company-middle-right"> <img src="<?php echo $templateUrl ?>/img/company-middle3.png"></div>
            <div class="company-middle-left">
                <h3>COMPANY	VALUES & VISION</h3>
                <ul>
                <span>Values</span><br/>
                    <li><span> Sincerity:</span>To think and act the same way.</li>
                    <li><span>Credibility: </span>To keep our promises at any cost.</li>
                    <li><span>Gratitude: </span> To be kind and grateful.</li>
                    <li><span>Perfection:</span> To keep improving and pursue perfection.</li>
                   <li><span> Diligence: </span>To be pratical and dedicated.</li>
                    </ul>

                <p>
                    <span>Operation guidelines</span>
                    Never compromise quality for cost.<br/>
                    Seeking Win-Win solutions.
                </p>
                <p>
                    <span>Vision</span><br/>
                    To provide customers with efficient, stable and cost-effective
                     rock drilling equipments in the worldwide industry.
                </p>

            </div>
        </div>
        <div class="company-middle">
            <div class="company-middle-l"> <img src="<?php echo $templateUrl ?>/img/company-middle2.jpg"></div>
            <div class="company-middle-r">
                <h3>HISTORY</h3>
                <ul>
                    <?php


                    $data=get_posts( [ 'category' =>$categoryNameToId['HISTORY'] ,'numberposts'=> 3,'offset'  => 0]);
//                    print_r($data);
                    foreach ($data as $TT) {
                        ?>
                        <li>
                            <span><?php  print_r($TT->post_title) ?></span>
                            <p><?php  print_r($TT->post_excerpt) ?>
                                <br/> <a href=""> Read more</a>
                            </p>

                        </li>

                        <?php
                    }
                    ?>
<!--                    <li>-->
<!--                        <span>Initial stage:  1997 - 2002</span>-->
<!--                        <p>In 1997, founded in High-tech development zone in Guiyang and separated itself from state-owned enterprise for independent management.-->
<!--                           <br/> <a href=""> Read more</a>-->
<!--                        </p>-->
<!---->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <span>Initial stage:  1997 - 2002</span>-->
<!--                        <p>In 1997, founded in High-tech development zone in Guiyang and separated itself from state-owned enterprise for independent management.-->
<!--                            <br/> <a href=""> Read more</a></p>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <span>Initial stage:  1997 - 2002</span>-->
<!--                        <p>In 2008, our laboratory was established. Same year, JSI was awarded '' Guizhou famous export enterprise '' by Economic and Trade Bureau of Guizhou province. Also in 2008, JSI was classified “ AAAgradecreditenterprise”byBankofChina.-->
<!--                            <br/> <a href=""> Read more</a></p>-->
<!--                    </li>-->
                </ul>
            </div>
        </div>
        <div class="company-middle  " >
              <div class="company-middle-right" >
                   <div class="company-middle-right-img ">
                       <img src="<?php echo $templateUrl ?>/img/company-middle-1.png">
                   </div>
                   <div class="company-middle-right-img ">
                       <img src="<?php echo $templateUrl ?>/img/company-middle-2.png">
                   </div>
                   <div class="company-middle-right-img ">
                       <img src="<?php echo $templateUrl ?>/img/company-middle-3.png">
                   </div>
                  <div class="company-middle-right-img ">
                      <img src="<?php echo $templateUrl ?>/img/company-middle-4.png">
                  </div>
<!--                <img src="img/company-middle1.jpg">-->

            </div>
            <div class="company-middle-left">
                <h3>INNOVATION & TECHNOLOGY</h3>

                <?php


                $data=get_posts( [ 'category' =>$categoryNameToId['TECHNOLOGY'] ,'numberposts'=> 2,'offset'  => 0]);
//                print_r($data);
                foreach ($data as $TT) {
                    ?>
                    <p><a href=""> Read more</a>
                        <span><?php  print_r($TT->post_title) ?></span><br>
                        <?php  print_r($TT->post_excerpt) ?> </p>


                    <?php
                }
                ?>
<!--                <p><a href=""> Read more</a>-->
<!--                    <span>Outstanding R&D capability</span><br>-->
<!--                    JSI pays more attention to R&D since 1997 and is in the leading position on the prospective study, design and processing technology of rock drilling tools in China. JSI has its own R&D team and laboratory which made many achievements especially research of raw materials, strengthening and toughening of bit body, hot press inserting technology of button bits, design of rock drilling toolsetc.-->
<!--                </p>-->
<!--                <p><a href=""> Read more</a>-->
<!--                    <span>Rapid response and flexible manufacturing system</span>-->
<!--                    <br/> JSI has a complete system of R&D, production and service, which provides customer an integrated solution including R&D, lean production,timelydeliveryandshipmenttrackingservice.-->
<!--                </p>-->

            </div>
        </div>
    </div>

<script>

</script>



<?php
   include 'footer.php';

?>