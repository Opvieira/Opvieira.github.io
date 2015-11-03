<!doctype html>
<html><title>SMIR - Index</title>
<link href="css/template.css" rel="stylesheet" type="text/css" />

<div id="header">
<barra>
<img width="1024" height="100" src="images/BANNER.png">

<ul>
  <li><a href="index.php" class="class1">SMIR PI</a></li>
  <li><a href="hardware.php" class="class1">Hardware</a></li>
  <li><a href="dados.php" class="class1">Dados</a></li>
  <li><a href="graficos.php" class="class1">Gráficos</a></li>
  <li><a href="contatos.php" class="class1">Contatos</a></li>
</ul>
</barra>

<clock>
<iframe src="http://free.timeanddate.com/clock/i4telzfn/n320/tlpt5/fn16/fs17/fcfff/tct/pct/tt0/tw0/tm1/ts1" frameborder="0" width="223" height="23" allowTransparency="true"></iframe>
</clock>
</div>

<body>
<h2> Servidor de Monitorização e Intervenção Remoto</h2>

<p class="main">SMIR é um projeto baseado em linux em <a href="raspi.html" class="class2">Raspberry Pi 2</a>(RPI), criado no âmbito da unidade curricular Projeto/Estágio da Licenciatura de Engenharia Electrótecnica e de Computadores</p>

<p class="main"> O projeto SMIR é uma combinação de hardware e software capaz de monitorizar e intervir num sistema de forma automática e remota.
Este projeto surge não só da necessidade de monitorizar sistemas remotamente, como também procura controlar esses mesmos sistemas forne-
cendo ferramentas para uma gestão sustentável dos recursos energéticos à disposição do utilizador, tornando-se assim benéfico para o meio ambiente.</p>

<p class="main">A versatilidade deste projeto permite que seja adaptado a múltiplas situações. Pode ser instalado em grandes industrias e monitorizar cada
máquina individualmente e cada recurso da empresa, como pode ser utilizado por particulares nas suas residências visando a segurança e controlo de consumos.</p>

<p class="main">Para ser possivel cumprir todas as funções, de forma simples e organizada, utiliza-se dois sistemas distintos, Cliente e Servidor.</p>
<p class="main">O Cliente, controlado pelo RPI, é responsável por ler os sensores, armazenar os dados e envia-los por GSM para o Servidor, assim como tomar decisões de acordo com condições pré-definidas, através de atuadores (relés, motores, voz e envio de alertas).</p>
<p class="main">O Servidor é responsável por receber os dados lidos pelo cliente, trata-los, analisá-los e de seguida mostrar-los ao utilizador através deste website (na página <a href="dados.php" class="class2">Dados</a> e <a href="graficos.php" class="class2">Gráficos</a> ).
<p>
</body>
</html>
