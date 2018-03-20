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
                                <?= form_open('customer/addCustomer',['class'=>'form-valide'])?>

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="customerCode">Customer Code<span
                                                    class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="customerCode" name="customer_code"
                                                   placeholder="Customer Code" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="customerName">Customer Name <span
                                                    class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="customerName"
                                                   name="customer_name" placeholder="Customer Name" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="cutomerAddress">Customer Address <span
                                                    class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="cutomerAddress"
                                                   name="customer_address" placeholder="Customer Address" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="customerPhone">Customer Phone No.<span
                                                    class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="customerPhone" name="customer_phone"
                                                   placeholder="Customer Phone No." required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="customerEmail">Customer Email<span
                                                    class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="email" class="form-control" id="customerEmail" name="customer_email"
                                                   placeholder="Customer Email" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="customerNotes">Customer Notes <span
                                                    class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <textarea type="text" class="form-control" id="customerNotes"
                                                      name="customer_notes" placeholder="Customer Notes"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="customerStatus">Status <span
                                                    class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <select class="form-control" required="required" id="customerStatus" name="customer_status">
                                                <option value="">Please select</option>
                                                <option value="1">Active</option>
                                                <option value="2">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
<!--                                <div class="form-group row">-->
<!--                                    <label for="cusDate" class="col-lg-4 col-form-label">Date<span-->
<!--                                                class="text-danger">*</span></label>-->
<!--                                    <div class="col-lg-6">-->
<!--                                        <input name="cus_date" required="required" type="text"-->
<!--                                               class="form-control" id="cusDate" placeholder="Date">-->
<!--                                    </div>-->
<!--                                </div>-->
                                <div class="form-group row">
                                        <div class="col-lg-8 ml-auto">
                                            <input type="submit" value="Submit" name="submit" class="btn btn-primary">
                                        </div>

                                    </div>
                                <div class="form-group row">
                                <div class="col-lg-8 ml-auto">
                                    <input type="reset" value="Reset" name="reset" class="btn btn-warning">
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
