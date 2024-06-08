<?php
	include "header.php";
	include "dbconnect.php";
	
	$sql="SELECT * FROM facilities";
	$result=$conn->query($sql);
	
?>
	<div class="announce">
		<h2> Announcement for application</h2>
		<b>With a lot of ambition , I started may journey at 2020 with plant. I find myself close to nature and plants make my life full with joyous.
 Even though I am a beginner I want start my business with trees. After 2022 I start work with my Two friends Afia and Shefa. Both of them really good at their work. They are the reasonabl
 thats why I found confident on my online business. Now we need more employees. So hope you will join us.<b>
		<h2>We offer:</h2>
		<ul>
		<?php
			while($row=$result->fetch_assoc()){
				echo "<li>".$row["description"]."</li>";
			}
		?>
		</ul>
	</div>
	 </div> 
   <div class="gallary">
   <img src="f.jpg">
   <img src="b.jpeg">
   <img src="c.jpg">
   <img src="d.jpg">
   <img src="e.webp">
   <img src="f.jpg">
   </div>	
<?php
	include "footer.php";
?>