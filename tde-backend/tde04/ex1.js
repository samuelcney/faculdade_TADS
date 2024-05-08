////////////////////////////////////////////////

const soma = (n1,n2,successCall,errorCall) =>{
    const resultado = n1+n2
    if(resultado%2 === 0){
        return successCall(resultado)
    }
    errorCall(resultado)
}

const callBackSucesso = (n) =>{
    console.log(`Sucesso na operação! O número ${n} é par.`)
}

const callBackError = (n) =>{
    console.log(`Erro na operação.. O número ${n} é ímpar.`)
}

console.log("Callback:")
soma(3, 6, callBackSucesso, callBackError)

console.log("---------------------------------------")

console.log("Promise:")
const somaPromise = (n1, n2) =>{
    return new Promise((resolve, reject)=>{
        const resultado = n1+n2
        if(resultado%2 === 0){
            return resolve(resultado)
        }
        reject(resultado)
    })
}

somaPromise(4,4).then(callBackSucesso).catch(callBackError)