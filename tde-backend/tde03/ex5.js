const validarDados = (obj, validarObj)=>{
    const ehValido = validarObj(obj)
    if(ehValido) return true
    return false
}

const usuario1 = {
    nome: "Chico",
    senha: "chico21",
}


const validarSenha = (usuario1) =>{
    return usuario1.senha.length >= 8; 
}

const result = validarDados(usuario1, validarSenha)

console.log(result)