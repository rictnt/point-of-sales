@extends('layouts.app')

@section('main')
<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Create Barcode {{ $product }}</h6>
                    <form class="forms-sample row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Select Product:</label>
                                <div class="col-sm-9">
                                    <select class="js-example-basic-single w-100">
                                        <option value="TX">Apple</option>
                                        <option value="NY">Banana</option>
                                        <option value="FL">Cherry</option>
                                        <option value="KN">Mango</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="offset-md-6">
                            
                        </div>
                        {{-- <div class="col-md-12">
                            <table style="width:100%">
                              <tr>
                                  <th>Sl No</th>
                                  <th>Id</th>
                                  <th>Name</th>
                                  <th>Unit</th>
                                <th>Stock Qnty</th>
                                <th>Sale Qnty</th>
                                <th>Sale Price</th>
                                <th>Action</th>
                              </tr>
                              <tr>
                                <td>01</td>
                                <td>#2345</td>
                                <td>Banana</td>
                                <td>pcs</td>
                                <td>200</td>
                                <td>20</td>
                                <td>5000</td>
                                <td>
                                    <a href="#">
                                        <span class="badge badge-success">Choose</span>
                                    </a>
                                </td>
                              </tr>
                              
                            </table>
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('page-js')
    @include('admin.components.form-validation-js')
@endpush
    
