<!DOCTYPE html>
<body>
<h2> Servidor de Monitorização e Intervenção Remoto</h2>

<?php
class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('bd/test.db');//inicializar a base de dados
    }
}
$name=0;
$db = new MyDB();
$result = $db->query('SELECT * FROM DADOS');

while ($row = $result->fetchArray()) {
		echo $row['Hora'];
	}?> <br>
</body>
</html>
