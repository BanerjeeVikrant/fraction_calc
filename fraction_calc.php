<!DOCTYPE html>

<html lang="en">


<!----------------------------------------------------------------------------------------------------------------------------------------																													
                                                                                                           ,---,          
                 ,----..                     ,----..                                                    ,`--.' |          
  ,----..       /   /   \     ,----..       /   /   \                                                   |   :  :          
 /   /   \     /   .     :   /   /   \     /   .     :                                                  '   '  ;          
|   :     :   .   /   ;.  \ |   :     :   .   /   ;.  \                ,---.     __  ,-.          ,--,  |   |  |          
.   |  ;. /  .   ;   /  ` ; .   |  ;. /  .   ;   /  ` ;   ,----._,.   '   ,'\  ,' ,'/ /|        ,'_ /|  '   :  ;          
.   ; /--`   ;   |  ; \ ; | .   ; /--`   ;   |  ; \ ; |  /   /  ' /  /   /   | '  | |' |   .--. |  | :  |   |  '          
;   | ;  __  |   :  | ; | ' ;   | ;  __  |   :  | ; | ' |   :     | .   ; ,. : |  |   ,' ,'_ /| :  . |  '   :  |          
|   : |.' .' .   |  ' ' ' : |   : |.' .' .   |  ' ' ' : |   | .\  . '   | |: : '  :  /   |  ' | |  . .  ;   |  ;          
.   | '_.' : '   ;  \; /  | .   | '_.' : '   ;  \; /  | .   ; ';  | '   | .; : |  | '    |  | ' |  | |  `---'. |          
'   ; : \  |  \   \  ',  /  '   ; : \  |  \   \  ',  /  '   .   . | |   :    | ;  : |    :  | : ;  ; |   `--..`;          
'   | '/  .'   ;   :    /   '   | '/  .'   ;   :    /    `---`-'| |  \   \  /  |  , ;    '  :  `--'   \ .--,_             
|   :    /      \   \ .'    |   :    /      \   \ .'     .'__/\_: |   `----'    ---'     :  ,      .-./ |    |`.          
 \   \ .'        `---`       \   \ .'        `---`       |   :    :                       `--`----'     `-- -`, ;         
  `---`                       `---`                       \   \  /                                        '---`"          
                                                           `--`-'                                                         
 __                        __     __  __  __                                      __       ______                   __  __                     
|  \                      |  \   |  \|  \|  \                                    |  \     /      \                 |  \|  \                    
| $$____   __    __       | $$   | $$ \$$| $$____    ______   ______   _______  _| $$_   |  $$$$$$\  ______    ____| $$ \$$ _______    ______  
| $$    \ |  \  |  \      | $$   | $$|  \| $$    \  /      \ |      \ |       \|   $$ \  | $$   \$$ /      \  /      $$|  \|       \  /      \ 
| $$$$$$$\| $$  | $$       \$$\ /  $$| $$| $$$$$$$\|  $$$$$$\ \$$$$$$\| $$$$$$$\\$$$$$$  | $$      |  $$$$$$\|  $$$$$$$| $$| $$$$$$$\|  $$$$$$\
| $$  | $$| $$  | $$        \$$\  $$ | $$| $$  | $$| $$   \$$/      $$| $$  | $$ | $$ __ | $$   __ | $$  | $$| $$  | $$| $$| $$  | $$| $$  | $$
| $$__/ $$| $$__/ $$         \$$ $$  | $$| $$__/ $$| $$     |  $$$$$$$| $$  | $$ | $$|  \| $$__/  \| $$__/ $$| $$__| $$| $$| $$  | $$| $$__| $$
| $$    $$ \$$    $$          \$$$   | $$| $$    $$| $$      \$$    $$| $$  | $$  \$$  $$ \$$    $$ \$$    $$ \$$    $$| $$| $$  | $$ \$$    $$
 \$$$$$$$  _\$$$$$$$           \$     \$$ \$$$$$$$  \$$       \$$$$$$$ \$$   \$$   \$$$$   \$$$$$$   \$$$$$$   \$$$$$$$ \$$ \$$   \$$ _\$$$$$$$
          |  \__| $$                                                                                                                 |  \__| $$
           \$$    $$                                                                                                                  \$$    $$
            \$$$$$$                                                                                                                    \$$$$$$ 													   
														   
Happy to see you here! @coder.
I, Vikrant Banerjee is the creator of the website if you want to ask or suggest me something contact me @ -> vikrantbanerjee5@gmail.com
------------------------------------------------------------------------------------------------------------------------------------------>

<head>
	<title>GOGOgoru</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/calc.css">
	<link rel="stylesheet" href="../css/template.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<style>
		body{
			background-color: #1a1a1a;
		}
		.heading{
			color: #e60000;
			text-align: center;
			font-weight: bold;
			font-family: Comic Sans MS;
			text-decoration: underline;
		}
	</style>
</head>


