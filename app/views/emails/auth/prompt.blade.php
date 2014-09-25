<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Password Reset</h2>

		<div>
            We have received a request for you to reset your password. 
			To reset your password, follow this link {{ URL::to('password/reset', array($nonce)) }}<br/>
            If this request has been sent in error, you don't need to do anything apart from ignoring this email.
		</div>
	</body>
</html>