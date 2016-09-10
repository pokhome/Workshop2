<div class="content">
    <div class="list_head">
        <div class="title">
            <?php echo $title; ?>
        </div>
    </div> 
    <div class="read_detail">
        <div class="read_title">
            <div class="head">ข้อมูลผู้ใช้งานระบบ</div>
            <div class="right_btn">
                <?php echo $this->Js->link('แก้ไขข้อมูลส่วนตัว', array("controller" => "users", "action" => "edit", $user['User']['id']), 
                        array('update' => '.read_detail', 'htmlAttributes' => array('class' => 'button'))); ?>
            </div>
        </div>
        <div class="read_info">
            <?php if (isset($user)): ?>
                <div class="read_left">
                    <table  cellspacing="0" cellpadding="0">
                        <tr><td>ชื่อ</td><td><?php echo $user['User']['name']; ?></td></tr>
                        <tr><td>นามสกุล</td><td><?php echo $user['User']['sername']; ?></td></tr>
                        <tr><td>email</td><td><?php echo $user['User']['email']; ?></td></tr>
                    </table>
                </div>
                <div class="read_right">
                    <table  cellspacing="0" cellpadding="0">
                        <tr><td>username</td><td><?php echo $user['User']['username']; ?></td></tr>
                        <tr><td>password</td><td>***</td></tr>
                        <tr><td>กลุ่มผู้ใช้</td><td><?php echo $user['User_group']['name']; ?></td></tr>
                    </table>
                </div>
            <?php endif; ?>
        </div>
        <?php echo $this->Js->writeBuffer(); ?>
    </div> 
</div>
