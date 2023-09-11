<?php 
	include("conexao.php");
	
	$sql = "SELECT * FROM proficiencia WHERE company ='FAMINAS-BH'";
	$result = $conexao->query($sql);
	
?> 

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Proficiências FAMINAS BH</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="shortcut icon" href="assets/images/icon.png" type="image/x-icon">
</head>
<body>
    <nav>
        <a href="https://faminas.edu.br"><img src="assets/images/logo-faminas.png" alt="faminas"></a>
    </nav>

    <section>
        <header>
            <h1 class="title">Proficiências da equipe FAMINAS-BH</h1>
        </header>
        <article>
            <table class="dashboard-table" border="0">
                <tr class="table-header">
                    <th>Profissional</th>
                    <th>Pilar</th>
                    <th>Proficiência 1</th>
                    <th>Proficiência 2</th>
                    <th>Proficiência 3</th>
                </tr>
				<?php
					while($data = mysqli_fetch_assoc($result))
					{
					echo '<tr>
						<td class="professional-section">
							<div class="circle">
								<img src="assets/images/';echo $data['colaborador'];echo'.png">';
						echo '</div>
							<div class="name">';
							echo $data['colaborador'];   
						echo '</div>
						</td>
							<td class="pilar">
								<img src="assets/images/'; echo $data['pilar'];echo'.png" alt="">
							</td>
							<td>'; echo $data['proficienciaa'];echo '</td>
							<td>'; echo $data['proficienciab'];echo '</td>
							<td>'; echo $data['proficienciac'];echo '</td>
						</tr>';
					}
				?>        
            </table>
        </article>
    </section>
</body>
</html>