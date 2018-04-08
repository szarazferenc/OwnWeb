<?php

/**
 * @author Száraz Ferenc
 * @copyright 2013
 */
 
 $sql = "SELECT authority.* FROM authority LEFT JOIN published_key ON authority.published_key_id=published_key.id WHERE published_key.idkey = '".$_SESSION['identity_key']."' LIMIT 1";
 $result = mysql_query($sql);
        $num_rows = mysql_num_rows($result);
        if($num_rows==1){
            $row = mysql_fetch_array($result);
            $page_home = "cust_pages/".$row['home'].".php";
            $page_about = "cust_pages/".$row['about'].".php";
            $page_cv = "cust_pages/".$row['cv'].".php";
            $page_contact = "cust_pages/".$row['contact'].".php";           
        }else{
            $page_home = "wortex_89_core_home.php";
            $page_about = "wortex_89_core_about.php";
            $page_cv = "wortex_89_core_cv.php";
            $page_contact = "wortex_89_core_contact.php";
        }

?>
	<div id="back_bg"></div>
	<div id="fore_bg"></div>


<div id="core_header_container">
    <div id="core_header">
    <table id="core_head_table">
        <tr>
            <td>
                <div id="core_head_logo">
                <br />
                <a href="#home" id="core_page_headlogo"><img id="logo" src="image/logo.png" width="200" height="81" /></a>
                </div>
            </td>
            <td>
                <div id="core_head_menu">
                <ul>
                    <li><a href="#contact" id="core_page_contact">Contact</a></li>
                    <li><a href="//ideas.<?php echo $_SERVER['SERVER_NAME']; ?>" target="_blank" id="newpage_ideas">Ideas</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                    <li><a href="#cv" id="core_page_cv">CV</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                    <li><a href="#about" id="core_page_about">About</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                    <li><a href="#home" id="core_page_home">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                </ul>
                </div>
            </td>
        </tr>
    </table>
    </div>
</div>


<div id="core_container">


  <div id="core_home_container">
    <div id="core_content_home">
<?php include($page_home); ?>        
    </div>
    <div id="line_wtob"><img src="image/down_light.png" width="102" height="20" /></div>
  </div>



  <div id="core_about_container">
    <div id="core_content_about">
<?php include($page_about); ?>   
    </div>
  </div>


    
  <div id="core_cv_container">
    <div id="core_content_cv">
<?php include($page_cv); ?>
    </div>
  </div>


    
  <div id="core_contact_container">
    <div id="core_content_contact">
<?php include($page_contact); ?> 
    </div>
  </div>

</div>


<div id="core_footer_container">
    <div id="core_footer">
    
    <table style="width: 100%;">
        <tr>
           <td style="width: 33%; text-align: center; vertical-align: central;"><div id="core_footer_topofthepage"><img id="topofthepage" src="image/dataimages/topofthepage.png" width="23" height="26" title="GOTO: top of the page" /></div></td>
	       <td style="width: 33%; text-align: center; vertical-align: central;"><div id="core_footer_copyright">© <?php echo date('Y'); ?> Száraz Ferenc | szarazferenc.hu - All Rights Reserved.<br />"Copyright is for losers&copy;&trade;" Banksy</div></td>
	       <td style="width: 33%; text-align: center; vertical-align: central;"><div id="core_footer_about" style=""><img id="topofthepage" src="image/dataimages/techinfo.png" width="23" height="26" title="Tech info" /></div></td>
        </tr>
    </table>
    
    </div>
</div>
    
<script src="jquery.lettering.js"></script>
<script src="timeline.js"></script>
<script src="jquery.myslide.js"></script>
<script src="jquery.mylinkedinrecom.js"></script>

<script src="core.js"></script>