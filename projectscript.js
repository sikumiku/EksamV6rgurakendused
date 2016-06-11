/* siin on numbri 2raarvamism2ng

var x = Math.floor(Math.random() * 50) + 1;
var turns = 5;
var hint = 'Arva number, 1-50!';

while (turns > 0) {
  var guess = prompt(hint +
      ' Sul on ' + turns + ' arvamist alles.');
  if (!guess) break;
  guess = Number(guess);
  if (guess == x) {
    document.write('<h1>V6it!!!</h1>' +
      '<p><img src="http://enos.itcollege.ee/~ptiganik/i244_projekt/img/img/IMAG1033.jpg">');
    turns = 0;
  } else {
    hint = 'Vale.';
    if (guess < x) hint += ' Liiga v2ike, arva uuesti!';
    if (guess > x) hint += ' Liiga suur, arva uuesti!';
    turns = turns - 1;
  }
}
alert('Number oli ' + x + '.');
*/