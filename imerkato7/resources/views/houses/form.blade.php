<div class="form-group">
			{!! Form::label('category', 'Category:') !!}
			{!! Form::text('category') !!}
		<div>
		<div class="form-group">
			{!! Form::label('type', 'Type:') !!}
			{!! Form::text('type') !!}
		<div>
		<div class="form-group">
			{!! Form::label('title', 'Title:') !!}
			{!! Form::text('title') !!}
		<div>
		<div class="form-group">
			{!! Form::label('price', 'Price:') !!}
			{!! Form::text('price') !!}
		<div>
		<div class="form-group">
			{!! Form::label('currency_type', 'Currency Type:') !!}
			{!! Form::text('currency_type') !!}
		<div>
		<div class="form-group">
			{!! Form::label('detail', 'Detail:') !!}
			{!! Form::textarea('detail') !!}
		<div>
		<div class="form-group">
			{!! Form::label('contact_imerkato', 'Contact me by imerkato:') !!}
			{!! Form::text('contact_imerkato') !!}
		<div>
		<div class="form-group">
			{!! Form::label('contact_phone', 'Contact me by my phone:') !!}
			{!! Form::text('contact_phone') !!}
		<div>
	
		<div class="form-group">
			{!! Form::submit($submitButtonText, ['class'=>'btn-primary form-control']) !!}
		<div>