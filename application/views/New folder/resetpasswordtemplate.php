<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<style>

	</style>
</head>
	<body>
		<div>
			<div>
				<h2 style="text-align:center">Bigdata Innovation Hub</h2>
			</div>
				<h4>Hi <?php echo $result[0]['User_Name']; ?></h4>
				<div>
					<p>You recently requested to reset your password for BDIHub account.
                    Click the button below to reset your password.</p>
 <a href="<?php echo site_url();?>BigdatasiteController/resetpasswordview/<?php echo $result[0]['id'];?>"type="button" >RESET</a><br><br>
                   	Thanks,<br>
                   	BDIHub
                </div>

		</div>
	</body>
</html>