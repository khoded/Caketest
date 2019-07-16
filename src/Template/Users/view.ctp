<h3>User Details</h3>
<p>Firstname: <?php echo $user->Firstname ?></p>
<p>Lastname: <?php echo $user->Lastname ?></p>
<p>Gender: <?php echo $user->gender ?></p>
<p>Address: <?php echo $user->Address ?></p>
<p>Phone Number: <?php echo $user->Phonenumber ?></p>
<p>Date of Birth: <?php echo $user->dob ?></p>
<p>Height: <?php echo $user->height ?></p>
<?php echo $this->Html->link('BACK', ['action'=>'index'],['class'=>'btn btn-primary']); ?>
