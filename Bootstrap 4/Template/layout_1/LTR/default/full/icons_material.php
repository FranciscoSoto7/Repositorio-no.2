<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="../../../../global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="../../../../global_assets/css/icons/material/styles.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="../../../../global_assets/js/main/jquery.min.js"></script>
	<script src="../../../../global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="../../../../global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="assets/js/app.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark">
		<div class="navbar-brand">
			<a href="index.html" class="d-inline-block">
				<img src="../../../../global_assets/images/logo_light.png" alt="">
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-git-compare"></i>
						<span class="d-md-none ml-2">Git updates</span>
						<span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">9</span>
					</a>

					<div class="dropdown-menu dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Git updates</span>
							<a href="#" class="text-default"><i class="icon-sync"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-git-pull-request"></i></a>
									</div>

									<div class="media-body">
										Drop the IE <a href="#">specific hacks</a> for temporal inputs
										<div class="text-muted font-size-sm">4 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-warning text-warning rounded-round border-2 btn-icon"><i class="icon-git-commit"></i></a>
									</div>
									
									<div class="media-body">
										Add full font overrides for popovers and tooltips
										<div class="text-muted font-size-sm">36 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-info text-info rounded-round border-2 btn-icon"><i class="icon-git-branch"></i></a>
									</div>
									
									<div class="media-body">
										<a href="#">Chris Arney</a> created a new <span class="font-weight-semibold">Design</span> branch
										<div class="text-muted font-size-sm">2 hours ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon"><i class="icon-git-merge"></i></a>
									</div>
									
									<div class="media-body">
										<a href="#">Eugene Kopyov</a> merged <span class="font-weight-semibold">Master</span> and <span class="font-weight-semibold">Dev</span> branches
										<div class="text-muted font-size-sm">Dec 18, 18:36</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-git-pull-request"></i></a>
									</div>
									
									<div class="media-body">
										Have Carousel ignore keyboard events
										<div class="text-muted font-size-sm">Dec 12, 05:46</div>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="text-grey mr-auto">All updates</a>
							<div>
								<a href="#" class="text-grey" data-popup="tooltip" title="Mark all as read"><i class="icon-radio-unchecked"></i></a>
								<a href="#" class="text-grey ml-2" data-popup="tooltip" title="Bug tracker"><i class="icon-bug2"></i></a>
							</div>
						</div>
					</div>
				</li>
			</ul>

			<span class="badge bg-success ml-md-3 mr-md-auto">Online</span>

			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-people"></i>
						<span class="d-md-none ml-2">Users</span>
					</a>
					
					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-300">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Users online</span>
							<a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Jordana Ansley</a>
										<span class="d-block text-muted font-size-sm">Lead web developer</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Will Brason</a>
										<span class="d-block text-muted font-size-sm">Marketing manager</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-danger"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Hanna Walden</a>
										<span class="d-block text-muted font-size-sm">Project manager</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Dori Laperriere</a>
										<span class="d-block text-muted font-size-sm">Business developer</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-warning-300"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Vanessa Aurelius</a>
										<span class="d-block text-muted font-size-sm">UX expert</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-grey-400"></span></div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="text-grey mr-auto">All users</a>
							<a href="#" class="text-grey"><i class="icon-gear"></i></a>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-bubbles4"></i>
						<span class="d-md-none ml-2">Messages</span>
						<span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">2</span>
					</a>
					
					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Messages</span>
							<a href="#" class="text-default"><i class="icon-compose"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3 position-relative">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>

									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">James Alexander</span>
												<span class="text-muted float-right font-size-sm">04:58</span>
											</a>
										</div>

										<span class="text-muted">who knows, maybe that would be the best thing for me...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3 position-relative">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>

									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Margo Baker</span>
												<span class="text-muted float-right font-size-sm">12:16</span>
											</a>
										</div>

										<span class="text-muted">That was something he was unable to do because...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Jeremy Victorino</span>
												<span class="text-muted float-right font-size-sm">22:48</span>
											</a>
										</div>

										<span class="text-muted">But that would be extremely strained and suspicious...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Beatrix Diaz</span>
												<span class="text-muted float-right font-size-sm">Tue</span>
											</a>
										</div>

										<span class="text-muted">What a strenuous career it is that I've chosen...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Richard Vango</span>
												<span class="text-muted float-right font-size-sm">Mon</span>
											</a>
										</div>
										
										<span class="text-muted">Other travelling salesmen live a life of luxury...</span>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer justify-content-center p-0">
							<a href="#" class="bg-light text-grey w-100 py-2" data-popup="tooltip" title="Load more"><i class="icon-menu7 d-block top-0"></i></a>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown dropdown-user">
					<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
						<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
						<span>Victoria</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
						<a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
						<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-pill bg-blue ml-auto">58</span></a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
						<a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-user">
					<div class="card-body">
						<div class="media">
							<div class="mr-3">
								<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="38" height="38" class="rounded-circle" alt=""></a>
							</div>

							<div class="media-body">
								<div class="media-title font-weight-semibold">Victoria Baker</div>
								<div class="font-size-xs opacity-50">
									<i class="icon-pin font-size-sm"></i> &nbsp;Santa Ana, CA
								</div>
							</div>

							<div class="ml-3 align-self-center">
								<a href="#" class="text-white"><i class="icon-cog3"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
						<li class="nav-item">
							<a href="index.html" class="nav-link">
								<i class="icon-home4"></i>
								<span>
									Dashboard
									<span class="d-block font-weight-normal opacity-50">No active orders</span>
								</span>
							</a>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-copy"></i> <span>Layouts</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="index.html" class="nav-link active">Default layout</a></li>
								<li class="nav-item"><a href="../../../../layout_2/LTR/default/full/index.html" class="nav-link">Layout 2</a></li>
								<li class="nav-item"><a href="../../../../layout_3/LTR/default/full/index.html" class="nav-link">Layout 3</a></li>
								<li class="nav-item"><a href="../../../../layout_4/LTR/default/full/index.html" class="nav-link">Layout 4</a></li>
								<li class="nav-item"><a href="../../../../layout_5/LTR/default/full/index.html" class="nav-link">Layout 5</a></li>
								<li class="nav-item"><a href="../../../../layout_6/LTR/default/full/index.html" class="nav-link disabled">Layout 6 <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-color-sampler"></i> <span>Themes</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Themes">
								<li class="nav-item"><a href="index.html" class="nav-link active">Default</a></li>
								<li class="nav-item"><a href="../../../LTR/material/full/index.html" class="nav-link">Material</a></li>
								<li class="nav-item"><a href="../../../LTR/dark/full/index.html" class="nav-link disabled">Dark <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
								<li class="nav-item"><a href="../../../LTR/clean/full/index.html" class="nav-link disabled">Clean <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-stack"></i> <span>Starter kit</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Starter kit">
								<li class="nav-item"><a href="../seed/layout_nav_horizontal.html" class="nav-link">Horizontal navigation</a></li>
								<li class="nav-item"><a href="../seed/sidebar_none.html" class="nav-link">No sidebar</a></li>
								<li class="nav-item"><a href="../seed/sidebar_main.html" class="nav-link">1 sidebar</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">2 sidebars</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="../seed/sidebar_secondary.html" class="nav-link">Secondary sidebar</a></li>
										<li class="nav-item"><a href="../seed/sidebar_right.html" class="nav-link">Right sidebar</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">3 sidebars</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="../seed/sidebar_right_hidden.html" class="nav-link">Right sidebar hidden</a></li>
										<li class="nav-item"><a href="../seed/sidebar_right_visible.html" class="nav-link">Right sidebar visible</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Content sidebars</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="../seed/sidebar_content_left.html" class="nav-link">Left sidebar</a></li>
										<li class="nav-item"><a href="../seed/sidebar_content_right.html" class="nav-link">Right sidebar</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="../seed/layout_boxed.html" class="nav-link">Boxed layout</a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="../seed/navbar_fixed_main.html" class="nav-link">Fixed main navbar</a></li>
								<li class="nav-item"><a href="../seed/navbar_fixed_secondary.html" class="nav-link">Fixed secondary navbar</a></li>
								<li class="nav-item"><a href="../seed/navbar_fixed_both.html" class="nav-link">Both navbars fixed</a></li>
								<li class="nav-item"><a href="../seed/layout_fixed.html" class="nav-link">Fixed layout</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="changelog.html" class="nav-link">
								<i class="icon-list-unordered"></i>
								<span>Changelog</span>
								<span class="badge bg-blue-400 align-self-center ml-auto">2.2</span>
							</a>
						</li>
						<li class="nav-item"><a href="../../../RTL/default/full/index.html" class="nav-link"><i class="icon-width"></i> <span>RTL version</span></a></li>
						<!-- /main -->

						<!-- Forms -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Forms</div> <i class="icon-menu" title="Forms"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-pencil3"></i> <span>Form components</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Form components">
								<li class="nav-item"><a href="form_inputs.html" class="nav-link">Basic inputs</a></li>
								<li class="nav-item"><a href="form_checkboxes_radios.html" class="nav-link">Checkboxes &amp; radios</a></li>
								<li class="nav-item"><a href="form_select2.html" class="nav-link">Select2 selects</a></li>
								<li class="nav-item"><a href="form_multiselect.html" class="nav-link">Bootstrap multiselect</a></li>
								<li class="nav-item"><a href="form_input_groups.html" class="nav-link">Input groups</a></li>
								<li class="nav-item"><a href="form_controls_extended.html" class="nav-link">Extended controls</a></li>
								<li class="nav-item"><a href="form_floating_labels.html" class="nav-link">Floating labels</a></li>
								<li class="nav-item"><a href="form_tag_inputs.html" class="nav-link">Tag inputs</a></li>
								<li class="nav-item"><a href="form_dual_listboxes.html" class="nav-link">Dual Listboxes</a></li>
								<li class="nav-item"><a href="form_validation.html" class="nav-link">Validation</a></li>
								<li class="nav-item"><a href="form_wizard.html" class="nav-link">Form wizard</a></li>
								<li class="nav-item"><a href="form_actions.html" class="nav-link">Form actions</a></li>
								<li class="nav-item"><a href="form_inputs_grid.html" class="nav-link">Inputs grid</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-file-css"></i> <span>JSON forms</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="JSON forms">
								<li class="nav-item"><a href="alpaca_basic.html" class="nav-link">Basic inputs</a></li>
								<li class="nav-item"><a href="alpaca_advanced.html" class="nav-link">Advanced inputs</a></li>
								<li class="nav-item"><a href="alpaca_controls.html" class="nav-link">Controls</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-spell-check"></i> <span>Text editors</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Text editors">
								<li class="nav-item"><a href="editor_summernote.html" class="nav-link">Summernote editor</a></li>
								<li class="nav-item"><a href="editor_ckeditor.html" class="nav-link">CKEditor</a></li>
								<li class="nav-item"><a href="editor_trumbowyg.html" class="nav-link">Trumbowyg editor</a></li>
								<li class="nav-item"><a href="editor_code.html" class="nav-link">Code editor</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-select2"></i> <span>Pickers</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Pickers">
								<li class="nav-item"><a href="picker_date.html" class="nav-link">Date &amp; time pickers</a></li>
								<li class="nav-item"><a href="picker_color.html" class="nav-link">Color pickers</a></li>
								<li class="nav-item"><a href="picker_location.html" class="nav-link">Location pickers</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-insert-template"></i> <span>Form layouts</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Form layouts">
								<li class="nav-item"><a href="form_layout_vertical.html" class="nav-link">Vertical form</a></li>
								<li class="nav-item"><a href="form_layout_vertical_styled.html" class="nav-link disabled">Custom styles <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="form_layout_horizontal.html" class="nav-link">Horizontal form</a></li>
								<li class="nav-item"><a href="form_layout_horizontal_styled.html" class="nav-link disabled">Custom styles <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
							</ul>
						</li>
						<!-- /forms -->

						<!-- Components -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Components</div> <i class="icon-menu" title="Components"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-grid"></i> <span>Basic components</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Basic components">
								<li class="nav-item"><a href="components_modals.html" class="nav-link">Modals</a></li>
								<li class="nav-item"><a href="components_dropdowns.html" class="nav-link">Dropdown menus</a></li>
								<li class="nav-item"><a href="components_tabs.html" class="nav-link">Tabs component</a></li>
								<li class="nav-item"><a href="components_pills.html" class="nav-link">Pills component</a></li>
								<li class="nav-item"><a href="components_collapsible.html" class="nav-link">Collapsible</a></li>
								<li class="nav-item"><a href="components_navs.html" class="nav-link">Navs</a></li>
								<li class="nav-item"><a href="components_buttons.html" class="nav-link">Buttons</a></li>
								<li class="nav-item"><a href="components_popups.html" class="nav-link">Tooltips and popovers</a></li>
								<li class="nav-item"><a href="components_alerts.html" class="nav-link">Alerts</a></li>
								<li class="nav-item"><a href="components_pagination.html" class="nav-link">Pagination</a></li>
								<li class="nav-item"><a href="components_badges.html" class="nav-link">Badges</a></li>
								<li class="nav-item"><a href="components_progress.html" class="nav-link">Progress</a></li>
								<li class="nav-item"><a href="components_breadcrumbs.html" class="nav-link">Breadcrumbs</a></li>
								<li class="nav-item"><a href="components_media.html" class="nav-link">Media objects</a></li>
								<li class="nav-item"><a href="components_scrollspy.html" class="nav-link">Scrollspy</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-puzzle2"></i> <span>Content styling</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Content styling">
								<li class="nav-item"><a href="content_page_header.html" class="nav-link">Page header</a></li>
								<li class="nav-item"><a href="content_page_footer.html" class="nav-link disabled">Page footer <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="content_cards.html" class="nav-link">Cards</a></li>
								<li class="nav-item"><a href="content_cards_content.html" class="nav-link">Card content</a></li>
								<li class="nav-item"><a href="content_cards_layouts.html" class="nav-link">Card layouts</a></li>
								<li class="nav-item"><a href="content_cards_header.html" class="nav-link">Card header elements</a></li>
								<li class="nav-item"><a href="content_cards_footer.html" class="nav-link">Card footer elements</a></li>
								<li class="nav-item"><a href="content_cards_draggable.html" class="nav-link">Draggable cards</a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="content_text_styling.html" class="nav-link">Text styling</a></li>
								<li class="nav-item"><a href="content_typography.html" class="nav-link">Typography</a></li>
								<li class="nav-item"><a href="content_helpers.html" class="nav-link">Helper classes</a></li>
								<li class="nav-item"><a href="content_helpers_flex.html" class="nav-link">Flex utilities</a></li>
								<li class="nav-item"><a href="content_syntax_highlighter.html" class="nav-link">Syntax highlighter</a></li>
								<li class="nav-item"><a href="content_grid.html" class="nav-link">Grid system</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-gift"></i> <span>Extra components</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Extra components">
								<li class="nav-item"><a href="extra_pnotify.html" class="nav-link">PNotify notifications</a></li>
								<li class="nav-item"><a href="extra_jgrowl_noty.html" class="nav-link">jGrowl and Noty notifications</a></li>
								<li class="nav-item"><a href="extra_sweetalert.html" class="nav-link">SweetAlert notifications</a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="extra_sliders_noui.html" class="nav-link">NoUI sliders</a></li>
								<li class="nav-item"><a href="extra_sliders_ion.html" class="nav-link">Ion range sliders</a></li>
								<li class="nav-item"><a href="extra_trees.html" class="nav-link">Dynamic tree views</a></li>
								<li class="nav-item"><a href="extra_context_menu.html" class="nav-link">Context menu</a></li>
								<li class="nav-item"><a href="extra_fab.html" class="nav-link">Floating action buttons</a></li>
								<li class="nav-item"><a href="extra_session_timeout.html" class="nav-link">Session timeout</a></li>
								<li class="nav-item"><a href="extra_idle_timeout.html" class="nav-link">Idle timeout</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-droplet2"></i> <span>Color system</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Color system">
								<li class="nav-item"><a href="colors_primary.html" class="nav-link">Primary palette</a></li>
								<li class="nav-item"><a href="colors_danger.html" class="nav-link">Danger palette</a></li>
								<li class="nav-item"><a href="colors_success.html" class="nav-link">Success palette</a></li>
								<li class="nav-item"><a href="colors_warning.html" class="nav-link">Warning palette</a></li>
								<li class="nav-item"><a href="colors_info.html" class="nav-link">Info palette</a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="colors_pink.html" class="nav-link">Pink palette</a></li>
								<li class="nav-item"><a href="colors_violet.html" class="nav-link">Violet palette</a></li>
								<li class="nav-item"><a href="colors_purple.html" class="nav-link">Purple palette</a></li>
								<li class="nav-item"><a href="colors_indigo.html" class="nav-link">Indigo palette</a></li>
								<li class="nav-item"><a href="colors_blue.html" class="nav-link">Blue palette</a></li>
								<li class="nav-item"><a href="colors_teal.html" class="nav-link">Teal palette</a></li>
								<li class="nav-item"><a href="colors_green.html" class="nav-link">Green palette</a></li>
								<li class="nav-item"><a href="colors_orange.html" class="nav-link">Orange palette</a></li>
								<li class="nav-item"><a href="colors_brown.html" class="nav-link">Brown palette</a></li>
								<li class="nav-item"><a href="colors_grey.html" class="nav-link">Grey palette</a></li>
								<li class="nav-item"><a href="colors_slate.html" class="nav-link">Slate palette</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-spinner2 spinner"></i> <span>Animations</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Animations">
								<li class="nav-item"><a href="animations_css3.html" class="nav-link">CSS3 animations</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Velocity animations</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="animations_velocity_basic.html" class="nav-link">Basic usage</a></li>
										<li class="nav-item"><a href="animations_velocity_ui.html" class="nav-link">UI pack effects</a></li>
										<li class="nav-item"><a href="animations_velocity_examples.html" class="nav-link">Advanced examples</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu nav-item-expanded nav-item-open">
							<a href="#" class="nav-link"><i class="icon-thumbs-up2"></i> <span>Icons</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Icons">
								<li class="nav-item"><a href="icons_icomoon.html" class="nav-link">Icomoon</a></li>
								<li class="nav-item"><a href="icons_material.html" class="nav-link active">Material</a></li>
								<li class="nav-item"><a href="icons_fontawesome.html" class="nav-link">Font awesome</a></li>
							</ul>
						</li>
						<!-- /components -->

						<!-- Layout -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Layout</div> <i class="icon-menu" title="Layout options"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-stack2"></i> <span>Page layouts</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Page layouts">
								<li class="nav-item"><a href="layout_fixed_navbar.html" class="nav-link">Fixed navbar</a></li>
								<li class="nav-item"><a href="layout_fixed_sidebar_custom.html" class="nav-link">Fixed sidebar - custom scroll</a></li>
								<li class="nav-item"><a href="layout_fixed_sidebar_native.html" class="nav-link">Fixed sidebar - native scroll</a></li>
								<li class="nav-item"><a href="layout_fixed_hideable_navbar.html" class="nav-link">Hideable navbar</a></li>
								<li class="nav-item"><a href="layout_fixed_footer.html" class="nav-link">Fixed footer</a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="layout_boxed_default.html" class="nav-link">Boxed with default sidebar</a></li>
								<li class="nav-item"><a href="layout_boxed_mini.html" class="nav-link">Boxed with mini sidebar</a></li>
								<li class="nav-item"><a href="layout_boxed_full.html" class="nav-link">Boxed full width</a></li>
								<li class="nav-item"><a href="layout_boxed_content.html" class="nav-link">Boxed content</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-indent-decrease2"></i> <span>Sidebars</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Sidebars">
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Main sidebar</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="sidebar_default_collapse.html" class="nav-link">Default collapsible</a></li>
										<li class="nav-item"><a href="sidebar_default_hide.html" class="nav-link">Default hideable</a></li>
										<li class="nav-item"><a href="sidebar_default_hidden.html" class="nav-link">Default hidden</a></li>
										<li class="nav-item"><a href="sidebar_mini_collapse.html" class="nav-link">Mini collapsible</a></li>
										<li class="nav-item"><a href="sidebar_mini_hide.html" class="nav-link">Mini hideable</a></li>
										<li class="nav-item"><a href="sidebar_mini_hidden.html" class="nav-link">Mini hidden</a></li>
										<li class="nav-item-divider"></li>
										<li class="nav-item"><a href="sidebar_default_color_light.html" class="nav-link">Light color</a></li>
										<li class="nav-item"><a href="sidebar_default_color_custom.html" class="nav-link">Custom color</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Secondary sidebar</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="sidebar_secondary_after.html" class="nav-link">After default</a></li>
										<li class="nav-item"><a href="sidebar_secondary_before.html" class="nav-link">Before default</a></li>
										<li class="nav-item"><a href="sidebar_secondary_hidden.html" class="nav-link">Hidden by default</a></li>
										<li class="nav-item-divider"></li>
										<li class="nav-item"><a href="sidebar_secondary_color_dark.html" class="nav-link">Dark color</a></li>
										<li class="nav-item"><a href="sidebar_secondary_color_custom.html" class="nav-link">Custom color</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Right sidebar</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="sidebar_right_default_collapse.html" class="nav-link">Show - collapse main</a></li>
										<li class="nav-item"><a href="sidebar_right_default_hide.html" class="nav-link">Show - hide main</a></li>
										<li class="nav-item"><a href="sidebar_right_default_toggle.html" class="nav-link">Show - fix default width</a></li>
										<li class="nav-item"><a href="sidebar_right_mini_toggle.html" class="nav-link">Show - fix mini width</a></li>
										<li class="nav-item"><a href="sidebar_right_secondary_hide.html" class="nav-link">Show - hide secondary</a></li>
										<li class="nav-item"><a href="sidebar_right_visible.html" class="nav-link">Visible by default</a></li>
										<li class="nav-item-divider"></li>
										<li class="nav-item"><a href="sidebar_right_color_dark.html" class="nav-link">Dark color</a></li>
										<li class="nav-item"><a href="sidebar_right_color_custom.html" class="nav-link">Custom color</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Content sidebar</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="sidebar_content_left.html" class="nav-link">Left position</a></li>
										<li class="nav-item"><a href="sidebar_content_left_stretch.html" class="nav-link">Left stretched</a></li>
										<li class="nav-item"><a href="sidebar_content_left_hidden.html" class="nav-link">Left hidden</a></li>
										<li class="nav-item"><a href="sidebar_content_right.html" class="nav-link">Right position</a></li>
										<li class="nav-item"><a href="sidebar_content_right_stretch.html" class="nav-link">Right stretched</a></li>
										<li class="nav-item"><a href="sidebar_content_right_hidden.html" class="nav-link">Right hidden</a></li>
										<li class="nav-item"><a href="sidebar_content_sections.html" class="nav-link">Sectioned sidebar</a></li>
										<li class="nav-item-divider"></li>
										<li class="nav-item"><a href="sidebar_content_color_dark.html" class="nav-link">Dark color</a></li>
										<li class="nav-item"><a href="sidebar_content_color_custom.html" class="nav-link">Custom color</a></li>
										<li class="nav-item"><a href="sidebar_content_color_sections_custom.html" class="nav-link">Custom sections color</a></li>
									</ul>
								</li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="sidebar_components.html" class="nav-link">Sidebar components</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-menu3"></i> <span>Navbars</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Navbars">
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Single navbar</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="navbar_single_top_static.html" class="nav-link">Single top static</a></li>
										<li class="nav-item"><a href="navbar_single_top_fixed.html" class="nav-link">Single top fixed</a></li>
										<li class="nav-item"><a href="navbar_single_bottom_static.html" class="nav-link">Single bottom static</a></li>
										<li class="nav-item"><a href="navbar_single_bottom_fixed.html" class="nav-link">Single bottom fixed</a></li>
										<li class="nav-item"><a href="navbar_single_header_before.html" class="nav-link">Before page header</a></li>
										<li class="nav-item"><a href="navbar_single_header_after.html" class="nav-link">After page header</a></li>
										<li class="nav-item"><a href="navbar_single_content_after.html" class="nav-link">After page content</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Multiple navbars</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="navbar_multiple_top_static.html" class="nav-link">Multiple top static</a></li>
										<li class="nav-item"><a href="navbar_multiple_top_fixed.html" class="nav-link">Multiple top fixed</a></li>
										<li class="nav-item"><a href="navbar_multiple_bottom_static.html" class="nav-link">Multiple bottom static</a></li>
										<li class="nav-item"><a href="navbar_multiple_bottom_fixed.html" class="nav-link">Multiple bottom fixed</a></li>
										<li class="nav-item"><a href="navbar_multiple_top_bottom.html" class="nav-link">Multiple - top and bottom</a></li>
										<li class="nav-item"><a href="navbar_multiple_secondary_sticky.html" class="nav-link">Multiple - secondary sticky</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Content navbar</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="navbar_component_single.html" class="nav-link">Single navbar</a></li>
										<li class="nav-item"><a href="navbar_component_multiple.html" class="nav-link">Multiple navbars</a></li>
									</ul>
								</li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="navbar_colors.html" class="nav-link">Color options</a></li>
								<li class="nav-item"><a href="navbar_sizes.html" class="nav-link">Sizing options</a></li>
								<li class="nav-item"><a href="navbar_hideable.html" class="nav-link">Hide on scroll</a></li>
								<li class="nav-item"><a href="navbar_components.html" class="nav-link">Navbar components</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-sort"></i> <span>Vertical navigation</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Vertical navigation">
								<li class="nav-item"><a href="navigation_vertical_collapsible.html" class="nav-link">Collapsible menu</a></li>
								<li class="nav-item"><a href="navigation_vertical_accordion.html" class="nav-link">Accordion menu</a></li>
								<li class="nav-item"><a href="navigation_vertical_bordered.html" class="nav-link">Bordered navigation</a></li>
								<li class="nav-item"><a href="navigation_vertical_right_icons.html" class="nav-link">Right icons</a></li>
								<li class="nav-item"><a href="navigation_vertical_badges.html" class="nav-link">Badges</a></li>
								<li class="nav-item"><a href="navigation_vertical_disabled.html" class="nav-link">Disabled items</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-transmission"></i> <span>Horizontal navigation</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Horizontal navigation">
								<li class="nav-item"><a href="navigation_horizontal_click.html" class="nav-link">Submenu on click</a></li>
								<li class="nav-item"><a href="navigation_horizontal_hover.html" class="nav-link">Submenu on hover</a></li>
								<li class="nav-item"><a href="navigation_horizontal_elements.html" class="nav-link">With custom elements</a></li>
								<li class="nav-item"><a href="navigation_horizontal_tabs.html" class="nav-link">Tabbed navigation</a></li>
								<li class="nav-item"><a href="navigation_horizontal_disabled.html" class="nav-link">Disabled navigation links</a></li>
								<li class="nav-item"><a href="navigation_horizontal_mega.html" class="nav-link">Horizontal mega menu</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-tree5"></i> <span>Menu levels</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Menu levels">
								<li class="nav-item"><a href="#" class="nav-link"><i class="icon-IE"></i> Second level</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link"><i class="icon-firefox"></i> Second level with child</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="#" class="nav-link"><i class="icon-android"></i> Third level</a></li>
										<li class="nav-item nav-item-submenu">
											<a href="#" class="nav-link"><i class="icon-apple2"></i> Third level with child</a>
											<ul class="nav nav-group-sub">
												<li class="nav-item"><a href="#" class="nav-link"><i class="icon-html5"></i> Fourth level</a></li>
												<li class="nav-item"><a href="#" class="nav-link"><i class="icon-css3"></i> Fourth level</a></li>
											</ul>
										</li>
										<li class="nav-item"><a href="#" class="nav-link"><i class="icon-windows"></i> Third level</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="#" class="nav-link"><i class="icon-chrome"></i> Second level</a></li>
							</ul>
						</li>
						<!-- /layout -->

						<!-- Data visualization -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Data visualization</div> <i class="icon-menu" title="Data visualization"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-graph"></i> <span>Echarts library</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="ECharts library">
								<li class="nav-item"><a href="echarts_lines.html" class="nav-link">Line charts</a></li>
								<li class="nav-item"><a href="echarts_areas.html" class="nav-link">Area charts</a></li>
								<li class="nav-item"><a href="echarts_columns_waterfalls.html" class="nav-link">Columns and waterfalls</a></li>
								<li class="nav-item"><a href="echarts_bars_tornados.html" class="nav-link">Bars and tornados</a></li>
								<li class="nav-item"><a href="echarts_scatter.html" class="nav-link">Scatter charts</a></li>
								<li class="nav-item"><a href="echarts_pies_donuts.html" class="nav-link">Pies and donuts</a></li>
								<li class="nav-item"><a href="echarts_funnels_calendars.html" class="nav-link">Funnels and calendars</a></li>
								<li class="nav-item"><a href="echarts_candlesticks_others.html" class="nav-link">Candlesticks and others</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-statistics"></i> <span>D3 library</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="D3 library">
								<li class="nav-item"><a href="d3_lines_basic.html" class="nav-link">Simple lines</a></li>
								<li class="nav-item"><a href="d3_lines_advanced.html" class="nav-link">Advanced lines</a></li>
								<li class="nav-item"><a href="d3_bars_basic.html" class="nav-link">Simple bars</a></li>
								<li class="nav-item"><a href="d3_bars_advanced.html" class="nav-link">Advanced bars</a></li>
								<li class="nav-item"><a href="d3_pies.html" class="nav-link">Pie charts</a></li>
								<li class="nav-item"><a href="d3_circle_diagrams.html" class="nav-link">Circle diagrams</a></li>
								<li class="nav-item"><a href="d3_tree.html" class="nav-link">Tree layout</a></li>
								<li class="nav-item"><a href="d3_other.html" class="nav-link">Other charts</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-stats-dots"></i> <span>Dimple library</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Dimple library">
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Line charts</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="dimple_lines_horizontal.html" class="nav-link">Horizontal orientation</a></li>
										<li class="nav-item"><a href="dimple_lines_vertical.html" class="nav-link">Vertical orientation</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Bar charts</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="dimple_bars_horizontal.html" class="nav-link">Horizontal orientation</a></li>
										<li class="nav-item"><a href="dimple_bars_vertical.html" class="nav-link">Vertical orientation</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Area charts</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="dimple_area_horizontal.html" class="nav-link">Horizontal orientation</a></li>
										<li class="nav-item"><a href="dimple_area_vertical.html" class="nav-link">Vertical orientation</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Step charts</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="dimple_step_horizontal.html" class="nav-link">Horizontal orientation</a></li>
										<li class="nav-item"><a href="dimple_step_vertical.html" class="nav-link">Vertical orientation</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="dimple_pies.html" class="nav-link">Pie charts</a></li>
								<li class="nav-item"><a href="dimple_rings.html" class="nav-link">Ring charts</a></li>
								<li class="nav-item"><a href="dimple_scatter.html" class="nav-link">Scatter charts</a></li>
								<li class="nav-item"><a href="dimple_bubble.html" class="nav-link">Bubble charts</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-stats-bars"></i> <span>C3 library</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="C3 library">
								<li class="nav-item"><a href="c3_lines_areas.html" class="nav-link">Lines and areas</a></li>
								<li class="nav-item"><a href="c3_bars_pies.html" class="nav-link">Bars and pies</a></li>
								<li class="nav-item"><a href="c3_advanced.html" class="nav-link">Advanced examples</a></li>
								<li class="nav-item"><a href="c3_axis.html" class="nav-link">Chart axis</a></li>
								<li class="nav-item"><a href="c3_grid.html" class="nav-link">Grid options</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-google"></i> <span>Google charts</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Google charts">
								<li class="nav-item"><a href="google_lines.html" class="nav-link">Line charts</a></li>
								<li class="nav-item"><a href="google_bars.html" class="nav-link">Bar charts</a></li>
								<li class="nav-item"><a href="google_pies.html" class="nav-link">Pie charts</a></li>
								<li class="nav-item"><a href="google_scatter_bubble.html" class="nav-link">Bubble &amp; scatter charts</a></li>
								<li class="nav-item"><a href="google_other.html" class="nav-link">Other charts</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-map5"></i> <span>Maps integration</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Maps integration">
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Google maps</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="maps_google_basic.html" class="nav-link">Basics</a></li>
										<li class="nav-item"><a href="maps_google_controls.html" class="nav-link">Controls</a></li>
										<li class="nav-item"><a href="maps_google_markers.html" class="nav-link">Markers</a></li>
										<li class="nav-item"><a href="maps_google_drawings.html" class="nav-link">Map drawings</a></li>
										<li class="nav-item"><a href="maps_google_layers.html" class="nav-link ">Layers</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="maps_vector.html" class="nav-link">Vector maps</a></li>
								<li class="nav-item"><a href="maps_echarts.html" class="nav-link disabled">ECharts maps <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
							</ul>
						</li>
						<!-- /data visualization -->

						<!-- Extensions -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Extensions</div> <i class="icon-menu" title="Extensions"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-puzzle4"></i> <span>Extensions</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Extensions">
								<li class="nav-item"><a href="extension_image_cropper.html" class="nav-link">Image cropper</a></li>
								<li class="nav-item"><a href="extension_blockui.html" class="nav-link">Block UI</a></li>
								<li class="nav-item"><a href="extension_dnd.html" class="nav-link">Drag and drop</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-popout"></i> <span>JQuery UI</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="jQuery UI">
								<li class="nav-item"><a href="jqueryui_interactions.html" class="nav-link">Interactions</a></li>
								<li class="nav-item"><a href="jqueryui_forms.html" class="nav-link">Forms</a></li>
								<li class="nav-item"><a href="jqueryui_components.html" class="nav-link">Components</a></li>
								<li class="nav-item"><a href="jqueryui_sliders.html" class="nav-link">Sliders</a></li>
								<li class="nav-item"><a href="jqueryui_navigation.html" class="nav-link">Navigation</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-upload"></i> <span>File uploaders</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="File uploaders">
								<li class="nav-item"><a href="uploader_plupload.html" class="nav-link">Plupload</a></li>
								<li class="nav-item"><a href="uploader_bootstrap.html" class="nav-link">Bootstrap file uploader</a></li>
								<li class="nav-item"><a href="uploader_dropzone.html" class="nav-link">Dropzone</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-calendar3"></i> <span>Event calendars</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Event calendars">
								<li class="nav-item"><a href="fullcalendar_views.html" class="nav-link">Basic views</a></li>
								<li class="nav-item"><a href="fullcalendar_styling.html" class="nav-link">Event styling</a></li>
								<li class="nav-item"><a href="fullcalendar_formats.html" class="nav-link">Language and time</a></li>
								<li class="nav-item"><a href="fullcalendar_advanced.html" class="nav-link">Advanced usage</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-sphere"></i> <span>Internationalization</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Internationalization">
								<li class="nav-item"><a href="internationalization_switch_direct.html" class="nav-link">Direct translation</a></li>
								<li class="nav-item"><a href="internationalization_switch_query.html" class="nav-link">Querystring parameter</a></li>
								<li class="nav-item"><a href="internationalization_fallback.html" class="nav-link">Language fallback</a></li>
								<li class="nav-item"><a href="internationalization_callbacks.html" class="nav-link">Callbacks</a></li>
							</ul>
						</li>
						<!-- /extensions -->

						<!-- Tables -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Tables</div> <i class="icon-menu" title="Tables"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-table2"></i> <span>Basic tables</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Basic tables">
								<li class="nav-item"><a href="table_basic.html" class="nav-link">Basic examples</a></li>
								<li class="nav-item"><a href="table_sizing.html" class="nav-link">Table sizing</a></li>
								<li class="nav-item"><a href="table_borders.html" class="nav-link">Table borders</a></li>
								<li class="nav-item"><a href="table_styling.html" class="nav-link">Table styling</a></li>
								<li class="nav-item"><a href="table_elements.html" class="nav-link">Table elements</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-grid7"></i> <span>Data tables</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Data tables">
								<li class="nav-item"><a href="datatable_basic.html" class="nav-link">Basic initialization</a></li>
								<li class="nav-item"><a href="datatable_styling.html" class="nav-link">Basic styling</a></li>
								<li class="nav-item"><a href="datatable_advanced.html" class="nav-link">Advanced examples</a></li>
								<li class="nav-item"><a href="datatable_sorting.html" class="nav-link">Sorting options</a></li>
								<li class="nav-item"><a href="datatable_api.html" class="nav-link">Using API</a></li>
								<li class="nav-item"><a href="datatable_data_sources.html" class="nav-link">Data sources</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-alignment-unalign"></i> <span>Data tables extensions</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Data tables extensions">
								<li class="nav-item"><a href="datatable_extension_reorder.html" class="nav-link">Columns reorder</a></li>
								<li class="nav-item"><a href="datatable_extension_row_reorder.html" class="nav-link">Row reorder</a></li>
								<li class="nav-item"><a href="datatable_extension_fixed_columns.html" class="nav-link">Fixed columns</a></li>
								<li class="nav-item"><a href="datatable_extension_fixed_header.html" class="nav-link">Fixed header</a></li>
								<li class="nav-item"><a href="datatable_extension_autofill.html" class="nav-link">Auto fill</a></li>
								<li class="nav-item"><a href="datatable_extension_key_table.html" class="nav-link">Key table</a></li>
								<li class="nav-item"><a href="datatable_extension_scroller.html" class="nav-link">Scroller</a></li>
								<li class="nav-item"><a href="datatable_extension_select.html" class="nav-link">Select</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Buttons</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="datatable_extension_buttons_init.html" class="nav-link">Initialization</a></li>
										<li class="nav-item"><a href="datatable_extension_buttons_flash.html" class="nav-link">Flash buttons</a></li>
										<li class="nav-item"><a href="datatable_extension_buttons_print.html" class="nav-link">Print buttons</a></li>
										<li class="nav-item"><a href="datatable_extension_buttons_html5.html" class="nav-link">HTML5 buttons</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="datatable_extension_colvis.html" class="nav-link">Columns visibility</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-file-spreadsheet"></i> <span>Handsontable</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Handsontable">
								<li class="nav-item"><a href="handsontable_basic.html" class="nav-link">Basic configuration</a></li>
								<li class="nav-item"><a href="handsontable_advanced.html" class="nav-link">Advanced setup</a></li>
								<li class="nav-item"><a href="handsontable_cols.html" class="nav-link">Column features</a></li>
								<li class="nav-item"><a href="handsontable_cells.html" class="nav-link">Cell features</a></li>
								<li class="nav-item"><a href="handsontable_types.html" class="nav-link">Basic cell types</a></li>
								<li class="nav-item"><a href="handsontable_custom_checks.html" class="nav-link">Custom &amp; checkboxes</a></li>
								<li class="nav-item"><a href="handsontable_ac_password.html" class="nav-link">Autocomplete &amp; password</a></li>
								<li class="nav-item"><a href="handsontable_search.html" class="nav-link">Search</a></li>
								<li class="nav-item"><a href="handsontable_context.html" class="nav-link">Context menu</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-versions"></i> <span>Responsive tables</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Responsive tables">
								<li class="nav-item"><a href="table_responsive.html" class="nav-link">Responsive basic tables</a></li>
								<li class="nav-item"><a href="datatable_responsive.html" class="nav-link">Responsive data tables</a></li>
							</ul>
						</li>
						<!-- /tables -->

						<!-- Page kits -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Page kits</div> <i class="icon-menu" title="Page kits"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-grid6"></i> <span>General pages</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="General pages">
								<li class="nav-item"><a href="general_feed.html" class="nav-link">Feed</a></li>
								<li class="nav-item"><a href="general_embeds.html" class="nav-link">Embeds</a></li>
								<li class="nav-item"><a href="general_faq.html" class="nav-link">FAQ page</a></li>
								<li class="nav-item"><a href="general_knowledgebase.html" class="nav-link">Knowledgebase</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Blog</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="blog_classic_v.html" class="nav-link">Classic vertical</a></li>
										<li class="nav-item"><a href="blog_classic_h.html" class="nav-link">Classic horizontal</a></li>
										<li class="nav-item"><a href="blog_grid.html" class="nav-link">Grid</a></li>
										<li class="nav-item"><a href="blog_single.html" class="nav-link">Single post</a></li>
										<li class="nav-item-divider"></li>
										<li class="nav-item"><a href="blog_sidebar_left.html" class="nav-link">Left sidebar</a></li>
										<li class="nav-item"><a href="blog_sidebar_right.html" class="nav-link">Right sidebar</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Timelines</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="timelines_left.html" class="nav-link">Left timeline</a></li>
										<li class="nav-item"><a href="timelines_right.html" class="nav-link">Right timeline</a></li>
										<li class="nav-item"><a href="timelines_center.html" class="nav-link">Centered timeline</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Gallery</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="gallery_grid.html" class="nav-link">Media grid</a></li>
										<li class="nav-item"><a href="gallery_titles.html" class="nav-link">Media with titles</a></li>
										<li class="nav-item"><a href="gallery_description.html" class="nav-link">Media with description</a></li>
										<li class="nav-item"><a href="gallery_library.html" class="nav-link">Media library</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-wrench3"></i> <span>Service pages</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Service pages">
								<li class="nav-item"><a href="service_sitemap.html" class="nav-link">Sitemap</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Invoicing</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="invoice_template.html" class="nav-link">Invoice template</a></li>
										<li class="nav-item"><a href="invoice_grid.html" class="nav-link">Invoice grid</a></li>
										<li class="nav-item"><a href="invoice_archive.html" class="nav-link">Invoice archive</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Authentication</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="login_simple.html" class="nav-link">Simple login</a></li>
										<li class="nav-item"><a href="login_advanced.html" class="nav-link">More login info</a></li>
										<li class="nav-item"><a href="login_registration.html" class="nav-link">Simple registration</a></li>
										<li class="nav-item"><a href="login_registration_advanced.html" class="nav-link">More registration info</a></li>
										<li class="nav-item"><a href="login_unlock.html" class="nav-link">Unlock user</a></li>
										<li class="nav-item"><a href="login_password_recover.html" class="nav-link">Reset password</a></li>
										<li class="nav-item"><a href="login_hide_navbar.html" class="nav-link">Hide navbar</a></li>
										<li class="nav-item"><a href="login_transparent.html" class="nav-link">Transparent box</a></li>
										<li class="nav-item"><a href="login_background.html" class="nav-link">Background option</a></li>
										<li class="nav-item"><a href="login_validation.html" class="nav-link">With validation</a></li>
										<li class="nav-item"><a href="login_tabbed.html" class="nav-link">Tabbed form</a></li>
										<li class="nav-item"><a href="login_modals.html" class="nav-link">Inside modals</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Error pages</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="error_403.html" class="nav-link">Error 403</a></li>
										<li class="nav-item"><a href="error_404.html" class="nav-link">Error 404</a></li>
										<li class="nav-item"><a href="error_405.html" class="nav-link">Error 405</a></li>
										<li class="nav-item"><a href="error_500.html" class="nav-link">Error 500</a></li>
										<li class="nav-item"><a href="error_503.html" class="nav-link">Error 503</a></li>
										<li class="nav-item"><a href="error_offline.html" class="nav-link">Offline page</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-people"></i> <span>User pages</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="User pages">
								<li class="nav-item"><a href="user_pages_list.html" class="nav-link">User list</a></li>
								<li class="nav-item"><a href="user_pages_cards.html" class="nav-link">User cards</a></li>
								<li class="nav-item"><a href="user_pages_profile.html" class="nav-link">Simple profile</a></li>
								<li class="nav-item"><a href="user_pages_profile_tabbed.html" class="nav-link">Tabbed profile</a></li>
								<li class="nav-item"><a href="user_pages_profile_cover.html" class="nav-link">Profile with cover</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-cube3"></i> <span>Application pages</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Application pages">
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Task manager</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="task_manager_grid.html" class="nav-link">Task grid</a></li>
										<li class="nav-item"><a href="task_manager_list.html" class="nav-link">Task list</a></li>
										<li class="nav-item"><a href="task_manager_detailed.html" class="nav-link">Task detailed</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Inbox</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="mail_list.html" class="nav-link">Mail list</a></li>
										<li class="nav-item"><a href="mail_list_detached.html" class="nav-link">Mail list (detached)</a></li>
										<li class="nav-item"><a href="mail_read.html" class="nav-link">Read mail</a></li>
										<li class="nav-item"><a href="mail_write.html" class="nav-link">Write mail</a></li>
										<li class="nav-item-divider"></li>
										<li class="nav-item"><a href="chat_layouts.html" class="nav-link">Chat layouts</a></li>
										<li class="nav-item"><a href="chat_options.html" class="nav-link">Chat options</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Search</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="search_basic.html" class="nav-link">Basic search results</a></li>
										<li class="nav-item"><a href="search_users.html" class="nav-link">User search results</a></li>
										<li class="nav-item"><a href="search_images.html" class="nav-link">Image search results</a></li>
										<li class="nav-item"><a href="search_videos.html" class="nav-link">Video search results</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Job search</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="job_list_cards.html" class="nav-link">Cards view</a></li>
										<li class="nav-item"><a href="job_list_list.html" class="nav-link">List view</a></li>
										<li class="nav-item"><a href="job_detailed.html" class="nav-link">Job detailed</a></li>
										<li class="nav-item"><a href="job_apply.html" class="nav-link">Apply</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Learning</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="learning_list.html" class="nav-link">List view</a></li>
										<li class="nav-item"><a href="learning_grid.html" class="nav-link">Grid view</a></li>
										<li class="nav-item"><a href="learning_detailed.html" class="nav-link">Detailed course</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Ecommerce set</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="ecommerce_product_list.html" class="nav-link">Product list</a></li>
										<li class="nav-item"><a href="ecommerce_product_grid.html" class="nav-link">Product grid</a></li>
										<li class="nav-item"><a href="ecommerce_orders_history.html" class="nav-link">Orders history</a></li>
										<li class="nav-item"><a href="ecommerce_customers.html" class="nav-link">Customers</a></li>
										<li class="nav-item"><a href="ecommerce_pricing.html" class="nav-link">Pricing tables</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-atom2"></i> <span>Widgets</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Widgets">
								<li class="nav-item"><a href="widgets_content.html" class="nav-link">Content widgets</a></li>
								<li class="nav-item"><a href="widgets_stats.html" class="nav-link">Statistics widgets</a></li>
								<li class="nav-item"><a href="widgets_menu.html" class="nav-link disabled">Menu widgets <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
								<li class="nav-item"><a href="widgets_form.html" class="nav-link disabled">Form widgets <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
							</ul>
						</li>
						<!-- /page kits -->

					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Icons</span> - Material Set</h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="d-flex justify-content-center">
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
						</div>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<a href="icons_material.html" class="breadcrumb-item">Icons</a>
							<span class="breadcrumb-item active">Material set</span>
						</div>

						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="breadcrumb justify-content-center">
							<a href="#" class="breadcrumb-elements-item">
								<i class="icon-comment-discussion mr-2"></i>
								Support
							</a>

							<div class="breadcrumb-elements-item dropdown p-0">
								<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear mr-2"></i>
									Settings
								</a>

								<div class="dropdown-menu dropdown-menu-right">
									<a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
									<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
									<a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">

				<!-- Material icon set -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Material icon set</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-4">Material design system icons are simple, modern, friendly, and sometimes quirky. Each icon is created using our design guidelines to depict in simple and minimal forms the universal concepts used commonly throughout a UI. Ensuring readability and clarity at both large and small sizes, these icons have been optimized for beautiful display on all common platforms and display resolutions</p>


						<div class="row no-gutters glyphs">
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-3d-rotation mr-3 mi-2x"></i>
									<div>mi-3d-rotation <div class="opacity-50">e900</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-ac-unit mr-3 mi-2x"></i>
									<div>mi-ac-unit <div class="opacity-50">e901</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-alarm mr-3 mi-2x"></i>
									<div>mi-alarm <div class="opacity-50">e902</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-access-alarms mr-3 mi-2x"></i>
									<div>mi-access-alarms <div class="opacity-50">e903</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-schedule mr-3 mi-2x"></i>
									<div>mi-schedule <div class="opacity-50">e904</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-accessibility mr-3 mi-2x"></i>
									<div>mi-accessibility <div class="opacity-50">e905</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-accessible mr-3 mi-2x"></i>
									<div>mi-accessible <div class="opacity-50">e906</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-account-balance mr-3 mi-2x"></i>
									<div>mi-account-balance <div class="opacity-50">e907</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-account-balance-wallet mr-3 mi-2x"></i>
									<div>mi-account-balance-wallet <div class="opacity-50">e908</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-account-box mr-3 mi-2x"></i>
									<div>mi-account-box <div class="opacity-50">e909</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-account-circle mr-3 mi-2x"></i>
									<div>mi-account-circle <div class="opacity-50">e90a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-adb mr-3 mi-2x"></i>
									<div>mi-adb <div class="opacity-50">e90b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-add mr-3 mi-2x"></i>
									<div>mi-add <div class="opacity-50">e90c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-add-a-photo mr-3 mi-2x"></i>
									<div>mi-add-a-photo <div class="opacity-50">e90d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-alarm-add mr-3 mi-2x"></i>
									<div>mi-alarm-add <div class="opacity-50">e90e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-add-alert mr-3 mi-2x"></i>
									<div>mi-add-alert <div class="opacity-50">e90f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-add-box mr-3 mi-2x"></i>
									<div>mi-add-box <div class="opacity-50">e910</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-add-circle mr-3 mi-2x"></i>
									<div>mi-add-circle <div class="opacity-50">e911</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-control-point mr-3 mi-2x"></i>
									<div>mi-control-point <div class="opacity-50">e912</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-add-location mr-3 mi-2x"></i>
									<div>mi-add-location <div class="opacity-50">e913</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-add-shopping-cart mr-3 mi-2x"></i>
									<div>mi-add-shopping-cart <div class="opacity-50">e914</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-queue mr-3 mi-2x"></i>
									<div>mi-queue <div class="opacity-50">e915</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-add-to-queue mr-3 mi-2x"></i>
									<div>mi-add-to-queue <div class="opacity-50">e916</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-adjust mr-3 mi-2x"></i>
									<div>mi-adjust <div class="opacity-50">e917</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-airline-seat-flat mr-3 mi-2x"></i>
									<div>mi-airline-seat-flat <div class="opacity-50">e918</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-airline-seat-flat-angled mr-3 mi-2x"></i>
									<div>mi-airline-seat-flat-angled <div class="opacity-50">e919</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-airline-seat-individual-suite mr-3 mi-2x"></i>
									<div>mi-airline-seat-individual-suite <div class="opacity-50">e91a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-airline-seat-legroom-extra mr-3 mi-2x"></i>
									<div>mi-airline-seat-legroom-extra <div class="opacity-50">e91b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-airline-seat-legroom-normal mr-3 mi-2x"></i>
									<div>mi-airline-seat-legroom-normal <div class="opacity-50">e91c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-airline-seat-legroom-reduced mr-3 mi-2x"></i>
									<div>mi-airline-seat-legroom-reduced <div class="opacity-50">e91d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-airline-seat-recline-extra mr-3 mi-2x"></i>
									<div>mi-airline-seat-recline-extra <div class="opacity-50">e91e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-airline-seat-recline-normal mr-3 mi-2x"></i>
									<div>mi-airline-seat-recline-normal <div class="opacity-50">e91f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-flight mr-3 mi-2x"></i>
									<div>mi-flight <div class="opacity-50">e920</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-airplanemode-inactive mr-3 mi-2x"></i>
									<div>mi-airplanemode-inactive <div class="opacity-50">e921</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-airplay mr-3 mi-2x"></i>
									<div>mi-airplay <div class="opacity-50">e922</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-airport-shuttle mr-3 mi-2x"></i>
									<div>mi-airport-shuttle <div class="opacity-50">e923</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-alarm-off mr-3 mi-2x"></i>
									<div>mi-alarm-off <div class="opacity-50">e924</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-alarm-on mr-3 mi-2x"></i>
									<div>mi-alarm-on <div class="opacity-50">e925</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-album mr-3 mi-2x"></i>
									<div>mi-album <div class="opacity-50">e926</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-all-inclusive mr-3 mi-2x"></i>
									<div>mi-all-inclusive <div class="opacity-50">e927</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-all-out mr-3 mi-2x"></i>
									<div>mi-all-out <div class="opacity-50">e928</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-android mr-3 mi-2x"></i>
									<div>mi-android <div class="opacity-50">e929</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-announcement mr-3 mi-2x"></i>
									<div>mi-announcement <div class="opacity-50">e92a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-apps mr-3 mi-2x"></i>
									<div>mi-apps <div class="opacity-50">e92b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-archive mr-3 mi-2x"></i>
									<div>mi-archive <div class="opacity-50">e92c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-arrow-back mr-3 mi-2x"></i>
									<div>mi-arrow-back <div class="opacity-50">e92d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-arrow-downward mr-3 mi-2x"></i>
									<div>mi-arrow-downward <div class="opacity-50">e92e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-arrow-drop-down mr-3 mi-2x"></i>
									<div>mi-arrow-drop-down <div class="opacity-50">e92f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-arrow-drop-down-circle mr-3 mi-2x"></i>
									<div>mi-arrow-drop-down-circle <div class="opacity-50">e930</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-arrow-drop-up mr-3 mi-2x"></i>
									<div>mi-arrow-drop-up <div class="opacity-50">e931</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-arrow-forward mr-3 mi-2x"></i>
									<div>mi-arrow-forward <div class="opacity-50">e932</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-arrow-upward mr-3 mi-2x"></i>
									<div>mi-arrow-upward <div class="opacity-50">e933</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-art-track mr-3 mi-2x"></i>
									<div>mi-art-track <div class="opacity-50">e934</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-aspect-ratio mr-3 mi-2x"></i>
									<div>mi-aspect-ratio <div class="opacity-50">e935</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-poll mr-3 mi-2x"></i>
									<div>mi-poll <div class="opacity-50">e936</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-assignment mr-3 mi-2x"></i>
									<div>mi-assignment <div class="opacity-50">e937</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-assignment-ind mr-3 mi-2x"></i>
									<div>mi-assignment-ind <div class="opacity-50">e938</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-assignment-late mr-3 mi-2x"></i>
									<div>mi-assignment-late <div class="opacity-50">e939</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-assignment-return mr-3 mi-2x"></i>
									<div>mi-assignment-return <div class="opacity-50">e93a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-assignment-returned mr-3 mi-2x"></i>
									<div>mi-assignment-returned <div class="opacity-50">e93b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-assignment-turned-in mr-3 mi-2x"></i>
									<div>mi-assignment-turned-in <div class="opacity-50">e93c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-assistant mr-3 mi-2x"></i>
									<div>mi-assistant <div class="opacity-50">e93d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-flag mr-3 mi-2x"></i>
									<div>mi-flag <div class="opacity-50">e93e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-attach-file mr-3 mi-2x"></i>
									<div>mi-attach-file <div class="opacity-50">e93f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-attach-money mr-3 mi-2x"></i>
									<div>mi-attach-money <div class="opacity-50">e940</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-attachment mr-3 mi-2x"></i>
									<div>mi-attachment <div class="opacity-50">e941</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-audiotrack mr-3 mi-2x"></i>
									<div>mi-audiotrack <div class="opacity-50">e942</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-autorenew mr-3 mi-2x"></i>
									<div>mi-autorenew <div class="opacity-50">e943</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-av-timer mr-3 mi-2x"></i>
									<div>mi-av-timer <div class="opacity-50">e944</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-backspace mr-3 mi-2x"></i>
									<div>mi-backspace <div class="opacity-50">e945</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-cloud-upload mr-3 mi-2x"></i>
									<div>mi-cloud-upload <div class="opacity-50">e946</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-battery-alert mr-3 mi-2x"></i>
									<div>mi-battery-alert <div class="opacity-50">e947</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-battery-charging-full mr-3 mi-2x"></i>
									<div>mi-battery-charging-full <div class="opacity-50">e948</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-battery-std mr-3 mi-2x"></i>
									<div>mi-battery-std <div class="opacity-50">e949</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-battery-unknown mr-3 mi-2x"></i>
									<div>mi-battery-unknown <div class="opacity-50">e94a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-beach-access mr-3 mi-2x"></i>
									<div>mi-beach-access <div class="opacity-50">e94b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-beenhere mr-3 mi-2x"></i>
									<div>mi-beenhere <div class="opacity-50">e94c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-block mr-3 mi-2x"></i>
									<div>mi-block <div class="opacity-50">e94d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-bluetooth mr-3 mi-2x"></i>
									<div>mi-bluetooth <div class="opacity-50">e94e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-bluetooth-searching mr-3 mi-2x"></i>
									<div>mi-bluetooth-searching <div class="opacity-50">e94f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-bluetooth-connected mr-3 mi-2x"></i>
									<div>mi-bluetooth-connected <div class="opacity-50">e950</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-bluetooth-disabled mr-3 mi-2x"></i>
									<div>mi-bluetooth-disabled <div class="opacity-50">e951</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-blur-circular mr-3 mi-2x"></i>
									<div>mi-blur-circular <div class="opacity-50">e952</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-blur-linear mr-3 mi-2x"></i>
									<div>mi-blur-linear <div class="opacity-50">e953</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-blur-off mr-3 mi-2x"></i>
									<div>mi-blur-off <div class="opacity-50">e954</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-blur-on mr-3 mi-2x"></i>
									<div>mi-blur-on <div class="opacity-50">e955</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-class mr-3 mi-2x"></i>
									<div>mi-class <div class="opacity-50">e956</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-turned-in mr-3 mi-2x"></i>
									<div>mi-turned-in <div class="opacity-50">e957</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-turned-in-not mr-3 mi-2x"></i>
									<div>mi-turned-in-not <div class="opacity-50">e958</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-border-all mr-3 mi-2x"></i>
									<div>mi-border-all <div class="opacity-50">e959</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-border-bottom mr-3 mi-2x"></i>
									<div>mi-border-bottom <div class="opacity-50">e95a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-border-clear mr-3 mi-2x"></i>
									<div>mi-border-clear <div class="opacity-50">e95b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-border-color mr-3 mi-2x"></i>
									<div>mi-border-color <div class="opacity-50">e95c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-border-horizontal mr-3 mi-2x"></i>
									<div>mi-border-horizontal <div class="opacity-50">e95d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-border-inner mr-3 mi-2x"></i>
									<div>mi-border-inner <div class="opacity-50">e95e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-border-left mr-3 mi-2x"></i>
									<div>mi-border-left <div class="opacity-50">e95f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-border-outer mr-3 mi-2x"></i>
									<div>mi-border-outer <div class="opacity-50">e960</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-border-right mr-3 mi-2x"></i>
									<div>mi-border-right <div class="opacity-50">e961</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-border-style mr-3 mi-2x"></i>
									<div>mi-border-style <div class="opacity-50">e962</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-border-top mr-3 mi-2x"></i>
									<div>mi-border-top <div class="opacity-50">e963</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-border-vertical mr-3 mi-2x"></i>
									<div>mi-border-vertical <div class="opacity-50">e964</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-branding-watermark mr-3 mi-2x"></i>
									<div>mi-branding-watermark <div class="opacity-50">e965</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-brightness-1 mr-3 mi-2x"></i>
									<div>mi-brightness-1 <div class="opacity-50">e966</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-brightness-2 mr-3 mi-2x"></i>
									<div>mi-brightness-2 <div class="opacity-50">e967</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-brightness-3 mr-3 mi-2x"></i>
									<div>mi-brightness-3 <div class="opacity-50">e968</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-brightness-4 mr-3 mi-2x"></i>
									<div>mi-brightness-4 <div class="opacity-50">e969</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-brightness-low mr-3 mi-2x"></i>
									<div>mi-brightness-low <div class="opacity-50">e96a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-brightness-medium mr-3 mi-2x"></i>
									<div>mi-brightness-medium <div class="opacity-50">e96b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-brightness-high mr-3 mi-2x"></i>
									<div>mi-brightness-high <div class="opacity-50">e96c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-brightness-auto mr-3 mi-2x"></i>
									<div>mi-brightness-auto <div class="opacity-50">e96d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-broken-image mr-3 mi-2x"></i>
									<div>mi-broken-image <div class="opacity-50">e96e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-brush mr-3 mi-2x"></i>
									<div>mi-brush <div class="opacity-50">e96f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-bubble-chart mr-3 mi-2x"></i>
									<div>mi-bubble-chart <div class="opacity-50">e970</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-bug-report mr-3 mi-2x"></i>
									<div>mi-bug-report <div class="opacity-50">e971</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-build mr-3 mi-2x"></i>
									<div>mi-build <div class="opacity-50">e972</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-burst-mode mr-3 mi-2x"></i>
									<div>mi-burst-mode <div class="opacity-50">e973</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-domain mr-3 mi-2x"></i>
									<div>mi-domain <div class="opacity-50">e974</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-business-center mr-3 mi-2x"></i>
									<div>mi-business-center <div class="opacity-50">e975</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-cached mr-3 mi-2x"></i>
									<div>mi-cached <div class="opacity-50">e976</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-cake mr-3 mi-2x"></i>
									<div>mi-cake <div class="opacity-50">e977</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-phone mr-3 mi-2x"></i>
									<div>mi-phone <div class="opacity-50">e978</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-call-end mr-3 mi-2x"></i>
									<div>mi-call-end <div class="opacity-50">e979</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-call-made mr-3 mi-2x"></i>
									<div>mi-call-made <div class="opacity-50">e97a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-merge-type mr-3 mi-2x"></i>
									<div>mi-merge-type <div class="opacity-50">e97b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-call-missed mr-3 mi-2x"></i>
									<div>mi-call-missed <div class="opacity-50">e97c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-call-missed-outgoing mr-3 mi-2x"></i>
									<div>mi-call-missed-outgoing <div class="opacity-50">e97d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-call-received mr-3 mi-2x"></i>
									<div>mi-call-received <div class="opacity-50">e97e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-call-split mr-3 mi-2x"></i>
									<div>mi-call-split <div class="opacity-50">e97f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-call-to-action mr-3 mi-2x"></i>
									<div>mi-call-to-action <div class="opacity-50">e980</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-camera mr-3 mi-2x"></i>
									<div>mi-camera <div class="opacity-50">e981</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-photo-camera mr-3 mi-2x"></i>
									<div>mi-photo-camera <div class="opacity-50">e982</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-camera-enhance mr-3 mi-2x"></i>
									<div>mi-camera-enhance <div class="opacity-50">e983</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-camera-front mr-3 mi-2x"></i>
									<div>mi-camera-front <div class="opacity-50">e984</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-camera-rear mr-3 mi-2x"></i>
									<div>mi-camera-rear <div class="opacity-50">e985</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-camera-roll mr-3 mi-2x"></i>
									<div>mi-camera-roll <div class="opacity-50">e986</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-cancel mr-3 mi-2x"></i>
									<div>mi-cancel <div class="opacity-50">e987</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-redeem mr-3 mi-2x"></i>
									<div>mi-redeem <div class="opacity-50">e988</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-card-membership mr-3 mi-2x"></i>
									<div>mi-card-membership <div class="opacity-50">e989</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-card-travel mr-3 mi-2x"></i>
									<div>mi-card-travel <div class="opacity-50">e98a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-casino mr-3 mi-2x"></i>
									<div>mi-casino <div class="opacity-50">e98b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-cast mr-3 mi-2x"></i>
									<div>mi-cast <div class="opacity-50">e98c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-cast-connected mr-3 mi-2x"></i>
									<div>mi-cast-connected <div class="opacity-50">e98d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-center-focus-strong mr-3 mi-2x"></i>
									<div>mi-center-focus-strong <div class="opacity-50">e98e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-center-focus-weak mr-3 mi-2x"></i>
									<div>mi-center-focus-weak <div class="opacity-50">e98f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-change-history mr-3 mi-2x"></i>
									<div>mi-change-history <div class="opacity-50">e990</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-chat mr-3 mi-2x"></i>
									<div>mi-chat <div class="opacity-50">e991</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-chat-bubble mr-3 mi-2x"></i>
									<div>mi-chat-bubble <div class="opacity-50">e992</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-chat-bubble-outline mr-3 mi-2x"></i>
									<div>mi-chat-bubble-outline <div class="opacity-50">e993</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-check mr-3 mi-2x"></i>
									<div>mi-check <div class="opacity-50">e994</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-check-box mr-3 mi-2x"></i>
									<div>mi-check-box <div class="opacity-50">e995</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-check-box-outline-blank mr-3 mi-2x"></i>
									<div>mi-check-box-outline-blank <div class="opacity-50">e996</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-check-circle mr-3 mi-2x"></i>
									<div>mi-check-circle <div class="opacity-50">e997</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-navigate-before mr-3 mi-2x"></i>
									<div>mi-navigate-before <div class="opacity-50">e998</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-navigate-next mr-3 mi-2x"></i>
									<div>mi-navigate-next <div class="opacity-50">e999</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-child-care mr-3 mi-2x"></i>
									<div>mi-child-care <div class="opacity-50">e99a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-child-friendly mr-3 mi-2x"></i>
									<div>mi-child-friendly <div class="opacity-50">e99b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-chrome-reader-mode mr-3 mi-2x"></i>
									<div>mi-chrome-reader-mode <div class="opacity-50">e99c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-close mr-3 mi-2x"></i>
									<div>mi-close <div class="opacity-50">e99d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-clear-all mr-3 mi-2x"></i>
									<div>mi-clear-all <div class="opacity-50">e99e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-closed-caption mr-3 mi-2x"></i>
									<div>mi-closed-caption <div class="opacity-50">e99f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-wb-cloudy mr-3 mi-2x"></i>
									<div>mi-wb-cloudy <div class="opacity-50">e9a0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-cloud-circle mr-3 mi-2x"></i>
									<div>mi-cloud-circle <div class="opacity-50">e9a1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-cloud-done mr-3 mi-2x"></i>
									<div>mi-cloud-done <div class="opacity-50">e9a2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-cloud-download mr-3 mi-2x"></i>
									<div>mi-cloud-download <div class="opacity-50">e9a3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-cloud-off mr-3 mi-2x"></i>
									<div>mi-cloud-off <div class="opacity-50">e9a4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-cloud-queue mr-3 mi-2x"></i>
									<div>mi-cloud-queue <div class="opacity-50">e9a5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-code mr-3 mi-2x"></i>
									<div>mi-code <div class="opacity-50">e9a6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-photo-library mr-3 mi-2x"></i>
									<div>mi-photo-library <div class="opacity-50">e9a7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-collections-bookmark mr-3 mi-2x"></i>
									<div>mi-collections-bookmark <div class="opacity-50">e9a8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-palette mr-3 mi-2x"></i>
									<div>mi-palette <div class="opacity-50">e9a9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-colorize mr-3 mi-2x"></i>
									<div>mi-colorize <div class="opacity-50">e9aa</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-comment mr-3 mi-2x"></i>
									<div>mi-comment <div class="opacity-50">e9ab</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-compare mr-3 mi-2x"></i>
									<div>mi-compare <div class="opacity-50">e9ac</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-compare-arrows mr-3 mi-2x"></i>
									<div>mi-compare-arrows <div class="opacity-50">e9ad</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-laptop mr-3 mi-2x"></i>
									<div>mi-laptop <div class="opacity-50">e9ae</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-confirmation-number mr-3 mi-2x"></i>
									<div>mi-confirmation-number <div class="opacity-50">e9af</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-contact-mail mr-3 mi-2x"></i>
									<div>mi-contact-mail <div class="opacity-50">e9b0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-contact-phone mr-3 mi-2x"></i>
									<div>mi-contact-phone <div class="opacity-50">e9b1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-contacts mr-3 mi-2x"></i>
									<div>mi-contacts <div class="opacity-50">e9b2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-content-copy mr-3 mi-2x"></i>
									<div>mi-content-copy <div class="opacity-50">e9b3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-content-cut mr-3 mi-2x"></i>
									<div>mi-content-cut <div class="opacity-50">e9b4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-content-paste mr-3 mi-2x"></i>
									<div>mi-content-paste <div class="opacity-50">e9b5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-control-point-duplicate mr-3 mi-2x"></i>
									<div>mi-control-point-duplicate <div class="opacity-50">e9b6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-copyright mr-3 mi-2x"></i>
									<div>mi-copyright <div class="opacity-50">e9b7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-mode-edit mr-3 mi-2x"></i>
									<div>mi-mode-edit <div class="opacity-50">e9b8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-create-new-folder mr-3 mi-2x"></i>
									<div>mi-create-new-folder <div class="opacity-50">e9b9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-payment mr-3 mi-2x"></i>
									<div>mi-payment <div class="opacity-50">e9ba</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-crop mr-3 mi-2x"></i>
									<div>mi-crop <div class="opacity-50">e9bb</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-crop-16-9 mr-3 mi-2x"></i>
									<div>mi-crop-16-9 <div class="opacity-50">e9bc</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-crop-3-2 mr-3 mi-2x"></i>
									<div>mi-crop-3-2 <div class="opacity-50">e9bd</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-crop-landscape mr-3 mi-2x"></i>
									<div>mi-crop-landscape <div class="opacity-50">e9be</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-crop-7-5 mr-3 mi-2x"></i>
									<div>mi-crop-7-5 <div class="opacity-50">e9bf</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-crop-din mr-3 mi-2x"></i>
									<div>mi-crop-din <div class="opacity-50">e9c0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-crop-free mr-3 mi-2x"></i>
									<div>mi-crop-free <div class="opacity-50">e9c1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-crop-original mr-3 mi-2x"></i>
									<div>mi-crop-original <div class="opacity-50">e9c2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-crop-portrait mr-3 mi-2x"></i>
									<div>mi-crop-portrait <div class="opacity-50">e9c3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-crop-rotate mr-3 mi-2x"></i>
									<div>mi-crop-rotate <div class="opacity-50">e9c4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-crop-square mr-3 mi-2x"></i>
									<div>mi-crop-square <div class="opacity-50">e9c5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-dashboard mr-3 mi-2x"></i>
									<div>mi-dashboard <div class="opacity-50">e9c6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-data-usage mr-3 mi-2x"></i>
									<div>mi-data-usage <div class="opacity-50">e9c7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-date-range mr-3 mi-2x"></i>
									<div>mi-date-range <div class="opacity-50">e9c8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-dehaze mr-3 mi-2x"></i>
									<div>mi-dehaze <div class="opacity-50">e9c9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-delete mr-3 mi-2x"></i>
									<div>mi-delete <div class="opacity-50">e9ca</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-delete-forever mr-3 mi-2x"></i>
									<div>mi-delete-forever <div class="opacity-50">e9cb</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-delete-sweep mr-3 mi-2x"></i>
									<div>mi-delete-sweep <div class="opacity-50">e9cc</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-description mr-3 mi-2x"></i>
									<div>mi-description <div class="opacity-50">e9cd</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-desktop-mac mr-3 mi-2x"></i>
									<div>mi-desktop-mac <div class="opacity-50">e9ce</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-desktop-windows mr-3 mi-2x"></i>
									<div>mi-desktop-windows <div class="opacity-50">e9cf</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-details mr-3 mi-2x"></i>
									<div>mi-details <div class="opacity-50">e9d0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-developer-board mr-3 mi-2x"></i>
									<div>mi-developer-board <div class="opacity-50">e9d1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-developer-mode mr-3 mi-2x"></i>
									<div>mi-developer-mode <div class="opacity-50">e9d2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-device-hub mr-3 mi-2x"></i>
									<div>mi-device-hub <div class="opacity-50">e9d3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-phonelink mr-3 mi-2x"></i>
									<div>mi-phonelink <div class="opacity-50">e9d4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-devices-other mr-3 mi-2x"></i>
									<div>mi-devices-other <div class="opacity-50">e9d5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-dialer-sip mr-3 mi-2x"></i>
									<div>mi-dialer-sip <div class="opacity-50">e9d6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-dialpad mr-3 mi-2x"></i>
									<div>mi-dialpad <div class="opacity-50">e9d7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-directions mr-3 mi-2x"></i>
									<div>mi-directions <div class="opacity-50">e9d8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-directions-bike mr-3 mi-2x"></i>
									<div>mi-directions-bike <div class="opacity-50">e9d9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-directions-boat mr-3 mi-2x"></i>
									<div>mi-directions-boat <div class="opacity-50">e9da</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-directions-bus mr-3 mi-2x"></i>
									<div>mi-directions-bus <div class="opacity-50">e9db</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-directions-car mr-3 mi-2x"></i>
									<div>mi-directions-car <div class="opacity-50">e9dc</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-directions-railway mr-3 mi-2x"></i>
									<div>mi-directions-railway <div class="opacity-50">e9dd</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-directions-run mr-3 mi-2x"></i>
									<div>mi-directions-run <div class="opacity-50">e9de</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-directions-transit mr-3 mi-2x"></i>
									<div>mi-directions-transit <div class="opacity-50">e9df</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-directions-walk mr-3 mi-2x"></i>
									<div>mi-directions-walk <div class="opacity-50">e9e0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-disc-full mr-3 mi-2x"></i>
									<div>mi-disc-full <div class="opacity-50">e9e1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-dns mr-3 mi-2x"></i>
									<div>mi-dns <div class="opacity-50">e9e2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-not-interested mr-3 mi-2x"></i>
									<div>mi-not-interested <div class="opacity-50">e9e3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-do-not-disturb-alt mr-3 mi-2x"></i>
									<div>mi-do-not-disturb-alt <div class="opacity-50">e9e4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-do-not-disturb-off mr-3 mi-2x"></i>
									<div>mi-do-not-disturb-off <div class="opacity-50">e9e5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-remove-circle mr-3 mi-2x"></i>
									<div>mi-remove-circle <div class="opacity-50">e9e6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-dock mr-3 mi-2x"></i>
									<div>mi-dock <div class="opacity-50">e9e7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-done mr-3 mi-2x"></i>
									<div>mi-done <div class="opacity-50">e9e8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-done-all mr-3 mi-2x"></i>
									<div>mi-done-all <div class="opacity-50">e9e9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-donut-large mr-3 mi-2x"></i>
									<div>mi-donut-large <div class="opacity-50">e9ea</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-donut-small mr-3 mi-2x"></i>
									<div>mi-donut-small <div class="opacity-50">e9eb</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-drafts mr-3 mi-2x"></i>
									<div>mi-drafts <div class="opacity-50">e9ec</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-drag-handle mr-3 mi-2x"></i>
									<div>mi-drag-handle <div class="opacity-50">e9ed</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-time-to-leave mr-3 mi-2x"></i>
									<div>mi-time-to-leave <div class="opacity-50">e9ee</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-dvr mr-3 mi-2x"></i>
									<div>mi-dvr <div class="opacity-50">e9ef</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-edit-location mr-3 mi-2x"></i>
									<div>mi-edit-location <div class="opacity-50">e9f0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-eject mr-3 mi-2x"></i>
									<div>mi-eject <div class="opacity-50">e9f1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-markunread mr-3 mi-2x"></i>
									<div>mi-markunread <div class="opacity-50">e9f2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-enhanced-encryption mr-3 mi-2x"></i>
									<div>mi-enhanced-encryption <div class="opacity-50">e9f3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-equalizer mr-3 mi-2x"></i>
									<div>mi-equalizer <div class="opacity-50">e9f4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-error mr-3 mi-2x"></i>
									<div>mi-error <div class="opacity-50">e9f5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-error-outline mr-3 mi-2x"></i>
									<div>mi-error-outline <div class="opacity-50">e9f6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-euro-symbol mr-3 mi-2x"></i>
									<div>mi-euro-symbol <div class="opacity-50">e9f7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-ev-station mr-3 mi-2x"></i>
									<div>mi-ev-station <div class="opacity-50">e9f8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-insert-invitation mr-3 mi-2x"></i>
									<div>mi-insert-invitation <div class="opacity-50">e9f9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-event-available mr-3 mi-2x"></i>
									<div>mi-event-available <div class="opacity-50">e9fa</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-event-busy mr-3 mi-2x"></i>
									<div>mi-event-busy <div class="opacity-50">e9fb</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-event-note mr-3 mi-2x"></i>
									<div>mi-event-note <div class="opacity-50">e9fc</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-event-seat mr-3 mi-2x"></i>
									<div>mi-event-seat <div class="opacity-50">e9fd</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-exit-to-app mr-3 mi-2x"></i>
									<div>mi-exit-to-app <div class="opacity-50">e9fe</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-expand-less mr-3 mi-2x"></i>
									<div>mi-expand-less <div class="opacity-50">e9ff</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-expand-more mr-3 mi-2x"></i>
									<div>mi-expand-more <div class="opacity-50">ea00</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-explicit mr-3 mi-2x"></i>
									<div>mi-explicit <div class="opacity-50">ea01</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-explore mr-3 mi-2x"></i>
									<div>mi-explore <div class="opacity-50">ea02</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-exposure mr-3 mi-2x"></i>
									<div>mi-exposure <div class="opacity-50">ea03</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-exposure-neg-1 mr-3 mi-2x"></i>
									<div>mi-exposure-neg-1 <div class="opacity-50">ea04</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-exposure-neg-2 mr-3 mi-2x"></i>
									<div>mi-exposure-neg-2 <div class="opacity-50">ea05</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-exposure-plus-1 mr-3 mi-2x"></i>
									<div>mi-exposure-plus-1 <div class="opacity-50">ea06</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-exposure-plus-2 mr-3 mi-2x"></i>
									<div>mi-exposure-plus-2 <div class="opacity-50">ea07</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-exposure-zero mr-3 mi-2x"></i>
									<div>mi-exposure-zero <div class="opacity-50">ea08</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-extension mr-3 mi-2x"></i>
									<div>mi-extension <div class="opacity-50">ea09</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-face mr-3 mi-2x"></i>
									<div>mi-face <div class="opacity-50">ea0a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-fast-forward mr-3 mi-2x"></i>
									<div>mi-fast-forward <div class="opacity-50">ea0b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-fast-rewind mr-3 mi-2x"></i>
									<div>mi-fast-rewind <div class="opacity-50">ea0c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-favorite mr-3 mi-2x"></i>
									<div>mi-favorite <div class="opacity-50">ea0d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-favorite-border mr-3 mi-2x"></i>
									<div>mi-favorite-border <div class="opacity-50">ea0e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-featured-play-list mr-3 mi-2x"></i>
									<div>mi-featured-play-list <div class="opacity-50">ea0f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-featured-video mr-3 mi-2x"></i>
									<div>mi-featured-video <div class="opacity-50">ea10</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-sms-failed mr-3 mi-2x"></i>
									<div>mi-sms-failed <div class="opacity-50">ea11</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-fiber-dvr mr-3 mi-2x"></i>
									<div>mi-fiber-dvr <div class="opacity-50">ea12</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-fiber-manual-record mr-3 mi-2x"></i>
									<div>mi-fiber-manual-record <div class="opacity-50">ea13</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-fiber-new mr-3 mi-2x"></i>
									<div>mi-fiber-new <div class="opacity-50">ea14</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-fiber-pin mr-3 mi-2x"></i>
									<div>mi-fiber-pin <div class="opacity-50">ea15</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-fiber-smart-record mr-3 mi-2x"></i>
									<div>mi-fiber-smart-record <div class="opacity-50">ea16</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-get-app mr-3 mi-2x"></i>
									<div>mi-get-app <div class="opacity-50">ea17</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-file-upload mr-3 mi-2x"></i>
									<div>mi-file-upload <div class="opacity-50">ea18</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-filter mr-3 mi-2x"></i>
									<div>mi-filter <div class="opacity-50">ea19</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-filter-1 mr-3 mi-2x"></i>
									<div>mi-filter-1 <div class="opacity-50">ea1a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-filter-2 mr-3 mi-2x"></i>
									<div>mi-filter-2 <div class="opacity-50">ea1b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-filter-3 mr-3 mi-2x"></i>
									<div>mi-filter-3 <div class="opacity-50">ea1c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-filter-4 mr-3 mi-2x"></i>
									<div>mi-filter-4 <div class="opacity-50">ea1d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-filter-5 mr-3 mi-2x"></i>
									<div>mi-filter-5 <div class="opacity-50">ea1e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-filter-6 mr-3 mi-2x"></i>
									<div>mi-filter-6 <div class="opacity-50">ea1f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-filter-7 mr-3 mi-2x"></i>
									<div>mi-filter-7 <div class="opacity-50">ea20</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-filter-8 mr-3 mi-2x"></i>
									<div>mi-filter-8 <div class="opacity-50">ea21</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-filter-9 mr-3 mi-2x"></i>
									<div>mi-filter-9 <div class="opacity-50">ea22</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-filter-9-plus mr-3 mi-2x"></i>
									<div>mi-filter-9-plus <div class="opacity-50">ea23</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-filter-b-and-w mr-3 mi-2x"></i>
									<div>mi-filter-b-and-w <div class="opacity-50">ea24</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-filter-center-focus mr-3 mi-2x"></i>
									<div>mi-filter-center-focus <div class="opacity-50">ea25</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-filter-drama mr-3 mi-2x"></i>
									<div>mi-filter-drama <div class="opacity-50">ea26</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-filter-frames mr-3 mi-2x"></i>
									<div>mi-filter-frames <div class="opacity-50">ea27</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-terrain mr-3 mi-2x"></i>
									<div>mi-terrain <div class="opacity-50">ea28</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-filter-list mr-3 mi-2x"></i>
									<div>mi-filter-list <div class="opacity-50">ea29</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-filter-none mr-3 mi-2x"></i>
									<div>mi-filter-none <div class="opacity-50">ea2a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-filter-tilt-shift mr-3 mi-2x"></i>
									<div>mi-filter-tilt-shift <div class="opacity-50">ea2b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-filter-vintage mr-3 mi-2x"></i>
									<div>mi-filter-vintage <div class="opacity-50">ea2c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-find-in-page mr-3 mi-2x"></i>
									<div>mi-find-in-page <div class="opacity-50">ea2d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-find-replace mr-3 mi-2x"></i>
									<div>mi-find-replace <div class="opacity-50">ea2e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-fingerprint mr-3 mi-2x"></i>
									<div>mi-fingerprint <div class="opacity-50">ea2f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-first-page mr-3 mi-2x"></i>
									<div>mi-first-page <div class="opacity-50">ea30</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-fitness-center mr-3 mi-2x"></i>
									<div>mi-fitness-center <div class="opacity-50">ea31</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-flare mr-3 mi-2x"></i>
									<div>mi-flare <div class="opacity-50">ea32</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-flash-auto mr-3 mi-2x"></i>
									<div>mi-flash-auto <div class="opacity-50">ea33</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-flash-off mr-3 mi-2x"></i>
									<div>mi-flash-off <div class="opacity-50">ea34</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-flash-on mr-3 mi-2x"></i>
									<div>mi-flash-on <div class="opacity-50">ea35</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-flight-land mr-3 mi-2x"></i>
									<div>mi-flight-land <div class="opacity-50">ea36</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-flight-takeoff mr-3 mi-2x"></i>
									<div>mi-flight-takeoff <div class="opacity-50">ea37</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-flip mr-3 mi-2x"></i>
									<div>mi-flip <div class="opacity-50">ea38</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-flip-to-back mr-3 mi-2x"></i>
									<div>mi-flip-to-back <div class="opacity-50">ea39</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-flip-to-front mr-3 mi-2x"></i>
									<div>mi-flip-to-front <div class="opacity-50">ea3a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-folder mr-3 mi-2x"></i>
									<div>mi-folder <div class="opacity-50">ea3b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-folder-open mr-3 mi-2x"></i>
									<div>mi-folder-open <div class="opacity-50">ea3c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-folder-shared mr-3 mi-2x"></i>
									<div>mi-folder-shared <div class="opacity-50">ea3d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-folder-special mr-3 mi-2x"></i>
									<div>mi-folder-special <div class="opacity-50">ea3e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-font-download mr-3 mi-2x"></i>
									<div>mi-font-download <div class="opacity-50">ea3f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-format-align-center mr-3 mi-2x"></i>
									<div>mi-format-align-center <div class="opacity-50">ea40</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-format-align-justify mr-3 mi-2x"></i>
									<div>mi-format-align-justify <div class="opacity-50">ea41</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-format-align-left mr-3 mi-2x"></i>
									<div>mi-format-align-left <div class="opacity-50">ea42</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-format-align-right mr-3 mi-2x"></i>
									<div>mi-format-align-right <div class="opacity-50">ea43</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-format-bold mr-3 mi-2x"></i>
									<div>mi-format-bold <div class="opacity-50">ea44</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-format-clear mr-3 mi-2x"></i>
									<div>mi-format-clear <div class="opacity-50">ea45</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-format-color-fill mr-3 mi-2x"></i>
									<div>mi-format-color-fill <div class="opacity-50">ea46</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-format-color-reset mr-3 mi-2x"></i>
									<div>mi-format-color-reset <div class="opacity-50">ea47</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-format-color-text mr-3 mi-2x"></i>
									<div>mi-format-color-text <div class="opacity-50">ea48</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-format-indent-decrease mr-3 mi-2x"></i>
									<div>mi-format-indent-decrease <div class="opacity-50">ea49</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-format-indent-increase mr-3 mi-2x"></i>
									<div>mi-format-indent-increase <div class="opacity-50">ea4a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-format-italic mr-3 mi-2x"></i>
									<div>mi-format-italic <div class="opacity-50">ea4b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-format-line-spacing mr-3 mi-2x"></i>
									<div>mi-format-line-spacing <div class="opacity-50">ea4c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-format-list-bulleted mr-3 mi-2x"></i>
									<div>mi-format-list-bulleted <div class="opacity-50">ea4d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-format-list-numbered mr-3 mi-2x"></i>
									<div>mi-format-list-numbered <div class="opacity-50">ea4e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-format-paint mr-3 mi-2x"></i>
									<div>mi-format-paint <div class="opacity-50">ea4f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-format-quote mr-3 mi-2x"></i>
									<div>mi-format-quote <div class="opacity-50">ea50</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-format-shapes mr-3 mi-2x"></i>
									<div>mi-format-shapes <div class="opacity-50">ea51</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-format-size mr-3 mi-2x"></i>
									<div>mi-format-size <div class="opacity-50">ea52</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-format-strikethrough mr-3 mi-2x"></i>
									<div>mi-format-strikethrough <div class="opacity-50">ea53</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-format-textdirection-l-to-r mr-3 mi-2x"></i>
									<div>mi-format-textdirection-l-to-r <div class="opacity-50">ea54</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-format-textdirection-r-to-l mr-3 mi-2x"></i>
									<div>mi-format-textdirection-r-to-l <div class="opacity-50">ea55</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-format-underlined mr-3 mi-2x"></i>
									<div>mi-format-underlined <div class="opacity-50">ea56</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-question-answer mr-3 mi-2x"></i>
									<div>mi-question-answer <div class="opacity-50">ea57</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-forward mr-3 mi-2x"></i>
									<div>mi-forward <div class="opacity-50">ea58</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-forward-10 mr-3 mi-2x"></i>
									<div>mi-forward-10 <div class="opacity-50">ea59</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-forward-30 mr-3 mi-2x"></i>
									<div>mi-forward-30 <div class="opacity-50">ea5a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-forward-5 mr-3 mi-2x"></i>
									<div>mi-forward-5 <div class="opacity-50">ea5b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-free-breakfast mr-3 mi-2x"></i>
									<div>mi-free-breakfast <div class="opacity-50">ea5c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-fullscreen mr-3 mi-2x"></i>
									<div>mi-fullscreen <div class="opacity-50">ea5d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-fullscreen-exit mr-3 mi-2x"></i>
									<div>mi-fullscreen-exit <div class="opacity-50">ea5e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-functions mr-3 mi-2x"></i>
									<div>mi-functions <div class="opacity-50">ea5f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-g-translate mr-3 mi-2x"></i>
									<div>mi-g-translate <div class="opacity-50">ea60</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-games mr-3 mi-2x"></i>
									<div>mi-games <div class="opacity-50">ea61</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-gavel mr-3 mi-2x"></i>
									<div>mi-gavel <div class="opacity-50">ea62</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-gesture mr-3 mi-2x"></i>
									<div>mi-gesture <div class="opacity-50">ea63</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-gif mr-3 mi-2x"></i>
									<div>mi-gif <div class="opacity-50">ea64</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-goat mr-3 mi-2x"></i>
									<div>mi-goat <div class="opacity-50">ea65</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-golf-course mr-3 mi-2x"></i>
									<div>mi-golf-course <div class="opacity-50">ea66</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-my-location mr-3 mi-2x"></i>
									<div>mi-my-location <div class="opacity-50">ea67</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-location-searching mr-3 mi-2x"></i>
									<div>mi-location-searching <div class="opacity-50">ea68</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-location-disabled mr-3 mi-2x"></i>
									<div>mi-location-disabled <div class="opacity-50">ea69</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-star mr-3 mi-2x"></i>
									<div>mi-star <div class="opacity-50">ea6a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-gradient mr-3 mi-2x"></i>
									<div>mi-gradient <div class="opacity-50">ea6b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-grain mr-3 mi-2x"></i>
									<div>mi-grain <div class="opacity-50">ea6c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-graphic-eq mr-3 mi-2x"></i>
									<div>mi-graphic-eq <div class="opacity-50">ea6d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-grid-off mr-3 mi-2x"></i>
									<div>mi-grid-off <div class="opacity-50">ea6e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-grid-on mr-3 mi-2x"></i>
									<div>mi-grid-on <div class="opacity-50">ea6f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-people mr-3 mi-2x"></i>
									<div>mi-people <div class="opacity-50">ea70</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-group-add mr-3 mi-2x"></i>
									<div>mi-group-add <div class="opacity-50">ea71</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-group-work mr-3 mi-2x"></i>
									<div>mi-group-work <div class="opacity-50">ea72</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-hd mr-3 mi-2x"></i>
									<div>mi-hd <div class="opacity-50">ea73</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-hdr-off mr-3 mi-2x"></i>
									<div>mi-hdr-off <div class="opacity-50">ea74</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-hdr-on mr-3 mi-2x"></i>
									<div>mi-hdr-on <div class="opacity-50">ea75</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-hdr-strong mr-3 mi-2x"></i>
									<div>mi-hdr-strong <div class="opacity-50">ea76</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-hdr-weak mr-3 mi-2x"></i>
									<div>mi-hdr-weak <div class="opacity-50">ea77</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-headset mr-3 mi-2x"></i>
									<div>mi-headset <div class="opacity-50">ea78</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-headset-mic mr-3 mi-2x"></i>
									<div>mi-headset-mic <div class="opacity-50">ea79</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-healing mr-3 mi-2x"></i>
									<div>mi-healing <div class="opacity-50">ea7a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-hearing mr-3 mi-2x"></i>
									<div>mi-hearing <div class="opacity-50">ea7b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-help mr-3 mi-2x"></i>
									<div>mi-help <div class="opacity-50">ea7c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-help-outline mr-3 mi-2x"></i>
									<div>mi-help-outline <div class="opacity-50">ea7d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-high-quality mr-3 mi-2x"></i>
									<div>mi-high-quality <div class="opacity-50">ea7e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-highlight mr-3 mi-2x"></i>
									<div>mi-highlight <div class="opacity-50">ea7f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-highlight-off mr-3 mi-2x"></i>
									<div>mi-highlight-off <div class="opacity-50">ea80</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-restore mr-3 mi-2x"></i>
									<div>mi-restore <div class="opacity-50">ea81</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-home mr-3 mi-2x"></i>
									<div>mi-home <div class="opacity-50">ea82</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-hot-tub mr-3 mi-2x"></i>
									<div>mi-hot-tub <div class="opacity-50">ea83</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-local-hotel mr-3 mi-2x"></i>
									<div>mi-local-hotel <div class="opacity-50">ea84</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-hourglass-empty mr-3 mi-2x"></i>
									<div>mi-hourglass-empty <div class="opacity-50">ea85</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-hourglass-full mr-3 mi-2x"></i>
									<div>mi-hourglass-full <div class="opacity-50">ea86</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-http mr-3 mi-2x"></i>
									<div>mi-http <div class="opacity-50">ea87</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-lock mr-3 mi-2x"></i>
									<div>mi-lock <div class="opacity-50">ea88</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-photo mr-3 mi-2x"></i>
									<div>mi-photo <div class="opacity-50">ea89</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-image-aspect-ratio mr-3 mi-2x"></i>
									<div>mi-image-aspect-ratio <div class="opacity-50">ea8a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-import-contacts mr-3 mi-2x"></i>
									<div>mi-import-contacts <div class="opacity-50">ea8b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-import-export mr-3 mi-2x"></i>
									<div>mi-import-export <div class="opacity-50">ea8c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-important-devices mr-3 mi-2x"></i>
									<div>mi-important-devices <div class="opacity-50">ea8d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-inbox mr-3 mi-2x"></i>
									<div>mi-inbox <div class="opacity-50">ea8e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-indeterminate-check-box mr-3 mi-2x"></i>
									<div>mi-indeterminate-check-box <div class="opacity-50">ea8f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-info mr-3 mi-2x"></i>
									<div>mi-info <div class="opacity-50">ea90</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-info-outline mr-3 mi-2x"></i>
									<div>mi-info-outline <div class="opacity-50">ea91</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-input mr-3 mi-2x"></i>
									<div>mi-input <div class="opacity-50">ea92</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-insert-comment mr-3 mi-2x"></i>
									<div>mi-insert-comment <div class="opacity-50">ea93</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-insert-drive-file mr-3 mi-2x"></i>
									<div>mi-insert-drive-file <div class="opacity-50">ea94</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-tag-faces mr-3 mi-2x"></i>
									<div>mi-tag-faces <div class="opacity-50">ea95</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-link mr-3 mi-2x"></i>
									<div>mi-link <div class="opacity-50">ea96</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-invert-colors mr-3 mi-2x"></i>
									<div>mi-invert-colors <div class="opacity-50">ea97</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-invert-colors-off mr-3 mi-2x"></i>
									<div>mi-invert-colors-off <div class="opacity-50">ea98</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-iso mr-3 mi-2x"></i>
									<div>mi-iso <div class="opacity-50">ea99</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-keyboard mr-3 mi-2x"></i>
									<div>mi-keyboard <div class="opacity-50">ea9a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-keyboard-arrow-down mr-3 mi-2x"></i>
									<div>mi-keyboard-arrow-down <div class="opacity-50">ea9b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-keyboard-arrow-left mr-3 mi-2x"></i>
									<div>mi-keyboard-arrow-left <div class="opacity-50">ea9c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-keyboard-arrow-right mr-3 mi-2x"></i>
									<div>mi-keyboard-arrow-right <div class="opacity-50">ea9d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-keyboard-arrow-up mr-3 mi-2x"></i>
									<div>mi-keyboard-arrow-up <div class="opacity-50">ea9e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-keyboard-backspace mr-3 mi-2x"></i>
									<div>mi-keyboard-backspace <div class="opacity-50">ea9f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-keyboard-capslock mr-3 mi-2x"></i>
									<div>mi-keyboard-capslock <div class="opacity-50">eaa0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-keyboard-hide mr-3 mi-2x"></i>
									<div>mi-keyboard-hide <div class="opacity-50">eaa1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-keyboard-return mr-3 mi-2x"></i>
									<div>mi-keyboard-return <div class="opacity-50">eaa2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-keyboard-tab mr-3 mi-2x"></i>
									<div>mi-keyboard-tab <div class="opacity-50">eaa3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-keyboard-voice mr-3 mi-2x"></i>
									<div>mi-keyboard-voice <div class="opacity-50">eaa4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-kitchen mr-3 mi-2x"></i>
									<div>mi-kitchen <div class="opacity-50">eaa5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-label mr-3 mi-2x"></i>
									<div>mi-label <div class="opacity-50">eaa6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-label-outline mr-3 mi-2x"></i>
									<div>mi-label-outline <div class="opacity-50">eaa7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-language mr-3 mi-2x"></i>
									<div>mi-language <div class="opacity-50">eaa8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-laptop-chromebook mr-3 mi-2x"></i>
									<div>mi-laptop-chromebook <div class="opacity-50">eaa9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-laptop-mac mr-3 mi-2x"></i>
									<div>mi-laptop-mac <div class="opacity-50">eaaa</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-laptop-windows mr-3 mi-2x"></i>
									<div>mi-laptop-windows <div class="opacity-50">eaab</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-last-page mr-3 mi-2x"></i>
									<div>mi-last-page <div class="opacity-50">eaac</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-open-in-new mr-3 mi-2x"></i>
									<div>mi-open-in-new <div class="opacity-50">eaad</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-layers mr-3 mi-2x"></i>
									<div>mi-layers <div class="opacity-50">eaae</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-layers-clear mr-3 mi-2x"></i>
									<div>mi-layers-clear <div class="opacity-50">eaaf</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-leak-add mr-3 mi-2x"></i>
									<div>mi-leak-add <div class="opacity-50">eab0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-leak-remove mr-3 mi-2x"></i>
									<div>mi-leak-remove <div class="opacity-50">eab1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-lens mr-3 mi-2x"></i>
									<div>mi-lens <div class="opacity-50">eab2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-library-books mr-3 mi-2x"></i>
									<div>mi-library-books <div class="opacity-50">eab3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-library-music mr-3 mi-2x"></i>
									<div>mi-library-music <div class="opacity-50">eab4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-lightbulb-outline mr-3 mi-2x"></i>
									<div>mi-lightbulb-outline <div class="opacity-50">eab5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-line-style mr-3 mi-2x"></i>
									<div>mi-line-style <div class="opacity-50">eab6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-line-weight mr-3 mi-2x"></i>
									<div>mi-line-weight <div class="opacity-50">eab7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-linear-scale mr-3 mi-2x"></i>
									<div>mi-linear-scale <div class="opacity-50">eab8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-linked-camera mr-3 mi-2x"></i>
									<div>mi-linked-camera <div class="opacity-50">eab9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-list mr-3 mi-2x"></i>
									<div>mi-list <div class="opacity-50">eaba</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-live-help mr-3 mi-2x"></i>
									<div>mi-live-help <div class="opacity-50">eabb</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-live-tv mr-3 mi-2x"></i>
									<div>mi-live-tv <div class="opacity-50">eabc</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-local-play mr-3 mi-2x"></i>
									<div>mi-local-play <div class="opacity-50">eabd</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-local-airport mr-3 mi-2x"></i>
									<div>mi-local-airport <div class="opacity-50">eabe</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-local-atm mr-3 mi-2x"></i>
									<div>mi-local-atm <div class="opacity-50">eabf</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-local-bar mr-3 mi-2x"></i>
									<div>mi-local-bar <div class="opacity-50">eac0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-local-cafe mr-3 mi-2x"></i>
									<div>mi-local-cafe <div class="opacity-50">eac1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-local-car-wash mr-3 mi-2x"></i>
									<div>mi-local-car-wash <div class="opacity-50">eac2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-local-convenience-store mr-3 mi-2x"></i>
									<div>mi-local-convenience-store <div class="opacity-50">eac3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-restaurant-menu mr-3 mi-2x"></i>
									<div>mi-restaurant-menu <div class="opacity-50">eac4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-local-drink mr-3 mi-2x"></i>
									<div>mi-local-drink <div class="opacity-50">eac5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-local-florist mr-3 mi-2x"></i>
									<div>mi-local-florist <div class="opacity-50">eac6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-local-gas-station mr-3 mi-2x"></i>
									<div>mi-local-gas-station <div class="opacity-50">eac7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-shopping-cart mr-3 mi-2x"></i>
									<div>mi-shopping-cart <div class="opacity-50">eac8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-local-hospital mr-3 mi-2x"></i>
									<div>mi-local-hospital <div class="opacity-50">eac9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-local-laundry-service mr-3 mi-2x"></i>
									<div>mi-local-laundry-service <div class="opacity-50">eaca</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-local-library mr-3 mi-2x"></i>
									<div>mi-local-library <div class="opacity-50">eacb</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-local-mall mr-3 mi-2x"></i>
									<div>mi-local-mall <div class="opacity-50">eacc</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-theaters mr-3 mi-2x"></i>
									<div>mi-theaters <div class="opacity-50">eacd</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-local-offer mr-3 mi-2x"></i>
									<div>mi-local-offer <div class="opacity-50">eace</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-local-parking mr-3 mi-2x"></i>
									<div>mi-local-parking <div class="opacity-50">eacf</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-local-pharmacy mr-3 mi-2x"></i>
									<div>mi-local-pharmacy <div class="opacity-50">ead0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-local-pizza mr-3 mi-2x"></i>
									<div>mi-local-pizza <div class="opacity-50">ead1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-print mr-3 mi-2x"></i>
									<div>mi-print <div class="opacity-50">ead2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-local-shipping mr-3 mi-2x"></i>
									<div>mi-local-shipping <div class="opacity-50">ead3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-local-taxi mr-3 mi-2x"></i>
									<div>mi-local-taxi <div class="opacity-50">ead4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-location-city mr-3 mi-2x"></i>
									<div>mi-location-city <div class="opacity-50">ead5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-location-off mr-3 mi-2x"></i>
									<div>mi-location-off <div class="opacity-50">ead6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-room mr-3 mi-2x"></i>
									<div>mi-room <div class="opacity-50">ead7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-lock-open mr-3 mi-2x"></i>
									<div>mi-lock-open <div class="opacity-50">ead8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-lock-outline mr-3 mi-2x"></i>
									<div>mi-lock-outline <div class="opacity-50">ead9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-looks mr-3 mi-2x"></i>
									<div>mi-looks <div class="opacity-50">eada</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-looks-3 mr-3 mi-2x"></i>
									<div>mi-looks-3 <div class="opacity-50">eadb</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-looks-4 mr-3 mi-2x"></i>
									<div>mi-looks-4 <div class="opacity-50">eadc</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-looks-5 mr-3 mi-2x"></i>
									<div>mi-looks-5 <div class="opacity-50">eadd</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-looks-6 mr-3 mi-2x"></i>
									<div>mi-looks-6 <div class="opacity-50">eade</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-looks-one mr-3 mi-2x"></i>
									<div>mi-looks-one <div class="opacity-50">eadf</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-looks-two mr-3 mi-2x"></i>
									<div>mi-looks-two <div class="opacity-50">eae0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-sync mr-3 mi-2x"></i>
									<div>mi-sync <div class="opacity-50">eae1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-loupe mr-3 mi-2x"></i>
									<div>mi-loupe <div class="opacity-50">eae2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-low-priority mr-3 mi-2x"></i>
									<div>mi-low-priority <div class="opacity-50">eae3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-loyalty mr-3 mi-2x"></i>
									<div>mi-loyalty <div class="opacity-50">eae4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-mail-outline mr-3 mi-2x"></i>
									<div>mi-mail-outline <div class="opacity-50">eae5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-map mr-3 mi-2x"></i>
									<div>mi-map <div class="opacity-50">eae6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-markunread-mailbox mr-3 mi-2x"></i>
									<div>mi-markunread-mailbox <div class="opacity-50">eae7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-memory mr-3 mi-2x"></i>
									<div>mi-memory <div class="opacity-50">eae8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-menu mr-3 mi-2x"></i>
									<div>mi-menu <div class="opacity-50">eae9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-message mr-3 mi-2x"></i>
									<div>mi-message <div class="opacity-50">eaea</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-mic mr-3 mi-2x"></i>
									<div>mi-mic <div class="opacity-50">eaeb</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-mic-none mr-3 mi-2x"></i>
									<div>mi-mic-none <div class="opacity-50">eaec</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-mic-off mr-3 mi-2x"></i>
									<div>mi-mic-off <div class="opacity-50">eaed</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-mms mr-3 mi-2x"></i>
									<div>mi-mms <div class="opacity-50">eaee</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-mode-comment mr-3 mi-2x"></i>
									<div>mi-mode-comment <div class="opacity-50">eaef</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-monetization-on mr-3 mi-2x"></i>
									<div>mi-monetization-on <div class="opacity-50">eaf0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-money-off mr-3 mi-2x"></i>
									<div>mi-money-off <div class="opacity-50">eaf1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-monochrome-photos mr-3 mi-2x"></i>
									<div>mi-monochrome-photos <div class="opacity-50">eaf2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-mood-bad mr-3 mi-2x"></i>
									<div>mi-mood-bad <div class="opacity-50">eaf3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-more mr-3 mi-2x"></i>
									<div>mi-more <div class="opacity-50">eaf4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-more-horiz mr-3 mi-2x"></i>
									<div>mi-more-horiz <div class="opacity-50">eaf5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-more-vert mr-3 mi-2x"></i>
									<div>mi-more-vert <div class="opacity-50">eaf6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-motorcycle mr-3 mi-2x"></i>
									<div>mi-motorcycle <div class="opacity-50">eaf7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-mouse mr-3 mi-2x"></i>
									<div>mi-mouse <div class="opacity-50">eaf8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-move-to-inbox mr-3 mi-2x"></i>
									<div>mi-move-to-inbox <div class="opacity-50">eaf9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-movie-creation mr-3 mi-2x"></i>
									<div>mi-movie-creation <div class="opacity-50">eafa</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-movie-filter mr-3 mi-2x"></i>
									<div>mi-movie-filter <div class="opacity-50">eafb</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-multiline-chart mr-3 mi-2x"></i>
									<div>mi-multiline-chart <div class="opacity-50">eafc</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-music-note mr-3 mi-2x"></i>
									<div>mi-music-note <div class="opacity-50">eafd</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-music-video mr-3 mi-2x"></i>
									<div>mi-music-video <div class="opacity-50">eafe</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-nature mr-3 mi-2x"></i>
									<div>mi-nature <div class="opacity-50">eaff</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-nature-people mr-3 mi-2x"></i>
									<div>mi-nature-people <div class="opacity-50">eb00</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-navigation mr-3 mi-2x"></i>
									<div>mi-navigation <div class="opacity-50">eb01</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-near-me mr-3 mi-2x"></i>
									<div>mi-near-me <div class="opacity-50">eb02</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-network-cell mr-3 mi-2x"></i>
									<div>mi-network-cell <div class="opacity-50">eb03</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-network-check mr-3 mi-2x"></i>
									<div>mi-network-check <div class="opacity-50">eb04</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-network-locked mr-3 mi-2x"></i>
									<div>mi-network-locked <div class="opacity-50">eb05</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-network-wifi mr-3 mi-2x"></i>
									<div>mi-network-wifi <div class="opacity-50">eb06</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-new-releases mr-3 mi-2x"></i>
									<div>mi-new-releases <div class="opacity-50">eb07</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-next-week mr-3 mi-2x"></i>
									<div>mi-next-week <div class="opacity-50">eb08</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-nfc mr-3 mi-2x"></i>
									<div>mi-nfc <div class="opacity-50">eb09</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-no-encryption mr-3 mi-2x"></i>
									<div>mi-no-encryption <div class="opacity-50">eb0a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-signal-cellular-no-sim mr-3 mi-2x"></i>
									<div>mi-signal-cellular-no-sim <div class="opacity-50">eb0b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-note mr-3 mi-2x"></i>
									<div>mi-note <div class="opacity-50">eb0c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-note-add mr-3 mi-2x"></i>
									<div>mi-note-add <div class="opacity-50">eb0d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-notifications mr-3 mi-2x"></i>
									<div>mi-notifications <div class="opacity-50">eb0e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-notifications-active mr-3 mi-2x"></i>
									<div>mi-notifications-active <div class="opacity-50">eb0f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-notifications-none mr-3 mi-2x"></i>
									<div>mi-notifications-none <div class="opacity-50">eb10</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-notifications-off mr-3 mi-2x"></i>
									<div>mi-notifications-off <div class="opacity-50">eb11</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-notifications-paused mr-3 mi-2x"></i>
									<div>mi-notifications-paused <div class="opacity-50">eb12</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-offline-pin mr-3 mi-2x"></i>
									<div>mi-offline-pin <div class="opacity-50">eb13</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-ondemand-video mr-3 mi-2x"></i>
									<div>mi-ondemand-video <div class="opacity-50">eb14</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-opacity mr-3 mi-2x"></i>
									<div>mi-opacity <div class="opacity-50">eb15</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-open-in-browser mr-3 mi-2x"></i>
									<div>mi-open-in-browser <div class="opacity-50">eb16</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-open-with mr-3 mi-2x"></i>
									<div>mi-open-with <div class="opacity-50">eb17</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-pages mr-3 mi-2x"></i>
									<div>mi-pages <div class="opacity-50">eb18</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-pageview mr-3 mi-2x"></i>
									<div>mi-pageview <div class="opacity-50">eb19</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-pan-tool mr-3 mi-2x"></i>
									<div>mi-pan-tool <div class="opacity-50">eb1a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-panorama mr-3 mi-2x"></i>
									<div>mi-panorama <div class="opacity-50">eb1b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-radio-button-unchecked mr-3 mi-2x"></i>
									<div>mi-radio-button-unchecked <div class="opacity-50">eb1c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-panorama-horizontal mr-3 mi-2x"></i>
									<div>mi-panorama-horizontal <div class="opacity-50">eb1d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-panorama-vertical mr-3 mi-2x"></i>
									<div>mi-panorama-vertical <div class="opacity-50">eb1e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-panorama-wide-angle mr-3 mi-2x"></i>
									<div>mi-panorama-wide-angle <div class="opacity-50">eb1f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-party-mode mr-3 mi-2x"></i>
									<div>mi-party-mode <div class="opacity-50">eb20</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-pause mr-3 mi-2x"></i>
									<div>mi-pause <div class="opacity-50">eb21</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-pause-circle-filled mr-3 mi-2x"></i>
									<div>mi-pause-circle-filled <div class="opacity-50">eb22</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-pause-circle-outline mr-3 mi-2x"></i>
									<div>mi-pause-circle-outline <div class="opacity-50">eb23</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-people-outline mr-3 mi-2x"></i>
									<div>mi-people-outline <div class="opacity-50">eb24</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-perm-camera-mic mr-3 mi-2x"></i>
									<div>mi-perm-camera-mic <div class="opacity-50">eb25</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-perm-contact-calendar mr-3 mi-2x"></i>
									<div>mi-perm-contact-calendar <div class="opacity-50">eb26</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-perm-data-setting mr-3 mi-2x"></i>
									<div>mi-perm-data-setting <div class="opacity-50">eb27</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-perm-device-information mr-3 mi-2x"></i>
									<div>mi-perm-device-information <div class="opacity-50">eb28</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-person-outline mr-3 mi-2x"></i>
									<div>mi-person-outline <div class="opacity-50">eb29</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-perm-media mr-3 mi-2x"></i>
									<div>mi-perm-media <div class="opacity-50">eb2a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-perm-phone-msg mr-3 mi-2x"></i>
									<div>mi-perm-phone-msg <div class="opacity-50">eb2b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-perm-scan-wifi mr-3 mi-2x"></i>
									<div>mi-perm-scan-wifi <div class="opacity-50">eb2c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-person mr-3 mi-2x"></i>
									<div>mi-person <div class="opacity-50">eb2d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-person-add mr-3 mi-2x"></i>
									<div>mi-person-add <div class="opacity-50">eb2e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-person-pin mr-3 mi-2x"></i>
									<div>mi-person-pin <div class="opacity-50">eb2f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-person-pin-circle mr-3 mi-2x"></i>
									<div>mi-person-pin-circle <div class="opacity-50">eb30</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-personal-video mr-3 mi-2x"></i>
									<div>mi-personal-video <div class="opacity-50">eb31</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-pets mr-3 mi-2x"></i>
									<div>mi-pets <div class="opacity-50">eb32</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-phone-android mr-3 mi-2x"></i>
									<div>mi-phone-android <div class="opacity-50">eb33</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-phone-bluetooth-speaker mr-3 mi-2x"></i>
									<div>mi-phone-bluetooth-speaker <div class="opacity-50">eb34</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-phone-forwarded mr-3 mi-2x"></i>
									<div>mi-phone-forwarded <div class="opacity-50">eb35</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-phone-in-talk mr-3 mi-2x"></i>
									<div>mi-phone-in-talk <div class="opacity-50">eb36</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-phone-iphone mr-3 mi-2x"></i>
									<div>mi-phone-iphone <div class="opacity-50">eb37</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-phone-locked mr-3 mi-2x"></i>
									<div>mi-phone-locked <div class="opacity-50">eb38</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-phone-missed mr-3 mi-2x"></i>
									<div>mi-phone-missed <div class="opacity-50">eb39</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-phone-paused mr-3 mi-2x"></i>
									<div>mi-phone-paused <div class="opacity-50">eb3a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-phonelink-erase mr-3 mi-2x"></i>
									<div>mi-phonelink-erase <div class="opacity-50">eb3b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-phonelink-lock mr-3 mi-2x"></i>
									<div>mi-phonelink-lock <div class="opacity-50">eb3c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-phonelink-off mr-3 mi-2x"></i>
									<div>mi-phonelink-off <div class="opacity-50">eb3d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-phonelink-ring mr-3 mi-2x"></i>
									<div>mi-phonelink-ring <div class="opacity-50">eb3e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-phonelink-setup mr-3 mi-2x"></i>
									<div>mi-phonelink-setup <div class="opacity-50">eb3f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-photo-album mr-3 mi-2x"></i>
									<div>mi-photo-album <div class="opacity-50">eb40</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-photo-filter mr-3 mi-2x"></i>
									<div>mi-photo-filter <div class="opacity-50">eb41</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-photo-size-select-actual mr-3 mi-2x"></i>
									<div>mi-photo-size-select-actual <div class="opacity-50">eb42</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-photo-size-select-large mr-3 mi-2x"></i>
									<div>mi-photo-size-select-large <div class="opacity-50">eb43</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-photo-size-select-small mr-3 mi-2x"></i>
									<div>mi-photo-size-select-small <div class="opacity-50">eb44</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-picture-as-pdf mr-3 mi-2x"></i>
									<div>mi-picture-as-pdf <div class="opacity-50">eb45</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-picture-in-picture mr-3 mi-2x"></i>
									<div>mi-picture-in-picture <div class="opacity-50">eb46</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-picture-in-picture-alt mr-3 mi-2x"></i>
									<div>mi-picture-in-picture-alt <div class="opacity-50">eb47</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-pie-chart mr-3 mi-2x"></i>
									<div>mi-pie-chart <div class="opacity-50">eb48</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-pie-chart-outlined mr-3 mi-2x"></i>
									<div>mi-pie-chart-outlined <div class="opacity-50">eb49</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-pin-drop mr-3 mi-2x"></i>
									<div>mi-pin-drop <div class="opacity-50">eb4a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-play-arrow mr-3 mi-2x"></i>
									<div>mi-play-arrow <div class="opacity-50">eb4b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-play-circle-filled mr-3 mi-2x"></i>
									<div>mi-play-circle-filled <div class="opacity-50">eb4c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-play-circle-outline mr-3 mi-2x"></i>
									<div>mi-play-circle-outline <div class="opacity-50">eb4d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-play-for-work mr-3 mi-2x"></i>
									<div>mi-play-for-work <div class="opacity-50">eb4e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-playlist-add mr-3 mi-2x"></i>
									<div>mi-playlist-add <div class="opacity-50">eb4f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-playlist-add-check mr-3 mi-2x"></i>
									<div>mi-playlist-add-check <div class="opacity-50">eb50</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-playlist-play mr-3 mi-2x"></i>
									<div>mi-playlist-play <div class="opacity-50">eb51</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-plus-one mr-3 mi-2x"></i>
									<div>mi-plus-one <div class="opacity-50">eb52</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-polymer mr-3 mi-2x"></i>
									<div>mi-polymer <div class="opacity-50">eb53</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-pool mr-3 mi-2x"></i>
									<div>mi-pool <div class="opacity-50">eb54</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-portable-wifi-off mr-3 mi-2x"></i>
									<div>mi-portable-wifi-off <div class="opacity-50">eb55</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-portrait mr-3 mi-2x"></i>
									<div>mi-portrait <div class="opacity-50">eb56</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-power mr-3 mi-2x"></i>
									<div>mi-power <div class="opacity-50">eb57</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-power-input mr-3 mi-2x"></i>
									<div>mi-power-input <div class="opacity-50">eb58</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-power-settings-new mr-3 mi-2x"></i>
									<div>mi-power-settings-new <div class="opacity-50">eb59</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-pregnant-woman mr-3 mi-2x"></i>
									<div>mi-pregnant-woman <div class="opacity-50">eb5a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-present-to-all mr-3 mi-2x"></i>
									<div>mi-present-to-all <div class="opacity-50">eb5b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-priority-high mr-3 mi-2x"></i>
									<div>mi-priority-high <div class="opacity-50">eb5c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-public mr-3 mi-2x"></i>
									<div>mi-public <div class="opacity-50">eb5d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-publish mr-3 mi-2x"></i>
									<div>mi-publish <div class="opacity-50">eb5e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-queue-music mr-3 mi-2x"></i>
									<div>mi-queue-music <div class="opacity-50">eb5f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-queue-play-next mr-3 mi-2x"></i>
									<div>mi-queue-play-next <div class="opacity-50">eb60</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-radio mr-3 mi-2x"></i>
									<div>mi-radio <div class="opacity-50">eb61</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-radio-button-checked mr-3 mi-2x"></i>
									<div>mi-radio-button-checked <div class="opacity-50">eb62</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-rate-review mr-3 mi-2x"></i>
									<div>mi-rate-review <div class="opacity-50">eb63</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-receipt mr-3 mi-2x"></i>
									<div>mi-receipt <div class="opacity-50">eb64</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-recent-actors mr-3 mi-2x"></i>
									<div>mi-recent-actors <div class="opacity-50">eb65</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-record-voice-over mr-3 mi-2x"></i>
									<div>mi-record-voice-over <div class="opacity-50">eb66</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-redo mr-3 mi-2x"></i>
									<div>mi-redo <div class="opacity-50">eb67</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-refresh mr-3 mi-2x"></i>
									<div>mi-refresh <div class="opacity-50">eb68</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-remove mr-3 mi-2x"></i>
									<div>mi-remove <div class="opacity-50">eb69</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-remove-circle-outline mr-3 mi-2x"></i>
									<div>mi-remove-circle-outline <div class="opacity-50">eb6a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-remove-from-queue mr-3 mi-2x"></i>
									<div>mi-remove-from-queue <div class="opacity-50">eb6b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-visibility mr-3 mi-2x"></i>
									<div>mi-visibility <div class="opacity-50">eb6c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-remove-shopping-cart mr-3 mi-2x"></i>
									<div>mi-remove-shopping-cart <div class="opacity-50">eb6d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-reorder mr-3 mi-2x"></i>
									<div>mi-reorder <div class="opacity-50">eb6e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-repeat mr-3 mi-2x"></i>
									<div>mi-repeat <div class="opacity-50">eb6f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-repeat-one mr-3 mi-2x"></i>
									<div>mi-repeat-one <div class="opacity-50">eb70</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-replay mr-3 mi-2x"></i>
									<div>mi-replay <div class="opacity-50">eb71</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-replay-10 mr-3 mi-2x"></i>
									<div>mi-replay-10 <div class="opacity-50">eb72</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-replay-30 mr-3 mi-2x"></i>
									<div>mi-replay-30 <div class="opacity-50">eb73</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-replay-5 mr-3 mi-2x"></i>
									<div>mi-replay-5 <div class="opacity-50">eb74</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-reply mr-3 mi-2x"></i>
									<div>mi-reply <div class="opacity-50">eb75</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-reply-all mr-3 mi-2x"></i>
									<div>mi-reply-all <div class="opacity-50">eb76</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-report mr-3 mi-2x"></i>
									<div>mi-report <div class="opacity-50">eb77</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-warning mr-3 mi-2x"></i>
									<div>mi-warning <div class="opacity-50">eb78</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-restaurant mr-3 mi-2x"></i>
									<div>mi-restaurant <div class="opacity-50">eb79</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-restore-page mr-3 mi-2x"></i>
									<div>mi-restore-page <div class="opacity-50">eb7a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-ring-volume mr-3 mi-2x"></i>
									<div>mi-ring-volume <div class="opacity-50">eb7b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-room-service mr-3 mi-2x"></i>
									<div>mi-room-service <div class="opacity-50">eb7c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-rotate-90-degrees-ccw mr-3 mi-2x"></i>
									<div>mi-rotate-90-degrees-ccw <div class="opacity-50">eb7d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-rotate-left mr-3 mi-2x"></i>
									<div>mi-rotate-left <div class="opacity-50">eb7e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-rotate-right mr-3 mi-2x"></i>
									<div>mi-rotate-right <div class="opacity-50">eb7f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-rounded-corner mr-3 mi-2x"></i>
									<div>mi-rounded-corner <div class="opacity-50">eb80</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-router mr-3 mi-2x"></i>
									<div>mi-router <div class="opacity-50">eb81</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-rowing mr-3 mi-2x"></i>
									<div>mi-rowing <div class="opacity-50">eb82</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-rss-feed mr-3 mi-2x"></i>
									<div>mi-rss-feed <div class="opacity-50">eb83</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-rv-hookup mr-3 mi-2x"></i>
									<div>mi-rv-hookup <div class="opacity-50">eb84</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-satellite mr-3 mi-2x"></i>
									<div>mi-satellite <div class="opacity-50">eb85</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-save mr-3 mi-2x"></i>
									<div>mi-save <div class="opacity-50">eb86</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-scanner mr-3 mi-2x"></i>
									<div>mi-scanner <div class="opacity-50">eb87</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-school mr-3 mi-2x"></i>
									<div>mi-school <div class="opacity-50">eb88</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-screen-lock-landscape mr-3 mi-2x"></i>
									<div>mi-screen-lock-landscape <div class="opacity-50">eb89</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-screen-lock-portrait mr-3 mi-2x"></i>
									<div>mi-screen-lock-portrait <div class="opacity-50">eb8a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-screen-lock-rotation mr-3 mi-2x"></i>
									<div>mi-screen-lock-rotation <div class="opacity-50">eb8b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-screen-rotation mr-3 mi-2x"></i>
									<div>mi-screen-rotation <div class="opacity-50">eb8c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-screen-share mr-3 mi-2x"></i>
									<div>mi-screen-share <div class="opacity-50">eb8d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-sd-storage mr-3 mi-2x"></i>
									<div>mi-sd-storage <div class="opacity-50">eb8e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-search mr-3 mi-2x"></i>
									<div>mi-search <div class="opacity-50">eb8f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-security mr-3 mi-2x"></i>
									<div>mi-security <div class="opacity-50">eb90</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-select-all mr-3 mi-2x"></i>
									<div>mi-select-all <div class="opacity-50">eb91</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-send mr-3 mi-2x"></i>
									<div>mi-send <div class="opacity-50">eb92</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-sentiment-dissatisfied mr-3 mi-2x"></i>
									<div>mi-sentiment-dissatisfied <div class="opacity-50">eb93</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-sentiment-neutral mr-3 mi-2x"></i>
									<div>mi-sentiment-neutral <div class="opacity-50">eb94</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-sentiment-satisfied mr-3 mi-2x"></i>
									<div>mi-sentiment-satisfied <div class="opacity-50">eb95</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-sentiment-very-dissatisfied mr-3 mi-2x"></i>
									<div>mi-sentiment-very-dissatisfied <div class="opacity-50">eb96</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-sentiment-very-satisfied mr-3 mi-2x"></i>
									<div>mi-sentiment-very-satisfied <div class="opacity-50">eb97</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-settings mr-3 mi-2x"></i>
									<div>mi-settings <div class="opacity-50">eb98</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-settings-applications mr-3 mi-2x"></i>
									<div>mi-settings-applications <div class="opacity-50">eb99</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-settings-backup-restore mr-3 mi-2x"></i>
									<div>mi-settings-backup-restore <div class="opacity-50">eb9a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-settings-bluetooth mr-3 mi-2x"></i>
									<div>mi-settings-bluetooth <div class="opacity-50">eb9b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-settings-brightness mr-3 mi-2x"></i>
									<div>mi-settings-brightness <div class="opacity-50">eb9c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-settings-cell mr-3 mi-2x"></i>
									<div>mi-settings-cell <div class="opacity-50">eb9d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-settings-ethernet mr-3 mi-2x"></i>
									<div>mi-settings-ethernet <div class="opacity-50">eb9e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-settings-input-antenna mr-3 mi-2x"></i>
									<div>mi-settings-input-antenna <div class="opacity-50">eb9f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-settings-input-composite mr-3 mi-2x"></i>
									<div>mi-settings-input-composite <div class="opacity-50">eba0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-settings-input-hdmi mr-3 mi-2x"></i>
									<div>mi-settings-input-hdmi <div class="opacity-50">eba1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-settings-input-svideo mr-3 mi-2x"></i>
									<div>mi-settings-input-svideo <div class="opacity-50">eba2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-settings-overscan mr-3 mi-2x"></i>
									<div>mi-settings-overscan <div class="opacity-50">eba3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-settings-phone mr-3 mi-2x"></i>
									<div>mi-settings-phone <div class="opacity-50">eba4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-settings-power mr-3 mi-2x"></i>
									<div>mi-settings-power <div class="opacity-50">eba5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-settings-remote mr-3 mi-2x"></i>
									<div>mi-settings-remote <div class="opacity-50">eba6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-settings-system-daydream mr-3 mi-2x"></i>
									<div>mi-settings-system-daydream <div class="opacity-50">eba7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-settings-voice mr-3 mi-2x"></i>
									<div>mi-settings-voice <div class="opacity-50">eba8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-share mr-3 mi-2x"></i>
									<div>mi-share <div class="opacity-50">eba9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-shop mr-3 mi-2x"></i>
									<div>mi-shop <div class="opacity-50">ebaa</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-shop-two mr-3 mi-2x"></i>
									<div>mi-shop-two <div class="opacity-50">ebab</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-shopping-basket mr-3 mi-2x"></i>
									<div>mi-shopping-basket <div class="opacity-50">ebac</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-short-text mr-3 mi-2x"></i>
									<div>mi-short-text <div class="opacity-50">ebad</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-show-chart mr-3 mi-2x"></i>
									<div>mi-show-chart <div class="opacity-50">ebae</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-shuffle mr-3 mi-2x"></i>
									<div>mi-shuffle <div class="opacity-50">ebaf</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-signal-cellular-4-bar mr-3 mi-2x"></i>
									<div>mi-signal-cellular-4-bar <div class="opacity-50">ebb0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-signal-cellular-connected-no-internet-4-bar mr-3 mi-2x"></i>
									<div>mi-signal-cellular-connected-no-internet-4-bar <div class="opacity-50">ebb1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-signal-cellular-null mr-3 mi-2x"></i>
									<div>mi-signal-cellular-null <div class="opacity-50">ebb2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-signal-cellular-off mr-3 mi-2x"></i>
									<div>mi-signal-cellular-off <div class="opacity-50">ebb3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-signal-wifi-4-bar mr-3 mi-2x"></i>
									<div>mi-signal-wifi-4-bar <div class="opacity-50">ebb4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-signal-wifi-4-bar-lock mr-3 mi-2x"></i>
									<div>mi-signal-wifi-4-bar-lock <div class="opacity-50">ebb5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-signal-wifi-off mr-3 mi-2x"></i>
									<div>mi-signal-wifi-off <div class="opacity-50">ebb6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-sim-card mr-3 mi-2x"></i>
									<div>mi-sim-card <div class="opacity-50">ebb7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-sim-card-alert mr-3 mi-2x"></i>
									<div>mi-sim-card-alert <div class="opacity-50">ebb8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-skip-next mr-3 mi-2x"></i>
									<div>mi-skip-next <div class="opacity-50">ebb9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-skip-previous mr-3 mi-2x"></i>
									<div>mi-skip-previous <div class="opacity-50">ebba</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-slideshow mr-3 mi-2x"></i>
									<div>mi-slideshow <div class="opacity-50">ebbb</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-slow-motion-video mr-3 mi-2x"></i>
									<div>mi-slow-motion-video <div class="opacity-50">ebbc</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-stay-primary-portrait mr-3 mi-2x"></i>
									<div>mi-stay-primary-portrait <div class="opacity-50">ebbd</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-smoke-free mr-3 mi-2x"></i>
									<div>mi-smoke-free <div class="opacity-50">ebbe</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-smoking-rooms mr-3 mi-2x"></i>
									<div>mi-smoking-rooms <div class="opacity-50">ebbf</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-textsms mr-3 mi-2x"></i>
									<div>mi-textsms <div class="opacity-50">ebc0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-snooze mr-3 mi-2x"></i>
									<div>mi-snooze <div class="opacity-50">ebc1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-sort mr-3 mi-2x"></i>
									<div>mi-sort <div class="opacity-50">ebc2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-sort-by-alpha mr-3 mi-2x"></i>
									<div>mi-sort-by-alpha <div class="opacity-50">ebc3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-spa mr-3 mi-2x"></i>
									<div>mi-spa <div class="opacity-50">ebc4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-space-bar mr-3 mi-2x"></i>
									<div>mi-space-bar <div class="opacity-50">ebc5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-speaker mr-3 mi-2x"></i>
									<div>mi-speaker <div class="opacity-50">ebc6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-speaker-group mr-3 mi-2x"></i>
									<div>mi-speaker-group <div class="opacity-50">ebc7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-speaker-notes mr-3 mi-2x"></i>
									<div>mi-speaker-notes <div class="opacity-50">ebc8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-speaker-notes-off mr-3 mi-2x"></i>
									<div>mi-speaker-notes-off <div class="opacity-50">ebc9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-speaker-phone mr-3 mi-2x"></i>
									<div>mi-speaker-phone <div class="opacity-50">ebca</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-spellcheck mr-3 mi-2x"></i>
									<div>mi-spellcheck <div class="opacity-50">ebcb</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-star-border mr-3 mi-2x"></i>
									<div>mi-star-border <div class="opacity-50">ebcc</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-star-half mr-3 mi-2x"></i>
									<div>mi-star-half <div class="opacity-50">ebcd</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-stars mr-3 mi-2x"></i>
									<div>mi-stars <div class="opacity-50">ebce</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-stay-primary-landscape mr-3 mi-2x"></i>
									<div>mi-stay-primary-landscape <div class="opacity-50">ebcf</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-stop mr-3 mi-2x"></i>
									<div>mi-stop <div class="opacity-50">ebd0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-stop-screen-share mr-3 mi-2x"></i>
									<div>mi-stop-screen-share <div class="opacity-50">ebd1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-storage mr-3 mi-2x"></i>
									<div>mi-storage <div class="opacity-50">ebd2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-store-mall-directory mr-3 mi-2x"></i>
									<div>mi-store-mall-directory <div class="opacity-50">ebd3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-straighten mr-3 mi-2x"></i>
									<div>mi-straighten <div class="opacity-50">ebd4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-streetview mr-3 mi-2x"></i>
									<div>mi-streetview <div class="opacity-50">ebd5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-strikethrough-s mr-3 mi-2x"></i>
									<div>mi-strikethrough-s <div class="opacity-50">ebd6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-style mr-3 mi-2x"></i>
									<div>mi-style <div class="opacity-50">ebd7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-subdirectory-arrow-left mr-3 mi-2x"></i>
									<div>mi-subdirectory-arrow-left <div class="opacity-50">ebd8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-subdirectory-arrow-right mr-3 mi-2x"></i>
									<div>mi-subdirectory-arrow-right <div class="opacity-50">ebd9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-subject mr-3 mi-2x"></i>
									<div>mi-subject <div class="opacity-50">ebda</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-subscriptions mr-3 mi-2x"></i>
									<div>mi-subscriptions <div class="opacity-50">ebdb</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-subtitles mr-3 mi-2x"></i>
									<div>mi-subtitles <div class="opacity-50">ebdc</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-subway mr-3 mi-2x"></i>
									<div>mi-subway <div class="opacity-50">ebdd</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-supervisor-account mr-3 mi-2x"></i>
									<div>mi-supervisor-account <div class="opacity-50">ebde</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-surround-sound mr-3 mi-2x"></i>
									<div>mi-surround-sound <div class="opacity-50">ebdf</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-swap-calls mr-3 mi-2x"></i>
									<div>mi-swap-calls <div class="opacity-50">ebe0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-swap-horiz mr-3 mi-2x"></i>
									<div>mi-swap-horiz <div class="opacity-50">ebe1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-swap-vert mr-3 mi-2x"></i>
									<div>mi-swap-vert <div class="opacity-50">ebe2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-swap-vertical-circle mr-3 mi-2x"></i>
									<div>mi-swap-vertical-circle <div class="opacity-50">ebe3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-switch-camera mr-3 mi-2x"></i>
									<div>mi-switch-camera <div class="opacity-50">ebe4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-switch-video mr-3 mi-2x"></i>
									<div>mi-switch-video <div class="opacity-50">ebe5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-sync-disabled mr-3 mi-2x"></i>
									<div>mi-sync-disabled <div class="opacity-50">ebe6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-sync-problem mr-3 mi-2x"></i>
									<div>mi-sync-problem <div class="opacity-50">ebe7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-system-update mr-3 mi-2x"></i>
									<div>mi-system-update <div class="opacity-50">ebe8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-system-update-alt mr-3 mi-2x"></i>
									<div>mi-system-update-alt <div class="opacity-50">ebe9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-tab mr-3 mi-2x"></i>
									<div>mi-tab <div class="opacity-50">ebea</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-tab-unselected mr-3 mi-2x"></i>
									<div>mi-tab-unselected <div class="opacity-50">ebeb</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-tablet mr-3 mi-2x"></i>
									<div>mi-tablet <div class="opacity-50">ebec</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-tablet-android mr-3 mi-2x"></i>
									<div>mi-tablet-android <div class="opacity-50">ebed</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-tablet-mac mr-3 mi-2x"></i>
									<div>mi-tablet-mac <div class="opacity-50">ebee</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-tap-and-play mr-3 mi-2x"></i>
									<div>mi-tap-and-play <div class="opacity-50">ebef</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-text-fields mr-3 mi-2x"></i>
									<div>mi-text-fields <div class="opacity-50">ebf0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-text-format mr-3 mi-2x"></i>
									<div>mi-text-format <div class="opacity-50">ebf1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-texture mr-3 mi-2x"></i>
									<div>mi-texture <div class="opacity-50">ebf2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-thumb-down mr-3 mi-2x"></i>
									<div>mi-thumb-down <div class="opacity-50">ebf3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-thumb-up mr-3 mi-2x"></i>
									<div>mi-thumb-up <div class="opacity-50">ebf4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-thumbs-up-down mr-3 mi-2x"></i>
									<div>mi-thumbs-up-down <div class="opacity-50">ebf5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-timelapse mr-3 mi-2x"></i>
									<div>mi-timelapse <div class="opacity-50">ebf6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-timeline mr-3 mi-2x"></i>
									<div>mi-timeline <div class="opacity-50">ebf7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-timer mr-3 mi-2x"></i>
									<div>mi-timer <div class="opacity-50">ebf8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-timer-10 mr-3 mi-2x"></i>
									<div>mi-timer-10 <div class="opacity-50">ebf9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-timer-3 mr-3 mi-2x"></i>
									<div>mi-timer-3 <div class="opacity-50">ebfa</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-timer-off mr-3 mi-2x"></i>
									<div>mi-timer-off <div class="opacity-50">ebfb</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-title mr-3 mi-2x"></i>
									<div>mi-title <div class="opacity-50">ebfc</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-toc mr-3 mi-2x"></i>
									<div>mi-toc <div class="opacity-50">ebfd</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-today mr-3 mi-2x"></i>
									<div>mi-today <div class="opacity-50">ebfe</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-toll mr-3 mi-2x"></i>
									<div>mi-toll <div class="opacity-50">ebff</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-tonality mr-3 mi-2x"></i>
									<div>mi-tonality <div class="opacity-50">ec00</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-touch-app mr-3 mi-2x"></i>
									<div>mi-touch-app <div class="opacity-50">ec01</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-toys mr-3 mi-2x"></i>
									<div>mi-toys <div class="opacity-50">ec02</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-track-changes mr-3 mi-2x"></i>
									<div>mi-track-changes <div class="opacity-50">ec03</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-traffic mr-3 mi-2x"></i>
									<div>mi-traffic <div class="opacity-50">ec04</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-train mr-3 mi-2x"></i>
									<div>mi-train <div class="opacity-50">ec05</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-tram mr-3 mi-2x"></i>
									<div>mi-tram <div class="opacity-50">ec06</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-transfer-within-a-station mr-3 mi-2x"></i>
									<div>mi-transfer-within-a-station <div class="opacity-50">ec07</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-transform mr-3 mi-2x"></i>
									<div>mi-transform <div class="opacity-50">ec08</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-translate mr-3 mi-2x"></i>
									<div>mi-translate <div class="opacity-50">ec09</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-trending-down mr-3 mi-2x"></i>
									<div>mi-trending-down <div class="opacity-50">ec0a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-trending-flat mr-3 mi-2x"></i>
									<div>mi-trending-flat <div class="opacity-50">ec0b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-trending-up mr-3 mi-2x"></i>
									<div>mi-trending-up <div class="opacity-50">ec0c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-tune mr-3 mi-2x"></i>
									<div>mi-tune <div class="opacity-50">ec0d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-tv mr-3 mi-2x"></i>
									<div>mi-tv <div class="opacity-50">ec0e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-unarchive mr-3 mi-2x"></i>
									<div>mi-unarchive <div class="opacity-50">ec0f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-undo mr-3 mi-2x"></i>
									<div>mi-undo <div class="opacity-50">ec10</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-unfold-less mr-3 mi-2x"></i>
									<div>mi-unfold-less <div class="opacity-50">ec11</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-unfold-more mr-3 mi-2x"></i>
									<div>mi-unfold-more <div class="opacity-50">ec12</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-update mr-3 mi-2x"></i>
									<div>mi-update <div class="opacity-50">ec13</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-usb mr-3 mi-2x"></i>
									<div>mi-usb <div class="opacity-50">ec14</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-verified-user mr-3 mi-2x"></i>
									<div>mi-verified-user <div class="opacity-50">ec15</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-vertical-align-bottom mr-3 mi-2x"></i>
									<div>mi-vertical-align-bottom <div class="opacity-50">ec16</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-vertical-align-center mr-3 mi-2x"></i>
									<div>mi-vertical-align-center <div class="opacity-50">ec17</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-vertical-align-top mr-3 mi-2x"></i>
									<div>mi-vertical-align-top <div class="opacity-50">ec18</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-vibration mr-3 mi-2x"></i>
									<div>mi-vibration <div class="opacity-50">ec19</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-video-call mr-3 mi-2x"></i>
									<div>mi-video-call <div class="opacity-50">ec1a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-video-label mr-3 mi-2x"></i>
									<div>mi-video-label <div class="opacity-50">ec1b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-video-library mr-3 mi-2x"></i>
									<div>mi-video-library <div class="opacity-50">ec1c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-videocam mr-3 mi-2x"></i>
									<div>mi-videocam <div class="opacity-50">ec1d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-videocam-off mr-3 mi-2x"></i>
									<div>mi-videocam-off <div class="opacity-50">ec1e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-videogame-asset mr-3 mi-2x"></i>
									<div>mi-videogame-asset <div class="opacity-50">ec1f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-view-agenda mr-3 mi-2x"></i>
									<div>mi-view-agenda <div class="opacity-50">ec20</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-view-array mr-3 mi-2x"></i>
									<div>mi-view-array <div class="opacity-50">ec21</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-view-carousel mr-3 mi-2x"></i>
									<div>mi-view-carousel <div class="opacity-50">ec22</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-view-column mr-3 mi-2x"></i>
									<div>mi-view-column <div class="opacity-50">ec23</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-view-comfy mr-3 mi-2x"></i>
									<div>mi-view-comfy <div class="opacity-50">ec24</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-view-compact mr-3 mi-2x"></i>
									<div>mi-view-compact <div class="opacity-50">ec25</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-view-day mr-3 mi-2x"></i>
									<div>mi-view-day <div class="opacity-50">ec26</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-view-headline mr-3 mi-2x"></i>
									<div>mi-view-headline <div class="opacity-50">ec27</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-view-list mr-3 mi-2x"></i>
									<div>mi-view-list <div class="opacity-50">ec28</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-view-module mr-3 mi-2x"></i>
									<div>mi-view-module <div class="opacity-50">ec29</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-view-quilt mr-3 mi-2x"></i>
									<div>mi-view-quilt <div class="opacity-50">ec2a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-view-stream mr-3 mi-2x"></i>
									<div>mi-view-stream <div class="opacity-50">ec2b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-view-week mr-3 mi-2x"></i>
									<div>mi-view-week <div class="opacity-50">ec2c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-vignette mr-3 mi-2x"></i>
									<div>mi-vignette <div class="opacity-50">ec2d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-visibility-off mr-3 mi-2x"></i>
									<div>mi-visibility-off <div class="opacity-50">ec2e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-voice-chat mr-3 mi-2x"></i>
									<div>mi-voice-chat <div class="opacity-50">ec2f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-voicemail mr-3 mi-2x"></i>
									<div>mi-voicemail <div class="opacity-50">ec30</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-volume-down mr-3 mi-2x"></i>
									<div>mi-volume-down <div class="opacity-50">ec31</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-volume-mute mr-3 mi-2x"></i>
									<div>mi-volume-mute <div class="opacity-50">ec32</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-volume-off mr-3 mi-2x"></i>
									<div>mi-volume-off <div class="opacity-50">ec33</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-volume-up mr-3 mi-2x"></i>
									<div>mi-volume-up <div class="opacity-50">ec34</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-vpn-key mr-3 mi-2x"></i>
									<div>mi-vpn-key <div class="opacity-50">ec35</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-vpn-lock mr-3 mi-2x"></i>
									<div>mi-vpn-lock <div class="opacity-50">ec36</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-wallpaper mr-3 mi-2x"></i>
									<div>mi-wallpaper <div class="opacity-50">ec37</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-watch mr-3 mi-2x"></i>
									<div>mi-watch <div class="opacity-50">ec38</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-watch-later mr-3 mi-2x"></i>
									<div>mi-watch-later <div class="opacity-50">ec39</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-wb-auto mr-3 mi-2x"></i>
									<div>mi-wb-auto <div class="opacity-50">ec3a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-wb-incandescent mr-3 mi-2x"></i>
									<div>mi-wb-incandescent <div class="opacity-50">ec3b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-wb-iridescent mr-3 mi-2x"></i>
									<div>mi-wb-iridescent <div class="opacity-50">ec3c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-wb-sunny mr-3 mi-2x"></i>
									<div>mi-wb-sunny <div class="opacity-50">ec3d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-wc mr-3 mi-2x"></i>
									<div>mi-wc <div class="opacity-50">ec3e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-web mr-3 mi-2x"></i>
									<div>mi-web <div class="opacity-50">ec3f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-web-asset mr-3 mi-2x"></i>
									<div>mi-web-asset <div class="opacity-50">ec40</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-weekend mr-3 mi-2x"></i>
									<div>mi-weekend <div class="opacity-50">ec41</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-whatshot mr-3 mi-2x"></i>
									<div>mi-whatshot <div class="opacity-50">ec42</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-widgets mr-3 mi-2x"></i>
									<div>mi-widgets <div class="opacity-50">ec43</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-wifi mr-3 mi-2x"></i>
									<div>mi-wifi <div class="opacity-50">ec44</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-wifi-lock mr-3 mi-2x"></i>
									<div>mi-wifi-lock <div class="opacity-50">ec45</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-wifi-tethering mr-3 mi-2x"></i>
									<div>mi-wifi-tethering <div class="opacity-50">ec46</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-work mr-3 mi-2x"></i>
									<div>mi-work <div class="opacity-50">ec47</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-wrap-text mr-3 mi-2x"></i>
									<div>mi-wrap-text <div class="opacity-50">ec48</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-youtube-searched-for mr-3 mi-2x"></i>
									<div>mi-youtube-searched-for <div class="opacity-50">ec49</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-zoom-in mr-3 mi-2x"></i>
									<div>mi-zoom-in <div class="opacity-50">ec4a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-zoom-out mr-3 mi-2x"></i>
									<div>mi-zoom-out <div class="opacity-50">ec4b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="mi-zoom-out-map mr-3 mi-2x"></i>
									<div>mi-zoom-out-map <div class="opacity-50">ec4c</div></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /material icon set -->

			</div>
			<!-- /content area -->


			<!-- Footer -->
			<div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</span>

					<ul class="navbar-nav ml-lg-auto">
						<li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
						<li class="nav-item"><a href="http://demo.interface.club/limitless/docs/" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
						<li class="nav-item"><a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-cart2 mr-2"></i> Purchase</span></a></li>
					</ul>
				</div>
			</div>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>