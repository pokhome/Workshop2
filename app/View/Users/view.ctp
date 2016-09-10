
            รายชื่อผู้ใช้งานระบบ

        <div>
            <?php echo $this->Html->link('+ เพิ่มผู้ใช้งานใหม่ในระบบ', array('controller' => 'users', 'action' => 'add'), array('class' => 'button')); ?>
        </div>

    <div>
        <table  class="table">
            <tr>
                <th><?php echo $this->Paginator->sort('id', 'ID'); ?></th>
                <th><?php echo $this->Paginator->sort('name', 'ชื่อ'); ?></th>
                <th><?php echo $this->Paginator->sort('email', 'email'); ?></th>
                <th><?php echo $this->Paginator->sort('Group.name', 'กลุ่มผู้ใช้'); ?></th>
            </tr>
            <?php
            if (isset($result)):
                foreach ($result as $value):
                    ?>
                    <tr>
                        <td><?php echo sprintf("%04d",$value['User']['id']); ?></td>
                        <td><?php echo $value['User']['name']; ?></td>
                        <td><?php echo $value['User']['email']; ?></td>
                        <td><?php echo $value['Group']['name']; ?></td>
                    </tr>
                    <?php
                endforeach;
            endif;
            ?>
        </table>
        <?php echo $this->element('pagination'); ?>
    </div>
</div>
