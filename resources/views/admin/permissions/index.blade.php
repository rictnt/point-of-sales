@extends('layouts.app')

@section('main')
    <div class="page-content">

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Role Permissions</h6>
                        <form method="GET">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Select Users:</label>
                                        <div class="col-sm-9">
                                            <div class="form-group">
                                                <select name="user" required class="js-example-basic-single w-100">
                                                    <option value="">Select User</option>
                                                    @foreach ($users as $user)
                                                        <option value="{{ $user->id }}" {{ optional($selectedUser)->id == $user->id ? 'selected':'' }}>{{ $user->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-primary">Check</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @if ($selectedUser)
                            <div class="col-md-12 mt-3">
                                <div class="permission_area" style="margin: 0 auto; display: table;">

                                    <div class="form-check form-check-flat form-check-primary mt-0">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" id="select_all">
                                            Select All For Fokir Role Permission
                                            <i class="input-frame"></i>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="role_table">
                                    <table>
                                        <tr>
                                            <th>Module Name</th>
                                            <th>View</th>
                                            <th>Add</th>
                                            <th>Delete</th>
                                        </tr>
                                        <tr>
                                            <td>Category</td>
                                            <td>
                                                <div class="form-check form-check-flat form-check-primary mt-0">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input checkbox"
                                                            name="check[]">
                                                        <i class="input-frame"></i>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-flat form-check-primary mt-0">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input checkbox"
                                                            name="check[]">
                                                        <i class="input-frame"></i>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-flat form-check-primary mt-0">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input checkbox"
                                                            name="check[]">
                                                        <i class="input-frame"></i>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Product</td>
                                            <td>
                                                <div class="form-check form-check-flat form-check-primary mt-0">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input checkbox"
                                                            name="check[]">
                                                        <i class="input-frame"></i>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-flat form-check-primary mt-0">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input checkbox"
                                                            name="check[]">
                                                        <i class="input-frame"></i>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-flat form-check-primary mt-0">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input checkbox"
                                                            name="check[]">
                                                        <i class="input-frame"></i>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Customer</td>
                                            <td>
                                                <div class="form-check form-check-flat form-check-primary mt-0">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input checkbox"
                                                            name="check[]">
                                                        <i class="input-frame"></i>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-flat form-check-primary mt-0">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input checkbox"
                                                            name="check[]">
                                                        <i class="input-frame"></i>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-flat form-check-primary mt-0">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input checkbox"
                                                            name="check[]">
                                                        <i class="input-frame"></i>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Supplier</td>
                                            <td>
                                                <div class="form-check form-check-flat form-check-primary mt-0">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input checkbox"
                                                            name="check[]">
                                                        <i class="input-frame"></i>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-flat form-check-primary mt-0">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input checkbox"
                                                            name="check[]">
                                                        <i class="input-frame"></i>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-flat form-check-primary mt-0">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input checkbox"
                                                            name="check[]">
                                                        <i class="input-frame"></i>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Purchase</td>
                                            <td>
                                                <div class="form-check form-check-flat form-check-primary mt-0">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input checkbox"
                                                            name="check[]">
                                                        <i class="input-frame"></i>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-flat form-check-primary mt-0">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input checkbox"
                                                            name="check[]">
                                                        <i class="input-frame"></i>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-flat form-check-primary mt-0">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input checkbox"
                                                            name="check[]">
                                                        <i class="input-frame"></i>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Return</td>
                                            <td>
                                                <div class="form-check form-check-flat form-check-primary mt-0">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input checkbox"
                                                            name="check[]">
                                                        <i class="input-frame"></i>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-flat form-check-primary mt-0">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input checkbox"
                                                            name="check[]">
                                                        <i class="input-frame"></i>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-flat form-check-primary mt-0">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input checkbox"
                                                            name="check[]">
                                                        <i class="input-frame"></i>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Expense</td>
                                            <td>
                                                <div class="form-check form-check-flat form-check-primary mt-0">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input checkbox"
                                                            name="check[]">
                                                        <i class="input-frame"></i>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-flat form-check-primary mt-0">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input checkbox"
                                                            name="check[]">
                                                        <i class="input-frame"></i>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-flat form-check-primary mt-0">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input checkbox"
                                                            name="check[]">
                                                        <i class="input-frame"></i>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>



    </div>
@endsection
