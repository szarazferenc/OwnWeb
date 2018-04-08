<div id="debugwindow">
<?php echo"<pre>"; print_r($debug); echo"</pre>"; ?><br /><br /><br />
<p align="center"><strong>-------------------- ARRAY LIST --------------------</strong></p>
<table>
<tr>
	<td width="50%"><strong>req_param:</strong><pre><?php print_r($req_param); ?></pre></td>
	<td><strong>get_param:</strong><pre><?php print_r($get_param); ?></pre></td>
</tr>
<tr>
	<td><strong>SESSION:</strong><pre><?php print_r($_SESSION); ?></pre><br /></td>
	<td><strong>COOKIES:</strong><pre><?php print_r($_COOKIE); ?></pre><br /></td>
</tr>
</table>
</div>

<?php $_SESSION['debug']=''; ?>