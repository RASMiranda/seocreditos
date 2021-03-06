<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <?= $this->Html->css('bootstrap.min.css');?>
    <?= $this->Html->script('jquery-2.1.4.min.js');?>
    <?= $this->Html->script('bootstrap.min.js');?>      
</head>
<body>
    <header>
        <div class="header-title">
            <span><?= $this->fetch('title') ?></span>
        </div>
        <div class="header-help">
            <span><a target="_blank" href="http://book.cakephp.org/3.0/">Documentation</a></span>
            <span><a target="_blank" href="http://api.cakephp.org/3.0/">API</a></span>
        </div>
    </header>
    <div id="container">

        <div id="content">
            <?= $this->Flash->render() ?>

            <div class="row">
                <?= $this->fetch('content') ?>
            </div>
        </div>        
        <footer>
            <div class="row">  
                <div>
                    <table class="table">
                        <caption>Total approved</caption>
                        <thead><tr>
                            <th>name</th>
                            <th>num</th>
                        </tr></thead>
                        <tbody>
                        <?php foreach ($stats['total'] as $key => $row) {
                            echo "<tr><td>".$row['supplier']."</td><td>".$row['num']."</td></tr>";
                        }
                        ?>
                        </tbody>
                    </table>             
                </div> 
                <div>
                    <table class="table">
                        <caption>% approved</caption>
                        <thead><tr>
                            <th>name</th>
                            <th>tax/approved</th>
                        </tr></thead>
                        <tbody>
                        <?php foreach ($stats['pct'] as $key => $row) {
                            echo "<tr><td>".$row['supplier']."</td><td>".$row['tax']."</td></tr>";
                        }
                        ?>
                        </tbody>
                    </table>
                </div> 
                <div>
                    <table class="table">
                        <caption>Top</caption>
                        <thead><tr>
                            <th>name</th>
                        </tr></thead>
                        <tbody>
                        <?php foreach ($stats['top'] as $key => $row) {
                            echo "<tr><td>".$row['supplier']."</td></tr>";
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>    
        </footer>
    </div>
</body>
</html>
