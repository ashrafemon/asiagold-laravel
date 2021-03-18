<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->

<head>
	<base href="">
	<meta charset="utf-8" />
	<title>Asia Gold | @yield('title')</title>
	<meta name="description" content="Latest updates and statistic charts">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!--begin::Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

	<!--end::Fonts -->

	<!--begin::Page Vendors Styles(used by this page) -->
	<link href="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />

	<!--end::Page Vendors Styles -->

	<!--begin::Global Theme Styles(used by all pages) -->
	<link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('assets/css/swift-box-layout.min.css')}}">
	<link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" type="text/css">

	
	<!--end::Global Theme Styles -->

	<!--begin::Layout Skins(used by all pages) -->

	<!--end::Layout Skins -->
	<!-- <link rel="shortcut icon" href="{{asset('assets/media/logos/favicon.ico')}}" /> -->
	<link rel="shortcut icon" href="{{asset('assets/images/AsiaGoldLogo.png')}}" />
</head>