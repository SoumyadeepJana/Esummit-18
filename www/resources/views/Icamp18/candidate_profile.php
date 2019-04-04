@extends('parent_layouts.dashboard.main')

@section('title', 'Icamp'18 | Dashboard')

@section('content')

<div class="m-portlet">
		<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
		<div class="m-portlet__head-title">
		<span class="m-portlet__head-icon">
		<i class="la la-leaf"></i>
		</span>
		<h3 class="m-portlet__head-text">
		Choose Your Tracks!
		</h3>
		</div>
		</div>
		</div>
		<div class="m-portlet__body">
		<div class="m-pricing-table-1">
		<div class="m-pricing-table-1__items row">
		<div class="m-pricing-table-1__item col-lg-3">
		<div class="m-pricing-table-1__visual">
		<div class="m-pricing-table-1__hexagon1"></div>
		<div class="m-pricing-table-1__hexagon2"></div>
		<span class="m-pricing-table-1__icon m--font-brand">
		<img src="assets/img/track_tech.png">
		</span>
		</div>
		<span class="m-pricing-table-1__price">
		Tech & Design
		</span>											
		<div class="m-pricing-table-1__btn">
		<button type="button" class="btn btn-brand m-btn m-btn--custom m-btn--pill m-btn--wide m-btn--uppercase m-btn--bolder m-btn--sm" id="track_tech">
		Select
		</button>
		</div>
		</div>
		<div class="m-pricing-table-1__item col-lg-3">
		<div class="m-pricing-table-1__visual">
		<div class="m-pricing-table-1__hexagon1"></div>
		<div class="m-pricing-table-1__hexagon2"></div>
		<span class="m-pricing-table-1__icon m--font-brand">
		<img src="assets/img/track_market.png">
		</span>
		</div>
		<span class="m-pricing-table-1__price">
		Marketing												
		</span>
		<div class="m-pricing-table-1__btn">
		<button type="button" class="btn btn-brand m-btn m-btn--custom m-btn--pill m-btn--wide m-btn--uppercase m-btn--bolder m-btn--sm" id="track_market">
		Select
		</button>
		</div>
		</div>
		<div class="m-pricing-table-1__item col-lg-3">
		<div class="m-pricing-table-1__visual">
		<div class="m-pricing-table-1__hexagon1"></div>
		<div class="m-pricing-table-1__hexagon2"></div>
		<span class="m-pricing-table-1__icon m--font-brand">
		<img src="assets/img/track_innovation.png">
		</span>
		</div>
		<span class="m-pricing-table-1__price">
		Innovation												
		</span>
		<div class="m-pricing-table-1__btn">
		<button type="button" class="btn btn-brand m-btn m-btn--custom m-btn--pill m-btn--wide m-btn--uppercase m-btn--bolder m-btn--sm" id="track_innovation">
		Select
		</button>
		</div>
		</div>
		<div class="m-pricing-table-1__item col-lg-3">
		<div class="m-pricing-table-1__visual">
		<div class="m-pricing-table-1__hexagon1"></div>
		<div class="m-pricing-table-1__hexagon2"></div>
		<span class="m-pricing-table-1__icon m--font-brand">
		<img src="assets/img/track_startup.png">
		</span>
		</div>
		<span class="m-pricing-table-1__price">
		Startup Planet												
		</span>
		<div class="m-pricing-table-1__btn">
		<button type="button" class="btn btn-brand m-btn m-btn--custom m-btn--pill m-btn--wide m-btn--uppercase m-btn--bolder m-btn--sm" id="track_startup">
		Select
		</button>
		</div>
		</div>										
		</div>
		</div>
		</div>
		</div>

		@endsection
		