@extends('layouts.app')

@section('template_title')
    {{ $pizzarawmaterial->name ?? __('Show') . " " . __('Pizzarawmaterial') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pizzarawmaterial</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('pizzarawmaterials.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Pizzas Id:</strong>
                                    {{ $pizzarawmaterial->pizzas_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Raw Materials Id:</strong>
                                    {{ $pizzarawmaterial->raw_materials_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Quantity:</strong>
                                    {{ $pizzarawmaterial->quantity }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
