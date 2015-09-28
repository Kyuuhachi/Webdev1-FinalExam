<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Cube</title>
		<link rel="stylesheet" href="css/cube.css">
		<script src="js/cube.js"></script>
	</head>
	<body>
		<table>
			<tr><td></td>
				<td class="nav vert up" onclick="up()"></td>
				<td></td></tr>
			<tr><td class="nav hor left" onclick="left()"></td>
				<td>
					<div class="cube-container">
						<div class="cube">
							<div class="s1"><p><a href="example.org">Link</a></p></div>
							<div class="s2"><p><button>Hi</button></p></div>
							<div class="s3"><p>3</p></div>
							<div class="s4"><p>4</p></div>
							<div class="s5"><p>5</p></div>
							<div class="s6"><p>6</p></div>
						</div>
					</div>
				</td>
				<td class="nav hor right" onclick="right()"></td></tr>
			<tr><td></td>
				<td class="nav vert down" onclick="down()"></td>
				<td></td></tr>
		</table>
	</body>
</html>
