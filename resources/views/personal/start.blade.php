@extends('layouts.app')

@section('template_title')
Start Lighting Up Your City
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Start</div>
                <div class="panel-body">

                	{!! Form::open(array('action' => 'PublicController@store')) !!}

                        {{ csrf_field() }}

                        <div class="form-group has-feedback row {{ $errors->has('name') ? ' has-error ' : '' }}">
						<label for="username" class="col-md-3 control-label">Name</label>
							<div class="col-md-9">
								<div class="input-group">
									{!! Form::text('name', NULL, array('id' => 'name', 'class' => 'form-control', 'placeholder' => 'Please enter your name')) !!}
									<label class="input-group-addon" for="name"><i class="fa fa-user" aria-hidden="true"></i></label>
								</div>
								@if ($errors->has('name'))
								<span class="help-block">
								<strong>{{ $errors->first('name') }}</strong>
								</span>
								@endif
							</div>
						</div>

                        <div class="form-group has-feedback row {{ $errors->has('location') ? ' has-error ' : '' }}">
			               <label for="location" class="col-md-3 control-label">Hometown Nearby</label>
			                <div class="col-md-9">
			                  <div class="input-group">
			                    <select class="form-control" name="location" id="location" required>
			                    	<option disabled>Please select the province that nearby your hometown</option>
			                    	<option value="1">北京 (Beijing)</option>
			                    	<option value="2">江苏 (Jiangsu)</option>
			                    	<option value="3">四川 (Sichuan)</option>
			                    	<option value="4">湖北 (Hubei)</option>
			                    	<option value="5">广东 (Guangdong)</option>
			                    	<option value="6">陕西 (Shanxi)</option>
			                    	<option value="7">香港 (Hongkong)</option>
			                    	<option value="8">山东 (Shandong)</option>
			                    	<option value="9">辽宁 (Liaoning)</option>
			                    	<option value="10">内蒙古 (Inner Mongolia)</option>
			                    	<option disabled>* We will support more countries in the future, including US!</option>
			                    </select>
			                    <label class="input-group-addon" for="location"><i class="fa fa-globe" aria-hidden="true"></i></label>
			                  </div>

			                   @if ($errors->has('location'))
			                    <span class="help-block">
			                        <strong>{{ $errors->first('location') }}</strong>
			                    </span>
			                    @endif
			            	</div>
			        	</div>

			        	{!! Form::button('<i class="fa fa-star" aria-hidden="true"></i>&nbsp;' . 'Lighting Up Your City On The Map', array('class' => 'btn btn-success btn-flat margin-bottom-1 pull-right','type' => 'submit', )) !!}

			        	{!! Form::close() !!}

				</div>
            </div>
        </div>
    </div>
</div>

@endsection