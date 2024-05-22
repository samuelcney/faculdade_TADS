const express = require("express")
const router = express.Router()

const bcrypt = require("bcrypt")
const jwt = require("jsonwebtoken")
const {findByEmail, register} = require("../db/user")
const {z} = require("zod")

const UserSchema = z.object({
    email: z.string().email(),
    password: z.string().min(6)
})


router.post("/register", async(req,res)=>{
    try{
        const {email, password} = UserSchema.parse(req.body)
        const userExist = await findByEmail(email)
        if(userExist) return res.status(401).json({
            message: "O usuário já está cadastrado."
        })
        const hash = bcrypt.hashSync(password, 10)
        const user = await register(email, hash)
        delete(user.password)
        res.json({user})

    }catch(error){
        if(error instanceof z.ZodError) return res.status(400).send()
        res.status(500).send()
    }
})

router.post("/login", async(req,res)=>{
    try{
        const {email, password} = UserSchema.parse(req.body)
        const userExist = await findByEmail(email)
        if(!userExist) return res.status(401).json({
            message: "Crendenciais inválidas."
        })
        const validPassword = bcrypt.compareSync(password, userExist.password)
        if(!validPassword) return res.status(401).json({
            message: "Credenciais inválidas."
        })

        const token = jwt.sign({id: userExist.id}, process.env.SECRET)
        res.status(201).json({
            success: true,
            token
        })

    }catch(error){
        if(error instanceof z.ZodError) return res.status(400).send()
        res.status(500).send()
    }
})

module.exports = {router}