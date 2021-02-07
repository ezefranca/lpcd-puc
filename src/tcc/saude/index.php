<?php
require_once 'session.php';
?>
<?php
require_once 'header.php';
?>

<div class="content-wrapper">
	<div id="main" class="container-fluid">
		<div id="top" class="row">
			<div class="col-md-12">
      <h1>Olá, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. seja bem vido ao sistema integrado de saúde.</h1>
			</div>
			<div class="col-sm-3">
			</div>
			<div class="col-sm-6">
			</div>
    </div>
</div>


<?php require_once 'footer.php';?>



