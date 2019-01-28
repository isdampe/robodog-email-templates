Password recovery details - {{APP_NAME}}
<?php include 'partials/header.php'; ?>

<table cellpadding="0" cellspacing="0" border="0" align="center">
	<tr>
		<td width="640" valign="top" style="padding: 20px;">

			<p>Dear {{first_name}},</p>
			<p>We recently received a request to assist you in recovering your login information
				on {{APP_NAME}}. If you did not make this request, please disregard this email.</p>

			<p>To reset your password, either click or copy and paste the link below into your
				web browser.</p>

			<p><a href="{{recovery_url}}">{{recovery_url}}</a></p>

			<p>If you have any questions, please email us directly at {{APP_SUPPORT_EMAIL}}.</p>

		</td>
	</tr>
</table>

<?php include 'partials/footer.php'; ?>
