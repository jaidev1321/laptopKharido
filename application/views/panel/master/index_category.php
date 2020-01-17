      
<!-- Page Content -->
 <div class="page-content">           
 <!-- Page Inner -->
        <div class="page-inner">
            <div class="page-title">
                <h3 class="breadcrumb-header">Category List</h3>
            </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <!-- <h4 class="panel-title">Basic example  <a href="<?php echo base_url('master/addEditCategory'); ?>" class="btn btn-primary pull-right">+ Add</a></h4> -->

                            <h4 class="panel-title">Basic example  <a href="javasxript:void(0)" onclick="add_edit()" class="btn btn-primary pull-right">+ Add</a></h4>

                            <a data-toggle="modal" onclick="getDetailData(1)" data-target="#modal-default" class="btn btn-xs text-warning">Detail</a>


                            
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive table-striped dataTable">
                            <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                <thead>
                                    <tr>
                                        <th>S.no</th>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    //$edit = "EDIT";
                                    $i = 0;
                                    foreach ($data as $d) {
                                        $i++;
                                        echo '<tr>';
                                        echo '<td>'.$i.'</td>';
                                        echo '<td>'.$d['id'].'</td>';
                                        echo '<td>'.$d['category_name'].'</td>';
                                        echo '<td>'.($d['status']==0 ? 'In-Active' : 'Active').'</td>';
                                        echo '<td>'."EDIT".'</td>';
                                        echo '</tr>';
                                    }
                                    
                                    ?>
                                </tbody>
                                
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="dialogId">
        This is dialog widget
        </div>
		<script>
            $('#dialog').dialog();

        /*function getDetailData(val){
            //alert('yes');
            $("#memberDetail").html('');
            req = $.ajax({
                type: "POST",
                url: 'add_edit_category.php',
                cache: false,
                success: function (responseStr) {
                    $("#memberDetail").html(responseStr);
                }
            });
        }*/

    
       /* function add_edit(id){
            alert('edit');
            var dialogOpts = {
                title:'Add Category',
                modal:true,
                width:'580px',
                resize:'auto',
                close: dialogClosed
            };
            editDialog = $('<div></div>')
            .load("<?php echo site_url('master/addEditCategory'); ?>",{edit:id})
            .dialog(dialogOpts);
            editDialog.dialog('open');
            return false;
        }
*/
</script>