let idade = 17;
let saldo = -10;

if (idade < 18) {
  console.log(idade + " anos -> Menor de idade");
} else {
  console.log(idade + " anos -> Maior de idade");
}

if (saldo < 0) {
  console.log("Saldo: "+ saldo + " ->Saldo negativo.");
} else if(saldo==0){
  console.log("Saldo: "+ saldo + " ->Saldo zerado.");
} else {
  console.log("Saldo: "+ saldo);
}

console.log('-------------------------------');
console.log('Loop de 1 a 10');

for (i = 1; i <= 10; i++) {
  console.log(i);
}

console.log('-------------------------------');
console.log('Loop de 1 a 10 - Números impares: ');

for (i = 1; i <= 10; i++) {
  if(i%2!=0){
    console.log(i);
  }
}

console.log('-------------------------------');
console.log('Tabuada do 7:');

for (i = 1; i <= 10; i++) {
  console.log("7 * "+i+" = "+7*i);
}

console.log('-------------------------------');
console.log('É negativo?');

function ehNegativo(num){
  if(num < 0){
    return true;
  }else{
    return false;
  }
}
console.log(ehNegativo(-1));

console.log('-------------------------------');
console.log('Soma números - function:');

function somaNumeros(a,b){
  return a+b;
}
console.log(somaNumeros(7,7));

console.log('-------------------------------');
console.log('Menor Número - function:');

function menorNumero(a,b,c){
  let menor = 0;
  
  if(a<b){
    menor = a;
  }else{
    menor = b;
  }
  if(c<menor){
    menor = c;
  }
  return menor;
}

console.log(menorNumero(100,500,20))

console.log('-------------------------------');
console.log('É par?');

function ehPar(num){
  if(num % 2 == 0){
    return true;
  }else{
    return false;
  }
}
console.log(ehPar(3));

console.log('-------------------------------');
console.log('Hora da fatoração:');

function fatorial(num){
  for(i=num-1;i>=1;i--){
    num = num*i;
  };
  return num;
}
console.log(fatorial(6));

console.log('-------------------------------');
console.log('Soma dos números pares de 1 a 100:');

let somaCem = 0;

for(i=1;i<=100;i++){
  if(i%2 == 0){
    somaCem += i;
  }
}

console.log(somaCem);

console.log('-------------------------------');
console.log('A é Multiplo de B?');

function multiplos(a, b){
  if(a%b == 0){
    return true;
  }else{
    return false;
  }
}
console.log("35/5 -> "+ multiplos(35,5));

console.log('-------------------------------');
console.log('É positivo, negativo ou zero?');

function conferirPNZ(num){
  if(num>0){
    return "Número Positivo.";
  }
  else if(num==0){
    return "Zero.";
  }
  else{
    return "Número Negativo.";
  }
}
console.log(conferirPNZ(10));

console.log('-------------------------------');
console.log('Soma de A e B é divisível por 5?');

function divisivelFive(a,b){
  let soma = a+b;

  if(soma%5==0){
    return true;
  }
  else{
    return false;
  }
}
console.log(divisivelFive(5,6));

console.log('-------------------------------');
console.log('Converter Celsius para Fahrenheit: ');

function celsiusToFahr(temp){
  return temp/5 * 9 + 32;
}

console.log(celsiusToFahr(24));

