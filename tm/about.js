function popitup2() {
	newwindow2=window.open('','name','height=200,width=150');
	var tmp = newwindow2.document;
	tmp.write('<html><head><title>popup</title>');
	tmp.write('<link rel="stylesheet" href="js.css">');
	tmp.write('</head><body><p>Hello your Transacted amount is.</p>');
	tmp.write('<p><a href="javascript:alert(self.location.href)">view location</a>.</p>');
	tmp.write('<p><a href="javascript:self.close()">close</a> the popup.</p>');
	tmp.write('</body></html>');
	tmp.close();
}