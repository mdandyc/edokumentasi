<table border="1">
	<tr>
		<td>ID</td>
		<td>Jenis Kategori</td>
		<td colspan="2">opsi</td>
	</tr>

	<tr>
		<td>{{$kategori->id}}</td>
		<td>{{$kategori->jenis_kategori}}</td>
		<td><a href="/kategori/{{$kategori->id}}/edit">Edit</a></td>
		<td><form action="/kategori/{{$kategori->id}}" method="POST">
	<input type="submit" value="DELETE"><br>
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<input type="hidden" name="_method" value="DELETE">
</form></td>
	</tr>

</table>