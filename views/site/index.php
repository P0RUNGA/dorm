<?php 

use yii\helpers\Url;
$i = 1;
 ?>
<div class="body">
    <div>
        <div class="featured">
            <img src="images/p1.jpg" alt="">
            <div>
                <div>
                    <h3><span>现</span>在 <span>谁</span> <span>去</span>买饭 <span>公</span>告板!</h3>
                    <p>
                        现在该谁买饭呢？答案如下：<br>
                        没错就是你了： <?php echo $row['name']; ?><br>
                        荣获当前最高分： <?php echo $row['score']; ?>分<br>
                        所以给你的奖励是出门给兄弟们带饭吧！！
                    </p>
                    <a href="<?= Url::toRoute('site/scoretable');?>">查看积分表!</a>
                </div>
            </div>
        </div>
        <div>
            <div>
                <div>
                    <div class="section">
                        <h2>WHY CHOOSE US?</h2>
                        <p>
                            This website template has been collect from <a href="http://www.cssmoban.com/" title="模板之家">模板之家</a> for you, for free. You can replace all this text with your own text.
                        </p>
                        <ul>
                            <li>
                                <p>
                                    Vivamus at justo ut urna porta pulvinar
                                </p>
                            </li>
                            <li>
                                <p>
                                    Pellentesque nunasidp adipiscing sollicitudin dolor id sagittis.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Donec sit amet felis a nibh ornare malesuada.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Etiam et tellus mi, et semper lectus.
                                </p>
                            </li>
                        </ul>
                        <ul class="last">
                            <li>
                                <p>
                                    Quisque in purus nec purus feugiat consectetur.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Fusce et ipsum dolor lorem ante, at sollicitudin libero.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Etiam et tellus mi, et semper lectus.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Vivamus at justo ut urna porta pulvinar.
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3>WEEKLY HOMEWORK</h3>
                        <ul>
                            <?php foreach($data_side as $homework): ?>
                                <li class="<?php if($i == 3) echo 'last'; ?>">
                                    <div>
                                        <span><?php echo $homework['date']; ?></span>
                                        <p>
                                            <?php echo $homework['project'].'  '.$homework['description'];$i++;?>
                                        </p>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="<?= Url::toRoute('site/viewhome');?>">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>