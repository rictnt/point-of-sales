@extends('layouts.app')

@section('main')
    <div class="page-content">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body" id="vueApp">
                        {{-- Vue will inject code here --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('page-js')
    @include('admin.components.form-validation-js')
    @include('admin.components.vue-app')
@endpush
