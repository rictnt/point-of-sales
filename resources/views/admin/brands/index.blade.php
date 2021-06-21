@extends('layouts.app')

@php
    $items = $brands;
    $module = 'Brand';
@endphp

@section('main')
    @include('admin.components.common-crud.common-table',['items' => $items, 'module' => $module])
    @include('admin.components.common-crud.create-modal', ['module'=> $module])
    @include('admin.components.common-crud.edit-modal', ['module'=> $module])
    @include('admin.components.common-crud.delete-modal', ['module' => $module])
@endsection

@push('page-js')
    @include('admin.components.common-crud.js')
    @include('admin.components.form-validation-js')
@endpush