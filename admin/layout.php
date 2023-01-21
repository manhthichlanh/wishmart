<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Web Công Nghệ - Dashboard</title>
	
	<link href="<?=$CONTENT_URL?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?=$CONTENT_URL?>/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?=$CONTENT_URL?>/css/styles.css" rel="stylesheet">
	<script src="<?=$CONTENT_URL?>/js/jquery-3.6.1.min.js"></script>
	<script src="<?=$CONTENT_URL?>/js/jquery.validate.min.js"></script>
	<script src="<?=$CONTENT_URL?>/js/bootstrap.min.js"></script>
	<script src="<?=$CONTENT_URL?>/js/bootstrap-datepicker.js"></script>
	<script src="<?=$CONTENT_URL?>/js/list.js"></script>
	<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/super-build/ckeditor.js"></script>
	



	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
		<?php
			if ($VIEW_NAME == "login-form.php") {
				require_once $VIEW_NAME;
			} else {
				echo '<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
						<div class="container-fluid">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span></button>
								<a class="navbar-brand" href="#"><span>Web Công nghệ </span>Admin</a>
								<ul class="nav navbar-top-links navbar-right">
									<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
										<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
									</a>
										<ul class="dropdown-menu dropdown-messages">
											<li>
												<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
													<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
													</a>
													<div class="message-body"><small class="pull-right">3 phút trước</small>
														<a href="#"><strong>Tuấn Hưng</strong> đã bình luận <strong>ảnh của bạn</strong>.</a>
													<br /><small class="text-muted">1:24 pm - 09/08/2022</small></div>
												</div>
											</li>
											<li class="divider"></li>
											<li>
												<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
													<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
													</a>
													<div class="message-body"><small class="pull-right">1 hour ago</small>
														<a href="#">Bạn có tin nhắn mới từ <strong>Ngọc Nhi</strong>.</a>
													<br /><small class="text-muted">12:27 pm - 09/08/2022</small></div>
												</div>
											</li>
											<li class="divider"></li>
											<li>
												<div class="all-button"><a href="#">
													<em class="fa fa-inbox"></em> <strong>Xem tất cả tin nhắn</strong>
												</a></div>
											</li>
										</ul>
									</li>
									<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
										<em class="fa fa-bell"></em><span class="label label-info">5</span>
									</a>
										<ul class="dropdown-menu dropdown-alerts">
											<li><a href="#">
												<div><em class="fa fa-envelope"></em> 1 Tin nhắn mới
													<span class="pull-right text-muted small">3 phút trước</span></div>
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<div><em class="fa fa-heart"></em> 12 Lượt thích
													<span class="pull-right text-muted small">4 phút trước</span></div>
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<div><em class="fa fa-user"></em> 5 Lượt Followers
													<span class="pull-right text-muted small">4 phút trước</span></div>
											</a></li>
										</ul>
									</li>
								</ul>
							</div>
						</div><!-- /.container-fluid -->
					</nav>';

				require_once "../menu.php";
				require_once $VIEW_NAME;
				
			}
		?>


</body>
	<script src="<?=$CONTENT_URL?>/js/validator.js"></script>
</html>
 <script>
   let place = document.getElementById("content");
   if (place) {
   CKEDITOR.ClassicEditor.create(place, {
         toolbar: {
            items: [
               'heading', '|','findAndReplace', 'selectAll', '|',
               'bold', 'italic', 'underline', 'subscript', 'superscript', 'removeFormat', '|',
               'bulletedList', 'numberedList', '|','outdent', 'indent', '|',
               '-',
               'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
               'alignment', '|',
               'link', 'insertImage', 'insertTable', 'mediaEmbed', '|',
                'horizontalLine', '|','sourceEditing'
            ],
            shouldNotGroupWhenFull: true
         },
         // Changing the language of the interface requires loading the language file using the <script> tag.
         // language: 'es',
         list: {
            properties: {
               styles: true,
               startIndex: true,
               reversed: true
            }
         },
         // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
         heading: {
            options: [
               { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
               { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
               { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
               { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
               { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
               { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
               { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
            ]
         },
         // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
         placeholder: 'Welcome to CKEditor 5!',
         // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
         fontFamily: {
            options: [
               'default',
               'Arial, Helvetica, sans-serif',
               'Courier New, Courier, monospace',
               'Georgia, serif',
               'Lucida Sans Unicode, Lucida Grande, sans-serif',
               'Tahoma, Geneva, sans-serif',
               'Times New Roman, Times, serif',
               'Trebuchet MS, Helvetica, sans-serif',
               'Verdana, Geneva, sans-serif'
            ],
            supportAllValues: true
         },
         // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
         fontSize: {
            options: [ 10, 12, 14, 'default', 18, 20, 22 ],
            supportAllValues: true
         },
         // Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
         // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
         htmlSupport: {
            allow: [
               {
                     name: /.*/,
                     attributes: true,
                     classes: true,
                     styles: true
               }
            ]
         },
         // Be careful with enabling previews
         // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
         htmlEmbed: {
            showPreviews: true
         },
         // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
         link: {
            decorators: {
               addTargetToExternalLinks: true,
               defaultProtocol: 'https://',
               toggleDownloadable: {
                     mode: 'manual',
                     label: 'Downloadable',
                     attributes: {
                        download: 'file'
                     }
               }
            }
         },
         // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
         mention: {
            feeds: [
               {
                     marker: '@',
                     feed: [
                        '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                        '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                        '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                        '@sugar', '@sweet', '@topping', '@wafer'
                     ],
                     minimumCharacters: 1
               }
            ]
         },
         // The "super-build" contains more premium features that require additional configuration, disable them below.
         // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
         removePlugins: [
            // These two are commercial, but you can try them out without registering to a trial.
            // 'ExportPdf',
            // 'ExportWord',
            'CKBox',
            'CKFinder',
            'EasyImage',
            // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
            // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
            // Storing images as Base64 is usually a very bad idea.
            // Replace it on production website with other solutions:
            // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
            // 'Base64UploadAdapter',
            'RealTimeCollaborativeComments',
            'RealTimeCollaborativeTrackChanges',
            'RealTimeCollaborativeRevisionHistory',
            'PresenceList',
            'Comments',
            'TrackChanges',
            'TrackChangesData',
            'RevisionHistory',
            'Pagination',
            'WProofreader',
            // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
            // from a local file system (file://) - load this site via HTTP server if you enable MathType
            'MathType'
         ]
   });
}
</script>