@extends('layouts.app')
@section('main')
    <div class="page-content">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Purchase</h4>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">Supplier</label>
                                    <select class="js-example-basic-single w-100">
                                        <option value="">SELECT SUPPLIER</option>
                                        @foreach ($suppliers as $supplier)
                                            <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">Purchase Date</label>
                                    <div class="input-group date datepicker">
                                        <input type="text" class="form-control" /><span class="input-group-addon"><i
                                                data-feather="calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">Invoice No</label>
                                    <input type="text" class="form-control" value="{{ rand() }}"
                                        placeholder="Invoice No" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12" id="vueApp">
                                {{-- Vue app will inject code here --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
@endsection
@push('page-js')
    @include('admin.components.vue-app')
@endpush
