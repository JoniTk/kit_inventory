
<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Unit List</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Inventory</li>
                <li class="breadcrumb-item active">Unit List</li>
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
                                <a href="<?= base_url('unit')?>" type="button" class="btn btn-primary btn-flat btn-addon btn-lg m-b-10 m-l-5"><i class="ti-plus"></i> Add New Unit</a>
                            </div>
                        </div>
                    </div>
                    <?php if($feedback=$this->session->flashdata('feedback')):
                        $feedback_class= $this->session->flashdata('feedback_class');?>
                        <div class="Container">
                            <div class="row">
                              <div class="col-lg-12">
                                <div class="alert alert-dismissible <?= $feedback_class ?>" style="color: black">
                                  
                                  <?= $feedback; ?>
                              
                              </div>
                              </div>
                            </div>
                        </div>
                        <?php endif;?>
                    <div class="table-responsive">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered itemdatatable" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th width="18%">Sl No.</th>
                                <th width="18%">Unit Name</th>
                                <th width="18%">Unit Status</th>
                                <th width="7%">Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <?php $i=0; ?>
                                <?php if( count($unit_list) ):
                                    foreach($unit_list as $unit): ?>

                                <td><?= ++$i ?></td>
                                <td><?= $unit->unit_name;?></td>
                                <td><?php  if($unit->unit_status == 1): 
                                                 echo "Active";

                                            else:
                                                echo "Inactive";
                                                 ?>    
                                </td>
                                <?php endif;?>
                                <td>
                                    <a class="btn btn-sm btn-warning" href='<?php echo base_url("unit/editUnit/{$unit->id}")?>' data-toggle="tooltip" data-placement="top" title="Edit!">
                                        <i class="fa fa-pencil-square-o"></i> Edit
                                    </a>
                                    <a class="btn btn-sm btn-danger" href='<?php echo base_url("unit/deleteUnit/{$unit->id}")?>' onclick="return confirm('Are you sure you want to delete?')" data-toggle="tooltip" data-placement="top" title="Delete!">
                                         <i class="fa fa-trash-o"></i> Delete
                                    </a>
                                </td>
                            </tr>

                            <?php endforeach;?>
                              <?php else:?>
                                <tr>
                                    <td>
                                      No Record found         
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            <?php endif;?>

                            </tbody>
                            <tfoot>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page wrapper  -->
</div>
<!-- End Wrapper -->
