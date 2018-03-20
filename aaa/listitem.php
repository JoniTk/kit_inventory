<?php include 'header.php';?>
<?php include 'sidebar.php';?>
        <!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Item List</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Inventory</li>
                <li class="breadcrumb-item active">Item List</li>
            </ol>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-lg-6">
                        <div class="card-toggle-body">
                            <div class="button-list">
                                <a href="additem.php" type="button" class="btn btn-primary btn-flat btn-addon btn-lg m-b-10 m-l-5"><i class="ti-plus"></i> Add New Item</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered itemdatatable" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th width="10%">Item Code</th>
                                    <th width="10%">Item Name</th>
                                    <th width="10%">Model</th>
                                    <th width="10%">Brand</th>
                                    <th width="10%">Category</th>
                                    <th width="10%">Unit</th>
                                    <th width="10%">Description</th>
                                    <th width="10%">Min. Sale Price</th>
                                    <th width="10%">Re-order level</th>
                                    <th width="5%">Status</th>
                                    <th width="5%">Action</th>
                                    
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Item Code</th>
                                    <th>Item Name</th>
                                    <th>Model</th>
                                    <th>Brand</th>
                                    <th>Category</th>
                                    <th>Unit</th>
                                    <th>Description</th>
                                    <th>Min. Sale Price</th>
                                    <th>Re-order level</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>Michael Silva</td>
                                    <td>Marketing Designer</td>
                                    <td>London</td>
                                    <td>66</td>
                                    <td>66</td>
                                    <td>66</td>
                                    <td>66</td>
                                    <td>66</td>
                                    <td>66</td>
                                    <td>66</td>
                                    <td>
                                         <a class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="View!">
                                         <i class="fa fa-eye"></i> View
                                       </a> 
                                       <a class="btn btn-sm btn-warning"  data-toggle="tooltip" data-placement="top" title="Edit!">
                                         <i class="fa fa-pencil-square-o"></i> Edit
                                       </a>
                                       <a class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete?')" data-toggle="tooltip" data-placement="top" title="Delete!">
                                         <i class="fa fa-trash-o"></i> Delete
                                       </a>
                                   </td>
                                </tr>
                                 <tr>
                                    <td>Michael Silva</td>
                                    <td>Marketing Designer</td>
                                    <td>London</td>
                                    <td>66</td>
                                    <td>66</td>
                                    <td>66</td>
                                    <td>66</td>
                                    <td>66</td>
                                    <td>66</td>
                                    <td>66</td>
                                    <td>
                                        <a class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="View!">
                                         <i class="fa fa-eye"></i> View
                                       </a> 
                                       <a class="btn btn-sm btn-warning"  data-toggle="tooltip" data-placement="top" title="Edit!">
                                         <i class="fa fa-pencil-square-o"></i> Edit
                                       </a>
                                       <a class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete?')" data-toggle="tooltip" data-placement="top" title="Delete!">
                                         <i class="fa fa-trash-o"></i> Delete
                                       </a>
                                   </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>

    <script src="js/lib/datatables/datatables.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="js/lib/datatables/datatables-init.js"></script>

</body>

</html>