Confirm your email address - {{APP_NAME}}
<?php include 'partials/header.php'; ?>

<table cellpadding="0" cellspacing="0" border="0" align="center">
	<tr>
		<td width="640" valign="top" style="padding: 20px;">

			<p>Dear {{first_name}},</p>

			<p>To receive notification emails from <a href="{{APP_URL}}">{{APP_NAME}}</a> at {{email}}, we request that you first
				confirm you are the owner of this email address.</p>

			<p>To confirm you are the owner of this email address, please either click or copy and paste the link below
				into your web browser.</p>

			<p><a href="{{confirmation_url}}">{{confirmation_url}}</a></p>

			<p>If you have any questions, please email us directly at {{APP_SUPPORT_EMAIL}}</p>

		</td>
	</tr>
</table>

<?php include 'partials/footer.php'; ?>
