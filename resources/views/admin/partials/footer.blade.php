	<!-- begin::Global Config(global config for global JS sciprts) -->
	<script>
		var KTAppOptions = {
			"colors": {
				"state": {
					"brand": "#2c77f4",
					"light": "#ffffff",
					"dark": "#282a3c",
					"primary": "#5867dd",
					"success": "#34bfa3",
					"info": "#36a3f7",
					"warning": "#ffb822",
					"danger": "#fd3995"
				},
				"base": {
					"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
					"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
				}
			}
		};
	</script>

	<!-- end::Global Config -->

	<!--begin::Global Theme Bundle(used by all pages) -->
	<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/js/scripts.bundle.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/js/swift-box.min.js')}}" type="text/javascript"></script>

	<!--end::Global Theme Bundle -->

	<!--begin::Page Vendors(used by this page) -->
	<script src="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}" type="text/javascript"></script>
	<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
	<script src="{{asset('assets/plugins/custom/gmaps/gmaps.js')}}" type="text/javascript"></script>

	<!--end::Page Vendors -->

	<!--begin::Page Scripts(used by this page) -->
	<script src="{{asset('assets/js/pages/dashboard.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/js/pages/crud/forms/widgets/bootstrap-touchspin.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/js/pages/crud/forms/widgets/bootstrap-select.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js')}}" type="text/javascript"></script>
	@stack('script')

	<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->

	</html>