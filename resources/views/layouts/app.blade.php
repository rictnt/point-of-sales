<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RapidHisab - Dashoboard</title>

    <link rel="stylesheet" href="{{ asset('admin') }}/vendors/core/core.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/css/style.css">
    <link rel="shortcut icon" href="{{ asset('admin') }}/images/favicon.ico" />
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

    </style>
</head>

<body>
    <div class="main-wrapper">

        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar">
            <div class="sidebar-header">
                <a href="#" class="sidebar-brand">
                    Rapid<span>Hisab</span>
                </a>
                <div class="sidebar-toggler not-active">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="sidebar-body">
                <ul class="nav">
                    <li class="nav-item">
                        <a href="Dashboard.html" class="nav-link">
                            <i class="link-icon" data-feather="box"></i>
                            <span class="link-title">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#invoice" role="button" aria-expanded="false"
                            aria-controls="invoice">
                            <i class="link-icon" data-feather="file-text"></i>
                            <span class="link-title">Invoice</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="invoice">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="Invoice-Add.html" class="nav-link">New Invoice</a>
                                </li>
                                <li class="nav-item">
                                    <a href="Invoice-Manage.html" class="nav-link">Manage Invoice</a>
                                </li>
                                <li class="nav-item">
                                    <a href="Invoice-Settings.html" class="nav-link">Invoice Settings</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#category" role="button" aria-expanded="false"
                            aria-controls="category">
                            <i class="link-icon" data-feather="clipboard"></i>
                            <span class="link-title">Category</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="category">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="Category-Add.html" class="nav-link">Add Category</a>
                                </li>
                                <li class="nav-item">
                                    <a href="Category-Manage.html" class="nav-link">Manage Category</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#product" role="button" aria-expanded="false"
                            aria-controls="product">
                            <i class="link-icon" data-feather="shopping-bag"></i>
                            <span class="link-title">Product</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="product">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="Product-Add.html" class="nav-link">Add Product</a>
                                </li>
                                <li class="nav-item">
                                    <a href="Product-Manage.html" class="nav-link">Manage Product</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#customer" role="button" aria-expanded="false"
                            aria-controls="customer">
                            <i class="link-icon" data-feather="user-plus"></i>
                            <span class="link-title">Customer</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="customer">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="Customer-Add.html" class="nav-link">Add Customer</a>
                                </li>
                                <li class="nav-item">
                                    <a href="Customer-Manage.html" class="nav-link">Manage Customer</a>
                                </li>
                                <li class="nav-item">
                                    <a href="Customer-Due.html" class="nav-link">Due Customer</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#supplier" role="button" aria-expanded="false"
                            aria-controls="supplier">
                            <i class="link-icon" data-feather="users"></i>
                            <span class="link-title">Supplier</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="supplier">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="Supplier-Add.html" class="nav-link">Add Supplier</a>
                                </li>
                                <li class="nav-item">
                                    <a href="Supplier-Manage.html" class="nav-link">Manage Supplier</a>
                                </li>
                                <li class="nav-item">
                                    <a href="Supplier-Due.html" class="nav-link">Due Supplier</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#purchase" role="button" aria-expanded="false"
                            aria-controls="purchase">
                            <i class="link-icon" data-feather="shopping-cart"></i>
                            <span class="link-title">Purchase</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="purchase">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="Purchase-Add.html" class="nav-link">Add Purchase</a>
                                </li>
                                <li class="nav-item">
                                    <a href="Purchase-Manage.html" class="nav-link">Manage Purchase</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#return" role="button" aria-expanded="false"
                            aria-controls="return">
                            <i class="link-icon" data-feather="refresh-ccw"></i>
                            <span class="link-title">Return</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="return">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="Return-Add.html" class="nav-link">Add Return</a>
                                </li>
                                <li class="nav-item">
                                    <a href="Stock-Return.html" class="nav-link">Stock Return List</a>
                                </li>
                                <li class="nav-item">
                                    <a href="Supplier-Return.html" class="nav-link">Supplier Return List</a>
                                </li>
                                <li class="nav-item">
                                    <a href="Wastage-Return.html" class="nav-link">Wastage Return List</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#payment" role="button" aria-expanded="false"
                            aria-controls="payment">
                            <i class="link-icon" data-feather="pocket"></i>
                            <span class="link-title">Payment</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="payment">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="Add-Payment.html" class="nav-link">Make Payment</a>
                                </li>
                                <li class="nav-item">
                                    <a href="Manage-Payment.html" class="nav-link">Manage Payment</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#expense" role="button" aria-expanded="false"
                            aria-controls="expense">
                            <i class="link-icon" data-feather="trending-down"></i>
                            <span class="link-title">Expense</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="expense">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="Expense-Category-Add.html" class="nav-link">Expense Category</a>
                                </li>
                                <li class="nav-item">
                                    <a href="Add-Expense.html" class="nav-link">Add Expense</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#stock" role="button" aria-expanded="false"
                            aria-controls="stock">
                            <i class="link-icon" data-feather="check-circle"></i>
                            <span class="link-title">Stock</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="stock">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="Stock-Report.html" class="nav-link">Stock Report</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Manage Stock Report</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#reports" role="button" aria-expanded="false"
                            aria-controls="reports">
                            <i class="link-icon" data-feather="bar-chart-2"></i>
                            <span class="link-title">Report</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="reports">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="Today-Sales-Report.html" class="nav-link">Todays Sale Report</a>
                                </li>
                                <li class="nav-item">
                                    <a href="Monthly-Sales-Report.html" class="nav-link">Monthly Sale Report</a>
                                </li>
                                <li class="nav-item">
                                    <a href="Today-Purchase-Report.html" class="nav-link">Todays Purchase Report</a>
                                </li>
                                <li class="nav-item">
                                    <a href="Monthly-Purchase-Report.html" class="nav-link">Monthly Purchase Report</a>
                                </li>
                                <li class="nav-item">
                                    <a href="Total-Sale-Report.html" class="nav-link">Total Sale Report</a>
                                </li>
                                <li class="nav-item">
                                    <a href="Total-Purchase-Report.html" class="nav-link">Total Purchase Report</a>
                                </li>
                                <li class="nav-item">
                                    <a href="Total-Expense-Report.html" class="nav-link">Total Expense Report</a>
                                </li>
                                <li class="nav-item">
                                    <a href="Total-Profit-Report.html" class="nav-link">Total Profit Report</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#users" role="button" aria-expanded="false"
                            aria-controls="users">
                            <i class="link-icon" data-feather="user-check"></i>
                            <span class="link-title">Users</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="users">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="Add-User.html" class="nav-link">Add User</a>
                                </li>
                                <li class="nav-item">
                                    <a href="Manage-User.html" class="nav-link">User List</a>
                                </li>
                                <li class="nav-item">
                                    <a href="Role-Permission.html" class="nav-link">Role Permission</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#bank" role="button" aria-expanded="false"
                            aria-controls="bank">
                            <i class="link-icon" data-feather="briefcase"></i>
                            <span class="link-title">Bank</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="bank">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="Add-Bank.html" class="nav-link">Add Bank</a>
                                </li>
                                <li class="nav-item">
                                    <a href="Bank-Transaction.html" class="nav-link">Bank Transaction</a>
                                </li>
                                <li class="nav-item">
                                    <a href="Bank-Manage.html" class="nav-link">Manage Bank</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#barcode" role="button" aria-expanded="false"
                            aria-controls="barcode">
                            <i class="link-icon" data-feather="bar-chart-2"></i>
                            <span class="link-title">Barcode</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="barcode">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="Create-Barcode.html" class="nav-link">Create Barcode</a>
                                </li>
                                <li class="nav-item">
                                    <a href="Barcode-List.html" class="nav-link">Barcode List</a>
                                </li>
                                <li class="nav-item">
                                    <a href="Barcode-Print.html" class="nav-link">Print Barcode</a>
                                </li>
                                <li class="nav-item">
                                    <a href="Barcode-Settings.html" class="nav-link">Barcode Settings</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="All-Settings.html" class="nav-link">
                            <i class="link-icon" data-feather="settings"></i>
                            <span class="link-title">Settings</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="Admin-Profile.html" class="nav-link">
                            <i class="link-icon" data-feather="user"></i>
                            <span class="link-title">Profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="link-icon" data-feather="log-out"></i>
                            <span class="link-title">Logout</span>
                        </a>
                    </li>

                </ul>
            </div>
        </nav>
        <div class="page-wrapper">

            <nav class="navbar">
                <a href="#" class="sidebar-toggler">
                    <i data-feather="menu"></i>
                </a>
                <div class="navbar-content">

                    <ul class="navbar-nav">
                        <li>
                            <select name="cars" id="cars">
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="mercedes">Mercedes</option>
                                <option value="audi">Audi</option>
                            </select>
                        </li>
                        <li class="nav-item dropdown nav-profile">
                            <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('admin') }}/images/faces/face1.jpg" alt="profile">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="profileDropdown">
                                <div class="dropdown-header d-flex flex-column align-items-center">
                                    <div class="figure mb-3">
                                        <img src="{{ asset('admin') }}/images/faces/face1.jpg" alt="">
                                    </div>
                                    <div class="info text-center">
                                        <p class="name font-weight-bold mb-0">Amiah Burton</p>
                                        <p class="email text-muted mb-3">amiahburton@gmail.com</p>
                                    </div>
                                </div>
                                <div class="dropdown-body">
                                    <ul class="profile-nav p-0 pt-3">
                                        <li class="nav-item">
                                            <a href="pages/general/profile.html" class="nav-link">
                                                <i data-feather="user"></i>
                                                <span>Profile</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:;" class="nav-link">
                                                <i data-feather="edit"></i>
                                                <span>Edit Profile</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="javascript:;" class="nav-link">
                                                <i data-feather="log-out"></i>
                                                <span>Log Out</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>



            <div class="page-content">


                <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
                    <div>
                        <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
                    </div>

                </div>

                <div class="row">
                    <div class="col-12 col-xl-12 stretch-card">
                        <div class="row flex-grow">
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="justify-content-between align-items-baseline">
                                            <h6 class="card-title mb-0">Total Customers</h6>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-12 col-xl-12">
                                                <h3 class="mb-2">255 <i data-feather="users"
                                                        style="height: 30px;width: 30px;margin-bottom: 7px;"></i></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="justify-content-between align-items-baseline">
                                            <h6 class="card-title mb-0">Total Supplier</h6>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-12 col-xl-12">
                                                <h3 class="mb-2 text-success">165 <i data-feather="users"
                                                        style="height: 30px;width: 30px;margin-bottom: 7px;"></i></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="justify-content-between align-items-baseline">
                                            <h6 class="card-title mb-0">Total Purchase</h6>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-12 col-xl-12">
                                                <h3 class="mb-2 text-info">56,236 ৳</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- row -->

                <div class="row">
                    <div class="col-12 col-xl-12 stretch-card">
                        <div class="row flex-grow">
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="justify-content-between align-items-baseline">
                                            <h6 class="card-title mb-0">Total Sale</h6>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-12 col-xl-12">
                                                <h3 class="mb-2 text-warning">50,000 ৳</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="justify-content-between align-items-baseline">
                                            <h6 class="card-title mb-0">Total Profit</h6>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-12 col-xl-12">
                                                <h3 class="mb-2 text-success">10,000 ৳</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="justify-content-between align-items-baseline">
                                            <h6 class="card-title mb-0">Total Loss</h6>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-12 col-xl-12">
                                                <h3 class="mb-2 text-danger">000 ৳</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- row -->

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Today Overview:</h6>

                                <div class="table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="text-danger">Today Report</th>
                                                <th class="text-danger">Overview</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Total Purchase</td>
                                                <td>50,000</td>
                                            </tr>
                                            <tr>
                                                <td>Total Sale</td>
                                                <td>30,000</td>
                                            </tr>
                                            <tr>
                                                <td>Total Due</td>
                                                <td>10,000</td>
                                            </tr>
                                            <tr>
                                                <td>Invoice</td>
                                                <td>20</td>
                                            </tr>
                                            <tr>
                                                <td>Return</td>
                                                <td>20</td>
                                            </tr>
                                            <tr>
                                                <td>Profit</td>
                                                <td>20,000</td>
                                            </tr>
                                            <tr>
                                                <td>Loss</td>
                                                <td>000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Monthly Overview:</h4>

                                <div class="table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="text-danger">Monthly Report</th>
                                                <th class="text-danger">Overview</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Total Purchase</td>
                                                <td>50,000</td>
                                            </tr>
                                            <tr>
                                                <td>Total Sale</td>
                                                <td>30,000</td>
                                            </tr>
                                            <tr>
                                                <td>Total Due</td>
                                                <td>10,000</td>
                                            </tr>
                                            <tr>
                                                <td>Invoice</td>
                                                <td>20</td>
                                            </tr>
                                            <tr>
                                                <td>Return</td>
                                                <td>20</td>
                                            </tr>
                                            <tr>
                                                <td>Profit</td>
                                                <td>20,000</td>
                                            </tr>
                                            <tr>
                                                <td>Loss</td>
                                                <td>000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Yearly Overview:</h4>

                                <div class="table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="text-danger">Total<br> Purchase</th>
                                                <th class="text-danger">Total<br> Sale</th>
                                                <th class="text-danger">Total<br> Due</th>
                                                <th class="text-danger">Total<br> Product</th>
                                                <th class="text-danger">Total<br> Supplier</th>
                                                <th class="text-danger">Total<br> Customer</th>
                                                <th class="text-danger">Total<br> Return</th>
                                                <th class="text-danger">Total<br> Invoice</th>
                                                <th class="text-danger">Total<br> Profit</th>
                                                <th class="text-danger">Total<br> Loss</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>56,000</td>
                                                <td>50,000</td>
                                                <td>10,000</td>
                                                <td>500</td>
                                                <td>564</td>
                                                <td>325</td>
                                                <td>32</td>
                                                <td>20</td>
                                                <td>20,000</td>
                                                <td>0000</td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
                <p class="text-muted text-center text-md-left">Copyright © 2020 <a href="#"
                        target="_blank">RapidHisab</a>. All rights reserved</p>
                <p class="text-muted text-center text-md-left mb-0 d-none d-md-block">Handcrafted With <i
                        class="mb-1 text-primary ml-1 icon-small" data-feather="heart"></i></p>
            </footer>


        </div>
    </div>




    <script src="{{ asset('admin') }}/vendors/core/core.js"></script>

    <script src="{{ asset('admin') }}/vendors/feather-icons/feather.min.js"></script>
    <script src="{{ asset('admin') }}/js/template.js"></script>





</body>

<!-- Mirrored from new.rapiditltd.net/Dashboard by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Jun 2021 16:27:55 GMT -->

</html>
