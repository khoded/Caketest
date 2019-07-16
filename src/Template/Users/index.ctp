
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>User <b>Manager</b></h2>
					</div>
					<div class="col-sm-6">
                        <?php echo $this->Html->link('ADD USER', ['action'=>'add'],['class'=>'btn btn-success']); ?>
                        <?php echo $this->Html->link('EXPORT', ['action'=>'export'],['class'=>'btn btn-success']); ?>
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
</body>
</html>
