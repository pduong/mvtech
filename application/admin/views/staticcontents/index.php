<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-eye-open"></i> Static Contents</h2>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>Title (en)</th>
                        <th>Title (vi)</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listStatics as $static):?>
                    <tr>
                        <td class="center"><?php echo $static->title_en?></td>
                        <td class="center"><?php echo $static->title_vi?></td>
                        <td class="center">
                            <a class="btn btn-success" href="/admin/index.php/staticcontents/edit/<?php echo $static->code?>">
                                <i class="icon-edit icon-white"></i>
                                edit
                            </a>                            
                        </td>
                    </tr>   
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div><!--/span-->
</div><!--/row-->
