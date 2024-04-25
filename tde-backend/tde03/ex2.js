const somaElementosPares = (array)=>{
    let soma = 0;
    array.forEach(element => {
        if(element%2 === 0){
            soma += element
        }
    });
    return soma;
}

let array = [14,3,7,5,44,2,4]

console.log(somaElementosPares(array))