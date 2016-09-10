<div class="dataTables_info">
<?php
    echo $this->Paginator->counter('แสดง {:start} ถึง {:end} ของ {:count} รายการ');
?>
</div>
    
<div class="dataTables_paginate paging_full_numbers">
<?php

    echo $this->Paginator->first(
            '<< ',
            array('class' => 'paginate_button paginate_button_first', 'title' => 'กลับหน้าแรก')
    );

    echo $this->Paginator->prev(
            '< ',
            array('class' => 'paginate_button', 'title' => 'ก่อนหน้านี้')
    );

    echo $this->Paginator->numbers(
        array(
            'currentClass' => 'paginate_active',
            'class' => 'paginate_button',
            'separator' => ' '
        )
    );

    echo $this->Paginator->next(
            ' >',
            array('class' => 'paginate_button', 'title' => 'หน้าถัดไป')
    );

    echo $this->Paginator->last(
            ' >>',
            array('class' => 'paginate_button paginate_button_last', 'title' => 'ไปยังหน้าสุดท้าย')
    );

?>
</div>