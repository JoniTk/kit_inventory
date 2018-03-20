
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
                                <a href="<?= base_url('item')?>" type="button" class="btn btn-primary btn-flat btn-addon btn-lg m-b-10 m-l-5"><i class="ti-plus"></i> Add New item</a>
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
                                <th width="6%">Sl No.</th>
                                <th width="8%">Item Code/SL No</th>
                                <th width="6%">Item Name</th>
                                <th width="8%">Item Model No</th>
                                <th width="8%">Item Brand</th>
                                <th width="10%">Item Category</th>
                                <th width="6%">Item Unit</th>
                                <th width="11%">Item Description</th>
                                <th width="8%">Min. Sale Price</th>
                                <th width="8%">Re-Order Level</th>
                                <th width="8%">Item Status</th>
                                <th width="20%">Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <?php $i=0; ?>
                                <?php if( count($item_list) ):
                                    foreach($item_list as $item): ?>

                                <td><?= ++$i ?></td>
                                <td><?= $item->item_code;?></td>
                                <td><?= $item->item_name;?></td>
                                <td><?= $item->item_model;?></td>
                                <td><?= $item->item_brand;?></td>
                                <td>
                                    <?php
                                          $ci =&get_instance();
                                          $ci->load->model('Mcategory');
                                          $data=$ci->Mcategory->find_category($item->item_category);
                                           ?>
                                          <?php if(isset($data->id)): ?>
                                                     <?= $data->category_name ?>
                                          <?php else:?>
                                              <?php echo("Category Not found");?>  
                                                    <!--       <?= $data->driver_fName; ?> -->
                                </td>
                                <?php endif;?>
                                <td> 
                                    <?php
                                          $ci =&get_instance();
                                          $ci->load->model('Munit');
                                          $data=$ci->Munit->find_unit($item->item_unit);
                                           ?>
                                          <?php if(isset($data->id)): ?>
                                                     <?= $data->unit_name ?>
                                          <?php else:?>
                                              <?php echo("Unit Not found");?>  
                                </td>
                                <?php endif;?>
                                <td><?= $item->item_description;?></td>
                                <td><?= $item->item_saleprice;?></td>
                                <td><?= $item->item_re_order;?></td>
                                <td><?php  if($item->item_status == 1): 
                                                 echo "Active";

                                            else:
                                                echo "Inactive";
                                                 ?>    
                                </td>
                                <?php endif;?>
                                <td>
                                    <a class="btn btn-sm btn-warning" href='<?php echo base_url("item/editItem/{$item->id}")?>' data-toggle="tooltip" data-placement="top" title="Edit!">
                                        <i class="fa fa-pencil-square-o"></i> Edit
                                    </a>
                                    <a class="btn btn-sm btn-danger" href='<?php echo base_url("item/deleteItem/{$item->id}")?>' onclick="return confirm('Are you sure you want to delete?')" data-toggle="tooltip" data-placement="top" title="Delete!">
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
