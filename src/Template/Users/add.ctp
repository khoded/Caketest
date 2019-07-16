
             <?php echo $this->Form->create('users'); ?>
                <div class="modal-header">
                    <h4 class="modal-title">Add Employee</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <?php echo $this->Form->control('Firstname', ['class'=>'form-control']); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->control('Lastname', ['class'=>'form-control']); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->control('Phonenumber', ['class'=>'form-control']); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->control('Address', ['class'=>'form-control']); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->control('dob' , ['class'=>'form-control', 'type'=>'date']); ?>
                    </div>
                    <div class="form-group">
                        <label>gender</label>
                        <?php echo $this->Form->control('gender', ['class'=>'form-control']); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->control('height', ['class'=>'form-control']); ?>
                    </div>

                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                     <?php echo $this->Form->button(__('Add User'), ['class'=>'btn btn-primary'], ['action'=>'add']); ?>
                </div>
            <?php echo $this->Form->end(); ?>
