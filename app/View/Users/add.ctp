<h2>
    เพิ่มผู้ใช้งานใหม่ในระบบ
</h2>

<?php echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' => 'add'))); ?>
<?php echo $this->Form->inputs(); ?>
<?php /*
<table  cellspacing="0" cellpadding="0">
    <tr><td>ชื่อ</td><td><?php echo $this->Form->input('name', array('label' => false)); ?></td></tr>
    <tr><td>email</td><td><?php echo $this->Form->input('email', array('label' => false)); ?></td></tr>
    <tr><td>กลุ่มผู้ใช้</td><td><?php echo $this->Form->input('groups_id', array('label' => false, 'options' => $user_groups)); ?></td></tr>
    <tr><td></td><td><?php echo $this->Form->submit('+ เพิ่มผู้ใช้งานใหม่ในระบบ', array('class' => 'btn btn-primary')); ?></td></tr>
</table>
*/ ?>
<?php echo $this->Form->end(); ?>

