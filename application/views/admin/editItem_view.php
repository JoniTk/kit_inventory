<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Edit Item</h3></div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Inventory</li>
                <li class="breadcrumb-item active">Edit Item</li>
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
                                 <?= form_open("item/updateItem/{$edititem_list->id}",['class'=>'form-horaizontal']);?> <!-- doing form action -->
                                 <?= form_hidden('user_id', $this->session->userdata('user_id'))?>

                                 <form class="form-valide">

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="item_code">Item Code/SL no<span
                                                    class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <?=form_input(['name'=>'item_code','required'=>'required', 'class'=>'form-control','placeholder'=>"Item Code/SL no",'value'=>set_value('item_code',$edititem_list->item_code)]);?>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="item_name">Item Name<span
                                                    class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <?=form_input(['name'=>'item_name','required'=>'required', 'class'=>'form-control','placeholder'=>"Item Name",'value'=>set_value('item_name',$edititem_list->item_name)]);?>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="item_model">Model No<span
                                                    class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <?=form_input(['name'=>'item_model','required'=>'required', 'class'=>'form-control','placeholder'=>"Item Model no",'value'=>set_value('item_model',$edititem_list->item_model)]);?>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="item_brand">Item Brand<span
                                                    class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <?=form_input(['name'=>'item_brand','required'=>'required', 'class'=>'form-control','placeholder'=>"Item Brand",'value'=>set_value('item_brand',$edititem_list->item_brand)]);?>

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="item_category">Item Category <span
                                                    class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            
                                            <select class="form-control" , name="item_category" , required="required" id="category">
                                                <option value="">-- Select Item Category</option>
                                                <?php
                                                 foreach ($category as $category): 
                                                    if(($category->id) == ($edititem_list->item_category)):
                                                         echo '<option selected="'.$category->category_name.'" value="'.$category->id.'">'.$category->category_name.'</option>';

                                                    else:
                                                       echo '<option value="'.$category->id.'">'.$category->category_name.'</option>';
                                                   
                                                    endif;    
                                                   endforeach;

                                                    ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="item_unit">Item Unit <span
                                                    class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            
                                            <select class="form-control" , name="item_unit" , required="required" id="unit">
                                                <option value="">-- Select Item Unit</option>
                                                <?php
                                                 foreach ($unit as $unit): 
                                                    if(($unit->id) == ($edititem_list->item_unit)):
                                                         echo '<option selected="'.$unit->unit_name.'" value="'.$unit->id.'">'.$unit->unit_name.'</option>';

                                                    else:
                                                       echo '<option value="'.$unit->id.'">'.$unit->unit_name.'</option>';
                                                    
                                                     endif;   
                                                   endforeach;

                                                    ?>
                                            </select>
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="item_description">Item Description<span
                                                    class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <?=form_textarea(['name'=>'item_description','required'=>'required', 'class'=>'form-control','placeholder'=>"Item Description",'value'=>set_value('item_description',$edititem_list->item_description)]);?>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="item_saleprice">Min. Sale Price<span
                                                    class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <?=form_input(['name'=>'item_saleprice','type'=>'number','required'=>'required', 'class'=>'form-control','placeholder'=>"Min. Sale Price",'value'=>set_value('item_saleprice',$edititem_list->item_saleprice)]);?>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="item_re_order">Re-Order Level<span
                                                    class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <?=form_input(['name'=>'item_re_order','type'=>'number','required'=>'required', 'class'=>'form-control','placeholder'=>"Item Re-Order Level",'value'=>set_value('item_re_order',$edititem_list->item_re_order)]);?>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="item_status">Item Status <span
                                                    class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <?php
                                                $data=[ 
                                                                 '1' => 'Active',
                                                                 '2' => 'Inactive'
                                                                 ];
                                 
                                            if($edititem_list->item_status==1): 
                                              echo form_dropdown('item_status',$data,1,['class'=>'form-control']);

                                              else:
                                                echo form_dropdown('item_status',$data,2,['class'=>'form-control']);
                                            ?>
                                        <?php endif; ?>
                                        </div>
                                    </div>

                                     <div class="form-group row">
                                        <div class="col-lg-8 ml-auto">
                                            <a type="button" onclick="location.href='<?php echo base_url();?>item/listItem'" class= "btn btn-danger"><font style="color: white">Cancel</font></a>
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

 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

  <script type="text/javascript">


      $('#category,#unit').select2();


</script>