<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Add New Item</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Inventory</li>
            </ol>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-md-3">
                <a href="addsales.php" class="card p-30" >
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <span><i class="fa fa-money f-s-40 color-primary"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                            <h2>Add New</h2>
                            <p class="m-b-0">Sales</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="saleslist.php" class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <span><i class="fa fa-money f-s-40 color-success"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                            <h2>List All</h2>
                            <p class="m-b-0">Sales</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="addsalesreturn.php" class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <span><i class="fa fa-ils f-s-40 color-warning"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                            <h2>Add New</h2>
                            <p class="m-b-0">Sales Return</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="listsalesreturn.php" class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <span><i class="fa fa-ils f-s-40 color-danger"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                            <h2>List All</h2>
                            <p class="m-b-0">Sales Return</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="addpurchase.php" class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <span><i class="fa fa-suitcase f-s-40 color-primary"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                            <h2>Add New</h2>
                            <p class="m-b-0">Purchase</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="listpurchase.php" class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <span><i class="fa fa-suitcase f-s-40 color-success"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                            <h2>List All</h2>
                            <p class="m-b-0">Purchase</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="addpurchasereturn.php" class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <span><i class="fa fa-ils f-s-40 color-warning"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                            <h2>Add New</h2>
                            <p class="m-b-0">Purchase Return</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="listpurchasereturn.php" class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <span><i class="fa fa-ils f-s-40 color-danger"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                            <h2>List All</h2>
                            <p class="m-b-0">Purchase Return</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="<?= base_url('customer/addCustomer')?>" class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <span><i class="fa fa-users f-s-40 color-primary"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                            <h2>Add New</h2>
                            <p class="m-b-0">Customer</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="<?= base_url('customer/listCustomer')?>" class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <span><i class="fa fa-users f-s-40 color-success"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                            <h2>List All</h2>
                            <p class="m-b-0">Customer</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="<?= base_url('supplier/addSupplier')?>" class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <span><i class="fa fa-user f-s-40 color-warning"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                            <h2>Add New</h2>
                            <p class="m-b-0">Supplier</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="<?= base_url('supplier/listSupplier')?>" class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <span><i class="fa fa-user f-s-40 color-danger"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                            <h2>List All</h2>
                            <p class="m-b-0">Supplier</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="<?= base_url('category')?>" class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <span><i class="fa fa-puzzle-piece f-s-40 color-primary"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                            <h2>Add New</h2>
                            <p class="m-b-0">Category</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="<?= base_url('category/listCategory')?>" class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <span><i class="fa fa-puzzle-piece f-s-40 color-success"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                            <h2>List All</h2>
                            <p class="m-b-0">Category</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="<?= base_url('unit')?>" class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <span><i class="fa fa-plus-square f-s-40 color-warning"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                            <h2>Add New</h2>
                            <p class="m-b-0">Unit</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="<?= base_url('unit/listUnit')?>" class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <span><i class="fa fa-plus-square f-s-40 color-danger"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                            <h2>List All</h2>
                            <p class="m-b-0">Unit</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                 <a href="<?= base_url('item')?>" class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <span><i class="fa fa-certificate f-s-40 color-warning"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                            <h2>Add New</h2>
                            <p class="m-b-0">Item</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
               <a href="<?= base_url('item/listItem')?>" class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <span><i class="fa fa-certificate f-s-40 color-danger"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                            <h2>List All</h2>
                            <p class="m-b-0">Item</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- End Page wrapper  -->
</div>