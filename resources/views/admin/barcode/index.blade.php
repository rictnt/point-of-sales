@extends('layouts.app')

@section('main')
    <div class="page-content">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Create Barcode</h6>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Select Product:</label>
                                <div class="col-sm-9">
                                    {{-- <input type="text" name="product_id" class="form-control"
                                            placeholder="Enter product name or id"> --}}
                                    <select name="product_id" id="product_id">
                                        <option value="" selected>Select</option>
                                        <option value="1">Product 1</option>
                                        <option value="2">Product 2</option>
                                        <option value="3">Product 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="offset-md-6">

                        </div>
                        <div class="col-md-12">
                            <table style="width:100%" id="product_table">
                                <tr>
                                    <th>Product Name</th>
                                    <th>Barcode</th>
                                    <th style="width: 200px">Quantity</th>
                                    <th>Action</th>
                                </tr>


                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('page-js')
    @include('admin.components.form-validation-js')
    <script>
        function qty_plus() {
            $('#qty_input').val(parseInt($('#qty_input').val()) + 1);
        }

        function qty_minus() {
            $('#qty_input').val(parseInt($('#qty_input').val()) - 1);
            if ($('#qty_input').val() == 0) {
                $('#qty_input').val(1);
            }
        }


        $('#product_id').on('change', function(e) {

            let $this = $(this);
            
            let id = $(this).val();
            let url = `{{ url('api/products') }}/${id}`;

            if (id == '') {
                return false;
            }

            $.get(url, function(data) {
                    let tr = `<tr>
                        <td>${data.name}</td>
                        <td>${data.barcode}</td>
                        <td>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button class="btn btn-secondary" onclick="qty_minus()">-</button> </div>
                                                <input type="number" id="qty_input"
                                                    class="form-control text-center form-control-sm" value="1" min="1">
                                                <div class="input-group-append">
                                                    <button class="btn btn-secondary" onclick="qty_plus()">+</button>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button onclick="removeTr(this)" class="btn btn-danger">Remove</button>
                                        </td>
                                    </tr>`;

                    $('#product_table').append(tr);
                })
                .fail(function() {
                    alert("No Data found");
                })
        })

        function removeTr(e){
            let tr = $(e).parent().parent().remove();
        }

    </script>
@endpush
