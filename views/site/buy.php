<?php 

use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
 ?>
<div class="body">
	<div>
		<div style="height:450px;">
			<div>
				<div class="activities">
					<h2>701宿舍的宗旨、团队以及项目</h2>
					<div class="first">
						<ul>
							<li>
								<a href="<?= Url::toRoute('site/programs');?>">我们的宗旨</a>
							</li>
							<li class="selected">
								<a href="<?= Url::toRoute('site/buy');?>">买饭达人</a>
							</li>
							<li>
								<a href="<?= Url::toRoute('site/scoretable');?>">积分表</a>
							</li>
						</ul>
					</div>
					<div>
						<h3 class="title">欢迎回来 <?php echo $data['name']; ?>，我们很感激你原因如下</h3>
						<ul>
							<li>
								<p>
									你给我们带来了热腾腾香喷喷的饭菜！！
								</p>
							</li>
							<li>
								<p>
									你居然这么快就回来了，解救了饥饿的兄弟们！！
								</p>
							</li>
							<li>
								<p>
									你是一个遵守游戏规则的朋友，我们看好你！！
								</p>
							</li>
							<li>
								<p>
									我们看到了你一直都是这个游戏得参与者，真棒！！
								</p>
							</li>
						</ul>
						<h3 style="margin-top:50px;">别忘了填写下面 的表单，选择出你帮谁带了饭吧！</h3>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="body">
	<div class="applications" style="margin-bottom:50px;">
		<div>
			<div>
				<div class="application">
					<h2><?php echo $data['name']; ?> 的买饭 记录表</h2>
					<?php $form = ActiveForm::begin([  
                        'id' => 'buy-form',  
                        'options' => ['class' => 'form-horizontal'],  
                        'fieldConfig' => [  
                            'template' => "{label}\n<div class=\"col-lg-1\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",  
                            'labelOptions' => ['class' => 'col-lg-3 control-label'],  
                        ],  
                    ]); ?>
					<table>
                        <tr>
                        	<td class="select"><label><span>王</span>杰章:</label></td>
                            <td>
                            	<input type="checkbox" name="1" id="1" value="1">
							</td>
							<td class="select"><label><span>闫</span>蔚然:</label></td>
                            <td>
                            	<input type="checkbox" name="2" id="1" value="1">
							</td>
                        </tr>
                        <tr>
                        	<td class="select"><label><span>黎</span>敏钊:</label></td>
                            <td>
                            	<input type="checkbox" name="3" id="1" value="1">
							</td>
							<td class="select"><label><span>冯</span>圣杰:</label></td>
                            <td>
                            	<input type="checkbox" name="4" id="1" value="1">
							</td>
                        </tr>
                        <tr>
                        	<td class="select"><label><span>姚</span>磊鑫:</label></td>
                            <td>
                            	<input type="checkbox" name="5" id="1" value="1">
							</td>
							<td class="select"><label><span>陈</span>振安:</label></td>
                            <td>
                            	<input type="checkbox" name="6" id="1" value="1">
							</td>
                        </tr>
                        <tr>
                        	<td colspan="2"><label><span>黄</span>耀锋:</label></td>
                            <td colspan="2">
                            	<input type="checkbox" name="7" id="1" value="1">
							</td>
						</tr>
                    </table>
					<input type="submit" value="提交  记录表" id="application-submit">
                    <?php $form = ActiveForm::end(); ?>
				</div>
			</div>
		</div>
	</div>
</div>