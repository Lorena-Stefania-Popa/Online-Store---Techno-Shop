"use strict";
var cowsay = require("cowsay");
var paramArray = [];
var resultat = 0;
var length = process.argv.length-1;

for (var i = 2; i<=length-1; i++) {
    paramArray[i-2] = parseFloat(process.argv[i]);
}

if((process.argv[2] == null)||(process.argv[2] == "help")||(process.argv[2] == "Help")){
    console.log(cowsay.say({
	    text : "Calculator, Author: Badea Ionut-Teodor",
	    e : "oo"
    }));
    
    console.log("help\n" + "+\n" + "-\n" + "mul\n" + "div\n" + "mod\n" + "sq\n" + "abs\n" + "pwr\n" + "sort\n" + "rev\n" + "uniq\n" + "max\n" + "min\n" + "cos\n" + "sin\n");  
}else if (isNaN(process.argv[length])){
    if(process.argv[length]=="+"){
        if(length > 3){
            resultat = paramArray[0];
            for(var j = 1; j < paramArray.length; j++) {
                resultat += paramArray[j];
            }
            console.log(resultat);
        } else {
            console.log("ERROR: addition command uses at least 2 parameters");
        }
    }else if(process.argv[length]=="-"){
        if(length > 3){
            resultat = paramArray[0];
            for(var j = 1; j < paramArray.length; j++) {
                resultat -= paramArray[j];
            }
            console.log(resultat);
        } else {
            console.log("ERROR: substract command uses at least 2 parameters");
        }
    } else if(process.argv[length]=="mul"){
        if(length > 3){
            resultat = paramArray[0];
            for(var j = 1; j < paramArray.length; j++) {
                resultat *= paramArray[j];
            }
            console.log(resultat);
        } else {
            console.log("ERROR: multiply command uses at least 2 parameters");
        }
    }else if(process.argv[length]=="div"){
        if(length > 3){
            resultat = paramArray[0];
            for(var j = 1; j < paramArray.length; j++) {
                resultat /= paramArray[j];
            }
            console.log(resultat);
        } else {
            console.log("ERROR: divide command uses at least 2 parameters");
        }
    }else if(process.argv[length]=="mod") {
        if(length > 3){
            resultat = paramArray[0];
            for(var j = 1; j < paramArray.length; j++) {
                resultat %= paramArray[j];
            }
            console.log(resultat);
        } else {
            console.log("ERROR: mod command uses at least 2 parameters");
        }
    }else if(process.argv[length]=="sq") {
        if(length > 2){
            resultat = paramArray[0];
            console.log(Math.sqrt(resultat));
        } else {
            console.log("ERROR: sq command uses at least 1 parameters");
        }
    }else if(process.argv[length]=="abs") {
        if(length == 3){
            resultat = Math.abs(paramArray[0]);
            console.log(resultat);
        } else {
            console.log("ERROR: abs command uses at least 1 parameters");
        }
    }else if(process.argv[length]=="pwr") {
        if(length == 4){
                resultat = Math.pow(paramArray[0],paramArray[1]);
                console.log(resultat);
        } else {
            console.log("ERROR: pwr command uses at least 2 parameters");
        }
    }else if(process.argv[length]=="sort") {
        if(length > 2){
            var sorted = false;
            var temp;
            var a = paramArray;
            while(!sorted) {
                sorted = true;
                for (var i = 0; i < a.length - 1; i++) {
                    if (a[i] > a[i+1]) {
                        temp = a[i];
                        a[i] = a[i+1];
                        a[i+1] = temp;
                        sorted = false;
                    }
                }
            }
            for(var i in a){
                process.stdout.write(a[i]+" ");
            }
        } else {
            console.log("ERROR: sort command uses at least 1 parameters");
        }
    }else if(process.argv[length]=="rev") {
        if(length > 2){
            var sorted = false;
            var temp;
            var a = paramArray;
            while(!sorted) {
                sorted = true;
                for (var i = 0; i < a.length - 1; i++) {
                    if (a[i] < a[i+1]) {
                        temp = a[i];
                        a[i] = a[i+1];
                        a[i+1] = temp;
                        sorted = false;
                    }
                }
            }
            for(var i in a){
                process.stdout.write(a[i]+" ");
            }
        } else {
            console.log("ERROR: rev command uses at least 1 parameters");
        }
    }else if(process.argv[length]=="uniq") {
        if(length > 2){
            var listDup = [];
            var duplicate = false;
            for(var i in paramArray){
                for(var j in listDup){
                    if(paramArray[i]==listDup[j]){
                        duplicate = true;
                    }
                }
                if(duplicate == false){
                    listDup.push(paramArray[i]);
                }
                duplicate = false;
            }
            for(var i in listDup){
                process.stdout.write(listDup[i]+" ");
            }
        } else {
            console.log("ERROR: uniq command uses at least 1 parameters");
        }
    }else if(process.argv[length]=="max") {
        if(length > 2){
            resultat = paramArray[0];
            for(var j = 1; j < paramArray.length; j++) {
                if(resultat < paramArray[j]){
                    resultat = paramArray[j];
                }
            }
            console.log(resultat);
        } else {
            console.log("ERROR: max command uses at least 1 parameters");
        }
    }else if(process.argv[length]=="min") {
        if(length > 2){
            resultat = paramArray[0];
            for(var j = 1; j < paramArray.length; j++) {
                if(resultat > paramArray[j]){
                    resultat = paramArray[j];
                }
            }
            console.log(resultat);
        } else {
            console.log("ERROR: min command uses at least 1 parameters");
        }
    }else if(process.argv[length]=="cos") {
        if(length == 3){
            resultat = Math.cos(paramArray[0]);
            console.log(resultat);
        } else {
            console.log("ERROR: cosinus command only 1 parameter");
        }
    }else if(process.argv[length]=="sin") {
        if(length == 3){
            resultat = Math.sin(paramArray[0]);
            console.log(resultat);
        } else {
            console.log("ERROR: sinus command uses only 1 parameter");
        }
    }else{
        console.log("ERROR: this command does not exist, use help to see available commands");
    }
}