<?php
/*
$recom[]['text'] = "&quot;&quot;";
$recom[]['who'] = "";
$recom[]['whotitle'] = "";
$recom[]['where'] = "";
 */

$recom[0]['text'] = "&quot;Ferenc is a detail oriented, committed and loyal leader. Has skills to translate from business language to developer language. He brought lightening in the stressed situations and always had time for help. It was a pleasure to work with him.&quot;";
$recom[0]['who'] = "— Andrea Fazekas,";
$recom[0]['whotitle'] = "portal manager, FHB Commercial Bank Ltd,";
$recom[0]['where'] = "worked directly with Ferenc at Commercial Bank Ltd.";

$recom[1]['text'] = "&quot;Ferenc is a superb expert with high level of precision, hard and flexible working even under time constraints - always with good sense of humour. He has well founded knowledge and large experience in the Hungarian banking processes, product development and management, e-com systems and other e-channels.&quot;";
$recom[1]['who'] = "— Béla Kappéter,";
$recom[1]['whotitle'] = "PR manager, FHB Jelzálogbank Nyrt.,";
$recom[1]['where'] = "worked directly with Ferenc at Commercial Bank Ltd.";

$recom[2]['text'] = "&quot;Druszámmal együtt <a href=\"http://youtu.be/gJEkYg0TOT0\" target=\"_blank\" class=\"secret_link\">szálltunk be az Internetbe</a> a '90-es években és együtt vártuk a <a href=\"http://youtu.be/muZUZwXVi1s\" target=\"_blank\" class=\"secret_link\">Windows 95 megjelenését</a>. Ferenc sokat segített amikor <a href=\"http://youtu.be/smOGZ4B7UT0\" target=\"_blank\" class=\"secret_link\">lefagyott a gépem</a>, bár mindig csak másnapra vállalta&quot;";
$recom[2]['who'] = "— Vágási Ferenc,";
$recom[2]['whotitle'] = "Internetes vállalkozó, nyomdász, szomszéd,";
$recom[2]['where'] = "never worked directly with Ferenc. :)";

$recom[3]['text'] = "&quot;I had the privilege to work with Ferenc for two years as a vendor side project manager when he has been the Deputy Head of Online Channels Department at FHB Bank Hungary. In all of the projects we have been working on together, I could rely on Ferenc's opinion through the whole project lifecycle from business requirements through testing till the full completion of project goals. Ferenc is an excellent expert with high level of precision, hard working even under extreme time constraints, and someone who you can fully trust during work. Hope I will have the chance to work with him again in the future!quot;";
$recom[3]['who'] = "— Andras Ban,";
$recom[3]['whotitle'] = "Project manager, IND Group - The Banking Front-Office,";
$recom[3]['where'] = "was a consultant or contractor to Ferenc at FHB Commercial Bank Ltd";

$recom[4]['text'] = "&quot;Oooohhhh... please....<br />He is not Barney. But I heard this guy is awwwweeeesome... True Story!&quot;";
$recom[4]['who'] = "— Barney Stinson,";
$recom[4]['whotitle'] = "Management team member, Goliath National Bank (GNB),";
$recom[4]['where'] = "never worked directly with Ferenc. :)";

$recom[5]['text'] = "&quot;Ferenc has a precise, proactive attitude and he also keeps deadlines. You can always count on his professional knowledge at e-banking management!&quot;";
$recom[5]['who'] = "— Béla Török,";
$recom[5]['whotitle'] = "Investment Product Manager, FHB Kereskedelmi Bank Zrt.,";
$recom[5]['where'] = "worked with Ferenc at FHB Commercial Bank Ltd";

$recom[6]['text'] = "&quot;Ferenc is a hard worker and flexible employer, and has an extensive experience and knowledge in bank systems, product management and e-channels.&quot;";
$recom[6]['who'] = "— Dóra Vojsánszki,";
$recom[6]['whotitle'] = "Manager at Product Management, Mortgage products at Budapest Bank,";
$recom[6]['where'] = "worked with Ferenc at FHB Commercial Bank Ltd";

$recom[7]['text'] = "&quot;Ferenc is an enthusiastic, precise, on-line channel developer expert. He was able to have serious IT arguments with the suppliers, defending the interests of FHB, fighting for better services or lower prices. He always added some new customer satisfaction increasing ideas to the weekly meetings when I was his boss for 9 months at FHB. I still believe that he was one of the best talents of the product development team. He also have a positive team worker attitude. He regularly boosted the others in the mornings when we had our first daily coffee break together. I would be happy to work with him again.&quot;";
$recom[7]['who'] = "— Tibor Andrelli,";
$recom[7]['whotitle'] = "Director of Finance, Accounting and Collection at Hungarian State Holding Co.,";
$recom[7]['where'] = "managed Ferenc at FHB Commercial Bank Ltd";

shuffle($recom);

    for($i=0;$i<=(count($recom)-1);$i++){echo"
                    <li>
                        <div class=\"recom_text\">".$recom[$i]['text']."</div>
                        <div class=\"recom_who\">".$recom[$i]['who']."</div>
                        <div class=\"recom_whotitle\" title=\"".$recom[$i]['where']."\">".$recom[$i]['whotitle']."</div>
                        <!-- <div class=\"recom_where\">".$recom[$i]['where']."</div> -->
                    </li>";
    }
?>