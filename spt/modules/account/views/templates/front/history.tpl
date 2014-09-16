<div class="k-content child_panel child_panel1 child_panel2">
	<div class="box_rechange">
		<span id="undo_recharge" class="btn_gr">+ RECHARGE</span>
	</div>
	<div id="organizer2">
		<ul id="panelbar2">

			<li class="k-state-active">
				<div class="line1">
					<div class="col1">
						<span class="ico_money"></span>
					</div>
					<div class="col2">
						<p class="text">
							+ Your money:
						</p>
						<p class="text">
							+ Cash promotion:
						</p>
					</div>
					<div class="col3">
						<p class="price1">
							VND{$cash["cash"]|number_format:0:",":"."}
						</p>
						<p class="price2">
							VND{$cash["promotion_cash"]|number_format:0:",":"."}
						</p>
					</div>

				</div>
				<div class="line2">
					<div class="col1">

					</div>
					<div class="col2">
						<p class="text">
							+ Total:
						</p>
					</div>
					<div class="col3">
						<p class="price3">
							VND{($cash["promotion_cash"]+$cash["cash"])|number_format:0:",":"."}
						</p>
					</div>
				</div>
				<div class="box_child">
					<div class="box_child_content">
						<div id="clientsDb">
							<div id="grid2" style=""></div>
						</div>
					</div>
				</div>
			</li>

		</ul>
		<div id="bottom"></div>
	</div>
</div>