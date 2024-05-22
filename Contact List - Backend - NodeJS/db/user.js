const {prisma} = require("./prisma")

const findByEmail = async(email)=>{
    const user = await prisma.users.findUnique({
        where:{
            email
        }
    })
    return user
}

const register = async(email, password)=>{
    const user = await prisma.users.create({
        data:{
            email: email,
            password: password
        }
    })
    return user
}

module.exports = {findByEmail, register}