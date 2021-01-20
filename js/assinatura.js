$(document).ready(() => {

	//criando o obj para receber o desenho da assinatura
	let signaturePad = new SignaturePad(document.getElementById('signature-pad'),{backgroundColor: 'rgba(255, 255, 255, 0)',penColor: 'rgb(0, 0, 0)'});
	//ao clicar no botão assinar
	$('#btn_assinar').on('click', (e)=>{
		//convertenendo a imagem em URL
		var data = signaturePad.toDataURL();
		//salvando a imagem no bd
		localStorage.setItem('img',data);
		img = localStorage.getItem('img');
		//passando a imagem para o script php que a converterá em arquivo png
		$.ajax({
			url: 'converterpng.php',
			method: 'post',
			data: img,
			success: sucesso =>{
				alert('Documento assinado com sucesso!');
				//signaturePad.clear();
				$('.t').remove();
				$('#assinatura').append("<img src='assinatura.png'/>");
			},
			error: erro => {
				console.log(erro)
			}
		})
	});
	//ao clicar no botão limpar
	$('#btn_limpar').on('click',(e)=>{
		//limpar o quadro de desenho
		signaturePad.clear();

	});

});//end