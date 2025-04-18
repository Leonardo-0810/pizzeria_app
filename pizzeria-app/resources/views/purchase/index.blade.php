@extends('layouts.app')

@section('template_title')
    Purchases
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Purchases') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('purchases.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Suppliers Id</th>
									<th >Raw Materials Id</th>
									<th >Quantity</th>
									<th >Purchase Price</th>
									<th >Purchase Date</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($purchases as $purchase)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $purchase->suppliers_id }}</td>
										<td >{{ $purchase->raw_materials_id }}</td>
										<td >{{ $purchase->quantity }}</td>
										<td >{{ $purchase->purchase_price }}</td>
										<td >{{ $purchase->purchase_date }}</td>

                                            <td>
                                                <form action="{{ route('purchases.destroy', $purchase->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('purchases.show', $purchase->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('purchases.edit', $purchase->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $purchases->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
