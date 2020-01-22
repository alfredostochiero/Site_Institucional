<html>
	<head>
		<title>Site Institucional</title>
		<link rel="stylesheet" href="assets/css/template.css" />
	</head>
	<body>
		<div class="topo">
                    <div class="topo1"></div>
                    <div class="banner"></div>
		</div>
		<div class="menu">
                    <ul>
                        <a href="/PHP_B7WEB/Site_Institucional/index.php"><li>HOME</li></a>
                        <a href="/PHP_B7WEB/Site_Institucional/portfolio"><li>PORTFOLIO</li></a>
                        <a href="/PHP_B7WEB/Site_Institucional/sobre"><li>SOBRE</li></a>
                        <a href="/PHP_B7WEB/Site_Institucional/servicos"><li>SERVIÇOS</li></a>
                        <a href="/PHP_B7WEB/Site_Institucional/contato"><li>CONTATO</li></a>
                    </ul>
		</div>
		<div class="container">
                    <?php $this->loadViewInTemplate($viewName, $viewData); ?>
		</div>
		<div class="rodape"></div>
	</body>
</html>