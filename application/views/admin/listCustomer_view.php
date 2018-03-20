<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Customer List</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Inventory</li>
                <li class="breadcrumb-item active">Customer List</li>
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
                                <a href="<?= base_url('customer')?>" type="button" class="btn btn-primary btn-flat btn-addon btn-lg m-b-10 m-l-5"><i class="ti-plus"></i> Add New Customer</a>
                            </div>
                        </div>
                    </div>
                    <?php if ($feedback = $this->session->flashdata('feedback')):
                        $feedback_class = $this->session->flashdata('feedback_class');
                        ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="alert alert-dismissible <?= $feedback_class; ?>" style="color: black">
                                    <?= $feedback; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="table-responsive">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered itemdatatable" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th width="18%">Sl No.</th>
                                <th width="18%">Customer Code</th>
                                <th width="18%">Customer Name</th>
                                <th width="18%">Customer Address</th>
                                <th width="18%">Customer Phone No.</th>
                                <th width="18%">Customer Email</th>
                                <th width="10%">Action</th>

                            </tr>
                            </thead>
                            <tbody>
                    <?php $i = 0; ?>
                        <?php if (count($customerList)): ?>
                            <?php foreach ($customerList as $customer): ?>
                            <tr>
                                <td><?= ++$i;?></td>
                                <td><?= $customer->customer_code?></td>
                                <td><?= $customer->customer_name?></td>
                                <td><?= $customer->customer_address?></td>
                                <td><?= $customer->customer_phone?></td>
                                <td><?= $customer->customer_email?></td>
                                <td>
                                    <a class="btn btn-sm btn-warning" href='<?php echo base_url("customer/editCustomer/{$customer->id}")?>' data-toggle="tooltip" data-placement="top" title="Edit!">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                    <a class="btn btn-sm btn-danger" href='<?php echo base_url("customer/deleteCustomer/{$customer->id}")?>' onclick="return confirm('Are you sure you want to delete?')" data-toggle="tooltip" data-placement="top" title="Delete!">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <th colspan="7">
                                    No records found.
                                </th>
                            </tr>
                        <?php endif; ?>
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
