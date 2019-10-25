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
	<script src="../../../../global_assets/js/plugins/forms/styling/uniform.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/learning.js"></script>
	<!-- /theme JS files -->

</head>

<body class="sidebar-xs">

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
			<button class="navbar-toggler sidebar-mobile-component-toggle" type="button">
				<i class="icon-unfold"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>

				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-component-toggle d-none d-md-block">
						<i class="icon-drag-right"></i>
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
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-thumbs-up2"></i> <span>Icons</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Icons">
								<li class="nav-item"><a href="icons_icomoon.html" class="nav-link">Icomoon</a></li>
								<li class="nav-item"><a href="icons_material.html" class="nav-link">Material</a></li>
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
						<li class="nav-item nav-item-submenu nav-item-expanded nav-item-open">
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
								<li class="nav-item nav-item-submenu nav-item-expanded nav-item-open">
									<a href="#" class="nav-link">Learning</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="learning_list.html" class="nav-link active">List view</a></li>
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
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Learning</span> - List Layout</h4>
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
							<a href="learning_list.html" class="breadcrumb-item">Learning</a>
							<span class="breadcrumb-item active">List layout</span>
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

				<!-- Inner container -->
				<div class="d-flex align-items-start flex-column flex-md-row">

					<!-- Left content -->
					<div class="w-100 overflow-auto order-2 order-md-1">

						<!-- Horizontal cards -->
						<div class="row">
							<div class="col-xl-6">
								<div class="card blog-horizontal">
									<div class="card-body">
										<div class="card-img-actions mr-sm-3 mb-3 mb-sm-0">
											<a href="#course_preview" data-toggle="modal">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid card-img" alt="">
												<span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
											</a>
										</div>

										<div class="mb-3">
											<h5 class="d-flex font-weight-semibold flex-nowrap my-1">
												<a href="#" class="text-default mr-2">Data Governance</a>

												<span class="text-success ml-auto">$49.99</span>
											</h5>

											<ul class="list-inline list-inline-dotted text-muted mb-0">
												<li class="list-inline-item">By <a href="#" class="text-muted">Eugene Kopyov</a></li>
												<li class="list-inline-item">Nov 1st, 2016</li>
											</ul>
										</div>

										<p>When suspiciously goodness labrador understood rethought yawned grew piously endearingly inarticulate oh goodness jeez trout distinct hence cobra despite.</p>

										One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed <a href="#">[...]</a>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<ul class="list-inline list-inline-dotted mb-0">
											<li class="list-inline-item"><i class="icon-users mr-2"></i> 382</li>
											<li class="list-inline-item"><i class="icon-alarm mr-2"></i> 60 hours</li>
											<li class="list-inline-item">
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<span class="text-muted ml-1">(49)</span>
											</li>
										</ul>

										<div class="mt-2 mt-sm-0">
											<a href="#"><i class="icon-checkmark3 font-size-base mr-2"></i> Take course</a>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-6">
								<div class="card blog-horizontal">
									<div class="card-body">
										<div class="card-img-actions mr-sm-3 mb-3 mb-sm-0">
											<a href="#course_preview" data-toggle="modal">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid card-img" alt="">
												<span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
											</a>
										</div>

										<div class="mb-3">
											<h5 class="d-flex font-weight-semibold flex-nowrap my-1">
												<a href="#" class="text-default mr-2">Java language</a>

												<span class="text-success ml-auto">$54.90</span>
											</h5>

											<ul class="list-inline list-inline-dotted text-muted mb-0">
												<li class="list-inline-item">By <a href="#" class="text-muted">Malcolm Davis</a></li>
												<li class="list-inline-item">Oct 25th, 2016</li>
											</ul>
										</div>

										<p>"How about if I sleep a little bit longer and forget all this nonsense", he thought, but that was something.</p>

										However hard he threw himself onto his right, he always rolled back to where he was. He must <a href="#">[...]</a>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<ul class="list-inline list-inline-dotted mb-0">
											<li class="list-inline-item"><i class="icon-users mr-2"></i> 544</li>
											<li class="list-inline-item"><i class="icon-alarm mr-2"></i> 90 hours</li>
											<li class="list-inline-item">
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-half font-size-base text-warning-300"></i>
												<span class="text-muted ml-1">(53)</span>
											</li>
										</ul>

										<div class="mt-2 mt-sm-0">
											<a href="#"><i class="icon-checkmark3 font-size-base mr-2"></i> Take course</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xl-6">
								<div class="card blog-horizontal">
									<div class="card-body">
										<div class="card-img-actions mr-sm-3 mb-3 mb-sm-0">
											<a href="#course_preview" data-toggle="modal">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid card-img" alt="">
												<span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
											</a>
										</div>

										<div class="mb-3">
											<h5 class="d-flex font-weight-semibold flex-nowrap my-1">
												<a href="#" class="text-default mr-2">Python language</a>

												<span class="text-success ml-auto">$99.90</span>
											</h5>

											<ul class="list-inline list-inline-dotted text-muted mb-0">
												<li class="list-inline-item">By <a href="#" class="text-muted">Mark Staters</a></li>
												<li class="list-inline-item">Oct 26th, 2016</li>
											</ul>
										</div>

										<p>Anyone or become friendly with them. It can all go to Hell!" He felt a slight itch up on his belly.</p>

										Headboard so that he could lift his head better; found where the itch was, and saw that it <a href="#">[...]</a>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<ul class="list-inline list-inline-dotted mb-0">
											<li class="list-inline-item"><i class="icon-users mr-2"></i> 64</li>
											<li class="list-inline-item"><i class="icon-alarm mr-2"></i> 60 hours</li>
											<li class="list-inline-item">
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<span class="text-muted ml-1">(654)</span>
											</li>
										</ul>

										<div class="mt-2 mt-sm-0">
											<a href="#"><i class="icon-checkmark3 font-size-base mr-2"></i> Take course</a>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-6">
								<div class="card blog-horizontal">
									<div class="card-body">
										<div class="card-img-actions mr-sm-3 mb-3 mb-sm-0">
											<a href="#course_preview" data-toggle="modal">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid card-img" alt="">
												<span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
											</a>
										</div>

										<div class="mb-3">
											<h5 class="d-flex font-weight-semibold flex-nowrap my-1">
												<a href="#" class="text-default mr-2">LESS language</a>

												<span class="text-danger-400 ml-auto">Free</span>
											</h5>

											<ul class="list-inline list-inline-dotted text-muted mb-0">
												<li class="list-inline-item">By <a href="#" class="text-muted">James Alexander</a></li>
												<li class="list-inline-item"> Nov 3rd, 2016</li>
											</ul>
										</div>

										<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>

										I am alone, and feel the charm of existence in this spot, which was created for the bliss <a href="#">[...]</a>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<ul class="list-inline list-inline-dotted mb-0">
											<li class="list-inline-item"><i class="icon-users mr-2"></i> 272</li>
											<li class="list-inline-item"><i class="icon-alarm mr-2"></i> 15 hours</li>
											<li class="list-inline-item">
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-half font-size-base text-warning-300"></i>
												<span class="text-muted ml-1">(12)</span>
											</li>
										</ul>

										<div class="mt-2 mt-sm-0">
											<a href="#"><i class="icon-checkmark3 font-size-base mr-2"></i> Take course</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xl-6">
								<div class="card blog-horizontal">
									<div class="card-body">
										<div class="card-img-actions mr-sm-3 mb-3 mb-sm-0">
											<a href="#course_preview" data-toggle="modal">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid card-img" alt="">
												<span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
											</a>
										</div>

										<div class="mb-3">
											<h5 class="d-flex font-weight-semibold flex-nowrap my-1">
												<a href="#" class="text-default mr-2">Data Management</a>

												<span class="text-success ml-auto">$79.99</span>
											</h5>

											<ul class="list-inline list-inline-dotted text-muted mb-0">
												<li class="list-inline-item">By <a href="#" class="text-muted">Jeremy Victorino</a></li>
												<li class="list-inline-item">Nov 4th, 2016</li>
											</ul>
										</div>

										<p>I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was.</p>

										When, while the lovely valley teems with vapour around me, and the meridian sun strikes upper <a href="#">[...]</a>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<ul class="list-inline list-inline-dotted mb-0">
											<li class="list-inline-item"><i class="icon-users mr-2"></i> 34</li>
											<li class="list-inline-item"><i class="icon-alarm mr-2"></i> 80 hours</li>
											<li class="list-inline-item">
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-empty3 font-size-base text-warning-300"></i>
												<span class="text-muted ml-1">(8)</span>
											</li>
										</ul>

										<div class="mt-2 mt-sm-0">
											<a href="#"><i class="icon-checkmark3 font-size-base mr-2"></i> Take course</a>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-6">
								<div class="card blog-horizontal">
									<div class="card-body">
										<div class="card-img-actions mr-sm-3 mb-3 mb-sm-0">
											<a href="#course_preview" data-toggle="modal">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid card-img" alt="">
												<span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
											</a>
										</div>

										<div class="mb-3">
											<h5 class="d-flex font-weight-semibold flex-nowrap my-1">
												<a href="#" class="text-default mr-2">Web Development</a>

												<span class="text-success ml-auto">$39.99</span>
											</h5>

											<ul class="list-inline list-inline-dotted text-muted mb-0">
												<li class="list-inline-item">By <a href="#" class="text-muted">Margo Baker</a></li>
												<li class="list-inline-item">Nov 5th, 2016</li>
											</ul>
										</div>

										<p>I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth.</p>

										Thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks <a href="#">[...]</a>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<ul class="list-inline list-inline-dotted mb-0">
											<li class="list-inline-item"><i class="icon-users mr-2"></i> 84</li>
											<li class="list-inline-item"><i class="icon-alarm mr-2"></i> 60 hours</li>
											<li class="list-inline-item">
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-half font-size-base text-warning-300"></i>
												<span class="text-muted ml-1">(36)</span>
											</li>
										</ul>

										<div class="mt-2 mt-sm-0">
											<a href="#"><i class="icon-checkmark3 font-size-base mr-2"></i> Take course</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xl-6">
								<div class="card blog-horizontal">
									<div class="card-body">
										<div class="card-img-actions mr-sm-3 mb-3 mb-sm-0">
											<a href="#course_preview" data-toggle="modal">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid card-img" alt="">
												<span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
											</a>
										</div>

										<div class="mb-3">
											<h5 class="d-flex font-weight-semibold flex-nowrap my-1">
												<a href="#" class="text-default mr-2">SASS language</a>

												<span class="text-success ml-auto">$44.90</span>
											</h5>

											<ul class="list-inline list-inline-dotted text-muted mb-0">
												<li class="list-inline-item">By <a href="#" class="text-muted">Monica Smith</a></li>
												<li class="list-inline-item">Nov 6th, 2016</li>
											</ul>
										</div>

										<p>Who formed us in his own image, and the breath of that universal love which bears and sustains us.</p>

										When darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and absorb its <a href="#">[...]</a>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<ul class="list-inline list-inline-dotted mb-0">
											<li class="list-inline-item"><i class="icon-users mr-2"></i> 183</li>
											<li class="list-inline-item"><i class="icon-alarm mr-2"></i> 30 hours</li>
											<li class="list-inline-item">
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<span class="text-muted ml-1">(96)</span>
											</li>
										</ul>

										<div class="mt-2 mt-sm-0">
											<a href="#"><i class="icon-checkmark3 font-size-base mr-2"></i> Take course</a>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-6">
								<div class="card blog-horizontal">
									<div class="card-body">
										<div class="card-img-actions mr-sm-3 mb-3 mb-sm-0">
											<a href="#course_preview" data-toggle="modal">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid card-img" alt="">
												<span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
											</a>
										</div>

										<div class="mb-3">
											<h5 class="d-flex font-weight-semibold flex-nowrap my-1">
												<a href="#" class="text-default mr-2">Office Management</a>

												<span class="text-danger-400 ml-auto">Free</span>
											</h5>

											<ul class="list-inline list-inline-dotted text-muted mb-0">
												<li class="list-inline-item">By <a href="#" class="text-muted">Bastian Miller</a></li>
												<li class="list-inline-item">Nov 7th, 2016</li>
											</ul>
										</div>

										<p>Oh, would I could describe these conceptions, could impress upon paper all that is living so full and.</p>

										Oh my friend -- but it is too much for my strength -- I sink under the weight of the splendour <a href="#">[...]</a>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<ul class="list-inline list-inline-dotted mb-0">
											<li class="list-inline-item"><i class="icon-users mr-2"></i> 93</li>
											<li class="list-inline-item"><i class="icon-alarm mr-2"></i> 40 hours</li>
											<li class="list-inline-item">
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-half font-size-base text-warning-300"></i>
												<span class="text-muted ml-1">(57)</span>
											</li>
										</ul>

										<div class="mt-2 mt-sm-0">
											<a href="#"><i class="icon-checkmark3 font-size-base mr-2"></i> Take course</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xl-6">
								<div class="card blog-horizontal">
									<div class="card-body">
										<div class="card-img-actions mr-sm-3 mb-3 mb-sm-0">
											<a href="#course_preview" data-toggle="modal">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid card-img" alt="">
												<span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
											</a>
										</div>

										<div class="mb-3">
											<h5 class="d-flex font-weight-semibold flex-nowrap my-1">
												<a href="#" class="text-default mr-2">PHP language</a>

												<span class="text-danger-400 ml-auto">Free</span>
											</h5>

											<ul class="list-inline list-inline-dotted text-muted mb-0">
												<li class="list-inline-item">By <a href="#" class="text-muted">Jordana Mills</a></li>
												<li class="list-inline-item">Nov 8th, 2016</li>
											</ul>
										</div>

										<p>I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was.</p>

										When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper <a href="#">[...]</a>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<ul class="list-inline list-inline-dotted mb-0">
											<li class="list-inline-item"><i class="icon-users mr-2"></i> 301</li>
											<li class="list-inline-item"><i class="icon-alarm mr-2"></i> 20 hours</li>
											<li class="list-inline-item">
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-half font-size-base text-warning-300"></i>
												<i class="icon-star-empty3 font-size-base text-warning-300"></i>
												<span class="text-muted ml-1">(19)</span>
											</li>
										</ul>

										<div class="mt-2 mt-sm-0">
											<a href="#"><i class="icon-checkmark3 font-size-base mr-2"></i> Take course</a>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-6">
								<div class="card blog-horizontal">
									<div class="card-body">
										<div class="card-img-actions mr-sm-3 mb-3 mb-sm-0">
											<a href="#course_preview" data-toggle="modal">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid card-img" alt="">
												<span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
											</a>
										</div>

										<div class="mb-3">
											<h5 class="d-flex font-weight-semibold flex-nowrap my-1">
												<a href="#" class="text-default mr-2">Software testing</a>

												<span class="text-danger-400 ml-auto">Free</span>
											</h5>

											<ul class="list-inline list-inline-dotted text-muted mb-0">
												<li class="list-inline-item">By <a href="#" class="text-muted">Buzz Brenson</a></li>
												<li class="list-inline-item">Nov 9th, 2016</li>
											</ul>
										</div>

										<p>The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs thin.</p>

										"What's happened to me?" he thought. It wasn't a dream. His room, a proper human room although <a href="#">[...]</a>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<ul class="list-inline list-inline-dotted mb-0">
											<li class="list-inline-item"><i class="icon-users mr-2"></i> 48</li>
											<li class="list-inline-item"><i class="icon-alarm mr-2"></i> 90 hours</li>
											<li class="list-inline-item">
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<span class="text-muted ml-1">(4)</span>
											</li>
										</ul>

										<div class="mt-2 mt-sm-0">
											<a href="#"><i class="icon-checkmark3 font-size-base mr-2"></i> Take course</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xl-6">
								<div class="card blog-horizontal">
									<div class="card-body">
										<div class="card-img-actions mr-sm-3 mb-3 mb-sm-0">
											<a href="#course_preview" data-toggle="modal">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid card-img" alt="">
												<span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
											</a>
										</div>

										<div class="mb-3">
											<h5 class="d-flex font-weight-semibold flex-nowrap my-1">
												<a href="#" class="text-default mr-2">Server management</a>

												<span class="text-success ml-auto">$84.90</span>
											</h5>

											<ul class="list-inline list-inline-dotted text-muted mb-0">
												<li class="list-inline-item">By <a href="#" class="text-muted">Zachary Willson</a></li>
												<li class="list-inline-item">Nov 10th, 2016</li>
											</ul>
										</div>

										<p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman.</p>

										And above it there hung a picture that he had recently cut out of an illustrated magazine and <a href="#">[...]</a>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<ul class="list-inline list-inline-dotted mb-0">
											<li class="list-inline-item"><i class="icon-users mr-2"></i> 43</li>
											<li class="list-inline-item"><i class="icon-alarm mr-2"></i> 100 hours</li>
											<li class="list-inline-item">
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-half font-size-base text-warning-300"></i>
												<span class="text-muted ml-1">(64)</span>
											</li>
										</ul>

										<div class="mt-2 mt-sm-0">
											<a href="#"><i class="icon-checkmark3 font-size-base mr-2"></i> Take course</a>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-6">
								<div class="card blog-horizontal">
									<div class="card-body">
										<div class="card-img-actions mr-sm-3 mb-3 mb-sm-0">
											<a href="#course_preview" data-toggle="modal">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid card-img" alt="">
												<span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
											</a>
										</div>

										<div class="mb-3">
											<h5 class="d-flex font-weight-semibold flex-nowrap my-1">
												<a href="#" class="text-default mr-2">Database management</a>

												<span class="text-success ml-auto">$112.50</span>
											</h5>

											<ul class="list-inline list-inline-dotted text-muted mb-0">
												<li class="list-inline-item">By <a href="#" class="text-muted">William Miles</a></li>
												<li class="list-inline-item">Nov 11th, 2016</li>
											</ul>
										</div>

										<p>However hard he threw himself onto his right, he always rolled back to where he was fully right.</p>

										Travelling day in and day out. Doing business like this takes much more effort than doing <a href="#">[...]</a>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<ul class="list-inline list-inline-dotted mb-0">
											<li class="list-inline-item"><i class="icon-users mr-2"></i> 293</li>
											<li class="list-inline-item"><i class="icon-alarm mr-2"></i> 120 hours</li>
											<li class="list-inline-item">
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-half font-size-base text-warning-300"></i>
												<span class="text-muted ml-1">(86)</span>
											</li>
										</ul>

										<div class="mt-2 mt-sm-0">
											<a href="#"><i class="icon-checkmark3 font-size-base mr-2"></i> Take course</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xl-6">
								<div class="card blog-horizontal">
									<div class="card-body">
										<div class="card-img-actions mr-sm-3 mb-3 mb-sm-0">
											<a href="#course_preview" data-toggle="modal">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid card-img" alt="">
												<span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
											</a>
										</div>

										<div class="mb-3">
											<h5 class="d-flex font-weight-semibold flex-nowrap my-1">
												<a href="#" class="text-default mr-2">Graphic design</a>

												<span class="text-success ml-auto">$76.00</span>
											</h5>

											<ul class="list-inline list-inline-dotted text-muted mb-0">
												<li class="list-inline-item">By <a href="#" class="text-muted">Freddy Walden</a></li>
												<li class="list-inline-item">Nov 12th, 2016</li>
											</ul>
										</div>

										<p>Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting.</p>

										"How about if I sleep a little bit longer and forget all this nonsense", he thought, but that <a href="#">[...]</a>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<ul class="list-inline list-inline-dotted mb-0">
											<li class="list-inline-item"><i class="icon-users mr-2"></i> 419</li>
											<li class="list-inline-item"><i class="icon-alarm mr-2"></i> 160 hours</li>
											<li class="list-inline-item">
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<span class="text-muted ml-1">(38)</span>
											</li>
										</ul>

										<div class="mt-2 mt-sm-0">
											<a href="#"><i class="icon-checkmark3 font-size-base mr-2"></i> Take course</a>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-6">
								<div class="card blog-horizontal">
									<div class="card-body">
										<div class="card-img-actions mr-sm-3 mb-3 mb-sm-0">
											<a href="#course_preview" data-toggle="modal">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid card-img" alt="">
												<span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
											</a>
										</div>

										<div class="mb-3">
											<h5 class="d-flex font-weight-semibold flex-nowrap my-1">
												<a href="#" class="text-default mr-2">User experience</a>

												<span class="text-danger-400 ml-auto">Free</span>
											</h5>

											<ul class="list-inline list-inline-dotted text-muted mb-0">
												<li class="list-inline-item">By <a href="#" class="text-muted">Dori Laperriere</a></li>
												<li class="list-inline-item">Nov 13th, 2016</li>
											</ul>
										</div>

										<p>He felt a slight itch up on his belly; pushed himself slowly up on his back towards the headboard.</p>

										So that he could lift his head better; found where the itch was, and saw that it was covered <a href="#">[...]</a>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<ul class="list-inline list-inline-dotted mb-0">
											<li class="list-inline-item"><i class="icon-users mr-2"></i> 190</li>
											<li class="list-inline-item"><i class="icon-alarm mr-2"></i> 200 hours</li>
											<li class="list-inline-item">
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-half font-size-base text-warning-300"></i>
												<i class="icon-star-empty3 font-size-base text-warning-300"></i>
												<span class="text-muted ml-1">(193)</span>
											</li>
										</ul>

										<div class="mt-2 mt-sm-0">
											<a href="#"><i class="icon-checkmark3 font-size-base mr-2"></i> Take course</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xl-6">
								<div class="card blog-horizontal">
									<div class="card-body">
										<div class="card-img-actions mr-sm-3 mb-3 mb-sm-0">
											<a href="#course_preview" data-toggle="modal">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid card-img" alt="">
												<span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
											</a>
										</div>

										<div class="mb-3">
											<h5 class="d-flex font-weight-semibold flex-nowrap my-1">
												<a href="#" class="text-default mr-2">Human relationships</a>

												<span class="text-danger-400 ml-auto">Free</span>
											</h5>

											<ul class="list-inline list-inline-dotted text-muted mb-0">
												<li class="list-inline-item">By <a href="#" class="text-muted">Vanessa Aurelius</a></li>
												<li class="list-inline-item">Nov 14th, 2016</li>
											</ul>
										</div>

										<p>Which he didn't know what to make of; and when he tried to feel the place with one of his legs he drew.</p>

										It quickly back because as soon as he touched it he was overcome by a cold shudder. He slid <a href="#">[...]</a>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<ul class="list-inline list-inline-dotted mb-0">
											<li class="list-inline-item"><i class="icon-users mr-2"></i> 205</li>
											<li class="list-inline-item"><i class="icon-alarm mr-2"></i> 80 hours</li>
											<li class="list-inline-item">
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-half font-size-base text-warning-300"></i>
												<span class="text-muted ml-1">(128)</span>
											</li>
										</ul>

										<div class="mt-2 mt-sm-0">
											<a href="#"><i class="icon-checkmark3 font-size-base mr-2"></i> Take course</a>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-6">
								<div class="card blog-horizontal">
									<div class="card-body">
										<div class="card-img-actions mr-sm-3 mb-3 mb-sm-0">
											<a href="#course_preview" data-toggle="modal">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid card-img" alt="">
												<span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
											</a>
										</div>

										<div class="mb-3">
											<h5 class="d-flex font-weight-semibold flex-nowrap my-1">
												<a href="#" class="text-default mr-2">Leadership</a>

												<span class="text-success ml-auto">$55.00</span>
											</h5>

											<ul class="list-inline list-inline-dotted text-muted mb-0">
												<li class="list-inline-item">By <a href="#" class="text-muted">Nathan Jacobson</a></li>
												<li class="list-inline-item">Nov 15, 2016</li>
											</ul>
										</div>

										<p>"Getting up early all the time", he thought, "it makes you very stupid. You've got to get enough sleep.</p>

										For instance, whenever I go back to the guest house during the morning to copy out the contract <a href="#">[...]</a>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<ul class="list-inline list-inline-dotted mb-0">
											<li class="list-inline-item"><i class="icon-users mr-2"></i> 82</li>
											<li class="list-inline-item"><i class="icon-alarm mr-2"></i> 90 hours</li>
											<li class="list-inline-item">
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<span class="text-muted ml-1">(27)</span>
											</li>
										</ul>

										<div class="mt-2 mt-sm-0">
											<a href="#"><i class="icon-checkmark3 font-size-base mr-2"></i> Take course</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xl-6">
								<div class="card blog-horizontal">
									<div class="card-body">
										<div class="card-img-actions mr-sm-3 mb-3 mb-sm-0">
											<a href="#course_preview" data-toggle="modal">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid card-img" alt="">
												<span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
											</a>
										</div>

										<div class="mb-3">
											<h5 class="d-flex font-weight-semibold flex-nowrap my-1">
												<a href="#" class="text-default mr-2">Business development</a>

												<span class="text-success ml-auto">$95.90</span>
											</h5>

											<ul class="list-inline list-inline-dotted text-muted mb-0">
												<li class="list-inline-item">By <a href="#" class="text-muted">Barbara Walden</a></li>
												<li class="list-inline-item">Nov 16th, 2016</li>
											</ul>
										</div>

										<p>But who knows, maybe that would be the best thing for me. If I didn't have my parents to think about.</p>

										I'd have gone up to the boss and told him just what I think, tell him everything I would let <a href="#">[...]</a>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<ul class="list-inline list-inline-dotted mb-0">
											<li class="list-inline-item"><i class="icon-users mr-2"></i> 67</li>
											<li class="list-inline-item"><i class="icon-alarm mr-2"></i> 80 hours</li>
											<li class="list-inline-item">
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-half font-size-base text-warning-300"></i>
												<span class="text-muted ml-1">(59)</span>
											</li>
										</ul>

										<div class="mt-2 mt-sm-0">
											<a href="#"><i class="icon-checkmark3 font-size-base mr-2"></i> Take course</a>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-6">
								<div class="card blog-horizontal">
									<div class="card-body">
										<div class="card-img-actions mr-sm-3 mb-3 mb-sm-0">
											<a href="#course_preview" data-toggle="modal">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid card-img" alt="">
												<span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
											</a>
										</div>

										<div class="mb-3">
											<h5 class="d-flex font-weight-semibold flex-nowrap my-1">
												<a href="#" class="text-default mr-2">Business operations</a>

												<span class="text-success ml-auto">$89.90</span>
											</h5>

											<ul class="list-inline list-inline-dotted text-muted mb-0">
												<li class="list-inline-item">By <a href="#" class="text-muted">Craig Johnson</a></li>
												<li class="list-inline-item">Nov 17th, 2016</li>
											</ul>
										</div>

										<p>And it's a funny sort of business to be sitting up there at your desk, talking down at your subordinates.</p>

										Well, there's still some hope; once I've got the money together to pay off my parents' debt <a href="#">[...]</a>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<ul class="list-inline list-inline-dotted mb-0">
											<li class="list-inline-item"><i class="icon-users mr-2"></i> 42</li>
											<li class="list-inline-item"><i class="icon-alarm mr-2"></i> 90 hours</li>
											<li class="list-inline-item">
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<span class="text-muted ml-1">(432)</span>
											</li>
										</ul>

										<div class="mt-2 mt-sm-0">
											<a href="#"><i class="icon-checkmark3 font-size-base mr-2"></i> Take course</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /horizontal cards -->


						<!-- Pagination -->
						<div class="d-flex justify-content-center mt-3 mb-3">
							<ul class="pagination">
								<li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-small-right"></i></a></li>
								<li class="page-item active"><a href="#" class="page-link">1</a></li>
								<li class="page-item"><a href="#" class="page-link">2</a></li>
								<li class="page-item"><a href="#" class="page-link">3</a></li>
								<li class="page-item"><a href="#" class="page-link">4</a></li>
								<li class="page-item"><a href="#" class="page-link">5</a></li>
								<li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-small-left"></i></a></li>
							</ul>
						</div>
						<!-- /pagination -->

					</div>
					<!-- /left content -->


					<!-- Right sidebar component -->
					<div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-right border-0 shadow-0 order-1 order-md-2 sidebar-expand-md">

						<!-- Sidebar content -->
						<div class="sidebar-content">

							<!-- Find course -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Find course</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<form class="mb-3" action="#">
										<div class="form-group form-group-feedback form-group-feedback-right">
											<input type="search" class="form-control" placeholder="Type and hit Enter">
											<div class="form-control-feedback">
												<i class="icon-search4 font-size-base text-muted"></i>
											</div>
										</div>
									</form>

									<form action="#">
										<div class="form-group">
											<div class="font-size-xs text-uppercase text-muted mb-3">Categories</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Development
													<span class="text-muted ml-1">(83)</span>
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Design
													<span class="text-muted ml-1">(92)</span>
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Management
													<span class="text-muted ml-1">(36)</span>
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Finances
													<span class="text-muted ml-1">(50)</span>
												</label>
											</div>
										</div>

										<div class="form-group">
											<div class="font-size-xs text-uppercase text-muted mb-3">Price</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="radio" class="form-input-styled" checked data-fouc>
													All courses
												</label>	
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="radio" class="form-input-styled" data-fouc>
													Free courses
												</label>	
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="radio" class="form-input-styled" data-fouc>
													Paid courses
												</label>	
											</div>
										</div>

										<div class="form-group">
											<div class="font-size-xs text-uppercase text-muted mb-3">Status</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Registration
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Progress
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Completed
												</label>
											</div>
										</div>

										<div class="form-group">
											<div class="font-size-xs text-uppercase text-muted mb-3">Duration</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													0 - 50 hours
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													51 - 100 hours
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													101+ hours
												</label>
											</div>
										</div>

										<div class="form-group">
											<div class="font-size-xs text-uppercase text-muted mb-3">Trainer</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Eugene Kopyov
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													James Alexander
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Jeremy Victorino
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Bastian Miller
												</label>
											</div>
										</div>

										<button type="submit" class="btn bg-blue btn-block">
											<i class="icon-filter4 mr-2"></i>
											Filter
										</button>
									</form>
								</div>
							</div>
							<!-- /find course -->


							<!-- Categories -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Categories</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body p-0">
									<div class="nav nav-sidebar mb-2">
										<li class="nav-item-header font-size-xs text-uppercase">Development</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												Frontend development
												<span class="badge badge-secondary badge-pill ml-auto">37</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												Backend development
												<span class="badge badge-secondary badge-pill ml-auto">58</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												Engineering
												<span class="badge badge-secondary badge-pill ml-auto">39</span>
											</a>
										</li>

										<li class="nav-item-header font-size-xs text-uppercase">Design</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												Interface design
												<span class="badge badge-secondary badge-pill ml-auto">21</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												User experience
												<span class="badge badge-secondary badge-pill ml-auto">10</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												Web design
												<span class="badge badge-secondary badge-pill ml-auto">26</span>
											</a>
										</li>
									</div>
								</div>
							</div>
							<!-- /categories -->


							<!-- Assigned users -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Assigned users</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<ul class="media-list">
										<li class="media">
											<a href="#" class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</a>

											<div class="media-body">
												<div class="font-weight-semibold">Rebecca Jameson</div>
												<span class="font-size-sm text-muted">Web developer</span>
											</div>

											<div class="ml-3 align-self-center">
												<div class="dropdown">
													<a href="#" class="text-default dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-more2"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
														<a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
														<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="icon-stars"></i> Rate trainer</a>
													</div>
												</div>
											</div>
										</li>

										<li class="media">
											<a href="#" class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</a>

											<div class="media-body">
												<div class="font-weight-semibold">Walter Sommers</div>
												<span class="font-size-sm text-muted">Lead developer</span>
											</div>

											<div class="ml-3 align-self-center">
												<div class="dropdown">
													<a href="#" class="text-default dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-more2"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
														<a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
														<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="icon-stars"></i> Rate trainer</a>
													</div>
												</div>
											</div>
										</li>

										<li class="media">
											<a href="#" class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</a>

											<div class="media-body">
												<div class="font-weight-semibold">Otto Gerwald</div>
												<span class="font-size-sm text-muted">Front end developer</span>
											</div>

											<div class="ml-3 align-self-center">
												<div class="dropdown">
													<a href="#" class="text-default dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-more2"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
														<a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
														<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="icon-stars"></i> Rate trainer</a>
													</div>
												</div>
											</div>
										</li>

										<li class="media">
											<a href="#" class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</a>

											<div class="media-body">
												<div class="font-weight-semibold">Vince Satmann</div>
												<span class="font-size-sm text-muted">UX expert</span>
											</div>

											<div class="ml-3 align-self-center">
												<div class="dropdown">
													<a href="#" class="text-default dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-more2"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
														<a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
														<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="icon-stars"></i> Rate trainer</a>
													</div>
												</div>
											</div>
										</li>

										<li class="media">
											<a href="#" class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</a>

											<div class="media-body">
												<div class="font-weight-semibold">Jason Leroy</div>
												<span class="font-size-sm text-muted">SEO specialist</span>
											</div>

											<div class="ml-3 align-self-center">
												<div class="dropdown">
													<a href="#" class="text-default dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-more2"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
														<a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
														<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="icon-stars"></i> Rate trainer</a>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- /assigned users -->


							<!-- Upcoming courses -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Upcoming courses</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<ul class="media-list">
										<li class="media">
											<div class="mr-3">
												<h5 class="text-center text-success mb-0">02</h5>
												<div class="font-size-sm text-muted line-height-1">Nov</div>												
											</div>

											<div class="media-body">
												<span class="font-weight-semibold">Web development strategy</span> course by <a href="#">James Franko</a>
												<ul class="list-inline list-inline-dotted mt-1 mb-0">
													<li class="list-inline-item"><span class="text-muted">120 hours</span></li>
													<li class="list-inline-item">
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-half font-size-base text-warning-300"></i>
													</li>
												</ul>
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<h5 class="text-center text-success mb-0">15</h5>
												<div class="font-size-sm text-muted line-height-1">Nov</div>												
											</div>

											<div class="media-body">
												<span class="font-weight-semibold">Business development</span> course by <a href="#">Jeremy Victorino</a>
												<ul class="list-inline list-inline-dotted mt-1 mb-0">
													<li class="list-inline-item"><span class="text-muted">40 hours</span></li>
													<li class="list-inline-item">
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-half font-size-base text-warning-300"></i>
													</li>
												</ul>
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<h5 class="text-center text-success mb-0">01</h5>
												<div class="font-size-sm text-muted line-height-1">Dec</div>												
											</div>

											<div class="media-body">
												<span class="font-weight-semibold">Digital marketing</span> course by <a href="#">Monica Smith</a>
												<ul class="list-inline list-inline-dotted mt-1 mb-0">
													<li class="list-inline-item"><span class="text-muted">100 hours</span></li>
													<li class="list-inline-item">
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
													</li>
												</ul>
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<h5 class="text-center text-success mb-0">15</h5>
												<div class="font-size-sm text-muted line-height-1">Dec</div>												
											</div>

											<div class="media-body">
												<span class="font-weight-semibold">User experience design</span> course by <a href="#">Buzz Brenson</a>
												<ul class="list-inline list-inline-dotted mt-1 mb-0">
													<li class="list-inline-item"><span class="text-muted">90 hours</span></li>
													<li class="list-inline-item">
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-empty3 font-size-base text-warning-300"></i>
														<i class="icon-star-half font-size-base text-warning-300"></i>
													</li>
												</ul>
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<h5 class="text-center text-success mb-0">20</h5>
												<div class="font-size-sm text-muted line-height-1">Dec</div>												
											</div>

											<div class="media-body">
												<span class="font-weight-semibold">Digital painting</span> course by <a href="#">Zachary Willson</a>
												<ul class="list-inline list-inline-dotted mt-1 mb-0">
													<li class="list-inline-item"><span class="text-muted">120 hours</span></li>
													<li class="list-inline-item">
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
													</li>
												</ul>
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<h5 class="text-center text-success mb-0">04</h5>
												<div class="font-size-sm text-muted line-height-1">Jan</div>												
											</div>

											<div class="media-body">
												<span class="font-weight-semibold">Financial analysis</span> course by <a href="#">Dori Laperriere</a>
												<ul class="list-inline list-inline-dotted mt-1 mb-0">
													<li class="list-inline-item"><span class="text-muted">60 hours</span></li>
													<li class="list-inline-item">
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
													</li>
												</ul>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- /upcoming courses -->

						</div>
						<!-- /sidebar content -->

					</div>
					<!-- /right sidebar component -->

				</div>
				<!-- /inner container -->

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


	<!-- Course preview modal -->
	<div class="modal fade" id="course_preview" tabindex="-1">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h6 class="modal-title">Course preview</h6>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<div class="modal-body">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vlDzYIIOYmM" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Take this course</button>
				</div>
			</div>
		</div>
	</div>
	<!-- /course preview modal -->

</body>
</html>