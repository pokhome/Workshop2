<div class="hero-unit">
    <h1><?php echo $helloWorld; ?></h1>
    <p>
        This is a simple hero unit, a simple jumbotron-style component for calling extra attention to 
        <br>featured content or information.
    </p>
    <p>
        <a class="btn btn-primary btn-large">
            Learn more
        </a>
    </p>
    <br>
    <hr>
    <?php
    echo $this->Html->link('Enter', array('controller' => 'firsts', 'action' => 'hello')
            , array('class' => 'btn btn-primary', 'title' => 'go to hello page'));
    ?>

    <?php
    echo $this->Html->link('Delete', array('controller' => 'firsts', 'action' => 'delete')
            , array('class' => 'btn btn-danger', 'title' => 'Delete'), 'อิอิ ?');
    ?>
    <br>
    <hr>
    <?php echo $this->Html->url(array("controller" => "posts", "action" => "view")); ?>
    <br>
    <?php echo $this->Html->url(array("controller" => "posts", "action" => "view"), true); ?>

    <br>
    <hr>
    <?php echo $this->Html->image('pic/cake.icon.png', array('alt' => 'CakePHP')); ?>
    <br>
    <hr>
    <?php echo $this->Html->image('glyphicons-halflings.png', array('alt' => 'test')); ?>
</div>
