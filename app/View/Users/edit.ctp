<?php echo $this->Session->flash(); ?>
<?php echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' => 'edit', $user['User']['id']))); ?>
<div class="read_title">
    <div class="head">ข้อมูลผู้ใช้งานระบบ</div>
    <div class="right_btn">
        <?php echo $this->Js->submit('บันทึกข้อมูลส่วนตัว', array('update' => '.read_detail', 'confirm' => 'คุณต้องการแก้ไขข้อมูลหรือไม่', 'class' => 'button')); ?>
    </div>
</div>
<div class="read_info">
    <?php if (isset($user)): ?>
        <div class="read_left">
            <table  cellspacing="0" cellpadding="0">
                <tr><td>ชื่อ</td><td><?php echo $this->Form->input('name', array('label' => false, 'value' => $user['User']['name'])); ?></td></tr>
                <tr><td>นามสกุล</td><td><?php echo $this->Form->input('sername', array('label' => false, 'value' => $user['User']['sername'])); ?></td></tr>
                <tr><td>email</td><td><?php echo $this->Form->input('email', array('label' => false, 'value' => $user['User']['email'])); ?></td></tr>
            </table>
        </div>
        <div class="read_right">
            <table  cellspacing="0" cellpadding="0">
                <tr><td>username</td><td><?php echo $this->Form->input('username', array('label' => false, 'value' => $user['User']['username'])); ?></td></tr>
                <tr><td>password</td><td><?php echo $this->Form->input('password', array('label' => false, 'value' => $user['User']['password'])); ?></td></tr>
                <tr><td>กลุ่มผู้ใช้</td><td><?php echo $this->Form->input('user_groups_id', array('label' => false, 'options' => $user_groups, 'default' => $user['User_group']['id'])); ?></td></tr>
            </table>
        </div>
    <?php endif; ?>
</div>
<?php echo $this->Form->end(); ?>
<?php echo $this->Js->writeBuffer(); ?>
<script>
    $(function() {
        //Hide notification
        $('.hide-save').click(function() {
            $(this).fadeOut('slow');
        });
    });
</script>