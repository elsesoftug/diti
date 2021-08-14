@extends('layouts.appbar')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
                <div class="page-title">
                    <h1>{{  request()->route()->uri }}</span></h1>
                </div>
            </div>
        </div>
        <!-- /# column -->
        <div class="col-lg-4 p-l-0 title-margin-left">
            <div class="page-header">
                <div class="page-title">
                    <ol class="breadcrumb">
                        <a class="breadcrumb-item" href="{{ route('cafeDashboard') }}"> Dashboard</a>
                        <a class="breadcrumb-item" href="{{ route('stock-tables.index') }}"> Stock Management</a>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /# column -->
    </div>
    <!-- /# row -->
    <section id="main-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card border-success">
                    <div class="card-header border-success">
                        <h4 class="card-title">
                              <!-- Create new User-->
                              <a><span class="glyphicon glyphicon-edit"></span>
                                Stock List:
                             </a>
                             <!--Put Register link-->
                             <a class="btn btn-sm btn-info" href="{{ route('stock-tables.create') }}">
                                 <span class="glyphicon glyphicon-edit"></span>
                                 Create Stock
                             </a>
                             <a class="btn btn-sm btn-dark float-right" href="{{ url()->previous() }}" ><span><i class="ti-angle-double-left"></i>
                              Back </span>
                             </a>
                        </h4>
                    </div>
                    <div class="card-body">
                    
                        <div class="table-responsive">
                            <table class="table table-hover ">
                                <thead>
                                    <tr>
                                        <th class="text-left">
                                            @lang('crud.stock_tables.inputs.item_name')
                                        </th>
                                        <th class="text-left">
                                            @lang('crud.stock_tables.inputs.unit')
                                        </th>
                                        <th class="text-left">
                                            @lang('crud.stock_tables.inputs.category')
                                        </th>
                                        <th class="text-left">
                                            @lang('crud.stock_tables.inputs.buying_price')
                                        </th>
                                        <th class="text-right">
                                            @lang('crud.stock_tables.inputs.quantity')
                                        </th>
                                        <th class="text-left">
                                            @lang('crud.stock_tables.inputs.description')
                                        </th>
                                        <th class="text-center">
                                            @lang('crud.common.actions')
                                        </th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        @forelse($stockTables as $stockTable)
                                        <tr>
                                            <td>{{ $stockTable->item_name ?? '-' }}</td>
                                            <td>{{ $stockTable->unit ?? '-' }}</td>
                                            <td>{{ $stockTable->category ?? '-' }}</td>
                                            <td>{{ $stockTable->buying_price ?? '-' }}</td>
                                            <td>{{ $stockTable->quantity ?? '-' }}</td>
                                            <td>{{ $stockTable->description ?? '-' }}</td>
                                            <td class="text-center" style="width: 134px;">
                                                <div
                                                    role="group"
                                                    aria-label="Row Actions"
                                                    class="btn-group"
                                                >
                                                    @can('update', $stockTable)
                                                    <a
                                                        href="{{ route('stock-tables.edit', $stockTable) }}"
                                                    >
                                                        <button
                                                            type="button"
                                                            class="btn btn-light"
                                                        >
                                                            <i class="icon ti-pencil-alt"></i>
                                                        </button>
                                                    </a>
                                                    @endcan @can('view', $stockTable)
                                                    <a
                                                        href="{{ route('stock-tables.show', $stockTable) }}"
                                                    >
                                                        <button 
                                                            type="button"
                                                            class="btn btn-light"
                                                        >
                                                            <i class="icon ti-eye"></i>
                                                        </button>
                                                    </a>
                                                    @endcan @can('delete', $stockTable)
                                                    <form
                                                        action="{{ route('stock-tables.destroy', $stockTable) }}"
                                                        method="POST"
                                                        onsubmit="return confirm('{{ __('crud.common.are_you_sure') }}')"
                                                    >
                                                        @csrf @method('DELETE')
                                                        <button 
                                                            type="submit"
                                                            class="btn btn-light text-danger"
                                                        >
                                                            <i class="icon ti-trash"></i>
                                                        </button>
                                                    </form>
                                                    @endcan
                                                </div>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="7">
                                                @lang('crud.common.no_items_found')
                                            </td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="7">{!! $stockTables->render() !!}</td>
                                        </tr>
                                    </tfoot>
                                </tbody>
                            </table>
                        </div>
                  
                    </div>   
                </div>
            </div>    
        </div> 
  
        @include('partials.footer') 
    </section>
  </div>
@endsection
