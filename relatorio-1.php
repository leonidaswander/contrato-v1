<?php 

$ipstackKey = '49a97bf31e4e22663e711c1f012e943e'; //ipstack.com
$contractNumber  	= '1111111';
$titleWait 	 	 	= 'Wait'; //show where the customer's data appears if blank 
$contractNotSigned = '2';

require_once('php/_conect.php');
require_once('php/get.php');

//search contracts
$search = mysqli_fetch_assoc(mysqli_query($mysqli, "SELECT contracts_id FROM contracts WHERE contracts_number = '$contractNumber'"));
if(!empty($search['contracts_id']))
{
	$contractNotSigned = '1';
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Contract Issuance: <?=$contractNumber;?></title>
<meta name="author" content="hakk.com.br">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" type="text/css">

<!-- Stylesheet
======================= -->
<link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css"/>
 <link rel="stylesheet" type="text/css" href="assets/stylesheet.css"/>
</head>
<body>

<div class="container-fluid invoice-container">
	<header>
		<div class="row align-items-center">
			<div class="col-sm-4 text-center text-sm-left mb-3 mb-sm-0">
				<img id="logo" src="logo.png" title="" alt="" width="200px"/>
			</div>
			<div class="col-sm-8 text-center text-sm-right">
				<h4 class="text-7 mb-0">Contract Title</h4>
				<strong>Nº: </strong> <?=$contractNumber;?>
			</div>
		</div>
		<hr>
	</header>
  
	<?php
		if($contractNotSigned == 1)
		{
			echo 
			'
				<main>
					<div class="row">
						<div class="col-sm-12 text-sm-center "> <strong> </strong>	
							<br>
								<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
								<lottie-player src="https://assets10.lottiefiles.com/private_files/lf30_glnkkfua.json"  background="transparent"  speed="1"  style="width: 200px; height: 200px;margin: 0 auto"  loop  autoplay></lottie-player>
								<h2>This Agreement Is Already Signed</h2><br>
								Request a copy to the company<br>
						</div>
					</div>
				</main>
			';
		}
		else
		{
	?>
		  <main>
		   
			  <div class="row">
				<div class="col-sm-6 text-sm-right order-sm-1"> <strong> </strong>
					<address>
							<br />
							Document: <span id="FormCPF">  <?=$dataContract['document'];?></span><br />
							Phone: <span id="FormCELULAR"><?=$dataContract['phone'];?></span><br />
							Email: <span id="FormEmail"><?=$dataContract['email'];?></span><br />
					</address>
				</div>
				<div class="col-sm-6 order-sm-0"> <strong>Cliente:</strong>
				  <address>
						<span id="FormNome"><?=$dataContract['name'];?></span><br>
						<span id="FormENDERECO"><?=$dataContract['address'];?></span><br />
						<span id="FormCIDADEUF"><?=$dataContract['uf'];?></span><br />
				  </address>
				</div>
			  </div>
			
			  <div class="card">
				<div class="card-body p-0">
				  <div class="table-responsive">
					  <table class="table mb-0">
						  <thead class="card-header">
							<tr>
								<td  style="width: 45%" class="  border-0"><strong>Service</strong></td>
								<td  style="width: 10%" class="text-center border-0"><strong>Frequency</strong></td>
								<td  style="width: 20%" class="text-center border-0" style="width:250px"><strong> Price </strong></td>
							</tr>
						  </thead>
						  <tbody>
								<tr>
									<td  class=" border-0">
										Service Basic 1<br>
 										<small><i class="fa fa-check"></i> Element 1</small><br>
										<small><i class="fa fa-check"></i> Element 2</small><br>
										<small><i class="fa fa-check"></i> Element 3</small><br>
									</td>
									<td class=" text-center border-0">Monthly</td> 
									<td class=" text-center border-0" style="width:250px">$ 99,00</td>
								</tr> 
									<tr>
										<td  class=" border-0">
											Service Basic 2<br>
											<small><i class="fa fa-check"></i> Element 1</small><br>
										</td>
										<td class=" text-center border-0">Monthly</td> 
										<td class=" text-center border-0" style="width:250px">$ 39,00</td>
									</tr> 
						  </tbody>
							<tfoot class="card-footer">
								<tr>
									<td colspan="2" class="text-right">Total Final:</td>
									<td colspan="1" class="text-right">$ 138,00 </td>
								 </tr>  
							</tfoot>
					  </table>
				  </div>
				</div>
			  </div>
		  </main>


					   
		   <div class="row">
				<div class="col-sm-12 text-center ">
					<div class=" ">
						<br>
					  <strong>FORM OF PAYMENT</strong><br>
						<div class="row">
							<div class="col-sm-8 offset-sm-3">
							  <div class="blocoPagamento ">
								  <div class="blocoQuadrado mlBloco"></div> <div class="blocoQuadradoTexto">Billet</div>
								</div>
							  <div class="blocoPagamento">
								<div class="blocoQuadrado mlBloco"></div> <div class="blocoQuadradoTexto">Credit Card<br><small>with fees</small></div>
							  </div>
							  
							  <div class="blocoPagamento ">
								<div class="blocoQuadrado mlBloco"><i class="fa fa-times"></i></div> <div class="blocoQuadradoTexto">Transfer Bank</div>
							  </div>
							</div>
							
							<div class="col-sm-12 ">
								<br>
								<strong>DUE OF INSTALLMENTS: EVERY DAY 20</strong><br>
							</div>
						</div>
					</div>
				</div>
			  </div>

			  <div class="row">
				<div class="col-sm-12 text-left ">
					<div class="observacoes ">
						<div class="text-center"><strong>COMMENTS</strong> </div>
						<hr>
							<b><i class="fa fa-arrow-right"></i> Included in this contract</b><br><br>
							<b>Website Creation and Editing</b><br>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry
							<br><br> 
							<b>SEO</b><br>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry<br>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry<br> 
							<br> 
							The full contract for this service can be accessed at:<br>
							<a href="https://linkToContractPDF" target="_blank">https://linkToContractPDF</a>
							<br>
							<small>		
								<hr>
								The authorizer declares that, at the time of signing, he had access to the general and specific conditions of contracting and was informed about the rules for services, cancellation, deadlines, fines and other clauses.
							</small>
					</div>
				</div>
			  </div>
			
			 
			<div class="row">
				<div class="col-sm-12 text-center ">
					<div class="">
					  <br>
					 
						   
						<div class="row">
						  <div class="col-sm-6 offset-sm-3 text-center ">
							 
						  </div>
						</div>
						<?php
						  //setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
						  setlocale(LC_ALL, 'pt_BR.utf-8');
						  date_default_timezone_set('America/Sao_Paulo');
						  echo strftime('%A, %d de %B de %Y', strtotime('today')); echo ' '.date("H:i");
						?>
						Maceió/AL
					</div>
				</div>
			  </div>
		 
			<footer class="text-center  ">
				<p class="text-1"> 
					Business Name - Number<br> 
					City, Country | contato@email.com.br | 99 999999999
				</p> 
				<hr>
				<b>Your data will be stored for security: </b><br>
				<b>IP:</b> <span id="FormIP"><?=$dataContract['ip'];?></span> | 
				<b>Browser:</b> <span id="FormIP"><?=$dataContract['browser'];?></span>  <br>
				<?php
					echo 
					'
						<b>Estate/City: </b>'.$dataContract['stateCity'].' - 
						<b>Lat/Long: </b>'.$dataContract['latitude'].'
					';
				?>
				<br>
				<b>User Agent:</b> <span id="FormIP"><?=$dataContract['uagent'];?></span>
			</footer>
		 
			<div class="btn-group btn-group-sm d-print-none botaoImprimir" style="display: none" >
				<a href="javascript:window.print()" class="btn btn-primary border text-white shadow-none"><i class="fa fa-print"></i> Print Contract</a>
			</div>
	<?php
		}
	?>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
</div>
</body>

<style>
	.containerButton{
		position: fixed;
		z-index: 999;
		bottom: 0px;
		width: 100%;
		background: #fff;
		padding: 20px;
		box-shadow: 2px -1px 26px -6px rgba(148,148,148,0.75);
		-webkit-box-shadow: 2px -1px 26px -6px rgba(148,148,148,0.75);
		-moz-box-shadow: 2px -1px 26px -6px rgba(148,148,148,0.75);
	}
		.containerButton button { padding: 15px 40px; border-radius: 10px; font-size: 20px}
		
		input{width: 100% !important; border-radius: 7px !important; height: 50px !important}
	</style>
	<?php
		if($contractNotSigned == 2)
		{
	?>
		 
			<div class="text-center containerButton  d-print-none" style="">
				<button  class="btn-primary btn-md" data-toggle="modal" data-target="#modalContratoAssina">Sign Contract</button>
			</div>
		
			<div class="modal fade d-print-none " id="modalContratoAssina">
				<div class="modal-dialog modal-dialog-centered  modal-lg">
					<div class="modal-content ">
						<div class="modal-header  text-center">
							<h5 class="modal-title" id="exampleModalCenterTitle">Signing the Contract</h5>
							<button type="button" class="close" data-dismiss="modal">
								<i class="anticon anticon-close"></i>
							</button>
						</div>
						<div class="modal-body">
							<form method="post"   id="modalClasseFormPost" action="php/assina.php">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group ">
											<label class="font-weight-semibold" for="modalContratoAssinaNome">Name:</label>
											<input type="text" class="form-control" name="modalContratoAssinaNome" value="" id="modalContratoAssinaNome" >
										</div>
									</div>
										<div class="col-sm-6">
											<div class="form-group ">
												<label class="font-weight-semibold" for="modalContratoAssinaCPF">Document:</label>
												<input type="text" class="form-control" name="modalContratoAssinaCPF" value=""  id="modalContratoAssinaCPF" >
											</div>
										</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group ">
											<label class="font-weight-semibold" for="modalContratoAssinaEmail">Email:</label>
											<input type="text" class="form-control" name="modalContratoAssinaEmail"  value="" id="modalContratoAssinaEmail" >
										</div>
									</div>
										<div class="col-sm-6">
											<div class="form-group ">
												<label class="font-weight-semibold" for="modalContratoAssinaCelular">Phone:</label>
												<input type="text" class="form-control" name="modalContratoAssinaCelular" value=""  id="modalContratoAssinaCelular" >
											</div>
										</div>
								</div> 

									<div class="form-group ">
										<label class="font-weight-semibold" for="modalContratoAssinaEndereco">Address Complet:</label>
										<textarea  class="form-control" name="modalContratoAssinaEndereco" value=""  id="modalContratoAssinaEndereco" ></textarea>
									</div>
									
									<div class="row">
										<div class="col-sm-6">
												<div class="form-group ">
													<label class="font-weight-semibold" for="modalContratoAssinaCidade">City:</label>
													<input type="text" class="form-control" name="modalContratoAssinaCidade" value=""  id="modalContratoAssinaCidade" >
												</div>
										</div>
											<div class="col-sm-6">
												<div class="form-group ">
													<label class="font-weight-semibold" for="modalContratoAssinaUF">Estate:</label>
													<input type="text" class="form-control" name="modalContratoAssinaUF" value=""  id="modalContratoAssinaUF" >
												</div>
											</div>
 
											<input type="hidden" name="modalContratoAssinaIPEstado" value="<?=$DataEstado;?>"  id="modalContratoAssinaIPEstado" >
											<input type="hidden" name="modalContratoAssinaIPCidade" value="<?=$DataCidade;?>"  id="modalContratoAssinaIPCidade" >
											<input type="hidden" name="modalContratoAssinaIPLarLong" value="<?=$DataLat;?>"  id="modalContratoAssinaIPLarLong" >
									</div>

							</form>
								<div class="form-group row">
									<div class="col-sm-12" id="contratoAssinaRetorno"></div>
									<div class="col-sm-12 text-center" >
										<div class="btn-group btn-group-sm d-print-none botaoImprimir" style="display: none" >
											<a href="javascript:window.print()" class="btn btn-primary border text-white shadow-none"><i class="fa fa-print"></i> Print Contract</a>
										</div>
									</div>
									<div class="col-sm-6">
										<input type="hidden" value="inicia" name="acao">
 										<button type="button" class="btn  btn-primary m-r-5" id="contratoAssina">
											<i class="fa fa-arrow-right"></i>
											<span>Continue</span>
										</button>
									</div>	
										<div class="col-sm-6  text-right">
											<button type="button" class="btn btn-danger m-r-5 " data-dismiss="modal" id="contratoFechaJanela">
												<i class="fa fa-times"></i>
												<span>Close</span>
											</button>
										</div>
								</div>
						</div> 
					</div>
				</div>
			</div>
	<?php
		}
	?>


		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

        <script>
			jQuery('.botaoImprimir').on('click',function()
			{
				$("#modalContratoAssina").modal("hide");
			});
			jQuery('#contratoAssina').on('click',function()
			{
				var modalContratoAssinaNome	 		= jQuery("#modalContratoAssinaNome").val();
				var modalContratoAssinaCPF 			= jQuery("#modalContratoAssinaCPF").val(); 
				var modalContratoAssinaEmail 		= jQuery("#modalContratoAssinaEmail").val(); 
				var modalContratoAssinaCelular 		= jQuery("#modalContratoAssinaCelular").val(); 
				var modalContratoAssinaEndereco 	= jQuery("#modalContratoAssinaEndereco").val(); 
				var modalContratoAssinaCidade 		= jQuery("#modalContratoAssinaCidade").val(); 
				var modalContratoAssinaUF 			= jQuery("#modalContratoAssinaUF").val(); 
					var modalContratoAssinaIPEstado 			= jQuery("#modalContratoAssinaIPEstado").val(); 
					var modalContratoAssinaIPCidade 			= jQuery("#modalContratoAssinaIPCidade").val(); 
					var modalContratoAssinaIPLarLong 			= jQuery("#modalContratoAssinaIPLarLong").val(); 
				 
				if (modalContratoAssinaNome == null || modalContratoAssinaNome == ''){  $("#contratoAssinaRetorno").html("<div class='alert alert-danger'>Please enter your Name</div>"); $('#modalContratoAssinaNome').focus(); return 1;}
				if (modalContratoAssinaCPF == null || modalContratoAssinaCPF == ''){  $("#contratoAssinaRetorno").html("<div class='alert alert-danger'>Please enter your  Document</div>"); $('#modalContratoAssinaCPF').focus(); return 1;}
				if (modalContratoAssinaEmail == null || modalContratoAssinaEmail == ''){  $("#contratoAssinaRetorno").html("<div class='alert alert-danger'>Please enter your  E-mail</div>"); $('#modalContratoAssinaEmail').focus(); return 1;}
				if (modalContratoAssinaCelular == null || modalContratoAssinaCelular == ''){  $("#contratoAssinaRetorno").html("<div class='alert alert-danger'>Please enter your  Phone</div>"); $('#modalContratoAssinaCelular').focus(); return 1;}
				if (modalContratoAssinaEndereco == null || modalContratoAssinaEndereco == ''){  $("#contratoAssinaRetorno").html("<div class='alert alert-danger'>Please enter your  Address</div>"); $('#modalContratoAssinaEndereco').focus(); return 1;}
				if (modalContratoAssinaCidade == null || modalContratoAssinaCidade == ''){  $("#contratoAssinaRetorno").html("<div class='alert alert-danger'>Please enter your City</div>"); $('#modalContratoAssinaCidade').focus(); return 1;}
				if (modalContratoAssinaUF == null || modalContratoAssinaUF == ''){  $("#contratoAssinaRetorno").html("<div class='alert alert-danger'>Please enter your Estate</div>"); $('#modalContratoAssinaUF').focus(); return 1;}
				 
											
				$("#FormNome").html( modalContratoAssinaNome );
				$("#FormCELULAR").html( modalContratoAssinaCelular );
				$("#FormEmail").html( modalContratoAssinaEmail );
				$("#FormENDERECO").html( modalContratoAssinaEndereco );
				$("#FormCIDADEUF").html( modalContratoAssinaCidade + "/"+ modalContratoAssinaUF);
				$("#FormCPF").html( modalContratoAssinaCPF );
				
				jQuery.post("assina.php",
				{
					modalContratoAssinaNome: modalContratoAssinaNome,
					modalContratoAssinaCPF: modalContratoAssinaCPF,
					modalContratoAssinaEmail: modalContratoAssinaEmail,
					modalContratoAssinaCelular: modalContratoAssinaCelular,
					modalContratoAssinaEndereco: modalContratoAssinaEndereco,
					modalContratoAssinaCidade: modalContratoAssinaCidade,
					modalContratoAssinaUF: modalContratoAssinaUF,
 					ip: "<?=$user_ip;?>",
					navegador: "<?=$browserName;?>",
					uagent: "<?=$userAgent;?>",
					contrato: "<?=$contractNumber;?>",
						modalContratoAssinaIPEstado: modalContratoAssinaIPEstado,
						modalContratoAssinaIPCidade: modalContratoAssinaIPCidade,
						modalContratoAssinaIPLarLong: modalContratoAssinaIPLarLong
				}, function(data)
				{
					if(data==1)
					{
						$(".botaoImprimir").fadeIn();
						$(".containerButton").fadeOut();
						
						$("#contratoAssinaRetorno").html('<div class="alert alert-success">Successfully signed contract, you can close this window and print this page</div>');
						jQuery('#contratoAssina').fadeOut(0);
						jQuery("#modalClasseFormPost").fadeOut(0);
						
						
					}
					else
					{
						$("#contratoAssinaRetorno").html('<div class="alert alert-danger">Oops, there was something wrong when signing, try again, if this failure continues, contact:financial@email.com.br</div>');
					}
 				});
			});
 
        </script>

<style>
.invoice-container
{
	margin-bottom: 200px
}
</style>
 </html>

 