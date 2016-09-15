<div class="body">
	<div>
		<div>
			<div>
				<div class="events">
					<h2>WEEKLY HOMEWORK</h2>
					<div class="first">
						<h3>近 期 作业 记录</h3>
							<?php for($i = 0; $i < 7; $i++): ?>
								<p style="width:400px;font-size:20px;border-bottom: 3px dashed #999;">
									<?php echo $data[$i]['date'].' '.$data[$i]['project']; ?>
									<?php echo '<span style="display:block;margin:8px 0;">'.$data[$i]['description'].'</span>'; ?>
								</p>
							<?php endfor; ?>
					</div>
					<div>
						<ul>
							<li>
								<div>
									<span>11/07/2011</span>
									<p>
										Phasellus parea ut di tincidunt blandit nisi ut pellentesque.
									</p>
								</div>
							</li>
							<li>
								<div>
									<span>11/03/2011</span>
									<p>
										Donec dictum semper augue, ut consectetur magna.
									</p>
								</div>
							</li>
							<li>
								<div>
									<span>10/27/2011</span>
									<p>
										Cum sociis natoque penatibus et magnis dis.
									</p>
								</div>
							</li>
							<li>
								<div>
									<span>10/25/2011</span>
									<p>
										Morbi commodo sem imperdiet magna imperdiet auctor.
									</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>