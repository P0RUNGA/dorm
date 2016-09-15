<?php 

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Nav;

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>701宿舍</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="shortcut icon" href="images/icon.png" type="text/css">
    </head>
<body>
    <div class="header">
        <div>
            <a href="<?= Url::toRoute('site/index');?>" id="logo"><img src="images/logo.png" alt="logo"></a>
            <ul>
                <li class="selected">
                    <a href="<?= Url::toRoute('site/index');?>"><span>主</span>页</a>
                </li>
                <li>
                    <a href="<?= Url::toRoute('site/about');?>"><span>关</span>于</a>
                </li>
                <li>
                    <a href="<?= Url::toRoute('site/programs');?>"><span>项</span>目</a>
                </li>
                <li>
                    <a href="<?= Url::toRoute('site/notebook');?>"><span>登</span>记本</a>
                </li>
                <li>
                    <a href="staff.html"><span>S</span>taff</a>
                </li>
                <?php 
                    echo Nav::widget([
                        'options' => ['class' => '','style' => 'position:absolute;top:13px;right:120px;'],
                        'items' => [
                            Yii::$app->user->isGuest ? (
                                ['label' => '登入', 'url' => ['/site/login']]
                            ) : (
                                '<li>'
                                . Html::beginForm(['/site/logout'], 'post')
                                . Html::submitButton(
                                    '登出(' . Yii::$app->user->identity->name . ')',
                                    ['style' => 'font-weight:bold;font-size:18px;color: #e8e1aa;background-color: transparent;border: none;cursor: pointer;']
                                )
                                . Html::endForm()
                                . '</li>'
                            )
                        ],
                    ]);
                 ?>
            </ul>
            <div>
                <p>
                    <span>C</span>amp <span>S</span>tarts <span>I</span>n: <span><span>228</span></span> <span>D</span>ays
                </p>
            </div>
        </div>
    </div>

    <?= $content ?>

    <div class="footer">
        <div>
            <div>
                <h3>NEWSLETTER</h3>
                <p>
                    Nulla porttitor vulputate elit, trist ique malesuada sem.
                </p>
                <form action="index.html">
                    <input type="text" value="Email Address" onblur="this.value=!this.value?'Email Address':this.value;" onfocus="this.select()" onclick="this.value='';">
                    <input type="submit" value="Get">
                </form>
            </div>
            <div>
                <h4>LATEST BLOG</h4>
                <ul>
                    <li>
                        <p>
                            <a href="blog.html">Phasellus parea ut di tincidunt blandit nisi ut pellentesque.</a>
                        </p>
                        <span>11/07/2011</span>
                    </li>
                    <li>
                        <p>
                            <a href="blog.html">Donec dictum semper augue, ut consectetur magna posuere eget.</a>
                        </p>
                        <span>11/03/2011</span>
                    </li>
                    <li>
                        <p>
                            <a href="blog.html">Cum sociis natoque penatibus et magnis dis parturient.</a>
                        </p>
                        <span>11/27/2011</span>
                    </li>
                </ul>
            </div>
            <div class="connect">
                <h4>FOLLOW US:</h4>
                <a href="#" class="facebook">Facebook</a> <a href="#" class="twitter">Twitter</a> <a href="#" class="google">Google+</a>
            </div>
        </div>
        <div>
            <p>
                Summer Camp &#169; 2011 | All rights reserved&nbsp;- Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a>
            </p>
        </div>
    </div>
</body>
</html>