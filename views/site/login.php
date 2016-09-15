<?php 

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
 ?>    
<div class="body">
    <div class="contact">
        <div>
            <div>
                <div class="contact">
                    <h2>701 宿舍成员登入窗口</h2>
                    <div class="address">
                        <span><span>地</span>址:</span>
                        <p>
                            广西壮族自治区 南宁市 大学东路100号 广西大学 西26栋 701室
                        </p>
                        <span><span>电</span>话 <span>号</span>码:</span>
                        <p>
                            1-827-7195-746 or 1-800-111-1111
                        </p>
                        <span><span>传</span>真 <span>号</span>码:</span>
                        <p>
                            1-800-222-2222
                        </p>
                    </div>
                    <h3><span>登</span>入 <span>系</span>统 <span>表</span>单, <span>请</span>你 <span>填</span>写 <span>完整</span>才 <span>可</span>进 <span>入</span>系统 .</h3>
                    <?php $form = ActiveForm::begin([  
                        'id' => 'login-form',  
                        'options' => ['class' => 'form-horizontal'],  
                        'fieldConfig' => [  
                            'template' => "{label}\n<div class=\"col-lg-1\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",  
                            'labelOptions' => ['class' => 'col-lg-3 control-label'],  
                        ],  
                    ]); ?>  

                        <table>
                            <tr>
                                <td><label for="name"><span>姓</span>名:</label></td>
                                <td><?= $form->field($model, 'name',['labelOptions' => ['label' => ''],'inputOptions' => ['style' => 'position:absolute;']])->textInput() ?></td>
                            </tr>
                            <tr>
                                <td><label for="password"><span>密</span>码:</label></td>
                                <td><?= $form->field($model, 'password',['labelOptions' => ['label' => ''],'inputOptions' => ['style' => 'position:absolute;']])->passwordInput() ?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><?= $form->field($model, 'rememberMe')->checkbox() ?></td>
                            </tr>
                        </table>
                        <input type="submit" value="提交" id="submit">
                    <?php $form = ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>