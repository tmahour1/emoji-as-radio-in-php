<!DOCTYPE html>
<html>
<head>
	<title>Emojis</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shotcut icon" href="emoji.gif">
</head>
<body>
	<div id="tmsites" class="tmreaction">
		<form method="POST" action="form.php" id="tmreaction">
			<input type="radio" name="reaction" id="like" value="like"/><label for="like"><img src="svg/like.png" alt="Like"/></label>
			<input type="radio" name="reaction" id="love" value="love"/><label for="love"><img src="svg/love.png" alt="Love"/></label>
			<input type="radio" name="reaction" id="haha" value="haha"/><label for="haha"><img src="svg/haha.png" alt="Haha"/></label>
			<input type="radio" name="reaction" id="wow" value="wow"/><label for="wow"><img src="svg/wow.png" alt="Wow"/></label>
			<input type="radio" name="reaction" id="sad" value="sad"/><label for="sad"><img src="svg/sad.png" alt="Sad"/></label>
			<input type="radio" name="reaction" id="angry" value="angry"/><label for="angry"><img src="svg/angry.png" alt="Angry"/></label>
		</form>
	</div>
	
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript">
		$('.tmreaction input:radio').addClass('tminput_hidden');
		$('.tmreaction label').click(function(){
			$(this).addClass('selected').siblings().removeClass('selected');
		});
		$('#tmreaction input[type=radio]').on('change', function(){
			var data = $("form").serialize();
			$.ajax({
				url: "form.php",// link of your "whatever" php
				type: "POST",
				async: true,
				cache: false,
				data: data,// all data will be passed here
				success: function(data){
					alert(data)// The data that is echoed from the form.php
				}
			});
			return false;
		});
	</script>

</body>
</html>