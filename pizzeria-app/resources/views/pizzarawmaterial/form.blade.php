<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="pizzas_id" class="form-label">{{ __('Pizzas Id') }}</label>
            <input type="text" name="pizzas_id" class="form-control @error('pizzas_id') is-invalid @enderror" value="{{ old('pizzas_id', $pizzarawmaterial?->pizzas_id) }}" id="pizzas_id" placeholder="Pizzas Id">
            {!! $errors->first('pizzas_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="raw_materials_id" class="form-label">{{ __('Raw Materials Id') }}</label>
            <input type="text" name="raw_materials_id" class="form-control @error('raw_materials_id') is-invalid @enderror" value="{{ old('raw_materials_id', $pizzarawmaterial?->raw_materials_id) }}" id="raw_materials_id" placeholder="Raw Materials Id">
            {!! $errors->first('raw_materials_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="quantity" class="form-label">{{ __('Quantity') }}</label>
            <input type="text" name="quantity" class="form-control @error('quantity') is-invalid @enderror" value="{{ old('quantity', $pizzarawmaterial?->quantity) }}" id="quantity" placeholder="Quantity">
            {!! $errors->first('quantity', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>