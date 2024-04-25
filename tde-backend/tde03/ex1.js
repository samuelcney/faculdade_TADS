const encontrarMaiorElemento = (array)=>{
    let maior=0;
    for(let element of array){
        if(element > maior){
            maior = element
        }
    }
    return maior
}

let array = [12,2,3,45,6,1,2,60]

console.log(array)
console.log("Maior elemento do array: "+encontrarMaiorElemento(array))