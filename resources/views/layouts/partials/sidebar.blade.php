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
                <a href="{{ url('/') }}" class="nav-link">
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
                            <a href="#" class="nav-link">New Invoice</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Manage Invoice</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Invoice Settings</a>
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
                            <a href="{{ route('categories.index') }}" class="nav-link">Add Category</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('categories.index') }}" class="nav-link">Manage Category</a>
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
                            <a href="#" class="nav-link">Add Product</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Manage Product</a>
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
                            <a href="#" class="nav-link">Add Customer</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Manage Customer</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Due Customer</a>
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
                            <a href="#" class="nav-link">Add Supplier</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Manage Supplier</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Due Supplier</a>
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
                            <a href="#" class="nav-link">Add Purchase</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Manage Purchase</a>
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
                            <a href="#" class="nav-link">Add Return</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Stock Return List</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Supplier Return List</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Wastage Return List</a>
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
                            <a href="#" class="nav-link">Make Payment</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Manage Payment</a>
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
                            <a href="#" class="nav-link">Expense Category</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Add Expense</a>
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
                            <a href="#" class="nav-link">Stock Report</a>
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
                            <a href="#" class="nav-link">Todays Sale Report</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Monthly Sale Report</a>
                        </li>
                        <li class="nav-item">
                            <a href="v" class="nav-link">Todays Purchase Report</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Monthly Purchase Report</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Total Sale Report</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Total Purchase Report</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Total Expense Report</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Total Profit Report</a>
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
                            <a href="#" class="nav-link">Add User</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">User List</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Role Permission</a>
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
                            <a href="#" class="nav-link">Add Bank</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Bank Transaction</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Manage Bank</a>
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
                            <a href="v" class="nav-link">Create Barcode</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Barcode List</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Print Barcode</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Barcode Settings</a>
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
                <a href="#" class="nav-link">
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