<body>
	<div class = "container">
        <?php include "../top_heading.php"; ?>
        </div>
	<section class = "wrapper top">
		<div class = "container">
			<h1 class = "heading">GOGOgoru Fraction Calculator</h1>
		</div>
	</section>
	<section>
		
	  <div class="calculator">

		<div id = "memory">
				<div id="n" class = ""><div id="n_content"><table><tr><td></td></tr><tr><td></td></tr></table></div></div>
				<div id = "display" class = "mar"><div id = "m-indicator"></div><div id="display_content"></div></div>
		</div>
	     <div>
		<div class="buttongrid">
			
						<button class = "symbol button">M+</button>
						<button class = "symbol button">M-</button>
						<button class = "symbol button">MR</button>
						<button class = "symbol button">MC</button>
						
						<button class = "symbol button frac" id="x-y">x/y</button>						
						<button class = "symbol button">AC</button>
						<button class = "symbol button">DEL</button>
						<button class = "symbol button">/</button>
						
	
					
						<button class = "number button">7</button>
						<button class = "number button">8</button>
						<button class = "number button">9</button>
						<button class = "symbol button">&#x00D7;</button>
						
					
						<button class = "number button">4</button>
						<button class = "number button">5</button>
						<button class = "number button">6</button>
						<button class = "symbol button">-</button>
						
					
						<button class = "number button">1</button>
						<button class = "number button">2</button>
						<button class = "number button">3</button>
						<button class = "symbol button">.</button>

						
						
						<button class = "zero number button">0</button>
						<button class = "symbol button">+</button>
						<button class = "symbol button" id = "enter">=</button>
						
						<button class = "frac dec button" id="dec">Decimal/Fraction</button>
						<button class = "frac mix button" id="mix">Mixed/Improper</button>
					

		</div>
	  </div>

	</section>
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="../../fractionlib.js"></script>
<script>
var acc;
var acc_op = "none";
var curr = new Fraction(0,1);

var asFraction = 0;
var asDecimal =  1;
var asMixed = 2;
var displayType;
var editNumerator;
var afterDecimal;
var probSolved = false;
var memory = new Fraction(0,1);

function refreshDisplay() {
	if (displayType == asFraction) {
		$("#display_content").html(curr.toFrac());
	} else if (displayType == asMixed) {
		$("#display_content").html(curr.toMix());
	} else { //asDecimal
		$("#display_content").html(curr.toDec());
	}
}
function addToHistory(new_opnd, new_op) {
    $("#n_content table tr:first").append("<td>"+new_opnd.n+"</td><td rowspan=2>"+new_op+"</td>");
    $("#n_content table tr:last").append("<td class='denom'>"+new_opnd.d+"</td>");
}
function restartHistory() {
    $("#n_content tr").html("");
}
function clearCurr() {
	curr = new Fraction(0,1);
	displayType =  asDecimal;
	editNumerator = true;
	afterDecimal =  false;
}
function computeResult() {
	var result
	switch(acc_op) {
		case '+': result = Fraction.add(acc,curr); break;
		case '-': result = Fraction.subtract(acc,curr); break;
		case '\u00D7': result = Fraction.multiply(acc,curr); break;
		case '/': result = Fraction.divide(acc,curr); break;
	}  
	return result;                                              
}


$(function() {
	$("#dec").click(function(){
		if(displayType==asDecimal) {
			displayType = asFraction;
		} else {
			displayType = asDecimal;
		}
		refreshDisplay();
	});
	$("#mix").click(function(){
		if(displayType==asMixed) {
			displayType = asFraction;
		} else {
			displayType = asMixed;
		}
		refreshDisplay();
	});
	$("#x-y").click(function(){
		displayType = asFraction;
		editNumerator = false;
		curr.d = 0;
	});
	$(".number").click(function() {
		if (probSolved == true){
			clearCurr();
			acc_op = "none";
			restartHistory();
			probSolved = false;
		}
		if (editNumerator) {
			if (displayType == asDecimal && afterDecimal) {
				curr.d *= 10;
			}
			curr.n = curr.n*10 + Number($(this).text());
		} else {
			curr.d = curr.d*10 + Number($(this).text());
		}
		refreshDisplay();
	});
	$(".symbol").click(function() {
		switch ($(this).text()) {
			case "AC":
				clearCurr();
				acc_op = "none";
				restartHistory();
				break;
			case "DEL":
				if (editNumerator) {
					if (displayType == asDecimal && afterDecimal) {
						if (curr.d == 1) {
							afterDecimal = false;
						} else {
							curr.d /= 10;
						}
					}
					curr.n = Math.floor(curr.n/10);
				} else {
					curr.d = Math.floor(curr.d/10);
				}
				break;
			case "M+":
				memory = Fraction.add(memory,curr);
				probSolved = true;
				$('#m-indicator').text("M")
				break;
				
			case "M-":
				memory = Fraction.subtract(memory,curr);
				probSolved = true;
				$('#m-indicator').text("M")
				break;
			
			case "MR":
				curr = memory;
				probSolved = true;
				break;
			
			case "MC":
				memory = new Fraction(0,1);
				probSolved = true;
				$('#m-indicator').text("")
				break;
				
			case ".":
				afterDecimal = true;
				break;
			case "+": case "-": case '\u00D7': case '/':
				if (acc_op != "none") {
					acc = computeResult();
					acc_op  = $(this).text();
					addToHistory(curr, acc_op);
				} else {
					acc = curr;
					acc_op  = $(this).text();
					restartHistory();
					addToHistory(curr, acc_op);
				}
				
				clearCurr();
				break;
			case "=":
				if (acc_op != "none") {
					addToHistory(curr, "=");
					curr = computeResult();
					acc = curr;
					acc_op = "none"
				}else{
					restartHistory();
					addToHistory(curr, "=");
					curr = new Fraction(curr.n, curr.d);
				}
				probSolved = true;
				break;
			default: break;
		}
		refreshDisplay();
	});
	clearCurr();
	refreshDisplay();
});


</script>
</body>

</html>