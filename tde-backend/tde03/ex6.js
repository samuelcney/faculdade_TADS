const gerarLista = (n, gerarNum) =>{
    const newArr = []
    for(let i=0; i<n; i++){
        const element = gerarNum(i)
        newArr.push(element)
    }
    return newArr
}

const newArray = gerarLista(15, (n) => n*5)
console.log(newArray)