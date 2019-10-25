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
	<script src="../../../../global_assets/js/plugins/extensions/jquery_ui/widgets.min.js"></script>
	<script src="../../../../global_assets/js/plugins/extensions/jquery_ui/interactions.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/switch.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/inputs/touchspin.min.js"></script>
	<script src="../../../../global_assets/js/plugins/sliders/nouislider.min.js"></script>


	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/content_cards_header.js"></script>
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
						<li class="nav-item nav-item-submenu nav-item-expanded nav-item-open">
							<a href="#" class="nav-link"><i class="icon-puzzle2"></i> <span>Content styling</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Content styling">
								<li class="nav-item"><a href="content_page_header.html" class="nav-link">Page header</a></li>
								<li class="nav-item"><a href="content_page_footer.html" class="nav-link disabled">Page footer <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="content_cards.html" class="nav-link">Cards</a></li>
								<li class="nav-item"><a href="content_cards_content.html" class="nav-link">Card content</a></li>
								<li class="nav-item"><a href="content_cards_layouts.html" class="nav-link">Card layouts</a></li>
								<li class="nav-item"><a href="content_cards_header.html" class="nav-link active">Card header elements</a></li>
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
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Content</span> - Card Header</h4>
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
							<a href="content_cards_header.html" class="breadcrumb-item">Content</a>
							<span class="breadcrumb-item active">Card header</span>
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

				<!-- Basic header options -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Basic elements
					</h6>
					<span class="text-muted d-block">Just a mix of basic elements</span>
				</div>

				<div class="row">
					<div class="col-lg-6">

						<!-- Title with left icon -->
						<div class="card">
							<div class="card-header bg-white">
								<h6 class="card-title">
									<i class="icon-cog3 mr-2"></i>
									Left title icon
								</h6>
							</div>
							
							<div class="card-body">
								Card title with left icon
							</div>
						</div>
						<!-- /title with left icon -->


						<!-- Single icon -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Single icon</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item"><i class="icon-cog3"></i></a>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body">
								Card header with a single icon
							</div>
						</div>
						<!-- /single icon -->


						<!-- Multiple icons -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Icon group</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item"><i class="icon-mention"></i></a>
				                		<a href="#" class="list-icons-item"><i class="icon-screen-full"></i></a>
				                		<a href="#" class="list-icons-item"><i class="icon-mail5"></i></a>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body">
								Card header with multiple icons group
							</div>
						</div>
						<!-- /multiple icons -->


						<!-- Title with subtitle -->
						<div class="card">
							<div class="card-header bg-white">
								<h6 class="card-title">
									Subtitle
									<span class="font-size-base text-muted ml-2">Some alt description</span>
								</h6>
							</div>
							
							<div class="card-body">
								Card title with subtitle using inline elements with <code>.font-size-base</code> class
							</div>
						</div>
						<!-- /title with subtitle -->


						<!-- Inline list -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Inline list</h6>
								<div class="header-elements">
									<ul class="list-inline mb-0">
										<li class="list-inline-item">Version 2.0</li>
										<li class="list-inline-item">December 12th</li>
									</ul>
								</div>
							</div>
							
							<div class="card-body">
								Card header with simple inline list
							</div>
						</div>
						<!-- /inline list -->


						<!-- Linked inline list -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Linked inline list</h6>
								<div class="header-elements">
									<ul class="list-inline mb-0">
										<li class="list-inline-item"><a href="#">Download</a></li>
										<li class="list-inline-item"><a href="#">Upload</a></li>
										<li class="list-inline-item"><a href="#">Generate</a></li>
									</ul>
								</div>
							</div>
							
							<div class="card-body">
								Card header with linked inline list
							</div>
						</div>
						<!-- /linked inline list -->


						<!-- Title badge -->
						<div class="card">
							<div class="card-header bg-white">
								<h6 class="card-title">
									Title badge
									<span class="badge bg-success ml-2">New</span>
								</h6>
							</div>
							
							<div class="card-body">
								Card title with badge element
							</div>
						</div>
						<!-- /title badge -->


						<!-- Title pill badge -->
						<div class="card">
							<div class="card-header bg-white">
								<h6 class="card-title">
									Title pill badge
									<span class="badge badge-pill bg-grey-700 ml-2">387</span>
								</h6>
							</div>
							
							<div class="card-body">
								Card title with pill badge element
							</div>
						</div>
						<!-- /title pill badge -->


						<!-- Pagination -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Pagination</h6>
								<div class="header-elements">
									<ul class="pagination pagination-flat pagination-sm justify-content-around">
										<li class="page-item"><a href="#" class="page-link">&larr;</a></li>
										<li class="page-item"><a href="#" class="page-link">1</a></li>
										<li class="page-item active"><a href="#" class="page-link">2</a></li>
										<li class="page-item"><a href="#" class="page-link">3</a></li>
										<li class="page-item"><a href="#" class="page-link">&rarr;</a></li>
									</ul>
								</div>
							</div>
							
							<div class="card-body">
								Card header pagination. Available in 3 sizes
							</div>
						</div>
						<!-- /pagination -->

					</div>

					<div class="col-lg-6">

						<!-- Title with right icon -->
						<div class="card">
							<div class="card-header bg-white">
								<h6 class="card-title">
									Right title icon
									<i class="icon-cog3 ml-2"></i>
								</h6>
							</div>
							
							<div class="card-body">
								Card title with right icon
							</div>
						</div>
						<!-- /title with right icon -->


						<!-- Single icon dropdown -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Icon dropdown</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<div class="dropdown">
				                			<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item">Action</a>
												<a href="#" class="dropdown-item">Another action</a>
												<a href="#" class="dropdown-item">Something else here</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item">One more separated line</a>
											</div>
				                		</div>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body">
								Card header with single icon and dropdown
							</div>
						</div>
						<!-- /single icon dropdown -->


						<!-- Multiple icon dropdown -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Icons group with dropdown</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item"><i class="icon-dribbble3"></i></a>
				                		<a href="#" class="list-icons-item"><i class="icon-wordpress"></i></a>
				                		<div class="list-icons-item dropdown">
					                		<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-github4"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item">Action</a>
												<a href="#" class="dropdown-item">Another action</a>
												<a href="#" class="dropdown-item">Something else here</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item">One more separated line</a>
											</div>
				                		</div>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body">
								Card header with multiple icons and dropdown menu
							</div>
						</div>
						<!-- /multiple icon dropdowns -->


						<!-- Custom text -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Heading text</h6>
								<div class="header-elements">
									<span><i class="icon-github4 mr-2"></i> Some text or <a href="#">link</a> and icon</span>
								</div>
							</div>
							
							<div class="card-body">
								Card header text. Make sure the text is wrapped in inline element
							</div>
						</div>
						<!-- /custom text -->


						<!-- Bullet list -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Bullet list</h6>
								<div class="header-elements">
									<ul class="list-inline list-inline-dotted mb-0">
										<li class="list-inline-item">Version 2.0</li>
										<li class="list-inline-item">December 12th</li>
									</ul>
								</div>
							</div>
							
							<div class="card-body">
								Card header with bullet inline list
							</div>
						</div>
						<!-- /bullet list -->


						<!-- Linked bullet list -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Linked bullet list</h6>
								<div class="header-elements">
									<ul class="list-inline list-inline-dotted mb-0">
										<li class="list-inline-item"><a href="#">Download</a></li>
										<li class="list-inline-item"><a href="#">Upload</a></li>
										<li class="list-inline-item"><a href="#">Generate</a></li>
									</ul>
								</div>
							</div>
							
							<div class="card-body">
								Card header with linked bullet inline list
							</div>
						</div>
						<!-- /linked bullet list -->


						<!-- Header badge -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Header badge</h6>
								<div class="header-elements">
									<span class="badge badge-danger">Badge</span>
								</div>
							</div>
							
							<div class="card-body">
								Card header with <code>.badge</code> element
							</div>
						</div>
						<!-- /header badge -->


						<!-- Header pill badge -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Header pill badge</h6>
								<div class="header-elements">
									<span class="badge badge-pill bg-indigo-400">578</span>
								</div>
							</div>
							
							<div class="card-body">
								Card header with <code>.badge-pill</code> element
							</div>
						</div>
						<!-- /header pill badge -->


						<!-- Pager -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Heading pager</h6>
								<div class="header-elements">
									<ul class="pagination pagination-sm pagination-pager justify-content-between">
										<li class="page-item"><a href="#" class="page-link">&larr; &nbsp; Previous</a></li>
										<li class="page-item"><a href="#" class="page-link">Next &nbsp; &rarr;</a></li>
									</ul>
								</div>
							</div>
							
							<div class="card-body">
								Card header pager. Available in 3 sizes
							</div>
						</div>
						<!-- /pager -->

					</div>
				</div>
				<!-- /basic header options -->


				<!-- Header thumbnails -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Card header thumbnails
					</h6>
					<span class="text-muted d-block">Single and thumbnail groups</span>
				</div>

				<div class="row">
					<div class="col-lg-6">

						<!-- Single thumbnail -->
						<div class="card">
							<div class="card-header bg-white py-2 header-elements-inline">
								<h6 class="card-title">Single thumbnail</h6>
								<div class="header-elements">
									<ul class="list-inline mb-0">
										<li class="list-inline-item">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
										</li>
									</ul>
								</div>
							</div>
							
							<div class="card-body">
								Card header with single thumbnail
							</div>
						</div>
						<!-- /single thumbnail -->


						<!-- Thumbnail group -->
						<div class="card">
							<div class="card-header bg-white py-2 header-elements-sm-inline">
								<h6 class="card-title">Thumbnail group</h6>
								<div class="header-elements">
									<ul class="list-inline list-inline-condensed mb-0">
										<li class="list-inline-item">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
										</li>
										<li class="list-inline-item">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
										</li>
										<li class="list-inline-item">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
										</li>
									</ul>
								</div>
							</div>
							
							<div class="card-body">
								Card header with thumbnail group
							</div>
						</div>
						<!-- /thumbnail group -->


						<!-- Thumbnail with badge -->
						<div class="card">
							<div class="card-header bg-white py-2 header-elements-inline">
								<h6 class="card-title">Thumb with badge</h6>
								<div class="header-elements">
									<ul class="list-inline mb-0">
										<li class="list-inline-item">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
											<span class="badge badge-pill badge-float bg-danger border-1 border-white">9</span>
										</li>
									</ul>
								</div>
							</div>
							
							<div class="card-body">
								Card header thumbnail with badge
							</div>
						</div>
						<!-- /thumbnail with badge -->

					</div>

					<div class="col-lg-6">

						<!-- Single linked thumbnail -->
						<div class="card">
							<div class="card-header bg-white py-2 header-elements-inline">
								<h6 class="card-title">Linked thumbnail</h6>
								<div class="header-elements">
									<ul class="list-inline mb-0">
										<li class="list-inline-item">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
											</a>
										</li>
									</ul>
								</div>
							</div>
							
							<div class="card-body">
								Card header with single linked thumbnail
							</div>
						</div>
						<!-- /single linked thumbnail -->


						<!-- Linked thumbnail group -->
						<div class="card">
							<div class="card-header bg-white py-2 header-elements-sm-inline">
								<h6 class="card-title">Linked thumbnail group</h6>
								<div class="header-elements">
									<ul class="list-inline list-inline-condensed mb-0">
										<li class="list-inline-item">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
											</a>
										</li>
										<li class="list-inline-item">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
											</a>
										</li>
										<li class="list-inline-item">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
											</a>
										</li>
									</ul>
								</div>
							</div>
							
							<div class="card-body">
								Card header with linked thumbnail group
							</div>
						</div>
						<!-- /linked thumbnail group -->


						<!-- Thumbnail with badge mark -->
						<div class="card">
							<div class="card-header bg-white py-2 header-elements-inline">
								<h6 class="card-title">Thumb with badge mark</h6>
								<div class="header-elements">
									<ul class="list-inline mb-0">
										<li class="list-inline-item">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
											<span class="badge badge-mark badge-float border-success mt-1 mr-1"></span>
										</li>
									</ul>
								</div>
							</div>
							
							<div class="card-body">
								Card header thumbnail with badge mark
							</div>
						</div>
						<!-- /thumbnail with badge mark -->

					</div>
				</div>
				<!-- /header thumbnails -->


				<!-- Card controls -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Card controls
					</h6>
					<span class="text-muted d-block">Collapse/expand, move, remove, reload, fullscreen and modal</span>
				</div>

				<div class="row row-sortable">
					<div class="col-lg-6">

						<!-- Collapse/expand card -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Collapse/expand card content</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body">
								Use <code>data-action="collapse"</code> attribute to add collapsible functionality to the card body
							</div>
						</div>
						<!-- /collapse/expand card -->


						<!-- Reload action -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Reload card content</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="reload"></a>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body">
								Use <code>data-action="reload"</code> attribute to add show spinner with overlay and block user interactions
							</div>
						</div>
						<!-- /reload action -->


						<!-- Remove action -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Remove card</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body">
								Use <code>data-action="remove"</code> attribute to add an option to collapse-and-remove functionality
							</div>
						</div>
						<!-- /Remove action -->

					</div>

					<div class="col-lg-6">

						<!-- Move action -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Move (sort) card</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="move"></a>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body">
								Use <code>data-action="move"</code> attribute to make card sortable (draggable) within specified container
							</div>
						</div>
						<!-- /move action -->


						<!-- Fullscreen mode -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Fullscreen mode</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="fullscreen"></a>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body">
								Use <code>data-action="fullscreen"</code> attribute to add an option to display card in full screen mode
							</div>
						</div>
						<!-- /fullscreen mode -->


						<!-- Toggle modal -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Toggle modal</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#settings" class="list-icons-item" data-action="modal" data-toggle="modal"></a>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body">
								Use <code>data-action="modal"</code> attribute to toggle modal with content. Make sure the markup exists
							</div>
						</div>
						<!-- /toggle modal -->

					</div>
				</div>
				<!-- /card controls -->


				<!-- Header form components -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Form components
					</h6>
					<span class="text-muted d-block">A set of different form elements</span>
				</div>

				<div class="row">
					<div class="col-lg-6">

						<!-- Single checkbox -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Single checkbox</h6>
								<div class="header-elements">
									<form action="#">
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-input-styled" checked data-fouc>
												Checked
											</label>
										</div>
									</form>
								</div>
							</div>
							
							<div class="card-body">
								Single checkbox. Available in both directions
							</div>
						</div>
						<!-- /single checkbox -->


						<!-- Checkbox group -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Checkbox group</h6>
								<div class="header-elements">
									<form class="d-inline-flex" action="#">
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input type="checkbox" class="form-input-styled" data-fouc>
												Unchecked
											</label>
										</div>

										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input type="checkbox" class="form-input-styled" checked data-fouc>
												Checked
											</label>
										</div>
									</form>
								</div>
							</div>
							
							<div class="card-body">
								Header with group of inline checkboxes
							</div>
						</div>
						<!-- /checkbox group -->


						<!-- Switchery toggle -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Switchery toggle</h6>
								<div class="header-elements">
									<form action="#">
										<div class="form-check form-check-right form-check-switchery">
											<label class="form-check-label">
												<input type="checkbox" class="form-input-switchery" checked data-fouc>
												Enable
											</label>
										</div>
									</form>
								</div>
							</div>
							
							<div class="card-body">
								Switchery toggle. Available in all styles and sizes
							</div>
						</div>
						<!-- /switchery toggle -->


						<!-- Input field -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Text input</h6>
								<div class="header-elements">
									<form action="#">
										<div class="form-group mb-0">
											<input type="text" class="form-control wmin-200" placeholder="Search...">
										</div>
									</form>
								</div>
							</div>
							
							<div class="card-body">
								Header with basic text input field
							</div>
						</div>
						<!-- /input field -->


						<!-- File input -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">File input</h6>
								<div class="header-elements">
									<form action="#">
										<div class="form-group wmin-200">
											<input type="file" class="form-input-styled" data-fouc>
										</div>
									</form>
								</div>
							</div>
							
							<div class="card-body">
								Card header with custom file input field
							</div>
						</div>
						<!-- /file input -->

					</div>

					<div class="col-lg-6">

						<!-- Single radio -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Single radio</h6>
								<div class="header-elements">
									<form action="#">
										<div class="form-check">
											<label class="form-check-label">
												<input type="radio" name="single-radio" class="form-input-styled" checked data-fouc>
												Selected
											</label>
										</div>
									</form>
								</div>
							</div>
							
							<div class="card-body">
								Single radio. Available in both directions
							</div>
						</div>
						<!-- /single radio -->


						<!-- Radio group -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Radio group</h6>
								<div class="header-elements">
									<form class="d-inline-flex" action="#">
										<div class="form-check form-check-inline mb-0">
											<label class="form-check-label">
												<input type="radio" name="group-radio" class="form-input-styled" data-fouc>
												Unselected
											</label>
										</div>

										<div class="form-check form-check-inline mr-0">
											<label class="form-check-label">
												<input type="radio" name="group-radio" class="form-input-styled" checked data-fouc>
												Selected
											</label>
										</div>
									</form>
								</div>
							</div>
							
							<div class="card-body">
								Header with group of inline radio buttons
							</div>
						</div>
						<!-- /radio group -->


						<!-- Toggle switch -->
						<div class="card">
							<div class="card-header bg-white py-2 header-elements-inline">
								<h6 class="card-title">Toggle switch</h6>
								<div class="header-elements">
									<form action="#">
										<div class="form-check form-check-switch">
											<label class="form-check-label">
												<input type="checkbox" data-on-text="On" data-off-text="Off" class="form-input-switch" data-size="small" checked data-fouc>
											</label>
										</div>
									</form>
								</div>
							</div>
							
							<div class="card-body">
								Card header with Bootstrap toggle switch
							</div>
						</div>
						<!-- /toggle switch -->


						<!-- Field with icon feedback -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Input with icon</h6>
								<div class="header-elements">
									<form action="#">
										<div class="form-group-feedback form-group-feedback-right">
											<input type="search" class="form-control wmin-200" placeholder="Search...">
											<div class="form-control-feedback">
												<i class="icon-search4 font-size-base text-muted"></i>
											</div>
										</div>
									</form>
								</div>
							</div>
							
							<div class="card-body">
								Input field and icon feedback
							</div>
						</div>
						<!-- /field with icon feedback -->


						<!-- Touchspin spinner -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Touchspin spinners</h6>
								<div class="header-elements">
									<form action="#">
										<input type="text" value="55" class="form-control form-control-touchspin">
									</form>
								</div>
							</div>
							
							<div class="card-body">
								Heading with <code>Touchspin</code> input group spinner
							</div>
						</div>
						<!-- /touchspin spinner -->

					</div>
				</div>
				<!-- /header form components -->


				<!-- Header selects -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Select menus
					</h6>
					<span class="text-muted d-block">Various select options</span>
				</div>

				<div class="row">
					<div class="col-lg-6">

						<!-- Basic select -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Basic select</h6>
								<div class="header-elements">
									<form action="#">
										<select class="form-control wmin-200">
											<optgroup label="Alaskan/Hawaiian Time Zone">
												<option value="AK">Alaska</option>
												<option value="HI">Hawaii</option>
											</optgroup>
											<optgroup label="Pacific Time Zone">
												<option value="CA">California</option>
												<option value="OR">Oregon</option>
												<option value="WA">Washington</option>
											</optgroup>
											<optgroup label="Mountain Time Zone">
												<option value="AZ">Arizona</option>
												<option value="ID">Idaho</option>
												<option value="WY">Wyoming</option>
											</optgroup>
										</select>
									</form>
								</div>
							</div>
							
							<div class="card-body">
								Card header with basic select
							</div>
						</div>
						<!-- /basic select -->


						<!-- Single Select2 select -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Single Select2 select</h6>
								<div class="header-elements">
									<form action="#">
										<div class="wmin-sm-200">
											<select class="form-control form-control-select2" data-fouc>
												<optgroup label="Alaskan Time Zone">
													<option value="AK">Alaska</option>
													<option value="HI">Hawaii</option>
												</optgroup>
												<optgroup label="Pacific Time Zone">
													<option value="CA">California</option>
													<option value="NV">Nevada</option>
													<option value="WA">Washington</option>
												</optgroup>
												<optgroup label="Mountain Time Zone">
													<option value="AZ">Arizona</option>
													<option value="CO">Colorado</option>
													<option value="ID">Idaho</option>
												</optgroup>
											</select>
										</div>
									</form>
								</div>
							</div>
							
							<div class="card-body">
								Card header with a single <code>Select2</code> select
							</div>
						</div>
						<!-- /single Select2 select -->


						<!-- Single multiselect -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Multiselect - single selection</h6>
								<div class="header-elements">
									<form action="#">
										<div class="wmin-sm-200">
											<select class="form-control form-control-multiselect" data-fouc>
												<option value="cheese">Cheese</option>
												<option value="tomatoes">Tomatoes</option>
												<option value="mozarella">Mozzarella</option>
												<option value="mushrooms">Mushrooms</option>
												<option value="pepperoni">Pepperoni</option>
												<option value="onions">Onions</option>
											</select>
										</div>
									</form>
								</div>
							</div>
							
							<div class="card-body">
								Heading with single multiselect
							</div>
						</div>
						<!-- /single multiselect -->

					</div>


					<div class="col-lg-6">

						<!-- Custom select -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Custom select</h6>
								<div class="header-elements">
									<form action="#">
										<div class="wmin-sm-200">
											<select class="form-control form-input-styled" data-fouc>
												<optgroup label="Alaskan/Hawaiian Time Zone">
													<option value="AK">Alaska</option>
													<option value="HI">Hawaii</option>
												</optgroup>
												<optgroup label="Pacific Time Zone">
													<option value="CA">California</option>
													<option value="OR">Oregon</option>
													<option value="WA">Washington</option>
												</optgroup>
												<optgroup label="Mountain Time Zone">
													<option value="AZ">Arizona</option>
													<option value="ID">Idaho</option>
													<option value="WY">Wyoming</option>
												</optgroup>
											</select>
										</div>
									</form>
								</div>
							</div>
							
							<div class="card-body">
								Card header with custom select
							</div>
						</div>
						<!-- /custom select -->


						<!-- Multiple Select2 select -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Multiple Select2 select</h6>
								<div class="header-elements">
									<form action="#">
										<div class="wmin-sm-200">
											<select class="form-control form-control-select2" multiple="multiple" data-fouc>
												<optgroup label="Alaskan Time Zone">
													<option value="AK" selected>Alaska</option>
													<option value="HI">Hawaii</option>
												</optgroup>
												<optgroup label="Pacific Time Zone">
													<option value="CA">California</option>
													<option value="NV">Nevada</option>
													<option value="WA">Washington</option>
												</optgroup>
												<optgroup label="Mountain Time Zone">
													<option value="AZ">Arizona</option>
													<option value="CO">Colorado</option>
													<option value="ID" selected>Idaho</option>
												</optgroup>
											</select>
										</div>
									</form>
								</div>
							</div>
							
							<div class="card-body">
								Card header with multiple <code>Select2</code> select
							</div>
						</div>
						<!-- /multiple Select2 select -->


						<!-- Multiselect -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Multiselect - multiple selection</h6>
								<div class="header-elements">
									<form action="#">
										<div class="wmin-sm-200">
											<select class="form-control form-control-multiselect" multiple="multiple" data-fouc>
												<option value="cheese">Cheese</option>
												<option value="tomatoes">Tomatoes</option>
												<option value="mozarella">Mozzarella</option>
												<option value="mushrooms">Mushrooms</option>
												<option value="pepperoni">Pepperoni</option>
												<option value="onions">Onions</option>
											</select>
										</div>
									</form>
								</div>
							</div>
							
							<div class="card-body">
								Heading with multiple select
							</div>
						</div>
						<!-- /multiselect -->

					</div>
				</div>
				<!-- /header selects -->


				<!-- Header buttons -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Header buttons
					</h6>
					<span class="text-muted d-block">Basic buttons with options</span>
				</div>

				<div class="row">
					<div class="col-lg-6">

						<!-- Single button -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Single button</h6>
								<div class="header-elements">
									<button type="button" class="btn bg-blue">Button</button>
								</div>
							</div>
							
							<div class="card-body">
								Header with basic button. Available in all sizes, colors and options
							</div>
						</div>
						<!-- /single button -->


						<!-- Outline button -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Outline button</h6>
								<div class="header-elements">
									<button type="button" class="btn btn-outline bg-indigo-400 text-indigo-400 border-indigo-400">Button</button>
								</div>
							</div>
							
							<div class="card-body">
								Header with outline button. Available in all sizes, colors and options
							</div>
						</div>
						<!-- /outline button -->


						<!-- Single button dropdown -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Button dropdown</h6>
								<div class="header-elements">
									<div class="btn-group">
										<button type="button" class="btn bg-danger-400 dropdown-toggle" data-toggle="dropdown">Menu</button>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item">Action</a>
											<a href="#" class="dropdown-item">Another action</a>
											<a href="#" class="dropdown-item">Something else here</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">One more separated line</a>
										</div>
									</div>
								</div>
							</div>
							
							<div class="card-body">
								Header with single button dropdown menu
							</div>
						</div>
						<!-- /single button dropdown -->


						<!-- Segmented button -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Segmented button</h6>
								<div class="header-elements">
									<div class="btn-group">
			                            <button class="btn bg-success">Menu</button>
			                            <button class="btn bg-success dropdown-toggle" data-toggle="dropdown"></button>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item">Action</a>
											<a href="#" class="dropdown-item">Another action</a>
											<a href="#" class="dropdown-item">Something else here</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">One more separated line</a>
										</div>
			                        </div>
		                        </div>
							</div>
							
							<div class="card-body">
								Card header with segmented button
							</div>
						</div>
						<!-- /segmented button -->


						<!-- Multiple buttons -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Multiple buttons</h6>
								<div class="header-elements">
									<button type="button" class="btn bg-blue"><i class="icon-checkmark3 mr-2"></i> Save</button>
									<button type="button" class="btn btn-light ml-3"><i class="icon-cross2 mr-2"></i> Cancel</button>
								</div>
							</div>
							
							<div class="card-body">
								Card header with multiple buttons
							</div>
						</div>
						<!-- /multiple button -->

					</div>


					<div class="col-lg-6">

						<!-- Icon button -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Icon button</h6>
								<div class="header-elements">
									<button type="button" class="btn bg-success-400 btn-icon"><i class="icon-task"></i></button>
								</div>
							</div>
							
							<div class="card-body">
								Card header with single icon button
							</div>
						</div>
						<!-- /icon button -->


						<!-- Outline icon button -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Outline button</h6>
								<div class="header-elements">
									<button type="button" class="btn btn-outline bg-pink-400 text-pink-400 border-pink-400 btn-icon border-2">
										<i class="icon-checkmark3"></i>
									</button>
								</div>
							</div>
							
							<div class="card-body">
								Header with outline icon button
							</div>
						</div>
						<!-- /outline icon button -->


						<!-- Icon button dropdown -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Icon button dropdown</h6>
								<div class="header-elements">
									<div class="btn-group">
										<button type="button" class="btn bg-blue btn-icon dropdown-toggle" data-toggle="dropdown"><i class="icon-menu6"></i></button>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item">Action</a>
											<a href="#" class="dropdown-item">Another action</a>
											<a href="#" class="dropdown-item">Something else here</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">One more separated line</a>
										</div>
									</div>
								</div>
							</div>
							
							<div class="card-body">
								Card header with icon button dropdown
							</div>
						</div>
						<!-- /icon button dropdown -->


						<!-- Segmented icon button -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Segmented icon button</h6>
								<div class="header-elements">
									<div class="btn-group">
			                            <button class="btn bg-danger-400 btn-icon"><i class="icon-accessibility"></i></button>
			                            <button class="btn bg-danger-400 dropdown-toggle" data-toggle="dropdown"></button>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item">Action</a>
											<a href="#" class="dropdown-item">Another action</a>
											<a href="#" class="dropdown-item">Something else here</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">One more separated line</a>
										</div>
			                        </div>
		                        </div>
							</div>
							
							<div class="card-body">
								Card header with segmented icon button
							</div>
						</div>
						<!-- /segmented icon button -->


						<!-- Multiple icon buttons -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Multiple icon buttons</h6>
								<div class="header-elements">
									<button type="button" class="btn bg-blue btn-icon"><i class="icon-download"></i></button>
									<button type="button" class="btn bg-pink-400 btn-icon ml-3"><i class="icon-upload"></i></button>
								</div>
							</div>
							
							<div class="card-body">
								Card headers with multiple icon buttons
							</div>
						</div>
						<!-- /multiple icon buttons -->

					</div>
				</div>
				<!-- /header buttons -->


				<!-- Additional header elements -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Other elements
					</h6>
					<span class="text-muted d-block">Other card header elements</span>
				</div>

				<div class="row">
					<div class="col-lg-6">

						<!-- Default tabs -->
						<div class="card">
							<div class="card-header bg-light pb-0 pt-sm-0 header-elements-sm-inline">
								<h6 class="card-title">Default tabs</h6>
								<div class="header-elements">
									<ul class="nav nav-tabs nav-tabs-highlight card-header-tabs">
										<li class="nav-item">
											<a href="#card-tab1" class="nav-link active" data-toggle="tab">
												<i class="icon-screen-full mr-2"></i>
												Home
											</a>
										</li>
										<li class="nav-item">
											<a href="#card-tab2" class="nav-link" data-toggle="tab">
												<i class="icon-stats-bars mr-2"></i>
												Stats
											</a>
										</li>
										<li class="nav-item dropdown">
											<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
												<i class="icon-cog5 mr-2"></i>
												Dropdown
											</a>
											
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#card-tab3" tabindex="-1" class="dropdown-item" data-toggle="tab">
													<i class="icon-people"></i>
													Profile settings
												</a>
												<a href="#card-tab4" tabindex="-1" class="dropdown-item" data-toggle="tab">
													<i class="icon-stack"></i>
													Layout settings
												</a>
											</div>
										</li>
									</ul>
			                	</div>
							</div>
							
							<div class="card-body tab-content">
								<div class="tab-pane fade show active" id="card-tab1">
									This is the first card tab content
								</div>

								<div class="tab-pane fade" id="card-tab2">
									This is the second card tab content
								</div>

								<div class="tab-pane fade" id="card-tab3">
									This is the third card tab content
								</div>

								<div class="tab-pane fade" id="card-tab4">
									This is the fourth card tab content
								</div>
							</div>
						</div>
						<!-- /default tabs -->


						<!-- Pills -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Default pills</h6>
								<div class="header-elements">
									<ul class="nav nav-pills mb-0">
										<li class="nav-item"><a href="#card-pill1" class="nav-link active" data-toggle="tab"><i class="icon-screen-full mr-2"></i> Home</a></li>
										<li class="nav-item"><a href="#card-pill2" class="nav-link" data-toggle="tab"><i class="icon-stats-bars mr-2"></i> Stats</a></li>
										<li class="nav-item dropdown">
											<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="icon-gear"></i></a>
											
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#card-pill3" class="dropdown-item" tabindex="-1" data-toggle="tab">
													<i class="icon-people"></i>
													Profile settings
												</a>
												<a href="#card-pill4" class="dropdown-item" tabindex="-1" data-toggle="tab">
													<i class="icon-stack"></i>
													Layout settings
												</a>
											</div>
										</li>
									</ul>
			                	</div>
							</div>
							
							<div class="card-body tab-content">
								<div class="tab-pane fade show active" id="card-pill1">
									This is the first card pill content
								</div>

								<div class="tab-pane fade" id="card-pill2">
									This is the second card pill content
								</div>

								<div class="tab-pane fade" id="card-pill3">
									This is the third card pill content
								</div>

								<div class="tab-pane fade" id="card-pill4">
									This is the fourth card pill content
								</div>
							</div>
						</div>
						<!-- /pills -->


						<!-- Progress bar -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Progress bar</h6>
								<div class="header-elements">
									<div class="progress w-100 wmin-sm-200">
										<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 60%;">
											<span class="sr-only">60% Complete</span>
										</div>
									</div>
								</div>
							</div>
							
							<div class="card-body">
								Card header with progress bar. Available in all colors and options
							</div>
						</div>
						<!-- /progress bar -->


						<!-- jQuery UI slider -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">jQuery UI slider</h6>
								<div class="header-elements">
									<div class="w-100 wmin-sm-200">
										<div class="jui-slider ui-slider-info" data-fouc></div>
									</div>
			                	</div>
							</div>
							
							<div class="card-body">
								Header with jQuery UI slider. Available in all sizes
							</div>
						</div>
						<!-- /jQuery UI slider -->

					</div>


					<div class="col-lg-6">

						<!-- Bottom tabs -->
						<div class="card">
							<div class="card-header bg-white pb-0 pt-sm-0 pr-sm-0 header-elements-sm-inline">
								<h6 class="card-title">Bottom tabs</h6>
								<div class="header-elements">
									<ul class="nav nav-tabs nav-tabs-bottom card-header-tabs mx-0">
										<li class="nav-item">
											<a href="#card-bottom-tab1" class="nav-link active" data-toggle="tab">
												<i class="icon-screen-full mr-2"></i>
												Home
											</a>
										</li>
										<li class="nav-item">
											<a href="#card-bottom-tab2" class="nav-link" data-toggle="tab">
												<i class="icon-stats-bars mr-2"></i>
												Stats
											</a>
										</li>
										<li class="nav-item dropdown">
											<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
												<i class="icon-cog5 mr-2"></i>
												Dropdown
											</a>
											
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#card-bottom-tab3" tabindex="-1" class="dropdown-item" data-toggle="tab">
													<i class="icon-people"></i>
													Profile settings
												</a>
												<a href="#card-bottom-tab4" tabindex="-1" class="dropdown-item" data-toggle="tab">
													<i class="icon-stack"></i>
													Layout settings
												</a>
											</div>
										</li>
									</ul>
			                	</div>
							</div>
							
							<div class="card-body tab-content">
								<div class="tab-pane fade show active" id="card-bottom-tab1">
									This is the first card tab content
								</div>

								<div class="tab-pane fade" id="card-bottom-tab2">
									This is the second card tab content
								</div>

								<div class="tab-pane fade" id="card-bottom-tab3">
									This is the third card tab content
								</div>

								<div class="tab-pane fade" id="card-bottom-tab4">
									This is the fourth card tab content
								</div>
							</div>
						</div>
						<!-- /bottom tabs -->


						<!-- Toolbar tabs -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Toolbar tabs</h6>
							</div>

							<div class="bg-light">
								<ul class="nav nav-tabs nav-tabs-bottom mb-0">
									<li class="nav-item">
										<a href="#card-toolbar-tab1" class="nav-link active" data-toggle="tab">
											<i class="icon-screen-full mr-2"></i>
											Home
										</a>
									</li>
									<li class="nav-item">
										<a href="#card-toolbar-tab2" class="nav-link" data-toggle="tab">
											<i class="icon-stats-bars mr-2"></i>
											Stats
										</a>
									</li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
											<i class="icon-cog5 mr-2"></i>
											Dropdown
										</a>
										
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#card-toolbar-tab3" tabindex="-1" class="dropdown-item" data-toggle="tab">
												<i class="icon-people"></i>
												Profile settings
											</a>
											<a href="#card-toolbar-tab4" tabindex="-1" class="dropdown-item" data-toggle="tab">
												<i class="icon-stack"></i>
												Layout settings
											</a>
										</div>
									</li>
								</ul>
		                	</div>

							<div class="card-body tab-content">
								<div class="tab-pane fade show active" id="card-toolbar-tab1">
									This is the first card tab content
								</div>

								<div class="tab-pane fade" id="card-toolbar-tab2">
									This is the second card tab content
								</div>

								<div class="tab-pane fade" id="card-toolbar-tab3">
									This is the third card tab content
								</div>

								<div class="tab-pane fade" id="card-toolbar-tab4">
									This is the fourth card tab content
								</div>
							</div>
						</div>
						<!-- /toolbar tabs -->


						<!-- Dropdown title -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<div class="card-title h6 btn-group">
									<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown">Title dropdown</a>
									<div class="dropdown-menu">
										<a href="#" class="dropdown-item">Action</a>
										<a href="#" class="dropdown-item">Another action</a>
										<a href="#" class="dropdown-item">Something else here</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item">One more separated line</a>
									</div>
								</div>
							</div>
							
							<div class="card-body">
								Card header with title as a dropdown menu
							</div>
						</div>
						<!-- /dropdown title -->


						<!-- Noui slider -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">NoUI slider</h6>
								<div class="header-elements">
									<div class="w-100 wmin-sm-200">
										<div class="noui-slider noui-slider-danger noui-height-helper" id="noui-slider-demo" data-fouc></div>
									</div>
			                	</div>
							</div>
							
							<div class="card-body">
								Card header with NoUI slider. Available in all sizes
							</div>
						</div>
						<!-- /noui slider -->

					</div>
				</div>
				<!-- /additional header elements -->


				<!-- Mixing header elements -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Mixing elements
					</h6>
					<span class="text-muted d-block">Different element variations</span>
				</div>

				<div class="row">
					<div class="col-lg-6">

						<!-- Input field with button -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Input and button</h6>
								<div class="header-elements">
									<form action="#">
										<div class="input-group wmin-sm-200">
											<input type="text" class="form-control" placeholder="Search...">
											<div class="input-group-append">
												<button type="button" class="btn btn-light btn-icon"><i class="icon-three-bars"></i></button>
											</div>
										</div>
									</form>
			                	</div>
							</div>
							
							<div class="card-body">
								Mixing input field with button
							</div>
						</div>
						<!-- /input field with button -->


						<!-- Checkbox and icon dropdown -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Checkbox and dropdown</h6>
								<div class="header-elements">
									<div class="d-flex justify-content-between">
										<form action="#">
											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" checked data-fouc>
													Enable
												</label>
											</div>
										</form>

										<div class="list-icons ml-3">
					                		<div class="dropdown">
					                			<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Action</a>
													<a href="#" class="dropdown-item">Another action</a>
													<a href="#" class="dropdown-item">Something else here</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">One more separated line</a>
												</div>
					                		</div>
					                	</div>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body">
								Mixing checkbox with label and icon dropdown
							</div>
						</div>
						<!-- /checkbox and icon dropdown -->


						<!-- Switchery and card controls -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Switch and controls</h6>
								<div class="header-elements">
									<div class="d-flex justify-content-between">
										<form action="#">
											<div class="form-check form-check-right form-check-switchery">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-switchery" checked data-fouc>
													Show it?
												</label>
											</div>
										</form>

										<div class="list-icons ml-3">
					                		<a class="list-icons-item" data-action="collapse"></a>
					                		<a class="list-icons-item" data-action="reload"></a>
					                		<a class="list-icons-item" data-action="remove"></a>
					                	</div>
				                	</div>
								</div>
							</div>
							
							<div class="card-body">
								Mixing switchery toggle and card control buttons
							</div>
						</div>
						<!-- /switchery and card controls -->

					</div>


					<div class="col-lg-6">

						<!-- Text and button dropdown -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Text and button</h6>
								<div class="header-elements">
									<div class="d-flex align-items-center justify-content-between">
				                		<span class="text-danger mr-3"><i class="icon-blocked mr-2"></i> Error occurred</span>

					                	<div class="btn-group">
				                            <button class="btn btn-light dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i></button>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item">Action</a>
												<a href="#" class="dropdown-item">Another action</a>
												<a href="#" class="dropdown-item">Something else here</a>
												<div class="dropdowndivider"></div>
												<a href="#" class="dropdown-item">One more separated line</a>
											</div>
				                        </div>
			                        </div>
			                	</div>
							</div>
							
							<div class="card-body">
								Mixing text and button dropdown
							</div>
						</div>
						<!-- /text and button dropdown -->


						<!-- Spinner and progress bar -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">
									Spinner and progress
								</h6>

								<div class="header-elements">
									<div class="d-flex align-items-center">
										<span class="mr-3"><i class="icon-spinner2 spinner"></i></span>
										<div class="progress w-100 wmin-sm-200" style="height: 0.625rem;">
											<div class="progress-bar bg-indigo-400 progress-bar-striped progress-bar-animated" style="width: 60%;">
												<span class="sr-only">60% Complete</span>
											</div>
										</div>
									</div>
			                	</div>
							</div>
							
							<div class="card-body">
								Mixing spinner and progress bar
							</div>
						</div>
						<!-- /spinner and progress bar -->


						<!-- Multiple elements -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">
									Multiple elements
								</h6>

								<div class="header-elements">
			                		<i class="icon-spinner4 spinner"></i>

				                	<span class="badge badge-danger ml-3">Badge</span>

									<div class="list-icons ml-3">
				                		<a href="#" class="list-icons-item"><i class="icon-googleplus5"></i></a>
				                		<a href="#" class="list-icons-item"><i class="icon-pin-alt"></i></a>
				                		<a href="#" class="list-icons-item"><i class="icon-portfolio"></i></a>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body">
								Mixing spinner icon, badge and icon list group
							</div>
						</div>
						<!-- /multiple elements -->

					</div>
				</div>
				<!-- /mixing header elements -->


				<!-- Responsive options -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Responsive options
					</h6>
					<span class="text-muted d-block">Resize the browser or open on mobile</span>
				</div>

				<div class="row">
					<div class="col-lg-6">
						
						<!-- Always visible -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Always visible</h6>
								<div class="header-elements">
									<form action="#">
										<div class="wmin-200">
											<select class="form-control form-control-select2" data-fouc>
												<optgroup label="Alaskan Time Zone">
													<option value="AK">Alaska</option>
													<option value="HI">Hawaii</option>
												</optgroup>
												<optgroup label="Pacific Time Zone">
													<option value="CA">California</option>
													<option value="NV">Nevada</option>
													<option value="WA">Washington</option>
												</optgroup>
												<optgroup label="Mountain Time Zone">
													<option value="AZ">Arizona</option>
													<option value="CO">Colorado</option>
													<option value="ID">Idaho</option>
												</optgroup>
											</select>
										</div>
									</form>
								</div>
							</div>
							
							<div class="card-body">
								Add <code>.header-elements-inline</code> class to direct parent of <code>.header-elements</code> to make header elements visible on mobile and desktop.
							</div>
						</div>
						<!-- /always visible -->


						<!-- Wrap and show -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Wrap and show</h6>
								<div class="header-elements">
									<form action="#">
										<div class="form-group-feedback form-group-feedback-right">
											<input type="search" class="form-control wmin-sm-200" placeholder="Search...">
											<div class="form-control-feedback">
												<i class="icon-search4 font-size-base text-muted"></i>
											</div>
										</div>
									</form>
								</div>
							</div>
							
							<div class="card-body">
								To wrap header elements to the second row, add <code>.header-elements-[breakpoint]-inline</code> class to parent container. Breakpoint in class name is required, CSS needs to know screen size.
							</div>
						</div>
						<!-- /wrap and show -->


						<!-- Stack elements -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Stack elements</h6>
								<div class="header-elements flex-sm-nowrap">
									<div class="text-muted mr-sm-3 mb-1 mb-sm-0">Loading:</div>

									<div class="progress w-100 wmin-sm-200" style="height: 0.625rem;">
										<div class="progress-bar bg-indigo-400 progress-bar-striped progress-bar-animated" style="width: 60%;">
											<span class="sr-only">60% Complete</span>
										</div>
									</div>
								</div>
							</div>
							
							<div class="card-body">
								Header (block) elements are stackable by default. Use responsive margin classes to control vertical and horizontal spacing. Make sure margin and container breakpoints are matching.
							</div>
						</div>
						<!-- /stack elements -->


						<!-- Centered elements -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Centered elements</h6>
								<div class="header-elements">
									<div class="d-flex justify-content-center">
										<div class="text-muted mr-2">Rating:</div>

										<span>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<span class="text-muted ml-2">(49)</span>
										</span>
									</div>
								</div>
							</div>
							
							<div class="card-body">
								Use combination of <code>.d-flex</code> and <code>.justify-content-center</code> classes to center items in the line. All flex helper classes can be used as well for additional position options.
							</div>
						</div>
						<!-- /centered elements -->

					</div>

					<div class="col-lg-6">
						
						<!-- Hide on mobile -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Hide on mobile</h6>
								<div class="header-elements d-none">
									<form action="#">
										<div class="wmin-sm-200">
											<select class="form-control form-control-select2" data-fouc>
												<optgroup label="Alaskan Time Zone">
													<option value="AK">Alaska</option>
													<option value="HI">Hawaii</option>
												</optgroup>
												<optgroup label="Pacific Time Zone">
													<option value="CA">California</option>
													<option value="NV">Nevada</option>
													<option value="WA">Washington</option>
												</optgroup>
												<optgroup label="Mountain Time Zone">
													<option value="AZ">Arizona</option>
													<option value="CO">Colorado</option>
													<option value="ID">Idaho</option>
												</optgroup>
											</select>
										</div>
									</form>
								</div>
							</div>
							
							<div class="card-body">
								To hide header elements on certain breakpoints, use <code>.header-elements-[breakpoint]-inline</code> class in parent container and <code>.d-none</code> in header elements container.
							</div>
						</div>
						<!-- /hide on mobile -->


						<!-- Wrap and toggle -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title d-flex">
									Wrap and toggle
									<a href="#" class="header-elements-toggle text-default d-sm-none"><i class="icon-more"></i></a>
								</h6>

								<div class="header-elements d-none">
									<form action="#">
										<div class="form-group-feedback form-group-feedback-right">
											<input type="search" class="form-control wmin-sm-200" placeholder="Search...">
											<div class="form-control-feedback">
												<i class="icon-search4 font-size-base text-muted"></i>
											</div>
										</div>
									</form>
								</div>
							</div>
							
							<div class="card-body">
								You can also use optional toggler - add <code>.d-flex</code> to page title and custom markup for the toggle button. And <code>.d-none</code> to header elements container to make them hidden by default.
							</div>
						</div>
						<!-- /wrap and toggle -->


						<!-- Single line -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Single line</h6>
								<div class="header-elements">
									<div class="d-flex align-items-center">
										<div class="text-muted mr-3">Loading:</div>

										<div class="progress w-100 wmin-sm-200" style="height: 0.625rem;">
											<div class="progress-bar bg-indigo-400 progress-bar-striped progress-bar-animated" style="width: 60%;">
												<span class="sr-only">60% Complete</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="card-body">
								You can easily show header elements in a single line, just wrap inner elements in container with <code>.d-flex</code> and <code>.align-items-center</code> classes. Use other flex utilities for adjustments.
							</div>
						</div>
						<!-- /single line -->


						<!-- Justified elements -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Justified elements</h6>
								<div class="header-elements">
									<div class="d-flex justify-content-between">
										<div class="text-muted mr-2">Rating:</div>

										<span>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<span class="text-muted ml-2">(49)</span>
										</span>
									</div>
								</div>
							</div>
							
							<div class="card-body">
								Use combination of <code>.d-flex</code> and <code>.justify-content-between</code> (or <code>.m(l,r)-auto</code>) classes to distribute items evenly in the line: first item is on the start line, last item on the end line.
							</div>
						</div>
						<!-- /justified elements -->

					</div>
				</div>
				<!-- /responsive options -->

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


    <!-- Settings modal -->
	<div id="settings" class="modal fade" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title"><i class="icon-gear mr-2"></i> Settings modal</h5>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Form inside modal -->
				<form action="#">
					<div class="modal-body">
						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
									<label>First name</label>
									<input type="text" placeholder="Eugene" class="form-control">
								</div>

								<div class="col-sm-6">
									<label class="control-label">Last name</label>
									<input type="text" placeholder="Kopyov" class="form-control">
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
									<label>Address line 1</label>
									<input type="text" placeholder="Ring street 12" class="form-control">
								</div>

								<div class="col-sm-6">
									<label>Address line 2</label>
									<input type="text" placeholder="building D, flat #67" class="form-control">
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-sm-4">
									<label>City</label>
									<input type="text" placeholder="Munich" class="form-control">
								</div>

								<div class="col-sm-4">
									<label>State/Province</label>
									<input type="text" placeholder="Bayern" class="form-control">
								</div>

								<div class="col-sm-4">
									<label>ZIP code</label>
									<input type="text" placeholder="1031" class="form-control">
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
									<label>Email</label>
									<input type="text" placeholder="eugene@kopyov.com" class="form-control">
									<span class="form-text text-muted">name@domain.com</span>
								</div>

								<div class="col-sm-6">
									<label>Phone #</label>
									<input type="text" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999" class="form-control">
									<span class="form-text text-muted">+99-99-9999-9999</span>
								</div>
							</div>
						</div>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-info">Save changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- /settings modal -->

</body>
</html>