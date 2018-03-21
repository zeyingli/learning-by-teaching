@extends('layouts.app')

@section('template_title')
Showing Your City On The Map
@endsection

@section('template_linked_css')

<link rel="stylesheet" href="{{ asset('css/custom/map.css') }}">

@endsection

@section('content')

<div class="container">
    <div class="row">

	    <div class="map-service">
			<div class="map-service-right">
				<div class="china-map">

					<!--
					<div class="region-list postition-1">
						<div class="area-box">
							<span class="dot"></span>
							<span class="pulse delay-01"></span>
							<span class="pulse delay-02"></span>
						</div>
					</div>
				    -->

                    @if ($user->location == 1)
                    <div class="region-list waite postition-8 waite-node">
						<div class="area-box"><span class="dot"></span><span class="pulse delay-06"></span>
							<span class="pulse delay-05"></span>
							<span class="pulse delay-04"></span></span></div>
						<div class="show-regin"><span>北京</span></div>
					</div>
					@elseif ($user->location == 2) 
					<div class="region-list waite postition-9 waite-node">
						<div class="area-box"><span class="dot"></span><span class="pulse delay-10"></span>
							<span class="pulse delay-09"></span>
							<span class="pulse delay-08"></span></div>
						<div class="show-regin"><span>江苏</span></div>
					</div>
					@elseif ($user->location == 3)
					<div class="region-list waite postition-2 waite-node">
						<div class="area-box"><span class="dot"></span><span class="pulse delay-06"></span>
							<span class="pulse delay-05"></span>
							<span class="pulse delay-04"></span></div>
						<div class="show-regin"><span>四川</span></div>
					</div>
					@elseif ($user->location == 4)
					<div class="region-list waite postition-5 waite-node">
						<div class="area-box"><span class="dot"></span><span class="pulse delay-01"></span>
							<span class="pulse delay-02"></span>
							</div>
						<div class="show-regin"><span>湖北</span></div>
					</div>
					@elseif ($user->location == 5)
					<div class="region-list waite postition-6 waite-node">
						<div class="area-box"><span class="dot"></span><span class="pulse delay-06"></span>
							<span class="pulse delay-05"></span>
							<span class="pulse delay-04"></span></div>
						<div class="show-regin"><span>广东</span></div>
					</div>
					@elseif ($user->location == 6)
					<div class="region-list waite postition-4 waite-node">
						<div class="area-box"><span class="dot"></span><span class="pulse delay-01"></span>
							<span class="pulse delay-02"></span>
							</div>
						<div class="show-regin"><span>陕西</span></div>
					</div>
					@elseif ($user->location == 7)
					<div class="region-list waite postition-10 waite-node">
						<div class="area-box"><span class="dot"></span><span class="pulse delay-06"></span>
							<span class="pulse delay-05"></span>
							<span class="pulse delay-04"></span></div>
						<div class="show-regin"><span>香港</span></div>
					</div>
					@elseif ($user->location == 8)
					<div class="region-list  waite postition-11 waite-node">
						<div class="area-box"><span class="dot"></span><span class="pulse delay-06"></span>
							<span class="pulse delay-05"></span>
							<span class="pulse delay-04"></span></div>
						<div class="show-regin"><span>山东</span></div>
					</div>
					@elseif ($user->location == 9)
					<div class="region-list waite postition-7 waite-node">
						<div class="area-box"><span class="dot"></span><span class="pulse delay-10"></span>
							<span class="pulse delay-09"></span>
							<span class="pulse delay-08"></span></div>
						<div class="show-regin"><span>辽宁</span></div>
					</div>
					@elseif ($user->location == 10)
					<div class="region-list waite postition-13 waite-node">
						<div class="area-box"><span class="dot"></span><span class="pulse delay-04"></span>
							<span class="pulse delay-05"></span>
							<span class="pulse delay-03"></span></div>
						<div class="show-regin"><span>内蒙古</span></div>
					</div>
					@else
					<div class="region-list postition-3">
						<div class="area-box"><span class="dot"></span><span class="pulse delay-01"></span>
							<span class="pulse delay-02"></span>
							</div>
					</div>
					@endif
			
				</div>
			</div>
		</div>

		<br>
		<a class="btn btn-md btn-success btn-block" href="{{ url('overview') }}" data-toggle="tooltip" title="Show">
	        <i class="fa fa-eye fa-fw" aria-hidden="true"></i> <span class="hidden-xs hidden-sm">Want to Know How Many People Are Living Around You?</span>
	    </a>

	</div>
</div>

@endsection