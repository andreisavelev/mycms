<?php 
	$title = 'Администрирование сайта';
	$helppage = 'Здесь осуществляется администрирование сайта. Выбрав соответствующий раздел, можно добавить новость, внести изменения в каталог продукции, осуществить модерацию гостевой книги и многое другое.';
	include 'utils/topadmin.php';
?>
<table>
	<tr>
		<td>
			<p><a href="poll/index.php">Голосование</a></p>
		</td>
	</tr>
	<tr>
		<td>
			<p><a href="guestbook/index.php">Гостевая книга</a></p>
		</td>
	</tr>
	<tr>
		<td>
			<p><a href="articles/index.php">Статьи</a></p>
		</td>
	</tr>
	<tr>
		<td>
			<p><a href="catalog/admin/main.php">Каталог продукции</a></p>
		</td>
	</tr>
	<tr>
		<td>
			<p><a href="poll/index.php">Голосование</a></p>
		</td>
	</tr>
	<tr>
		<td>
			<p><a href="contacts/index.php">Голосование</a></p>
		</td>
	</tr>
	<tr>
		<td>
			<p><a href="mail/index.php">Отправка почты</a></p>
		</td>
	</tr>
	<tr>
		<td>
			<p><a href="counter/index.php">Сбор и анализ статистики</a></p>
		</td>
	</tr>
	<tr>
		<td>
			<p><a href="photos/index.php">Фотогалерея</a></p>
		</td>
	</tr>
</table>
<?php 
	include 'utils/bottomadmin.php';
?>