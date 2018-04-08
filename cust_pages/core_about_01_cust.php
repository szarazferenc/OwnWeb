<?php

/**
 * @author Szaraz Ferenc
 * @copyright 2013
 */
?>
    <div class="core_page_head">About me</div>

    <table style="width: 100%">
      <tr>
        <td valgin="top">
            <div id="about_introduce_head"><span id="core_about_prefix">///</span>Hello there!</div>
            <div id="about_introduce_text">
My name is Ferenc Szaraz, and I am a project manager and online channel specialist born and raised in <a href="https://maps.google.hu/maps?q=Nagyk%C5%91r%C3%B6s" target="_blank" class="secret_link">Nagykőrös</a>, Hungary, but nowdays I live in <a href="https://maps.google.hu/maps?q=Budapest" target="_blank" class="secret_link">Budapest</a>. I have worked in the web technologies field since 2005. My academic training, however, is in economics and business management. As a result, I offer a combination of technology expertise and substantive knowledge about a variety of banking projects and IT projects.
            </div>
        </td>
        <td valgin="top">
            <div id="about_introduce_head"><span id="core_about_prefix">///</span>What I do when I'm not working</div>
            <div id="about_introduce_text">
When I'm not geeking out behind a screen, I usually do my hobbies. In the weekdays I usually play football or meet with my friends in my freetime. I like a good restaurants, pubs and coffee bars. I like sailing on the Lake Balaton, so if it is summer weekend and sunny and little bit windy you can find me on the board. In the winter I try to develop my precision shooting skills, but someimes it is too difficult to me.:)
            </div>
        </td>
      </tr>
    </table>



    <div id="about_introduce_head"><span id="core_about_prefix">///</span>My life in line...</div>
    <br /><br /><br />
				<div id="progress-bar-container" style="margin: 80px 0;">>
					<span class="birth" title="my personal Unix epoch: 0">1979</span>
					<span class="present" title="my personal Unix epoch now: <?php echo time()-strtotime('1979-09-12'); ?>"><?php echo date("Y"); ?></span>
					<div class="progress-bar">
						<ul class="notes"></ul>
					</div>
				</div>
    <br /><br /><br />
    

<div id="core_about_left">
    <div id="about_introduce_head"><span id="core_about_prefix">///</span>Who inspire me</div>
    <br />
    <?php include("../wortex_89_inspirate.php"); ?>

</div>
<div id="core_about_right">
    <div id="about_introduce_head"><span id="core_about_prefix">///</span>Some facts in numbers about me</div>
    <br />
    <?php include("../wortex_89_productivitystat.php"); ?>
</div>
<br /><br /><br /><br /><br />

<div id="about_introduce_head" style="margin: 180px 0 0 0;"><span id="core_about_prefix">///</span>Recommendations</div>
<div id="recommendations"> 

    <div id='recombar_container'>  
      <div id='left_scroll'>&laquo;</div>  
      <div id='recombar_inner'>  
            <ul id='recombar_ul'>  
    <?php
    include("../wortex_89_recommendations.php")
    ?>  
            </ul>  
      </div>  
      <div id='right_scroll'>&raquo;</div>  
    </div>
 
</div>



<br /><br />



