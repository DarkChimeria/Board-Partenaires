<?php
/* Smarty version 3.1.29, created on 2017-03-11 10:50:50
  from "C:\wamp64\www\tm\tpl\home\home.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58c3d68a16cef7_39341066',
  'file_dependency' => 
  array (
    '3af3bf3d434d4c31b042322f29684f59b21c1231' => 
    array (
      0 => 'C:\\wamp64\\www\\tm\\tpl\\home\\home.tpl',
      1 => 1489229445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c3d68a16cef7_39341066 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\wamp64\\www\\tm\\includes\\libs\\Smarty\\plugins\\modifier.date_format.php';
?>
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="orange">
									<i class="material-icons">content_copy</i>
								</div>
								<div class="card-content">
									<p class="category">Used Space</p>
									<h3 class="title">49/50<small>GB</small></h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons text-danger">warning</i> <a href="#pablo">Get More Space...</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="green">
									<i class="material-icons">store</i>
								</div>
								<div class="card-content">
									<p class="category">Revenue</p>
									<h3 class="title">$34,245</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">date_range</i> Last 24 Hours
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="red">
									<i class="material-icons">info_outline</i>
								</div>
								<div class="card-content">
									<p class="category">Fixed Issues</p>
									<h3 class="title">75</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">local_offer</i> Tracked from Github
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="blue">
									<i class="fa fa-twitter"></i>
								</div>
								<div class="card-content">
									<p class="category">Followers</p>
									<h3 class="title">+245</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">update</i> Just Updated
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-4">
							<div class="card">
								<div class="card-header card-chart" data-background-color="green">
									<div class="ct-chart" id="dailySalesChart"></div>
								</div>
								<div class="card-content">
									<h4 class="title">Daily Sales</h4>
									<p class="category"><span class="text-success"><i class="fa fa-long-arrow-up"></i> 55%  </span> increase in today sales.</p>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">access_time</i> updated 4 minutes ago
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="card">
								<div class="card-header card-chart" data-background-color="orange">
									<div class="ct-chart" id="emailsSubscriptionChart"></div>
								</div>
								<div class="card-content">
									<h4 class="title">Email Subscriptions</h4>
									<p class="category">Last Campaign Performance</p>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">access_time</i> campaign sent 2 days ago
									</div>
								</div>

							</div>
						</div>

						<div class="col-md-4">
							<div class="card">
								<div class="card-header card-chart" data-background-color="red">
									<div class="ct-chart" id="completedTasksChart"></div>
								</div>
								<div class="card-content">
									<h4 class="title">Completed Tasks</h4>
									<p class="category">Last Campaign Performance</p>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">access_time</i> campaign sent 2 days ago
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="card card-nav-tabs">
								<div class="card-header" data-background-color="purple">
									<div class="nav-tabs-navigation">
										<div class="nav-tabs-wrapper">
											<span class="nav-tabs-title">Tasks:</span>
											<ul class="nav nav-tabs" data-tabs="tabs">
												<li class="active">
													<a href="#profile" data-toggle="tab">
														<i class="material-icons">bug_report</i>
														Bugs
														<div class="ripple-container"></div></a>
													</li>
													<li class="">
														<a href="#messages" data-toggle="tab">
															<i class="material-icons">code</i>
															Website
															<div class="ripple-container"></div></a>
														</li>
														<li class="">
															<a href="#settings" data-toggle="tab">
																<i class="material-icons">cloud</i>
																Server
																<div class="ripple-container"></div></a>
															</li>
														</ul>
													</div>
												</div>
											</div>

											<div class="card-content">
												<div class="tab-content">
													<div class="tab-pane active" id="profile">
														<table class="table">
															<tbody>
																<tr>
																	<td>
																		<div class="checkbox">
																			<label>
																				<input type="checkbox" name="optionsCheckboxes" checked>
																			</label>
																		</div>
																	</td>
																	<td>Sign contract for "What are conference organizers afraid of?"</td>
																	<td class="td-actions text-right">
																		<button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
																			<i class="material-icons">edit</i>
																		</button>
																		<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
																			<i class="material-icons">close</i>
																		</button>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="checkbox">
																			<label>
																				<input type="checkbox" name="optionsCheckboxes">
																			</label>
																		</div>
																	</td>
																	<td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
																	<td class="td-actions text-right">
																		<button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
																			<i class="material-icons">edit</i>
																		</button>
																		<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
																			<i class="material-icons">close</i>
																		</button>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="checkbox">
																			<label>
																				<input type="checkbox" name="optionsCheckboxes">
																			</label>
																		</div>
																	</td>
																	<td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
																	</td>
																	<td class="td-actions text-right">
																		<button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
																			<i class="material-icons">edit</i>
																		</button>
																		<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
																			<i class="material-icons">close</i>
																		</button>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="checkbox">
																			<label>
																				<input type="checkbox" name="optionsCheckboxes" checked>
																			</label>
																		</div>
																	</td>
																	<td>Create 4 Invisible User Experiences you Never Knew About</td>
																	<td class="td-actions text-right">
																		<button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
																			<i class="material-icons">edit</i>
																		</button>
																		<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
																			<i class="material-icons">close</i>
																		</button>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
													<div class="tab-pane" id="messages">
														<table class="table">
															<tbody>
																<tr>
																	<td>
																		<div class="checkbox">
																			<label>
																				<input type="checkbox" name="optionsCheckboxes" checked>
																			</label>
																		</div>
																	</td>
																	<td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
																	</td>
																	<td class="td-actions text-right">
																		<button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
																			<i class="material-icons">edit</i>
																		</button>
																		<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
																			<i class="material-icons">close</i>
																		</button>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="checkbox">
																			<label>
																				<input type="checkbox" name="optionsCheckboxes">
																			</label>
																		</div>
																	</td>
																	<td>Sign contract for "What are conference organizers afraid of?"</td>
																	<td class="td-actions text-right">
																		<button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
																			<i class="material-icons">edit</i>
																		</button>
																		<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
																			<i class="material-icons">close</i>
																		</button>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
													<div class="tab-pane" id="settings">
														<table class="table">
															<tbody>
																<tr>
																	<td>
																		<div class="checkbox">
																			<label>
																				<input type="checkbox" name="optionsCheckboxes">
																			</label>
																		</div>
																	</td>
																	<td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
																	<td class="td-actions text-right">
																		<button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
																			<i class="material-icons">edit</i>
																		</button>
																		<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
																			<i class="material-icons">close</i>
																		</button>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="checkbox">
																			<label>
																				<input type="checkbox" name="optionsCheckboxes" checked>
																			</label>
																		</div>
																	</td>
																	<td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
																	</td>
																	<td class="td-actions text-right">
																		<button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
																			<i class="material-icons">edit</i>
																		</button>
																		<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
																			<i class="material-icons">close</i>
																		</button>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="checkbox">
																			<label>
																				<input type="checkbox" name="optionsCheckboxes">
																			</label>
																		</div>
																	</td>
																	<td>Sign contract for "What are conference organizers afraid of?"</td>
																	<td class="td-actions text-right">
																		<button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
																			<i class="material-icons">edit</i>
																		</button>
																		<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
																			<i class="material-icons">close</i>
																		</button>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-md-12">
										<div class="card">
											<div class="card-header" data-background-color="orange">
												<h4 class="title">Employees Stats</h4>
												<p class="category">New employees on 15th September, 2016</p>
											</div>
											<div class="card-content table-responsive">
												<table class="table table-hover">
													<thead class="text-warning">
														<th>ID</th>
														<th>Name</th>
														<th>Salary</th>
														<th>Country</th>
													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td>Dakota Rice</td>
															<td>$36,738</td>
															<td>Niger</td>
														</tr>
														<tr>
															<td>2</td>
															<td>Minerva Hooper</td>
															<td>$23,789</td>
															<td>Curaçao</td>
														</tr>
														<tr>
															<td>3</td>
															<td>Sage Rodriguez</td>
															<td>$56,142</td>
															<td>Netherlands</td>
														</tr>
														<tr>
															<td>4</td>
															<td>Philip Chaney</td>
															<td>$38,735</td>
															<td>Korea, South</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>

									<div class=" col-md-12">
										<div class="card">
											<div class="card-header" data-background-color="orange">
												<h4 class="title"><?php echo $_smarty_tpl->tpl_vars['nameArray']->value;?>
</h4>
												<p class="category"><?php echo $_smarty_tpl->tpl_vars['nameArrayDate']->value;?>
 <?php echo smarty_modifier_date_format(time(),"%A %d %B %Y");?>
</p>
											</div>
											<div class="card-content table-responsive">
												<table id="example1" class="table table-hover">
													<thead class="text-warning">
														<tr>
															<th>ID</th>
															<th>Nom</th>
															<th>Prénom</th>
															<th>Date Inscription</th>
															<th>Actions</th>
														</tr>
													</thead>
													<tfoot class="text-warning">
														<tr>
															<th>ID</th>
															<th>Nom</th>
															<th>Prénom</th>
															<th>Date Inscription</th>
															<th>Actions</th>
														</tr>
													</tfoot>
													<tbody>

														<?php
$_from = $_smarty_tpl->tpl_vars['testtable']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_test_0_saved_item = isset($_smarty_tpl->tpl_vars['test']) ? $_smarty_tpl->tpl_vars['test'] : false;
$_smarty_tpl->tpl_vars['test'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['test']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['test']->value) {
$_smarty_tpl->tpl_vars['test']->_loop = true;
$__foreach_test_0_saved_local_item = $_smarty_tpl->tpl_vars['test'];
?>
														<tr id="delete_<?php echo $_smarty_tpl->tpl_vars['test']->value['pid'];?>
">
															<td><?php echo $_smarty_tpl->tpl_vars['test']->value['pid'];?>
</td>
															<td>
															<span id="name_<?php echo $_smarty_tpl->tpl_vars['test']->value['pid'];?>
"><?php echo $_smarty_tpl->tpl_vars['test']->value['pname'];?>
</span>
															<input class="tabledit-input form-control input-sm" id="inputname_<?php echo $_smarty_tpl->tpl_vars['test']->value['pid'];?>
" name="nickname" value="<?php echo $_smarty_tpl->tpl_vars['test']->value['pname'];?>
" style="display: none;" disabled="" type="text">
															</td>
															<td><?php echo $_smarty_tpl->tpl_vars['test']->value['pfirstname'];?>
</td>
															<td><?php echo $_smarty_tpl->tpl_vars['test']->value['pregisterdate'];?>
</td>
															<td>
															<a class="btn btn-sm btn-warning"  data-id="<?php echo $_smarty_tpl->tpl_vars['test']->value['pid'];?>
" onClick="Edit(<?php echo $_smarty_tpl->tpl_vars['test']->value['pid'];?>
)"><i class="glyphicon glyphicon-pencil"></i></a>
															<a class="btn btn-sm btn-danger"  data-id="<?php echo $_smarty_tpl->tpl_vars['test']->value['pid'];?>
" onClick="Delete(<?php echo $_smarty_tpl->tpl_vars['test']->value['pid'];?>
)"><i class="glyphicon glyphicon-trash"></i></a>
															</td>
														</tr>
														<?php
$_smarty_tpl->tpl_vars['test'] = $__foreach_test_0_saved_local_item;
}
if ($__foreach_test_0_saved_item) {
$_smarty_tpl->tpl_vars['test'] = $__foreach_test_0_saved_item;
}
?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><?php }
}
