var words = [adj, noun, color, verb, adverb];
var input = [];


for(true) {
    var input1 = prompt("Enter an adjective");
    input.push(input1);
    var input2 = prompt("Enter a noun");
    input.push(input2);
    var input3 = prompt("Enter a color");
    input.push(input3);
    var input4 = prompt("Enter a verb");
    input.push(input4);
    var input5 = prompt("Enter an adverb");
    input.push(input5);
    break
}

document.write("Once upon a time, there was a " + input1 + " " + input2 + " whose favorite color is " + input3 + "." + " In fact, the " + input2 + " loves " + input3 + " so much! it made them " + input4 + " all day! Sometimes, when the " + input2 + " saw their favorite thing that's " + input3 + " they would " + input4 + " " + input5 + "!");

//var i = 0; i < word.length; i++