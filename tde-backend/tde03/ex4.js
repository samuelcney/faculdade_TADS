const filtrarArray = (arr, filtro) => {
    const newArr = []
    for(let element of arr){
        const selecionado = filtro(element)
        if(selecionado) newArr.push(element)
    }
    return newArr
}

const arr = [1,2,3,4,5,6,7,8,9,10]
const ehPar = (e)=> e%2 === 0
const ehImpar = (e)=> e%2 !== 0

const newArr = filtrarArray(arr, ehImpar)
console.log(newArr)