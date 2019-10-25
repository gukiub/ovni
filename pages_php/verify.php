<?php


if (isset($_SESSION['verify'])) {

	if ($_SESSION['verify']==0 && $_SESSION['logged_in']==true) {
		echo "
		<div id='verify_message' class='jumbotron mb-0' style='
	    position: fixed;
	    z-index: 999;
	    height: 120vh;
	    margin-top: -6vh;
	    width: 100vw;
	    background-color: rgba(0,0,0,0.9);
	    '>
	      <div class='container bg-light p-5 w-50' style='border-radius: 25px; margin-top: 20vh;'>
	        <h1 class='center text-center'>Mensagem</h1>
	        <p></p>
	        <div class='form-group col-md-12' style='
	    margin-left: 17%;
	    '>
	        	Não se esqueça de verificar seu e-mail da conta!
	        </div>
	        <button id='close' class='btn' style='margin-left: 0%;width: 35%;height: 55px;'>Okay.</button>
	        <button id='send' class='btn' style='margin-left: 60%;width: 40%;height: 55px;margin-top: -82px;'>Enviar e-mail de verificação.</button>
	      </div>
	    </div>
	    ";
	}
}
?>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script type="text/JavaScript">
      //MASCARAS
     $(document).ready(function () { 
	      $("#close").click(function(){
	      	$("#verify_message").toggle();
	      }); 
	      $("#send").click(function(){
	      	$("#verify_message").toggle();
		document.location="verifyemail.php";
	      });       
	  });
    </script>