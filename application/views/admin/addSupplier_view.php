<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Add New Supplier</h3></div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Inventory</li>
                <li class="breadcrumb-item active">Add New Supplier</li>
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
                                <?= form_open('supplier/addSupplier',['class'=>'form-valide'])?>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="supplierCode">Supplier Code<span
                                                    class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" required="required" id="supplierCode"
                                                   name="supplier_code" placeholder="Supplier Code">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="supplierName">Supplier Name <span
                                                    class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="supplierName" required="required"
                                                   name="supplier_name" placeholder="Supplier Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="supplierAddress">Supplier Address <span
                                                    class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="supplierAddress" required="required"
                                                   name="supplier_address" placeholder="Supplier Address">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="contactPerson">Contact Person <span
                                                    class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="contactPerson" name="contact_person"
                                                   required="required" placeholder="Contact Person">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="supplierPhone">Phone No.<span
                                                    class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="supplierPhone" name="supplier_phone"
                                                   required="required" placeholder="Phone No.">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="supplierNotes">Supplier Notes <span
                                                    class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="supplierNotes"
                                                   name="supplier_notes" placeholder="Supplier Notes">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="supplierStatus">Status <span
                                                    class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <select class="form-control" id="supplierStatus" name="supplier_status">
                                                <option value="">Please select</option>
                                                <option value="1">Active</option>
                                                <option value="2">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
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