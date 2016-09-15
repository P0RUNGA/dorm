<?php 
use yii\bootstrap\ActiveForm;
 ?>
<div class="body">
	<div class="applications" style="margin-bottom:60px;">
		<div>
			<div>
				<div class="application">
					<h2>作业登记本</h2>
					<?php $form = ActiveForm::begin() ?>
						<div style="margin-left:150px;margin-bottom:50px;">
							<table>
								<tr>
									<td><label for="position"><span>课</span>程:</label></td>
									<td><input type="text" name="position" id="position"></td>
								</tr>
								<tr>
									<td><label for="address"><span>作</span>业:</label></td>
									<td><textarea name="address" id="address" cols="30" rows="5"></textarea></td>
								</tr>
							</table>
						</div>
						<input type="submit" value="提交 表单" id="application-submit">
					<?php $form = ActiveForm::end() ?>
				</div>
			</div>
		</div>
	</div>
</div>