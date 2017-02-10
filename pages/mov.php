<?php

?>
<html>
<head>
<script type="text/javascript" src="jquery-min.js"></script>
<script>
			var onImg= "images/like_gray.jpg";
			var offImg= "images/like_pink.jpg";
		</script>
</head>
<body>
<form>
<div id= "div1">
<input class="addFavorites" id="pic" type="image" value=""  src="images/ranjhanaa.jpg" onclick="this.src = (this.src.endsWith(offImg)? onImg : offImg);" />
</div>
</form>
</body>
</html>
