function getMods(text) {
	text = text.replaceAll('.', ' ');
	text = text.replaceAll(',', ' ');
	text = text.replaceAll(':', ' ');
	text = text.replaceAll(';', ' ');
	text = text.replaceAll('!', ' ');
	text = text.replaceAll('?', ' ');
	return text.match(/(\bmod_\S+\b)/ig);
}

function searchMods() {
	document.getElementById('result').innerHTML = '';
	let ft = getMods(document.getElementById('fulltext').value + ' ');
	let kw = getMods(document.getElementById('keywords').value + ' ');
	kw = kw.filter((item, index, kw) => kw.indexOf(item) === index);
	let result = '';
	if(kw) for(let a=0; a<kw.length; a++) {
		if(ft) result+= kw[a] + ', ' + (ft.includes(kw[a]) ? 'FOUND' : 'NOT FOUND') + '\r\n';
		else result += kw[a] + ', NOT FOUND' + '\r\n'
	}
	document.getElementById('result').innerHTML = result;
}