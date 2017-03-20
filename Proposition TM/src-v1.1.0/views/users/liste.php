	<?php if(isset($_SESSION['is_logged_in'])) : ?>
		<a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>shares/add">Share Something</a>
	<?php endif; ?>
	<table id="table_id" class="table display">
		<thead>
			<tr>
				<th>
					#
				</th>
				<th>
					date
				</th>
				<th>
					email
				</th>
				<th>
					name
				</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($viewmodel as $item) : ?>
				<tr>
					<td><?php echo $item['id']; ?></td>
					<td><?php echo $item['register_date']; ?></td>
					<td><?php echo $item['email']; ?></td>
					<td><?php echo $item['name']; ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>