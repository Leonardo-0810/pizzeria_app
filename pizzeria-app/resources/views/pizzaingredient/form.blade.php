<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="pizzas_id" class="form-label">{{ __('Pizzas Id') }}</label>
            <input type="text" name="pizzas_id" class="form-control @error('pizzas_id') is-invalid @enderror" value="{{ old('pizzas_id', $pizzaingredient?->pizzas_id) }}" id="pizzas_id" placeholder="Pizzas Id">
            {!! $errors->first('pizzas_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ingredients_id" class="form-label">{{ __('Ingredients Id') }}</label>
            <input type="text" name="ingredients_id" class="form-control @error('ingredients_id') is-invalid @enderror" value="{{ old('ingredients_id', $pizzaingredient?->ingredients_id) }}" id="ingredients_id" placeholder="Ingredients Id">
            {!! $errors->first('ingredients_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>