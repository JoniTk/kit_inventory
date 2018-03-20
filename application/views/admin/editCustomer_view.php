<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Add New Customer</h3></div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Inventory</li>
                <li class="breadcrumb-item active">Add New Customer</li>
            </ol>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="container-fluid">
            <!-- Start Page Content -->
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-validation">
                                <?= form_open("customer/updateCustomer/{$customer->id}",['class'=>'form-valide'])?>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="customerCode">Customer Code<span
                                            class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <?= form_input(['name'=>'customer_code','class'=>'form-control','id'=>'customerCode',
                                            'placeholder'=>'Customer Code','value'=>set_value('customer_code',
                                                $customer->customer_code),'required'=>'required']);?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="customerName">Customer Name <span
                                            class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <?= form_input(['name'=>'customer_name','class'=>'form-control','id'=>'customerName',
                                            'placeholder'=>'Customer Name','value'=>set_value('customer_name',
                                                $customer->customer_name),'required'=>'required']);?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="cutomerAddress">Customer Address <span
                                            class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <?= form_input(['name'=>'customer_address','class'=>'form-control','id'=>'cutomerAddress',
                                            'placeholder'=>'Customer Address','value'=>set_value('customer_address',
                                                $customer->customer_address),'required'=>'required']);?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="customerPhone">Customer Phone No.<span
                                            class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <?= form_input(['name'=>'customer_phone','class'=>'form-control','id'=>'cutomerPhone',
                                            'placeholder'=>'Customer Phone No.','value'=>set_value('customer_phone',
                                                $customer->customer_phone),'required'=>'required']);?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="customerEmail">Customer Email<span
                                            class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <?= form_input(['name'=>'customer_email','class'=>'form-control','id'=>'cutomerEmail',
                                            'placeholder'=>'Customer Email','value'=>set_value('customer_email',
                                                $customer->customer_email),'required'=>'required']);?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="customerNotes">Customer Notes <span
                                            class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <?= form_textarea(['name'=>'customer_notes','class'=>'form-control','id'=>'cutomerNotes',
                                            'placeholder'=>'Customer Notes','value'=>set_value('customer_notes',
                                                $customer->customer_notes),'required'=>'required']);?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="customerStatus">Status <span
                                            class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <select class="form-control" id="customerStatus" name="customer_status">
                                                <option value="1" <?php if ($customer->customer_status== '1')  echo 'selected = "selected"'; ?>>Active</option>
                                                <option value="2" <?php if ($customer->customer_status== '2')  echo 'selected = "selected"'; ?>>Inactive</option>
                                            </select>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <input type="submit" value="Update" name="update" class="btn btn-primary">
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <input type="submit" value="Cancel" name="cancel" class="btn btn-warning">
                                    </div>
                                </div>
                                <?= form_close();?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page wrapper  -->
    </div>
