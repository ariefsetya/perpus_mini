<div>
	<form method="POST" action="simpanuser.php">
		<table>
			<tr>
			<td>
				<label>Nama Pengguna</label>
			</td>
			<td>
				<input required type="text" name="username"/>
			</td>
			</tr>
			<tr>
			<td>
				<label>Kata Sandi</label>
			</td>
			<td>
				<input required type="text" name="password"/>
			</td>
			</tr>
			<tr>
			<td>
				<label>Status</label>
			</td>
			<td>
				<select type="text" name="status">
					<option value="1">Admin</a>
					<option value="2">Operator</a>
				</select>
			</td>
			</tr>
			<tr>
			<td>
			</td>
			<td>
				<button type="submit" name="simpan">Simpan</button>
			</td>
			</tr>
		
	</form>
</div>