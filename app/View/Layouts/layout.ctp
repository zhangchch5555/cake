<!DOCTYPE html><html>
    <head>
        <?= $this->Html->charset() ?>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta name="format-detection" content="telephone=no"/>
        <title>title</title>

        <?= $this->fetch('css') ?>
    </head>
    <body>
        <div class="contents">
            <?= $this->element('header') ?>
            <?= $this->fetch('content') ?>
            <?= $this->element('footer') ?>
        </div>
        <?= $this->fetch('script') ?>
    </body>
</html>