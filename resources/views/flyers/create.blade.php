@extends('layout')

@section('content')

	<h1>Selling your home?</h1>

	<hr>

	<form>
		
		<div class="form-group">
			<label for="street">Street:</label>
			<input type="text" name="street" id="street" class="form-control" value="{{old('street')}}">

		<div class="form-group">
			<label for="city">City:</label>
			<input type="text" name="city" id="city" class="form-control" value="{{old('city')}}">
		</div>

		<div class="form-group">
			<label for="zip">Zip:</label>
			<input type="text" name="zip" id="zip" class="form-control" value="{{old('zip')}}">
		</div>

		<div class="form-group">
			<label for="country">Country:</label>
			<select id="country" name="country" class="form-control"></select>
		</div>

		<div class="form-group">
			<label for="state">State:</label>
			<input type="text" name="state" id="state" class="form-control" value="{{old('state')}}">
		</div>


		<hr>

		<div class="form-group">
			<label for="price">Sales Price:</label>
			<input type="text" name="price" id="price" class="form-control" value="{{old('price')}}">
		</div>

		<div class="form-group">
			<label for="description">Home Description:</label>
			<textarea type="text" name="description" id="description" class="form-control" rows="10">

				{{old('description')}}"

			</textarea>
		</div>


	</form>

@stop