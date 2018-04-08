<?php

/**
 * @author Szaraz Ferenc
 * @copyright 2013
 */

$inspire[0]['name']="Douglas Carl Engelbart";
$inspire[0]['desc']="Douglas Carl Engelbart was an American engineer and inventor, and an early computer and Internet pioneer. He is best known for his work on the challenges of human–computer interaction, resulting in the invention of the computer mouse, and the development of hypertext, networked computers, and precursors to graphical user interfaces.";
$inspire[0]['image']="douglasengelbart.jpg";

$inspire[1]['name']="Alphonse Gabriel \"Al\" Capone";
$inspire[1]['desc']="Al Capone was an American gangster who led a Prohibition-era crime syndicate. The Chicago Outfit, which subsequently also became known as the \"Capones\", was dedicated to smuggling and bootlegging liquor, and other illegal activities such as prostitution, in Chicago.";
$inspire[1]['image']="alcapone.jpg";

$inspire[2]['name']="Dennis Gabor (Gábor Dénes)";
$inspire[2]['desc']="Dennis Gabor was a Hungarian-British electrical engineer and physicist, most notable for inventing holography, for which he later received the 1971 Nobel Prize in Physics.";
$inspire[2]['image']="gabordenes.jpg";

$inspire[3]['name']="Laszlo Hadhazi (Hadházi László)";
$inspire[3]['desc']="Laszlo Hadhazi is a humorist, writer, radio presenter and stand up comedian.";
$inspire[3]['image']="hathazilaszlo.jpg";

$inspire[4]['name']="James Joseph \"Jim\" Parsons";
$inspire[4]['desc']="James Joseph \"Jim\" Parsons alias Sheldon Lee Cooper, B.S., M.S., M.A., Ph.D., Sc.D. is an American actor. He is best known for playing Sheldon Cooper on the CBS sitcom The Big Bang Theory, with his performance often cited as a significant reason for the program's success.<br />However, in my opinion, this is the series that you might want to look at the original language.";
$inspire[4]['image']="jimparsons.jpg";

$inspire[5]['name']="Albert Einstein";
$inspire[5]['desc']="Albert Einstein was a theoretical physicist who developed the general theory of relativity, one of the two pillars of modern physics. While best known for his mass–energy equivalence formula E = mc<sup>2</sup>, he received the 1921 Nobel Prize in Physics.";
$inspire[5]['image']="alberteinstein.jpg";

$inspire[6]['name']="Mark Elliot Zuckerberg";
$inspire[6]['desc']="Mark Elliot Zuckerberg is an American computer programmer and internet entrepreneur start up genius. He is best known as one of five co-founders of the social networking website Facebook. Zuckerberg is the chairman and chief executive of Facebook.";
$inspire[6]['image']="markzuckerberg.jpg";

$inspire[7]['name']="Michael Fred Phelps";
$inspire[7]['desc']="Michael Fred Phelps is a retired American swimmer and the most decorated Olympian of all time, with a total of 22 medals. Phelps also holds the all-time records for Olympic gold medals.";
$inspire[7]['image']="michaelphelps.jpg";

$inspire[8]['name']="Steven Paul \"Steve\" Jobs";
$inspire[8]['desc']="Steven Paul \"Steve\" Jobs was an American entrepreneur, marketer and inventor, who was the co-founder, chairman, and CEO of Apple Inc. Through Apple, he is widely recognized as a charismatic pioneer of the personal computer revolution and for his influential career in the computer and consumer electronics fields, transforming \"one industry after another, from computers and smartphones to music and movies\".";
$inspire[8]['image']="stevejobs.jpg";

$inspire[9]['name']="Thomas Alva Edison";
$inspire[9]['desc']="Thomas Alva Edison was an American inventor and businessman. He developed many devices that greatly influenced life around the world, including the phonograph, the motion picture camera, and a long-lasting, practical electric light bulb.";
$inspire[9]['image']="thomasalvaedison.jpg";

$inspire[10]['name']="Stephen William Hawking";
$inspire[10]['desc']="Stephen William Hawking is an English theoretical physicist, cosmologist, author. Hawking was the first to set forth a cosmology explained by a union of the general theory of relativity and quantum mechanics. He is a vocal supporter of the many-worlds interpretation of quantum mechanics.";
$inspire[10]['image']="stephenhawking.jpg";

$inspire[11]['name']="Sir Richard Charles Nicholas Branson";
$inspire[11]['desc']="Sir Richard Charles Nicholas Branson is an English business magnate and investor. He is best known as the founder of Virgin Group. Branson has dyslexia and had poor academic performance as a student, but later discovered his ability to connect with others.";
$inspire[11]['image']="richardbranson.jpg";

echo"<div id=\"about_inspire_box\">";
for($i=0;$i<=(count($inspire)-1);$i++){
    $filename= explode(".", $inspire[$i]['image']);
    echo"<div id=\"about_inspire_element\" who=\"".$filename[0]."\">
            <img src=\"image/inspirate/".$inspire[$i]['image']."\" class=\"bigpic\" />
            <span class=\"inspire_head\">".$inspire[$i]['name']."</span><br />
            <span class=\"inspire_text\">".$inspire[$i]['desc']."</span>
         </div>";
}
echo"</div>";

    echo"<div id=\"about_inspire_collector\">";
    for($s=0;$s<=(count($inspire)-1);$s++){
        if($s==6){echo"<br />";}
        $filename= explode(".", $inspire[$s]['image']);
        echo"<img id=\"".$filename[0]."\" class=\"collector_image\" src=\"image/inspirate/".$inspire[$s]['image']."\" class=\"basepic\" />";
    }
    echo"</div>";
?>