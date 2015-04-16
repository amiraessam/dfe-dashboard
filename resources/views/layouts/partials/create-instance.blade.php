@extends('layouts.partials.single-instance')

@section('panel-body')
	<div class="form-group">
		<label for="instance-name" class="col-md-2 control-label">{{ \Lang::get('dashboard.instance-name-label') }}</label>
		<div class="col-md-10">
			<div class="input-group">
				<input type="hidden" name="control" value="create">
				<input type="text" required name="instance-name" id="instance-name" class="form-control" placeholder="{{ $defaultInstanceName }}">
				<span class="input-group-addon">{{ $defaultDomain }}</span>
			</div>
		</div>
	</div>
@overwrite