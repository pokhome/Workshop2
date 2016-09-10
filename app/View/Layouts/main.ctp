<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            <?php echo $title_for_layout; ?>
        </title>
        <?php
        echo $this->Html->css(array('bootstrap.min.css', 'bootstrap-responsive.min.css'));
        echo $this->Html->script(array('bootstrap.min.js'));

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <blockquote>
                    <h1>Workshop 2</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <small>Someone famous Source Title</small>
                </blockquote>
            </div>
            <div class="content">
                <?php echo $this->fetch('content'); ?>
            </div>
            <hr>
            <div class="footer text-center">
                <address>
                    <strong>Sapphire Research and Development Co.,Ltd.</strong><br>
                    199/445 M.2 Nong Chom, San Sai<br>
                    Chiang Mai, Thailand. 50210<br>
                    <abbr title="Phone">Phone:</abbr> (+66) 53 854-238 Ext. 0 
                </address>

                <address>
                    <strong>Email Address</strong><br>
                    <a href="mailto:service@sapphire.co.th">service@sapphire.co.th</a>
                </address>
            </div>
        </div>
    </body>
</html>
