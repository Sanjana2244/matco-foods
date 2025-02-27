const mix = require('laravel-mix');

mix
	.scripts(
		[
			"public/backend-assets/vendors/jquery/dist/jquery.min.js",
			"public/backend-assets/vendors/popper.js/dist/umd/popper.min.js",
			"public/backend-assets/vendors/bootstrap/dist/js/bootstrap.js",
			"public/backend-assets/vendors/PACE/pace.min.js",
			"public/backend-assets/vendors/perfect-scrollbar/js/perfect-scrollbar.jquery.js",
			"public/backend-assets/vendors/bower-jvectormap/jquery-jvectormap-1.2.2.min.js",
			"public/backend-assets/js/maps/jquery-jvectormap-us-aea.js",
			"public/backend-assets/vendors/d3/d3.min.js",
			"public/backend-assets/vendors/nvd3/build/nv.d3.min.js",
			"public/backend-assets/vendors/jquery.sparkline/index.js",
			"public/backend-assets/vendors/chart.js/dist/Chart.min.js",
			"public/backend-assets/js/app.js",
		],
		"public/dist/js/backend.min.js"
	)
	.styles(
		[
			"public/backend-assets/vendors/bootstrap/dist/css/bootstrap.css",
			"public/backend-assets/vendors/PACE/themes/blue/pace-theme-minimal.css",
			"public/backend-assets/vendors/perfect-scrollbar/css/perfect-scrollbar.min.css",
			"public/backend-assets/vendors/bower-jvectormap/jquery-jvectormap-1.2.2.css",
			"public/backend-assets/vendors/nvd3/build/nv.d3.min.css",
			"public/backend-assets/css/ei-icon.css",
			"public/backend-assets/css/themify-icons.css",
			"public/backend-assets/css/font-awesome.min.css",
			"public/backend-assets/css/animate.min.css",
			"public/backend-assets/css/app.css",
		],
		"public/dist/css/backend.min.css"
	);
