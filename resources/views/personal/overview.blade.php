@extends('layouts.app')

@section('template_title')
Geographic Distribution Statistics
@endsection

@section('template_linked_css')

<link rel="stylesheet" href="{{ asset('css/custom/map.css') }}">

@endsection

@section('content')

<div class="container">
    <div class="row">

    	<h1 style="text-align: center;">Geographic Distribution Statistics</h1>

    	<div class="map-service">
			<div class="map-service-right">
				<div class="china-map">

                    @if ($num_1 > 0)
                    <div class="region-list waite postition-8 waite-node">
						<div class="area-box"><span class="dot"></span><span class="pulse delay-06"></span>
							<span class="pulse delay-05"></span>
							<span class="pulse delay-04"></span></span></div>
						<div class="show-regin">
							<span>北京 <i class="fa fa-users" aria-hidden="true"></i> {{ $num_1 }} People</span>
						</div>
					</div>
					@endif

					@if ($num_2 > 0) 
					<div class="region-list active postition-9 online-node">
						<div class="area-box"><span class="dot"></span><span class="pulse delay-10"></span>
							<span class="pulse delay-09"></span>
							<span class="pulse delay-08"></span></div>
						<div class="show-regin">
							<span>江苏</span>
							<span><i class="fa fa-users" aria-hidden="true"></i> {{ $num_2 }} People</span>
						</div>
					</div>
					@endif

					@if ($num_3 > 0)
					<div class="region-list active postition-2 online-node">
						<div class="area-box"><span class="dot"></span><span class="pulse delay-06"></span>
							<span class="pulse delay-05"></span>
							<span class="pulse delay-04"></span></div>
						<div class="show-regin">
							<span>四川</span>
							<span><i class="fa fa-users" aria-hidden="true"></i> {{ $num_3 }} People</span>
						</div>
					</div>
					@endif

					@if ($num_4 > 0)
					<div class="region-list active postition-5 online-node">
						<div class="area-box"><span class="dot"></span><span class="pulse delay-01"></span>
							<span class="pulse delay-02"></span>
							</div>
						<div class="show-regin">
							<span>湖北</span>
							<span><i class="fa fa-users" aria-hidden="true"></i> {{ $num_4 }} People</span>
						</div>
					</div>
					@endif

					@if ($num_5 > 0)
					<div class="region-list active postition-6 online-node">
						<div class="area-box"><span class="dot"></span><span class="pulse delay-06"></span>
							<span class="pulse delay-05"></span>
							<span class="pulse delay-04"></span></div>
						<div class="show-regin">
							<span>广东</span>
							<span><i class="fa fa-users" aria-hidden="true"></i> {{ $num_5 }} People</span>
						</div>
					</div>
					@endif

					@if ($num_6 > 0)
					<div class="region-list active postition-4 online-node">
						<div class="area-box"><span class="dot"></span><span class="pulse delay-01"></span>
							<span class="pulse delay-02"></span>
							</div>
						<div class="show-regin">
							<span>陕西</span>
							<span><i class="fa fa-users" aria-hidden="true"></i> {{ $num_6 }} People</span>
						</div>
					</div>
					@endif

					@if ($num_7 > 0)
					<div class="region-list active postition-10 online-node">
						<div class="area-box"><span class="dot"></span><span class="pulse delay-06"></span>
							<span class="pulse delay-05"></span>
							<span class="pulse delay-04"></span></div>
						<div class="show-regin">
							<span>香港</span>
							<span><i class="fa fa-users" aria-hidden="true"></i> {{ $num_7 }} People</span>
						</div>
					</div>
					@endif

					@if ($num_8 > 0)
					<div class="region-list  active  postition-11 online-node">
						<div class="area-box"><span class="dot"></span><span class="pulse delay-06"></span>
							<span class="pulse delay-05"></span>
							<span class="pulse delay-04"></span></div>
						<div class="show-regin">
							<span>山东</span>
							<span><i class="fa fa-users" aria-hidden="true"></i> {{ $num_8 }} People</span>
						</div>
					</div>
					@endif

					@if ($num_9 > 0)
					<div class="region-list active postition-7 online-node">
						<div class="area-box"><span class="dot"></span><span class="pulse delay-10"></span>
							<span class="pulse delay-09"></span>
							<span class="pulse delay-08"></span></div>
						<div class="show-regin">
							<span>辽宁 <i class="fa fa-users" aria-hidden="true"></i> {{ $num_9 }} People</span>
						</div>
					</div>
					@endif

					@if ($num_10 > 0)
					<div class="region-list active postition-13 online-node">
						<div class="area-box"><span class="dot"></span><span class="pulse delay-04"></span>
							<span class="pulse delay-05"></span>
							<span class="pulse delay-03"></span></div>
						<div class="show-regin">
							<span>内蒙古</span>
							<span><i class="fa fa-users" aria-hidden="true"></i> {{ $num_10 }} People</span>
						</div>
					</div>
					@endif
			
				</div>
			</div>
		</div>

	</div>
</div>

@endsection