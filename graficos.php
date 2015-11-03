<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="UTF-8">
    <title>Website by Orlando Vieira</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="stylesheets/normalize.css" media="screen">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="stylesheets/stylesheet.css" media="screen">
    <link rel="stylesheet" type="text/css" href="stylesheets/github-light.css" media="screen">

			
    <section class="page-header">
      <h1 class="project-name">SMIR</h1>
      <h2 class="project-tagline">Servidor de Monitorização e Intervenção Remota</h2>
      <a href="index.html" class="btn">Início</a>
      <a href="hardware.php" class="btn">Hardware</a>
      <a href="dados.php" class="btn">Dados</a>
      <a href="graficos.php" class="btn">Gráficos</a></li>
      <a href="contatos.php" class="btn">Contatos</a></li>
      
	<form action="graficos.php" method="post">
		<label class="heading">Escolha o(s) gráfico(s) para visualizar:</label><br>
		<input type="checkbox" name="check_list[]" value="Temperatura"><label>Temperatura  </label>
		<input type="checkbox" name="check_list[]" value="Humidade"><label>Humidade  </label>
		<input type="checkbox" name="check_list[]" value="Painel"><label>Painel  </label>
		<input type="checkbox" name="check_list[]" value="Potenciometro"><label>Bateria  </label>
		<input type="submit" name="submit" Value="Submit"/>
				<!----- Including PHP Script ----->
	<?php 
		$x=0;
		include 'checkbox_value.php';
	?>
	</form>
   </section>
</head>

<!-------------------Gráfico do painel-------------------------->
<!--------Recebe dados--------->
<body>
<?php
if($x==1){
class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('bd/lele.db');//inicializar a base de dados
    }
}

$matrix=array(array());
$db = new MyDB();
$result = $db->query('SELECT * FROM DADOS');
$i=0;
   if($checked_count==1){
	while ($row = $result->fetchArray()) {
		$vetor[]=$row['Hora'];
		$vetor2[]=$row[$column1];
	}
   }
   else		
   if($checked_count==2){
   	while ($row = $result->fetchArray()) {
		$vetor[]=$row['Hora'];
		$vetor2[]=$row[$column1];
		$vetor3[]=$row[$column2];
	}	
   }
   else
   if($checked_count==3){
	while ($row = $result->fetchArray()) {
		$vetor[]=$row['Hora'];
		$vetor2[]=$row[$column1];
		$vetor3[]=$row[$column2];
		$vetor4[]=$row[$column3];
	}		
   }
   else
   if($checked_count==4){
	while ($row = $result->fetchArray()) {
		$vetor[]=$row['Hora'];
		$vetor2[]=$row[$column1];
		$vetor3[]=$row[$column2];
		$vetor4[]=$row[$column3];
		$vetor5[]=$row[$column4];
	}
   }
   $linhas=count($vetor);


   $matrix=array(array());

   for($i=0; $i<$linhas;$i++){	
	for($j=0; $j<$a+1;$j++){
		if($j==0){
			$matrix[$i][$j]=$vetor[$i] ;}
		if($j==1){
			$matrix[$i][$j]=$vetor2[$i];}
		if($j==2){
			$matrix[$i][$j]=$vetor3[$i];}
		if($j==3){
			$matrix[$i][$j]=$vetor4[$i];}
		if($j==4){
			$matrix[$i][$j]=$vetor5[$i];}
	}	
    }
}
?>

<!-----------Desenha gráfico------->
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript">
    google.load('visualization', '1.1', {packages: ['line']});
    google.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();

<?php	if($checked_count==1){?>
            data.addColumn('number', 'Hora');
            data.addColumn('number', '<?php echo $column1;?>');
<?php	}
   	else		
   	if($checked_count==2){?>
	    data.addColumn('timeofday', 'Hora');
            data.addColumn('number', '<?php echo $column1;?>');
            data.addColumn('number', '<?php echo $column2;?>');
<?php	}
  	else
   	if($checked_count==3){?>
	       data.addColumn('number', 'Hora');
            data.addColumn('number', '<?php echo $column1;?>');
            data.addColumn('number', '<?php echo $column2;?>');
            data.addColumn('number', '<?php echo $column3;?>');
<?php	}
   	else
   	if($checked_count==4){?>
	    data.addColumn('number', 'Hora');
            data.addColumn('number', '<?php echo $column1;?>');
            data.addColumn('number', '<?php echo $column2;?>');
            data.addColumn('number', '<?php echo $column3;?>');
            data.addColumn('number', '<?php echo $column4;?>');
<?php	}?>
       

        var array=[];
       <?php
                $val=count($matrix);
                $val2=$a+1;
                for($i=0;$i<$val;$i++)
                { ?>
                        array[<?php Print($i);?>]=[];
                        <?php
                        for($j=0;$j<$val2;$j++)
                        {  ?>
                                array[<?php Print($i);?>][<?php Print($j); ?>]=<?php Print($matrix[$i][$j]);?>;
                        <?php
                        }
                }
        ?>

<?php	if($checked_count==1){?>
            data.addRows([ <?php for($j=0;$j<$val;$j++){?>
               		[array[<?php Print($j);?>][0], 
			 array[<?php Print($j);?>][1]
			],
		<?php } ?>
	]);
<?php	}
   	else		
   	if($checked_count==2){?>
	    data.addRows([ <?php for($j=0;$j<$val;$j++){?>
               		[array[<?php Print($j);?>][0], 
			 array[<?php Print($j);?>][1], 
			 array[<?php Print($j);?>][2]
			],
		<?php } ?>
	]);
<?php	}
  	else
   	if($checked_count==3){?>
	      data.addRows([ <?php for($j=0;$j<$val;$j++){?>
               		[array[<?php Print($j);?>][0], 
			 array[<?php Print($j);?>][1], 
			 array[<?php Print($j);?>][2], 
			 array[<?php Print($j);?>][3]
			],
		<?php } ?>
	]);
<?php	}
   	else
   	if($checked_count==4){?>
		data.addRows([ <?php for($j=0;$j<$val;$j++){?>
               		[array[<?php Print($j);?>][0], 
			 array[<?php Print($j);?>][1], 
			 array[<?php Print($j);?>][2], 
			 array[<?php Print($j);?>][3], 
			 array[<?php Print($j);?>][4]
			],
			<?php } ?>
		]);
<?php	}?>
       
      var options = {
        chart: {
          title: 'Gráficos dos valores obtidos pelo Raspberry Pi'
 //         subtitle: 'in millions of dollars (USD)'
        },
	//backgroundColor: '#BDBDBD',
	legend: { position: 'top', alignment: 'start' },
        width: 1023,
        height: 500,
	hAxis:{format: '##,###'},
      };
      var chart = new google.charts.Line(document.getElementById('linechart_material'));
      chart.draw(data, google.charts.Line.convertOptions(options));
    }
</script>

<?php

  if($x==1){	
	//if($checked_count==1)
	//{
//		echo "".$checked_count." Opção selecionada: <br/>";
//	}		
//	if($checked_count>1)
//		echo "".$checked_count." Opções selecionadas: <br/>";
		// Loop to store and display v alues of individual checked checkbox.
//	echo '<br>';
	echo '<div id="linechart_material" align="center"></div>';
  }
  if($x==0){?>
		  
   <div class="container">
	    <div class="alert alert-warning">
	      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	      <strong>Aviso!</strong> Selecione pelo menos uma variável para poder visualizar o gráfico!
	    </div>
	  </div>
<?php }
?>
</body>
</html>
