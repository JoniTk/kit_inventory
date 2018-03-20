<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Add New Unit</h3></div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Inventory</li>
                <li class="breadcrumb-item active">Add New Unit</li>
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
                                 <?= form_open('unit/addUnit',['class'=>'form-horaizontal']);?> <!-- doing form action -->
                                 <?= form_hidden('user_id', $this->session->userdata('user_id'))?>

                                <form class="form-valide">

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="unit_name">Unit Name<span
                                                    class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <?=form_input(['name'=>'unit_name','required'=>'required', 'class'=>'form-control','placeholder'=>"Unit Name",'value'=>set_value('unit_name')]);?>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="unit_status">Unit Status <span
                                                    class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <?php
                                                $data=[ 
                                                                 '1' => 'Active',
                                                                 '2' => 'Inactive'
                                                                 ];
                                 
                                             ?>
                                            <?=form_dropdown('unit_status',$data,1,['class'=>'form-control']); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-8 ml-auto">
                                            <?=form_reset(['name'=>'reset', 'value'=>'Reset', 'class'=>'btn btn-danger pull-left']);?>
                                            &nbsp;
                                            <?=form_submit(['name'=>'submit', 'value'=>'Submit', 'class'=>'btn btn-primary']);?>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page wrapper  -->
    </div>