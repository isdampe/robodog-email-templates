{{alert_title}} - {{listing_count}} new listings found - {{APP_NAME}}
<?php include 'partials/header.php'; ?>

<table cellpadding="0" cellspacing="0" border="0" align="center">
	<tr>
		<td width="640" valign="top" style="padding: 20px;">

			<p>Dear {{first_name}},</p>

			<p>Your alert with {{APP_NAME}} has found {{listing_count}} new listings. Please see them below.</p>

			{{listings}}
			
			<table cellpadding="0" cellspacing="0" border="0" align="center" style="width: 100%;" valign="top">
				<tr>
					<td style="width: 23%; vertical-align: top; padding-bottom: 10px;" valign="top">
						<a href="{{link}}">
							<img width="150" height="150" src="https://app.robo.dog/assets/thumbs/2192/bdbd42c5-3d5a-4558-8545-66d0f229b83e-resized.jpg" />
						</a>
					</td>
					<td style="width: 74%; padding-left: 3%; padding-bottom: 10px;" valign="top">
						<h2 style="color: #236a95; font-size: 1.4em; font-weight: 600; margin: 0 0 0.25em;"><a href="{{link}}">Some listing title</a></h2>
						<div style="text-transform: uppercase; font-size: 13px; font-weight: 600; color: #999; margin-bottom: 10px;">ALASKAN MALAUTE IN VICTORIA</div>
						<p style="font-size: 14px;">These gorgeous little boys are ready for forever homes on the 1st of feb. There is only 2 boys, 1 fawn and...</p>
						<p><a style="background: #236a95; color: #fff; display: inline-block; padding: 0.5em 1.5em; font-weight: bold; text-transform: uppercase; font-size: 13px;">View listing</a></p>
					</td>
				</tr>

			</table>

			<p>If you have any questions, please email us directly at {{APP_SUPPORT_EMAIL}}</p>

		</td>
	</tr>
</table>

<?php include 'partials/footer.php'; ?>
