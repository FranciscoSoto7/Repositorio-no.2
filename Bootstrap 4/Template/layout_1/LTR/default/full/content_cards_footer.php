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
	<script src="../../../../global_assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/switch.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/inputs/touchspin.min.js"></script>
	<script src="../../../../global_assets/js/plugins/sliders/nouislider.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/content_cards_footer.js"></script>
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
								<li class="nav-item"><a href="content_cards_header.html" class="nav-link">Card header elements</a></li>
								<li class="nav-item"><a href="content_cards_footer.html" class="nav-link active">Card footer elements</a></li>
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
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Content</span> - Card Footer</h4>
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
							<a href="content_cards_footer.html" class="breadcrumb-item">Content</a>
							<span class="breadcrumb-item active">Card footer</span>
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

				<!-- Card footer layouts -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Card footer layouts
					</h6>
					<span class="text-muted d-block">Default, custom, white and condensed</span>
				</div>

				<div class="row">
					<div class="col-lg-6">

						<!-- Default style -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Default style</h6>
							</div>
							
							<div class="card-body">
								Default example of card footer. By default, footer container has light grey background color. Default style doesn't require any additional classes. Supports all elements listed below, including custom colors.
							</div>

							<div class="card-footer d-flex justify-content-between align-items-center">
								<div class="text-muted">Added 3 hours ago</div>

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
						<!-- /default style -->


						<!-- Custom color -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Custom color</h6>
							</div>
							
							<div class="card-body">
								Example of a card footer with custom background color. You can use any available color helper class, also use text color classes where needed. Some elements require minor color adjustments.
							</div>

							<div class="card-footer bg-dark text-white d-flex justify-content-between align-items-center">
								<div>Added 3 hours ago</div>

								<span>
									<i class="icon-star-full2 font-size-base text-orange-300"></i>
									<i class="icon-star-full2 font-size-base text-orange-300"></i>
									<i class="icon-star-full2 font-size-base text-orange-300"></i>
									<i class="icon-star-full2 font-size-base text-orange-300"></i>
									<i class="icon-star-full2 font-size-base text-orange-300"></i>
									<span class="opacity-75 ml-2">(49)</span>
								</span>
							</div>
						</div>
						<!-- /custom color -->

					</div>

					<div class="col-lg-6">

						<!-- White background -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">White background</h6>
							</div>
							
							<div class="card-body">
								You can use <code>.bg-white</code> or <code>.bg-transparent</code> classes in card footer container to make it white or remove background color. Use border and spacing utility classes for custom styling.
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<div class="text-muted">Added 3 hours ago</div>

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
						<!-- /white background -->


						<!-- No border -->
						<div class="card">
							<div class="card-header bg-white">
								<h6 class="card-title">No border</h6>
							</div>
							
							<div class="card-body">
								Use <code>.border-top-0</code> utility class to remove top border and <code>.pt-0</code> class to remove top padding from the card footer. Also don't forget to make background color white or transparent.
							</div>

							<div class="card-footer bg-transparent d-flex justify-content-between align-items-center border-top-0 pt-0">
								<div class="text-muted">Added 3 hours ago</div>

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
						<!-- /no border -->

					</div>
				</div>
				<!-- /card footer layouts -->


				<!-- Basic footer options -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Basic elements
					</h6>
					<span class="text-muted d-block">Just a mix of basic elements</span>
				</div>

				<div class="row">
					<div class="col-lg-6">

						<!-- Title with left icon -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Text with left icon</h6>
							</div>
							
							<div class="card-body">
								Card footer plain text with left icon
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<div>
									<i class="icon-calendar3 mr-2"></i>
									Schedule
								</div>

								<div>
									<i class="icon-cog3 mr-2"></i>
									Settings
								</div>
							</div>
						</div>
						<!-- /title with left icon -->


						<!-- Single icon -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Single icon</h6>
							</div>
							
							<div class="card-body">
								Card footer with a single icon, inline or linked
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<div class="list-icons-item"><i class="icon-spinner2 spinner"></i></div>
								<a href="#" class="list-icons-item"><i class="icon-cog3"></i></a>
							</div>
						</div>
						<!-- /single icon -->


						<!-- Multiple icons -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Multiple icons</h6>
							</div>
							
							<div class="card-body">
								Card footer with multiple icons group
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<div>
									<div class="list-icons">
				                		<a href="#" class="list-icons-item"><i class="icon-play3"></i></a>
				                		<a href="#" class="list-icons-item"><i class="icon-pause"></i></a>
				                		<a href="#" class="list-icons-item"><i class="icon-stop"></i></a>
				                	</div>
			                	</div>

								<div>
									<div class="list-icons">
				                		<a href="#" class="list-icons-item"><i class="icon-dribbble3"></i></a>
				                		<a href="#" class="list-icons-item"><i class="icon-wordpress"></i></a>
				                		<a href="#" class="list-icons-item"><i class="icon-github4"></i></a>
				                	</div>
			                	</div>
							</div>
						</div>
						<!-- /multiple icons -->


						<!-- Plain text -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Plain text</h6>
							</div>
							
							<div class="card-body">
								Card footer with simple inline text. Use utility classes for proper spacing and alignment
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								Good morning, Eugene!
								<div class="mt-1 mt-sm-0">You have 3 unread messages</div>
							</div>
						</div>
						<!-- /plain text -->


						<!-- Inline list -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Inline list</h6>
							</div>
							
							<div class="card-body">
								Card footer with simple inline list
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<ul class="list-inline mb-0">
									<li class="list-inline-item">10 bugs</li>
									<li class="list-inline-item">8 commits</li>
								</ul>

								<ul class="list-inline mb-0 mt-1 mt-sm-0">
									<li class="list-inline-item">December 12th</li>
									<li class="list-inline-item">Version 2.0</li>
								</ul>
							</div>
						</div>
						<!-- /inline list -->


						<!-- Linked inline list -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Linked inline list</h6>
							</div>
							
							<div class="card-body">
								Card footer with linked inline list
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<ul class="list-inline mb-0">
									<li class="list-inline-item"><a href="#">3 reports</a></li>
									<li class="list-inline-item"><a href="#">7 files</a></li>
								</ul>

								<ul class="list-inline mb-0 mt-1 mt-sm-0">
									<li class="list-inline-item"><a href="#">Download</a></li>
									<li class="list-inline-item"><a href="#">Upload</a></li>
									<li class="list-inline-item"><a href="#">Generate</a></li>
								</ul>
							</div>
						</div>
						<!-- /linked inline list -->


						<!-- Inline badge -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Inline badges</h6>
							</div>
							
							<div class="card-body">
								Card footer with <code>.badge</code> element displayed before/after the text
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<div>
									<span class="badge bg-danger mr-2">Bug</span>
									Ticket <a href="#">#54325</a>
								</div>

								<div>
									Resolution:
									<span class="badge bg-success ml-2">Fixed</span>
								</div>
							</div>
						</div>
						<!-- /inline badge -->


						<!-- Pagination -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Pagination</h6>
							</div>
							
							<div class="card-body">
								Card footer pagination with optional <code>.justify-content-around</code> class that stretches items on small screens if used with breakpoints
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<ul class="pagination pagination-flat pagination-sm justify-content-around">
									<li class="page-item disabled"><a href="#" class="page-link">Prev</a></li>
									<li class="page-item active"><a href="#" class="page-link">1</a></li>
									<li class="page-item"><a href="#" class="page-link">2</a></li>
									<li class="page-item"><a href="#" class="page-link">3</a></li>
									<li class="page-item"><span class="page-link bg-transparent">...</span></li>
									<li class="page-item"><a href="#" class="page-link">9</a></li>
									<li class="page-item"><a href="#" class="page-link">Next</a></li>
								</ul>

								<ul class="pagination pagination-flat pagination-sm justify-content-around mt-2 mt-sm-0">
									<li class="page-item"><a href="#" class="page-link">&larr;</a></li>
									<li class="page-item"><a href="#" class="page-link">1</a></li>
									<li class="page-item active"><a href="#" class="page-link">2</a></li>
									<li class="page-item"><a href="#" class="page-link">3</a></li>
									<li class="page-item"><a href="#" class="page-link">&rarr;</a></li>
								</ul>
							</div>
						</div>
						<!-- /pagination -->

					</div>

					<div class="col-lg-6">

						<!-- Title with right icon -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Title with right icon</h6>
							</div>
							
							<div class="card-body">
								Card footer with plain text and icon next to it
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<div>
									Schedule
									<i class="icon-calendar3 ml-2"></i>
								</div>

								<div>
									Settings
									<i class="icon-cog3 ml-2"></i>
								</div>
							</div>
						</div>
						<!-- /title with right icon -->


						<!-- Single icon dropdown -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Icon dropdown</h6>
							</div>
							
							<div class="card-body">
								Card footer with single icon dropdown, both sides
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
		                		<div class="list-icons-item dropdown">
		                			<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
									<div class="dropdown-menu">
										<a href="#" class="dropdown-item">Action</a>
										<a href="#" class="dropdown-item">Another action</a>
										<a href="#" class="dropdown-item">Something else here</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item">One more separated line</a>
									</div>
		                		</div>

		                		<div class="list-icons-item dropdown">
		                			<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-unlink"></i></a>
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
						<!-- /single icon dropdown -->


						<!-- Multiple icon dropdown -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Multiple icons with dropdown</h6>
							</div>
							
							<div class="card-body">
								Card footer with multiple icons and dropdown menu
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<div>
									<div class="list-icons">
				                		<a href="#" class="list-icons-item"><i class="icon-play3"></i></a>
				                		<a href="#" class="list-icons-item"><i class="icon-pause"></i></a>
				                		<div class="list-icons-item dropdown">
					                		<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-stop"></i></a>
											<div class="dropdown-menu">
												<a href="#" class="dropdown-item">Action</a>
												<a href="#" class="dropdown-item">Another action</a>
												<a href="#" class="dropdown-item">Something else here</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item">One more separated line</a>
											</div>
				                		</div>
				                	</div>
			                	</div>

								<div>
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
						</div>
						<!-- /multiple icon dropdowns -->


						<!-- Custom text -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Custom text styling</h6>
							</div>
							
							<div class="card-body">
								Card footer text displayed on both sides. Make sure the text is wrapped in block element
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<div>
									<i class="icon-reading mr-2"></i> Good morning, <strong>Eugene</strong>
								</div>
								<div class="mt-1 mt-sm-0">You have <a href="#">3 unread messages</a></div>
							</div>
						</div>
						<!-- /custom text -->


						<!-- Bullet list -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Bullet list</h6>
							</div>
							
							<div class="card-body">
								Card footer with bullet inline list
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<ul class="list-inline list-inline-dotted mb-0">
									<li class="list-inline-item">10 bugs</li>
									<li class="list-inline-item">8 commits</li>
								</ul>

								<ul class="list-inline list-inline-dotted mb-0 mt-1 mt-sm-0">
									<li class="list-inline-item">December 12th</li>
									<li class="list-inline-item">Version 2.0</li>
								</ul>
							</div>
						</div>
						<!-- /bullet list -->


						<!-- Linked bullet list -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Linked bullet list</h6>
							</div>
							
							<div class="card-body">
								Card footer with linked bullet inline list
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<ul class="list-inline list-inline-dotted mb-0">
									<li class="list-inline-item"><a href="#">3 reports</a></li>
									<li class="list-inline-item"><a href="#">7 files</a></li>
								</ul>

								<ul class="list-inline list-inline-dotted mb-0 mt-1 mt-sm-0">
									<li class="list-inline-item"><a href="#">Download</a></li>
									<li class="list-inline-item"><a href="#">Upload</a></li>
									<li class="list-inline-item"><a href="#">Generate</a></li>
								</ul>
							</div>
						</div>
						<!-- /linked bullet list -->


						<!-- Inline pill badge -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Inline pill badges</h6>
							</div>
							
							<div class="card-body">
								Card footer with <code>.badge-pill</code> element displayed before/after the text
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<div>
									<span class="badge bg-blue badge-pill mr-2">36</span>
									New orders
								</div>

								<div>
									Shipped:
									<span class="badge bg-slate badge-pill ml-2">74</span>
								</div>
							</div>
						</div>
						<!-- /inline pill badge -->


						<!-- Pager -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Pager</h6>
							</div>
							
							<div class="card-body">
								Card footer pager with optional <code>.justify-content-between</code> class that pushes items to start/end on small screens if used with breakpoints
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<ul class="pagination pagination-sm pagination-pager pagination-pager-linked justify-content-between">
									<li class="page-item disabled"><a href="#" class="page-link">&larr; Older</a></li>
									<li class="page-item"><a href="#" class="page-link">Newer &rarr;</a></li>
								</ul>

								<ul class="pagination pagination-sm pagination-pager justify-content-between mt-2 mt-sm-0">
									<li class="page-item"><a href="#" class="page-link">&larr; &nbsp; Previous</a></li>
									<li class="page-item"><a href="#" class="page-link">Next &nbsp; &rarr;</a></li>
								</ul>
							</div>
						</div>
						<!-- /pager -->

					</div>
				</div>
				<!-- /basic footer options -->


				<!-- Footer thumbnails -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Card footer thumbnails
					</h6>
					<span class="text-muted d-block">Single and thumbnail groups</span>
				</div>

				<div class="row">
					<div class="col-lg-6">

						<!-- Single thumbnail -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Single thumbnail</h6>
							</div>
							
							<div class="card-body">
								Card footer with single thumbnail (left or right)
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center py-2">
								<ul class="list-inline mb-0">
									<li class="list-inline-item">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
									</li>
								</ul>

								<ul class="list-inline mb-0">
									<li class="list-inline-item">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
									</li>
								</ul>
							</div>
						</div>
						<!-- /single thumbnail -->


						<!-- Thumbnail group -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Thumbnail group</h6>
							</div>
							
							<div class="card-body">
								Card footer with thumbnail group
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center py-sm-2">
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

								<ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
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
						<!-- /thumbnail group -->


						<!-- Thumbnail with badge -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Thumb with badge</h6>
							</div>
							
							<div class="card-body">
								Card footer thumbnail with badge
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center py-2">
								<ul class="list-inline mb-0">
									<li class="list-inline-item">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
										<span class="badge badge-pill badge-float bg-danger border-1 border-white">9</span>
									</li>
								</ul>

								<ul class="list-inline list-inline-condensed mb-0">
									<li class="list-inline-item">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
										<span class="badge badge-pill badge-float bg-indigo-400 border-1 border-white">8</span>
									</li>
									<li class="list-inline-item">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
										<span class="badge badge-pill badge-float bg-indigo-400 border-1 border-white">6</span>
									</li>
								</ul>
							</div>
						</div>
						<!-- /thumbnail with badge -->

					</div>

					<div class="col-lg-6">

						<!-- Single linked thumbnail -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Linked thumbnail</h6>
							</div>
							
							<div class="card-body">
								Card footer with single linked thumbnail
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center py-2">
								<ul class="list-inline mb-0">
									<li class="list-inline-item">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
										</a>
									</li>
								</ul>

								<ul class="list-inline mb-0">
									<li class="list-inline-item">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- /single linked thumbnail -->


						<!-- Linked thumbnail group -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Linked thumbnail group</h6>
							</div>
							
							<div class="card-body">
								Card footer with linked thumbnail group
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center py-sm-2">
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

								<ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
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
						<!-- /linked thumbnail group -->


						<!-- Thumbnail with badge mark -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Thumb with status badge</h6>
							</div>
							
							<div class="card-body">
								Card footer thumbnail with badge mark
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center py-2">
								<ul class="list-inline mb-0">
									<li class="list-inline-item">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
										<span class="badge badge-mark badge-float border-danger mt-1 mr-1"></span>
									</li>
								</ul>

								<ul class="list-inline list-inline-condensed mb-0">
									<li class="list-inline-item">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
										<span class="badge badge-mark badge-float border-indigo-400 mt-1 mr-1"></span>
									</li>
									<li class="list-inline-item">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
										<span class="badge badge-mark badge-float border-indigo-400 mt-1 mr-1"></span>
									</li>
								</ul>
							</div>
						</div>
						<!-- /thumbnail with badge mark -->

					</div>
				</div>
				<!-- /footer thumbnails -->


				<!-- Footer form components -->
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
							<div class="card-header">
								<h6 class="card-title">Single checkbox</h6>
							</div>
							
							<div class="card-body">
								Single checkbox. Available in both directions
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<form class="d-inline-flex" action="#">
									<div class="form-check form-check-inline">
										<label class="form-check-label">
											<input type="checkbox" class="form-input-styled" data-fouc>
											Unchecked
										</label>
									</div>
								</form>

								<form class="d-inline-flex" action="#">
									<div class="form-check form-check-right form-check-inline">
										<label class="form-check-label">
											Checked
											<input type="checkbox" class="form-input-styled" checked data-fouc>
										</label>
									</div>
								</form>
							</div>
						</div>
						<!-- /single checkbox -->


						<!-- Checkbox group -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Checkbox group</h6>
							</div>
							
							<div class="card-body">
								Card footer with group of inline checkboxes
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
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

								<form class="d-flex mt-3 mt-sm-0" action="#">
									<div class="form-check form-check-right form-check-inline">
										<label class="form-check-label">
											Unchecked
											<input type="checkbox" class="form-input-styled" data-fouc>
										</label>
									</div>

									<div class="form-check form-check-right form-check-inline">
										<label class="form-check-label">
											Checked
											<input type="checkbox" class="form-input-styled" checked data-fouc>
										</label>
									</div>
								</form>
							</div>
						</div>
						<!-- /checkbox group -->


						<!-- Switchery toggle -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Switchery toggle</h6>
							</div>
							
							<div class="card-body">
								Switchery toggle. Available in all styles and sizes
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<form action="#">
									<div class="form-check form-check-inline form-check-switchery">
										<label class="form-check-label">
											<input type="checkbox" class="form-input-switchery" checked data-fouc>
											Refresh
										</label>
									</div>
								</form>

								<form action="#">
									<div class="form-check form-check-inline form-check-right form-check-switchery">
										<label class="form-check-label">
											Enable
											<input type="checkbox" class="form-input-switchery" checked data-fouc>
										</label>
									</div>
								</form>
							</div>
						</div>
						<!-- /switchery toggle -->


						<!-- Input field -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Text input</h6>
							</div>
							
							<div class="card-body">
								Card footer with basic text input and input group
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<form action="#">
									<div class="input-group wmin-sm-200">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-search4 font-size-base"></i></span>
										</span>
										<input type="text" class="form-control" placeholder="Find...">
									</div>
								</form>

								<form class="mt-2 mt-sm-0" action="#">
									<input type="text" class="form-control wmin-sm-200" placeholder="Search...">
								</form>
							</div>
						</div>
						<!-- /input field -->


						<!-- File inputs -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">File inputs</h6>
							</div>
							
							<div class="card-body">
								Card footer with default and/or custom file inputs
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<form action="#">
									<div class="wmin-sm-200">
										<input type="file">
									</div>
								</form>

								<form action="#">
									<div class="wmin-sm-200 mt-3 mt-sm-0">
										<input type="file" class="form-input-styled" data-fouc>
									</div>
								</form>
							</div>
						</div>
						<!-- /file inputs -->

					</div>

					<div class="col-lg-6">

						<!-- Single radio -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Single radio</h6>
							</div>
							
							<div class="card-body">
								Single radio. Available in both directions
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<form class="d-inline-flex" action="#">
									<div class="form-check form-check-inline">
										<label class="form-check-label">
											<input type="radio" name="single-radio" class="form-input-styled" data-fouc>
											Unselected
										</label>
									</div>
								</form>

								<form class="d-inline-flex" action="#">
									<div class="form-check form-check-right form-check-inline">
										<label class="form-check-label">
											Selected
											<input type="radio" name="single-radio" class="form-input-styled" checked data-fouc>
										</label>
									</div>
								</form>
							</div>
						</div>
						<!-- /single radio -->


						<!-- Radio group -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Radio group</h6>
							</div>
							
							<div class="card-body">
								Card footer with group of inline radio buttons
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<form class="d-flex" action="#">
									<div class="form-check form-check-inline mb-0">
										<label class="form-check-label">
											<input type="radio" name="group-radio" class="form-input-styled" data-fouc>
											Radio 1
										</label>
									</div>

									<div class="form-check form-check-inline">
										<label class="form-check-label">
											<input type="radio" name="group-radio" class="form-input-styled" checked data-fouc>
											Radio 2
										</label>
									</div>
								</form>

								<form class="d-flex mt-3 mt-sm-0" action="#">
									<div class="form-check form-check-right form-check-inline mb-0">
										<label class="form-check-label">
											Radio 1
											<input type="radio" name="group-radio" class="form-input-styled" data-fouc>
										</label>
									</div>

									<div class="form-check form-check-right form-check-inline">
										<label class="form-check-label">
											Radio 2
											<input type="radio" name="group-radio" class="form-input-styled" checked data-fouc>
										</label>
									</div>
								</form>
							</div>
						</div>
						<!-- /radio group -->


						<!-- Toggle switch -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Toggle switch</h6>
							</div>
							
							<div class="card-body">
								Card footer with Bootstrap toggle switch. Labels are optional
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center py-sm-2">
								<form action="#">
									<div class="form-check form-check-switch">
										<label class="form-check-label">
											<input type="checkbox" data-on-text="On" data-off-text="Off" class="form-input-switch" data-size="small">
										</label>
									</div>
								</form>

								<form action="#">
									<div class="form-check form-check-switch">
										<label class="form-check-label">
											<input type="checkbox" data-on-text="<i class='icon-checkmark3'></i>" data-off-text="<i class='icon-cross2'></i>" class="form-input-switch" data-on-color="success" data-off-color="danger" data-size="small" checked>
										</label>
									</div>
								</form>
							</div>
						</div>
						<!-- /toggle switch -->


						<!-- Field with icon feedback -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Input with icon</h6>
							</div>
							
							<div class="card-body">
								Input field and icon feedback, in both directions
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<form action="#">
									<div class="form-group-feedback form-group-feedback-right">
										<input type="search" class="form-control wmin-sm-200" placeholder="Searching...">
										<div class="form-control-feedback">
											<i class="icon-spinner2 spinner text-muted"></i>
										</div>
									</div>
								</form>

								<form class="mt-3 mt-sm-0" action="#">
									<div class="form-group-feedback form-group-feedback-left">
										<input type="search" class="form-control wmin-sm-200" placeholder="Search...">
										<div class="form-control-feedback">
											<i class="icon-search4 font-size-base text-muted"></i>
										</div>
									</div>
								</form>
							</div>
						</div>
						<!-- /field with icon feedback -->


						<!-- Touchspin spinner -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Touchspin spinners</h6>
							</div>
							
							<div class="card-body">
								Card footer with <code>Touchspin</code> input group spinner
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<form action="#">
									<div class="wmin-sm-200">
										<input type="text" value="10" class="form-control form-control-touchspin-vertical">
									</div>
								</form>

								<form class="mt-2 mt-sm-0" action="#">
									<div class="wmin-sm-200">
										<input type="text" value="55" class="form-control form-control-touchspin">
									</div>
								</form>
							</div>
						</div>
						<!-- /touchspin spinner -->

					</div>
				</div>
				<!-- /footer form components -->


				<!-- Footer selects -->
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
							<div class="card-header">
								<h6 class="card-title">Basic selects</h6>
							</div>
							
							<div class="card-body">
								Card footer with basic (browser default) and custom selects
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<form action="#">
									<select class="form-control wmin-sm-200">
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

								<form class="mt-2 mt-sm-0" action="#">
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
						<!-- /basic select -->


						<!-- Single select2 selects -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Single select2 selects</h6>
							</div>
							
							<div class="card-body">
								Card footer with a single <code>Select2</code> select
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
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

								<form class="mt-2 mt-sm-0" action="#">
									<div class="wmin-sm-200">
										<select class="form-control form-control-select2" data-fouc>
											<optgroup label="Alaskan Time Zone">
												<option value="AK">Alaska</option>
												<option value="HI">Hawaii</option>
											</optgroup>
											<optgroup label="Pacific Time Zone">
												<option value="CA">California</option>
												<option value="NV" selected>Nevada</option>
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
						<!-- /single select2 selects -->

					</div>


					<div class="col-lg-6">

						<!-- Multiple select2 selects -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Multiple select2 selects</h6>
							</div>
							
							<div class="card-body">
								Card footer with multiple <code>Select2</code> select
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
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

								<form class="mt-2 mt-sm-0" action="#">
									<div class="wmin-sm-200">
										<select class="form-control form-control-select2" multiple="multiple" data-fouc>
											<optgroup label="Alaskan Time Zone">
												<option value="AK">Alaska</option>
												<option value="HI" selected>Hawaii</option>
											</optgroup>
											<optgroup label="Pacific Time Zone">
												<option value="CA">California</option>
												<option value="NV" selected>Nevada</option>
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
						<!-- /multiple select2 selects -->


						<!-- Multiselect -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Multiselect</h6>
							</div>
							
							<div class="card-body">
								Card footer with single and multiple selects
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
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

								<form class="mt-2 mt-sm-0" action="#">
									<div class="wmin-sm-200">
										<select class="form-control form-control-multiselect" multiple="multiple" data-fouc>
											<option value="cheese" selected>Cheese</option>
											<option value="tomatoes">Tomatoes</option>
											<option value="mozarella">Mozzarella</option>
											<option value="mushrooms">Mushrooms</option>
											<option value="pepperoni">Pepperoni</option>
											<option value="onions" selected>Onions</option>
										</select>
									</div>
								</form>
							</div>
						</div>
						<!-- /multiselect -->

					</div>
				</div>
				<!-- /footer selects -->


				<!-- Footer buttons -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Card footer buttons
					</h6>
					<span class="text-muted d-block">Basic buttons with options</span>
				</div>

				<div class="row">
					<div class="col-lg-6">

						<!-- Single button -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Single button</h6>
							</div>
							
							<div class="card-body">
								Footer with basic button. Available in all sizes, colors and styling options
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<button type="button" class="btn btn-outline bg-indigo-400 text-indigo-400 border-indigo-400">Left button</button>
								<button type="button" class="btn bg-blue">Right button</button>
							</div>
						</div>
						<!-- /single button -->


						<!-- Single button dropdown -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Button dropdown</h6>
							</div>
							
							<div class="card-body">
								Footer with single button dropdown menu
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<div class="btn-group">
									<button type="button" class="btn bg-danger-400 dropdown-toggle" data-toggle="dropdown">Left menu</button>
									<div class="dropdown-menu">
										<a href="#" class="dropdown-item">Action</a>
										<a href="#" class="dropdown-item">Another action</a>
										<a href="#" class="dropdown-item">Something else here</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item">One more separated line</a>
									</div>
								</div>

								<div class="btn-group">
									<button type="button" class="btn btn-outline bg-slate text-slate-700 border-slate border-2 dropdown-toggle" data-toggle="dropdown">Right menu</button>
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
						<!-- /single button dropdown -->


						<!-- Segmented button -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Segmented button</h6>
							</div>
							
							<div class="card-body">
								Card footer with segmented buttons
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<div class="btn-group">
		                            <button class="btn btn-outline bg-dark text-dark border-dark">Left menu</button>
		                            <button class="btn btn-outline bg-dark text-dark border-dark dropdown-toggle" data-toggle="dropdown"></button>
									<div class="dropdown-menu">
										<a href="#" class="dropdown-item">Action</a>
										<a href="#" class="dropdown-item">Another action</a>
										<a href="#" class="dropdown-item">Something else here</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item">One more separated line</a>
									</div>
		                        </div>

								<div class="btn-group">
		                            <button class="btn bg-teal-400">Right menu</button>
		                            <button class="btn bg-teal-400 dropdown-toggle" data-toggle="dropdown"></button>
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
						<!-- /segmented button -->


						<!-- Multiple buttons -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Multiple buttons</h6>
							</div>
							
							<div class="card-body">
								Card footer with multiple buttons
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<div class="btn-group">
									<button type="button" class="btn bg-indigo-400"><i class="icon-checkmark3 mr-2"></i> Save</button>
									<button type="button" class="btn btn-light ml-0 border-left-0"><i class="icon-cross2 mr-2"></i> Close</button>
								</div>

								<div class="mt-2 mt-sm-0">
									<button type="button" class="btn bg-indigo-400"><i class="icon-checkmark3 mr-2"></i> Save</button>
									<button type="button" class="btn btn-light ml-3"><i class="icon-cross2 mr-2"></i> Close</button>
								</div>
							</div>
						</div>
						<!-- /multiple button -->

					</div>


					<div class="col-lg-6">

						<!-- Icon button -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Card header</h6>
							</div>
							
							<div class="card-body">
								Card footer with single icon button. Available in all sizes, colors and styling options
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<button type="button" class="btn btn-outline bg-pink-400 text-pink-400 border-pink-400 btn-icon border-2">
									<i class="icon-checkmark3"></i>
								</button>
								<button type="button" class="btn bg-success-400 btn-icon"><i class="icon-task"></i></button>
							</div>
						</div>
						<!-- /icon button -->


						<!-- Icon button dropdown -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Icon button dropdown</h6>
							</div>
							
							<div class="card-body">
								Card footer with icon button dropdown
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<div class="btn-group">
									<button type="button" class="btn bg-blue btn-icon dropdown-toggle" data-toggle="dropdown">
										<i class="icon-menu6"></i>
									</button>
									
									<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item">Action</a>
										<a href="#" class="dropdown-item">Another action</a>
										<a href="#" class="dropdown-item">Something else here</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item">One more separated line</a>
									</div>
								</div>

								<div class="btn-group">
									<button type="button" class="btn btn-outline bg-teal text-teal border-teal btn-icon dropdown-toggle" data-toggle="dropdown">
										<i class="icon-calendar22"></i>
									</button>

									<div class="dropdown-menu">
										<a href="#" class="dropdown-item">Action</a>
										<a href="#" class="dropdown-item">Another action</a>
										<a href="#" class="dropdown-item">Something else here</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item">One more separated line</a>
									</div>
								</div>
							</div>
						</div>
						<!-- /icon button dropdown -->


						<!-- Segmented icon button -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Segmented icon button</h6>
							</div>
							
							<div class="card-body">
								Card footer with segmented icon button
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<div class="btn-group">
		                            <button class="btn btn-outline bg-indigo-400 text-indigo-400 border-indigo-400 border-2 btn-icon">
		                            	<i class="icon-apple2"></i>
	                            	</button>
		                            <button class="btn btn-outline bg-indigo-400 text-indigo-400 border-indigo-400 border-2 btn-icon dropdown-toggle" data-toggle="dropdown"></button>
									<div class="dropdown-menu">
										<a href="#" class="dropdown-item">Action</a>
										<a href="#" class="dropdown-item">Another action</a>
										<a href="#" class="dropdown-item">Something else here</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item">One more separated line</a>
									</div>
		                        </div>

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
						<!-- /segmented icon button -->


						<!-- Multiple icon buttons -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Multiple icon buttons</h6>
							</div>
							
							<div class="card-body">
								Card footer with multiple icon buttons
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<div class="btn-group">
									<button type="button" class="btn bg-teal-400 btn-icon"><i class="icon-checkmark3"></i></button>
									<button type="button" class="btn btn-light btn-icon ml-0 border-left-0"><i class="icon-cross2"></i></button>
								</div>

								<div>
									<button type="button" class="btn bg-teal-400 btn-icon"><i class="icon-checkmark3"></i></button>
									<button type="button" class="btn btn-light btn-icon ml-2"><i class="icon-cross2"></i></button>
								</div>
							</div>
						</div>
						<!-- /multiple icon buttons -->

					</div>
				</div>
				<!-- /footer buttons -->


				<!-- Additional footer elements -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Other elements
					</h6>
					<span class="text-muted d-block">Other card footer elements</span>
				</div>

				<div class="row">
					<div class="col-lg-6">

						<!-- Pills -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Footer pills</h6>
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

							<div class="card-footer bg-white d-flex justify-content-center align-items-center py-2">
								<ul class="nav nav-pills mb-0">
									<li class="nav-item">
										<a href="#card-pill1" class="nav-link active" data-toggle="tab">
											<i class="icon-screen-full mr-2"></i>
											Home
										</a>
									</li>
									<li class="nav-item">
										<a href="#card-pill2" class="nav-link" data-toggle="tab">
											<i class="icon-stats-bars mr-2"></i>
											Stats
										</a>
									</li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
											<i class="icon-cog3"></i>
										</a>
										
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
						<!-- /pills -->


						<!-- Progress bar -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Progress bar</h6>
							</div>
							
							<div class="card-body">
								Card footer with progress bar. Available in all colors and options
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<div class="w-100 w-sm-auto wmin-sm-200">
									<div class="progress" style="height: 0.375rem;">
										<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 40%;">
											<span class="sr-only">40% Complete</span>
										</div>
									</div>
								</div>

								<div class="w-100 w-sm-auto wmin-sm-200 mt-2 mt-sm-0">
									<div class="progress">
										<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 80%;">
											<span class="sr-only">80% Complete</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /progress bar -->


						<!-- jQuery UI slider -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">jQuery UI slider</h6>
							</div>
							
							<div class="card-body">
								Card footer with jQuery UI slider. Available in all sizes and colors
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center py-3">
								<div class="w-100 w-sm-auto wmin-sm-200">
									<div class="jui-slider-basic ui-slider-primary" data-fouc></div>
								</div>

								<div class="w-100 w-sm-auto wmin-sm-200 mt-4 mt-sm-0">
									<div class="jui-slider-range ui-slider-warning" data-fouc></div>
								</div>
							</div>
						</div>
						<!-- /jQuery UI slider -->

					</div>


					<div class="col-lg-6">

						<!-- Bottom tabs -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Footer tabs</h6>
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

							<div class="card-footer bg-white d-flex justify-content-center align-items-center p-0">
								<ul class="nav nav-tabs nav-tabs-bottom mb-0 border-0">
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
						<!-- /bottom tabs -->


						<!-- Inline text dropdown -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Inline text dropdown</h6>
							</div>
							
							<div class="card-body">
								Card footer with inline text and attached dropdown menu
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<div class="dropdown">
									<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown">Left dropdown</a>
									<div class="dropdown-menu">
										<a href="#" class="dropdown-item">Action</a>
										<a href="#" class="dropdown-item">Another action</a>
										<a href="#" class="dropdown-item">Something else here</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item">One more separated line</a>
									</div>
								</div>

								<div class="dropdown ">
									<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown">Right dropdown</a>
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
						<!-- /inline etxt dropdown -->


						<!-- Noui slider -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">NoUI slider</h6>
							</div>
							
							<div class="card-body">
								Card footer with NoUI slider. Available in all sizes
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center py-3">
								<div class="w-100 w-sm-auto wmin-sm-200">
									<div class="noui-slider noui-slider-danger noui-height-helper" id="noui-slider-demo" data-fouc></div>
								</div>

								<div class="w-100 w-sm-auto wmin-sm-200 mt-4 mt-sm-0">
									<div class="noui-slider noui-slider-success noui-height-helper" id="noui-slider-demo2" data-fouc></div>
								</div>
							</div>
						</div>
						<!-- /noui slider -->

					</div>
				</div>
				<!-- /additional header elements -->


				<!-- Mixing footer elements -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Mixing elements
					</h6>
					<span class="text-muted d-block">Different element variations</span>
				</div>

				<div class="row">
					<div class="col-lg-6">

						<!-- Select2 and text with icons -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Select and text</h6>
							</div>
							
							<div class="card-body">
								Mixing Select2 selects and inline text with icons
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<form action="#">
									<div class="wmin-sm-200">
										<select class="form-control form-control-select2" data-placeholder="Add to collection" data-fouc>
											<option></option>
											<option value="1">Favourites</option>
											<option value="2">Best sellers</option>
											<option value="3">To purchase</option>
											<option value="4">Commercial</option>
										</select>
									</div>
								</form>

								<div class="mt-3 mt-sm-0">
									<span class="text-muted mr-2">Rating:</span>
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
						<!-- /select2 and text with icons -->


						<!-- Checkbox and text dropdown -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Checkbox and text dropdown</h6>
							</div>
							
							<div class="card-body">
								Mixing checkbox with label and inline text with dropdown
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<form action="#">
									<div class="form-check">
										<label class="form-check-label">
											<input type="checkbox" class="form-input-styled" checked data-fouc>
											Remember
										</label>
									</div>
								</form>

		                		<div class="dropdown">
		                			<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown">
		                				<i class="icon-cog3 mr-2"></i>
		                				Settings
	                				</a>

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
						<!-- /checkbox and text dropdown -->


						<!-- Switchery and input field -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Switchery and input field</h6>
							</div>
							
							<div class="card-body">
								Mixing switchery toggle and input field
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<form action="#">
									<div class="form-group-feedback form-group-feedback-right">
										<input type="search" class="form-control wmin-200" placeholder="Enter resolution...">
										<div class="form-control-feedback">
											<i class="icon-pencil3 text-muted"></i>
										</div>
									</div>
								</form>

								<form class="mt-3 mt-sm-0" action="#">
									<div class="form-check form-check-right form-check-inline form-check-switchery">
										<label class="form-check-label">
											<input type="checkbox" class="form-input-switchery" checked data-fouc>
											Auto save
										</label>
									</div>
								</form>
							</div>
						</div>
						<!-- /switchery and input field -->

					</div>


					<div class="col-lg-6">

						<!-- Text and button dropdown -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Text and button dropdown</h6>
							</div>
							
							<div class="card-body">
								Mixing inline text and button dropdown
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
		                		<div class="text-danger"><i class="icon-blocked mr-2"></i> Error occurred</div>

			                	<div class="btn-group">
		                            <button class="btn btn-dark dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i></button>
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
						<!-- /text and button dropdown -->


						<!-- Spinner and progress bar -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Text, spinner and progress bar</h6>
							</div>
							
							<div class="card-body">
								Mixing inline text, rotating spinner icon and progress bar
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<div class="text-muted"><i class="icon-spinner2 spinner mr-2"></i> Processing...</div>

								<div class="progress w-100 w-sm-auto wmin-sm-200 mt-2 mt-sm-0" style="height: 0.375rem;">
									<div class="progress-bar bg-indigo-400 progress-bar-striped progress-bar-animated" style="width: 60%;">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /spinner and progress bar -->


						<!-- Multiple elements -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Multiple elements</h6>
							</div>
							
							<div class="card-body">
								Mixing icon group, inline text and link
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<div>
									<div class="list-inline list-inline-condensed d-inline-block mb-0">
				                		<a href="#" class="list-inline-item text-pink-400"><i class="icon-heart5"></i></a>
				                		<a href="#" class="list-inline-item text-default"><i class="icon-bubble2"></i></a>
				                	</div>

				                	<span class="text-muted ml-3">Posted 3 hours ago</span>
			                	</div>

								<a href="#">Read more <i class="icon-menu7 ml-2"></i></a>
							</div>
						</div>
						<!-- /multiple elements -->

					</div>
				</div>
				<!-- /mixing footer elements -->


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
							<div class="card-header">
								<h6 class="card-title">Always visible</h6>
							</div>
							
							<div class="card-body">
								Add <code>.header-elements-inline</code> class to direct parent of <code>.header-elements</code> to make header elements visible on mobile and desktop.
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
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

		                		<div class="dropdown">
		                			<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown">
		                				<i class="icon-cog3"></i>
	                				</a>

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
						<!-- /always visible -->


						<!-- Wrap and show -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Wrap and show</h6>
							</div>
							
							<div class="card-body">
								To wrap footer elements to the second row, add <code>.header-elements-[breakpoint]-inline</code> class to parent container. Breakpoint in class name is required, CSS needs to know screen size.
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<div class="text-danger"><i class="icon-blocked mr-2"></i> Error occurred</div>

								<form class="mt-2 mt-sm-0" action="#">
									<div class="form-group-feedback form-group-feedback-right">
										<input type="search" class="form-control wmin-sm-200" placeholder="Search...">
										<div class="form-control-feedback">
											<i class="icon-search4 font-size-base text-muted"></i>
										</div>
									</div>
								</form>
							</div>
						</div>
						<!-- /wrap and show -->


						<!-- Stack elements -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Stack elements</h6>
							</div>
							
							<div class="card-body">
								Footer (block) elements are stackable by default. Use responsive margin classes to control vertical and horizontal spacing. Make sure margin and container breakpoints are matching.
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<form action="#">
									<div class="wmin-sm-200">
										<input type="file" class="form-input-styled" data-fouc>
									</div>
								</form>

								<div class="d-sm-flex align-items-sm-center mt-3 mt-sm-0">
									<span class="text-muted mr-sm-3">Loading:</span>

									<div class="progress mt-1 mt-sm-0 w-100 w-sm-auto wmin-sm-200" style="height: 0.625rem;">
										<div class="progress-bar bg-indigo-400 progress-bar-striped progress-bar-animated" style="width: 60%;">
											<span class="sr-only">60% Complete</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /stack elements -->


						<!-- Centered elements -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Centered elements</h6>
							</div>
							
							<div class="card-body">
								Use combination of <code>.d-flex</code> and <code>.justify-content-center</code> classes to center items in the line. All flex helper classes can be used as well for additional position options.
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center text-center">
								<div>
									<span class="text-muted mr-2">Rating:</span>
									<span>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<span class="text-muted ml-2">(49)</span>
									</span>
								</div>

								<div class="mt-2 mt-sm-0">
									<a href="#">Read more <i class="icon-arrow-right14 ml-2"></i></a>
								</div>
							</div>
						</div>
						<!-- /centered elements -->

					</div>

					<div class="col-lg-6">
						
						<!-- Hide on mobile -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Hide on mobile</h6>
							</div>
							
							<div class="card-body">
								To hide footer elements on certain breakpoints, use <code>.header-elements-[breakpoint]-inline</code> class in parent container and <code>.d-none</code> in footer elements container.
							</div>

							<div class="card-footer bg-white d-none d-sm-flex justify-content-sm-between align-items-sm-center">
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

		                		<div class="dropdown">
		                			<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown">
		                				<i class="icon-cog3"></i>
	                				</a>

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
						<!-- /hide on mobile -->


						<!-- Wrap and toggle -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Wrap and toggle</h6>
							</div>
							
							<div class="card-body">
								You can also use optional toggler - add <code>.d-flex</code> to page title and custom markup for the toggle button. And <code>.d-none</code> to footer elements container to make them hidden by default.
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<div class="d-flex">
									<div class="text-danger"><i class="icon-blocked mr-2"></i> Error occurred</div>
									<a href="#" class="footer-elements-toggle text-default d-sm-none"><i class="icon-more"></i></a>
								</div>

								<div class="footer-elements d-none d-sm-block mt-3 mt-sm-0">
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
						</div>
						<!-- /wrap and toggle -->


						<!-- Single line -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Single line</h6>
							</div>
							
							<div class="card-body">
								You can easily show footer elements in a single line, just wrap inner elements in container with <code>.d-flex</code> and <code>.align-items-center</code> classes. Use other flex utilities for adjustments.
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<form action="#">
									<div class="wmin-sm-200">
										<input type="file" class="form-input-styled" data-fouc>
									</div>
								</form>

								<div class="d-flex align-items-center mt-3 mt-sm-0">
									<span class="text-muted mr-3">Loading:</span>

									<div class="progress w-100 w-sm-auto wmin-sm-200" style="height: 0.625rem;">
										<div class="progress-bar bg-indigo-400 progress-bar-striped progress-bar-animated" style="width: 60%;">
											<span class="sr-only">60% Complete</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /single line -->


						<!-- Justified elements -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Justified elements</h6>
							</div>
							
							<div class="card-body">
								Use combination of <code>.d-flex</code> and <code>.justify-content-between</code> (or <code>.m(l,r)-auto</code>) classes to distribute items evenly in the line: first item is on the start line, last item on the end line.
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<div class="d-flex justify-content-between">
									<span class="text-muted mr-2">Rating:</span>
									<span>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<span class="text-muted ml-2">(49)</span>
									</span>
								</div>

								<div class="mt-2 mt-sm-0">
									<a href="#">Read more <i class="icon-arrow-right14 ml-2"></i></a>
								</div>
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

</body>
</html>