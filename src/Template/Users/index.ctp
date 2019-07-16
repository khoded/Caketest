
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>User <b>Manager</b></h2>
					</div>
					<div class="col-sm-6">
                        <?php echo $this->Html->link('ADD NEW EMPLOYER', ['action'=>'add'],['class'=>'btn btn-success']); ?>
					</div>
                </div>
            </div>
            <?php echo $this->Flash->render('message'); ?>
            <table class="table table-striped table-hover">

                <thead>
                    <tr>
                        <th>Check</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
						<th>Address</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($users)): ?>
                        <?php foreach($users as $users): ?>
                    <tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
                        <td><?php echo $users->Firstname ?></td>
                        <td><?php echo $users->Lastname ?></td>
                        <td><?php echo $users->gender ?></td>
						<td><?php echo $users->Address ?></td>
                        <td><?php echo $users->Phonenumber ?></td>
                        <td>
                            <?php echo $this->Html->link('VIEW', ['action'=>'view', $users->id],['class'=>'btn btn-primary']); ?>
                            <br>
                            <?php echo $this->Html->link('EDIT', ['action'=>'edit', $users->id],['class'=>'btn btn-success']); ?>
                            <!-- <a href="users/edit" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a> -->
                            <?= $this->Form->postLink(
                            'Delete',
                            ['action' => 'delete', $users->id],
                            ['class'=>'btn btn-danger'],
                            ['confirm'=>'are you sure'])
                            ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <?php else:?>
                <?php endif;?>
                </tbody>
            </table>
            <?php $paginator = $this->Paginator->setTemplates([
                'number' => '<li class="page-item"><a href="{{url}}" class="page-link">{{text}}</a></li>',
                'current' => '<li class="page-item active"><a href="{{url}}" class="page-link">{{text}}</a></li>',
                'first' => '<li class="page-item"><a href="{{url}}" class="page-link">&laquo</a></li>',
                'last' => '<li class="page-item"><a href="{{url}}" class="page-link">&raquo</a></li>',
                'prevActive' => '<li class="page-item"><a href="{{url}}" class="page-link">&rt</a></li>',
                'nextActive' => '<li class="page-item"><a href="{{url}}" class="page-link">&gt</a></li>'
            ]);
            ?>
			<div class="clearfix">
                <ul class="pagination">
                    <?php
                    echo $paginator->first();
                    if ($paginator->hasPrev()) {
                        // code...
                        echo $paginator->prev();
                    }
                    echo $paginator->numbers();
                    if ($paginator->hasNext()) {
                        // code...
                        echo $paginator->next();
                    }
                    echo $paginator->last();
                    ?>
                </ul>
            </div>
        </div>
    </div>
	<!-- Edit Modal HTML -->

	<!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">
						<h4 class="modal-title">Edit Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Address</label>
							<textarea class="form-control" required></textarea>
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input type="text" class="form-control" required>
						</div>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-info" value="Save">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">
						<h4 class="modal-title">Delete Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-danger" value="Delete">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
