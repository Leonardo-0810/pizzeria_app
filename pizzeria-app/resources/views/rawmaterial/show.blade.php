@extends('layouts.app')

@section('template_title')
    {{ $rawmaterial->name ?? __('Show') . " " . __('Rawmaterial') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Rawmaterial</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('rawmaterials.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Name:</strong>
                                    {{ $rawmaterial->name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Unit:</strong>
                                    {{ $rawmaterial->unit }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Current Stock:</strong>
                                    {{ $rawmaterial->current_stock }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
