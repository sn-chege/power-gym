    <div id="AddEditModalSubscription" class="modal modal-adminpro-general FullColor-popup-DangerModal fade" role="dialog" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header header-color-modal bg-color-4">
                    <h4 class="modal-title">Add/Edit Subscription</h4>
                    <div class="modal-close-area modal-close-df">
                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                    </div>
                </div>
                <div class="modal-body">
                   




<fieldset>
    <div class="my-formgroup-title">
        <h3>Subscription Details <?php echo $member_id;?></h3>
    </div>

        <div class="form-group-inner">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right pull-right-pro">Validity</label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="form-select-list">
                        <select class="form-control custom-select-value" name="duration" id="duration">
                                <option value="30">1 Month</option>
                                <option value="62">2 Months</option>
                                <option value="92">3 Months</option>
                        </select>
                    </div>
                </div>
            </div>
        </div> 

        <div class="form-group-inner data-custon-pick" id="data_2">
           <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                     <label class="login2 pull-right pull-right-pro">Start Date</label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="input-group date">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input type="text" class="form-control" value="" placeholder = 'mm/dd/yyyy' name="startdate" id="startdate">
                    </div>
                </div>
            </div>
        </div>
</fieldset>





                </div>
               
            </div>
        </div>
    </div>