<h1>Home-model</h1>
<table border=1>
	<tr>
		<th>Etunimi</th>
		<th>Sukunimi</th>
	</tr>
	<?php
		foreach($Sisalto as $Henkilo){
			echo '
				<tr>
					<td>'.$Henkilo["Etunimi"].'</td>
					<td>'.$Henkilo["Sukunimi"].'</td>
				</tr>
			';
		}
	?>
</table>