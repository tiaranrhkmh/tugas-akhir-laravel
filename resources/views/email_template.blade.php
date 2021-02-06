<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" initial-scale="1">
    <meta name="x-apple-disable-message-reformatting">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">
    <style>

		/* Box sizing. Gets decent support. (https://freshmail.com/developers/best-practices-for-email-coding) */
		*,
		*:after,
		*:before {
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
		}

		/* Prevents small text resizing. */
		* {
			-ms-text-size-adjust: 100%;
			-webkit-text-size-adjust: 100%;
		}

		/* Basic reset. Removes default spacing around emails in various clients. (https://templates.mailchimp.com/development/css/reset-styles) */
		html,
		body,
		.document {
			width: 100% !important;
			height: 100% !important;
			margin: 0;
			padding: 0;
		}

		/* Improves text rendering when supported. */
		body {
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
			text-rendering: optimizeLegibility;
		}

		/* Centers email to device width in Android 4.4. (https://blog.jmwhite.co.uk/2015/09/19/revealing-why-emails-appear-off-centre-in-android-4-4-kitkat) */
		div[style*="margin: 16px 0"] {
			margin: 0 !important;
		}

		/* Removes added spacing within tables in Outlook. (https://templates.mailchimp.com/development/css/client-specific-styles) */
		table,
		td {
			mso-table-lspace: 0pt;
			mso-table-rspace: 0pt;
		}

		/* Removes added spacing within tables in WebKit. */
		table {
			border-spacing: 0;
			border-collapse: collapse;
			table-layout: fixed;
			margin: 0 auto;
		}

		/* Responsive images. Improves rendering of scaled images in IE. */
		img {
			-ms-interpolation-mode: bicubic;
			max-width: 100%;
			border: 0;
		}

		/* Overrules triggered links in iOS. */
		*[x-apple-data-detectors] {
			color: inherit !important;
			text-decoration: none !important;
		}

		/* Overrules triggered links in Gmail. */
		.x-gmail-data-detectors,
		.x-gmail-data-detectors *,
		.aBn {
			border-bottom: 0 !important;
			cursor: default !important;
		}

		/* Adds hover effects on buttons. */
		.btn {
			-webkit-transition: all 200ms ease;
			transition: all 200ms ease;
		}
		.btn:hover {
			background-color: #222222;
			border-color: #222222;
		}

		/* Media queries o' doom. */
		@media screen and (max-width: 450px) {

			/* Transitions container to a fluid layout. */
			.container {
				width: 100%;
				margin: auto;
			}

			/* Collapses table cells into full-width rows. */
			.stack {
				display: block;
				width: 100%;
				max-width: 100%;
			}

			/* Centers and expands CTA. */
			.btn {
				display: block;
				width: 100%;
				text-align: center;
			}

		}
	</style>
</head>
<body bgcolor="#E8ECF1">

	<!-- Preheader text. Visible in inbox preview, not in email body. -->
	<div style="display: none; max-height: 0px; overflow: hidden;">
		<!-- Preheader message here -->
	</div>

	<!-- Hack to manage presentation of preheader text. (https://litmus.com/blog/the-little-known-preview-text-hack-you-may-want-to-use-in-every-email) -->
	<div style="display: none; max-height: 0px; overflow: hidden;">&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;</div>

	<table bgcolor="#E8ECF1" role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" align="center" class="document">
		<tr>
			<td valign="top">

				<!-- Main -->
				<table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" align="center" width="500" class="container">
					<tr>
						<td bgcolor="#ffffff">
							<table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" align="center" width="100%">
								<tr>
									<td style="padding: 20px;">
										<table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" align="center" width="100%">
											<tr>
												<td style="padding-bottom: 15px; font-family: 'Source Sans Pro', sans-serif; font-size: 26px; line-height: 34px; color: #1B2733;">
													Informasi Terkait Tagihan Pembayaran
												</td>
											</tr>
											<tr>
												<td style="padding-bottom: 15px; font-family: 'Source Sans Pro', sans-serif; font-size: 18px; line-height: 24px; color: #1B2733;">
													Terimakasih {{$Nama}} telah melakukan transaksi pembayaran keterlambatan Buku
												</td>
											</tr>
											<table class="table table-striped table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>ID_Pembayaran</th>
                                                        <th>Tanggal_Pemmbayaran</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                        <tr>
                                                            <td>{{ $ID_Pembayaran}}</td>
                                                            <td>{{ $updated_at }}</td>
                                                            <td>{{ $status }}</td>
                                                        </tr>
                                                </tbody>
                                            </table>
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>

				<!-- Footer -->
				<table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" align="center" width="450" class="container">
					<tr>
						<td align="center" style="font-family: 'Source Sans Pro', sans-serif; font-size: 11px; line-height: 16px; padding-top: 20px; color: #aaaaaa;">
							TUGAS AKHIR TIARA
						</td>
					</tr>
					<tr>
						<td align="center" style="font-family: 'Source Sans Pro', sans-serif; font-size: 11px; line-height: 16px; padding-bottom: 20px; color: #aaaaaa;">
							<!-- Unsubscribe link -->
							<unsubscribe>Implementasi Cashless Payment</unsubscribe>
						</td>
					</tr>
				</table>

			</td>
		</tr>
	</table>
</body>
</html>
