<?php 

use yii\helpers\Url;

 ?>
<div class="body">
	<div>
		<div>
			<div>
				<div class="activities">
					<h2>701宿舍的宗旨、团队以及项目</h2>
					<div class="first">
						<ul>
							<li>
								<a href="<?= Url::toRoute('site/programs');?>">我们的宗旨</a>
							</li>
							<li>
								<a href="<?= Url::toRoute('site/buy');?>">买饭达人</a>
							</li>
							<li class="selected">
								<a href="<?= Url::toRoute('site/scoretable');?>">积分表</a>
							</li>
						</ul>
					</div>
					<div id="score">
						<table>
							<caption>当前积分表</caption>
							<tr>
								<th>号数</th>
								<th>姓名</th>
								<th>积分</th>
							</tr>
							<?php foreach ($datas as $data): ?>
							<tr>
								<td><?php echo $data['id'] ?></td>
								<td><?php echo $data['name'] ?></td>
								<td><?php echo $data['score'] ?></td>
							</tr>
							<?php endforeach; ?>
						</table>
						<h3>We Have Free Templates for Everyone</h3>
						<p>
							Our website templates are created with inspiration, checked for quality and originality and meticulously sliced and coded. What's more, 
							they're absolutely free! You can do a lot with them. You can modify them. You can use them to design websites for clients, so long as you 
							agree with the Terms of Use. You can even remove all our links if you want to.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>