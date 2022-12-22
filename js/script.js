window.onload = () => {
	const inputAnoAtual = document.querySelector('#campo-ano');
	const rodapeAno = document.querySelector('#ano-rodape');
	const anoAtual = new Date().getFullYear();

	inputAnoAtual.setAttribute('max', anoAtual);
	rodapeAno.textContent = `(${anoAtual})`;
};