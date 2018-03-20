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
                                <?= form_open("supplier/updateSupplier/{$supplier->id}",['class'=>'form-valide'])?>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="supplierCode">Supplier Code<span
                                            class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <?= form_input(['name'=>'supplier_code','class'=>'form-control','id'=>'supplierCode',
                                            'placeholder'=>'Supplier Code','value'=>set_value('supplier_code',
                                                $supplier->supplier_code),'required'=>'required']);?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="supplierName">Supplier Name <span
                                            class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <?= form_input(['name'=>'supplier_name','class'=>'form-control','id'=>'supplierName',
                                            'placeholder'=>'Supplier Name','value'=>set_value('supplier_name',
                                                $supplier->supplier_name),'required'=>'required']);?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="supplierAddress">Supplier Address <span
                                            class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <?= form_textarea(['name'=>'supplier_address','class'=>'form-control','id'=>'supplierAddress',
                                            'placeholder'=>'Supplier Address','value'=>set_value('supplier_address',
                                                $supplier->supplier_address),'required'=>'required']);?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="contactPerson">Contact Person <span
                                            class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <?= form_textarea(['name'=>'contact_person','class'=>'form-control','id'=>'contactPerson',
                                            'placeholder'=>'Contact Person','value'=>set_value('contact_person',
                                                $supplier->contact_person),'required'=>'required']);?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="supplierPhone">Phone No.<span
                                            class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <?= form_textarea(['name'=>'supplier_phone','class'=>'form-control','id'=>'supplierPhone',
                                            'placeholder'=>'phone No','value'=>set_value('contact_person',
                                                $supplier->supplier_phone),'required'=>'required']);?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="supplierNotes">Supplier Notes <span
                                            class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <?= form_textarea(['name'=>'supplier_notes','class'=>'form-control','id'=>'supplierNotes',
                                            'placeholder'=>'Supplier Notes','value'=>set_value('supplier_notes',
                                                $supplier->supplier_notes)]);?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="supplierStatus">Status <span
                                            class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <select class="form-control" id="supplierStatus" name="supplier_status">
                                            <option value="1" <?php if ($supplier->supplier_status== '1')  echo 'selected = "selected"'; ?>>Active</option>
                                            <option value="2" <?php if ($supplier->supplier_status== '2')  echo 'selected = "selected"'; ?>>Inactive</option>
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