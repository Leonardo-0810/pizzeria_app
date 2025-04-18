@extends('layouts.app')

@section('template_title')
    Pizzaingredients
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pizzaingredients') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pizzaingredients.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Pizzas Id</th>
									<th >Ingredients Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pizzaingredients as $pizzaingredient)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $pizzaingredient->pizzas_id }}</td>
										<td >{{ $pizzaingredient->ingredients_id }}</td>

                                            <td>
                                                <form action="{{ route('pizzaingredients.destroy', $pizzaingredient->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pizzaingredients.show', $pizzaingredient->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pizzaingredients.edit', $pizzaingredient->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $pizzaingredients->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
