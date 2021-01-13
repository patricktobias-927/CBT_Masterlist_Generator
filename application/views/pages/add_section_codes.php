<h1> <?= $title;?> </h1>
<hr>
<!-- <?= validation_errors();?> -->
<?php if($this->session->flashdata('section_code_added')) : ?> 
<?= '<p class="alert alert-success">'.$this->session->flashdata('section_code_added').'</p>' ?>
<?php endif;?>
<?php if($this->session->flashdata('section_code_deleted')) : ?> 
<?= '<p class="alert alert-success">'.$this->session->flashdata('section_code_deleted').'</p>' ?>
<?php endif;?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">

        <!-- <?= form_open('delete_section_codes');?> -->
       
        <form name="bulk_action_form1" action="<?=base_url().'add_section_codes'?>" method="post"/>
        <div class="form-group">
                 <br>   
                     <label for="" style=" float:left;" >Section Code:   </label>
                       <input type="text" name="section_code" class="form-control" placeholder="Enter Section Code" style="width: 200px;   margin-top:-4px; float:left;"   value="">
                      <button type="submit" class="btn btn-success" style="width: 15%;  margin-top:-4px; margin-left:500px; background-color: #FF8C00; border-color: #FF8C00; ">Add</button>
    
                  <br>   
                </div>   
          </form>   
        </div> 
    </div> 
</div> 

<div class="container">  
    <div class="row">
         <div class="col-12">  
           <form name="bulk_action_form2" action="<?=base_url().'delete_section_codes'?>" method="post" onSubmit="return delete_confirm();"/>
           <button type="submit" name="bulk_delete_submit" value="DELETE" class="btn btn-danger" style="margin-left: 5px;  width:15%; margin-top:-4px;">Delete</button>
             <div class="form-group">
             <br>  
             <br>  
                            <table class="table table-bordered table-striped"  style="width: 100%;" id="section_codes_table">
                            <thead>
                                <tr>
                                <th scope="col"></th>
                                <th scope="col">School Code</th>
                                </tr>
                            </thead>
                            <tbody>     
                    
                            <?php foreach($records as $row){?>
                                <tr>
                                <td><input type="checkbox" name="checked_id[]" class="checkbox" value="<?= $row['section_id'];?>"></td>
                                <td><?= $row['section_code'];?></td>
                                </tr>
                                <?php } ?> 
                              
                        </tbody>
                    </table>
                 </div>  
            </form>           
        </div> 
    </div> 
</div>   
            <script>  
                $(document).ready(function(){  
                    $('#section_codes_table').DataTable();  
                });  
            </script>  

 
     
   
      