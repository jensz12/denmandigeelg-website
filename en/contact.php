<?php require 'contact_send.php'; ?>
<!DOCTYPE html>
<html lang="da">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Contact - Manly Moose</title>
<meta name="description" content="Contact Manly Moose">
<link rel="icon" href="/favicon.png">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@manlymooseyt">
<meta name="twitter:creator" content="@jensz12">
<meta name="twitter:title" content="Contact - Manly Moose">
<meta name="twitter:description" content="Contact Manly Moose">
<meta name="twitter:image:src" content="https://denmandigeelg.dk/favicon.png">
<?php require 'header.php';?>
</head>
<body>
<header>
	<?php require 'navbar.php';?>
</header>
<main role="main" id="content" class="container">
	<div class="row">
		<article class="col-lg-9 col-md-8">
			<div class="jumbotron">
				<form role="form" class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="contactform">
            <fieldset>

                <div class="form-group">
                    <div class="col-md-12">
                        <label for="txt_name" class="control-label">Name</label>
                    </div>
                    <div class="col-md-12">
                        <input class="form-control" name="txt_name" placeholder="Your name" type="text" value="<?php if($error) echo $name; ?>" />
                        <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <label for="txt_email" class="control-label">Email</label>
                    </div>
                    <div class="col-md-12">
                        <input class="form-control" name="txt_email" placeholder="Your email" type="text" value="<?php if($error) echo $fromemail; ?>" />
                        <span class="text-danger"><?php if (isset($fromemail_error)) echo $fromemail_error; ?></span> 
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <label for="txt_subject" class="control-label">Subject</label>
                    </div>
                    <div class="col-md-12">
                        <input class="form-control" name="txt_subject" placeholder="The subject" type="text" value="<?php if($error) echo $subject; ?>" />
                        <span class="text-danger"><?php if (isset($subject_error)) echo $subject_error; ?></span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <label for="txt_msg" class="control-label">Message</label>
                    </div>
                    <div class="col-md-12">
                        <textarea class="form-control" name="txt_msg" rows="4" placeholder="Write your message here"><?php if($error) echo $message; ?></textarea>
                        <span class="text-danger"><?php if (isset($message_error)) echo $message_error; ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <input name="submit" type="submit" class="btn btn-primary" value="Send" />
                    </div>
                </div>
            </fieldset>
            </form>
			<?php if (isset($alertmsg)) { echo $alertmsg; } ?>
			</div>
		</article>
		<div>
		<?php
		require 'sidebar.php';
		?>
		</div>
	</div>
<?php require 'footer.php';?>
</body>
</html>