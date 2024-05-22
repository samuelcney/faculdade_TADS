const express = require("express")
const router = express.Router()
const {z} = require("zod")
const {auth} = require("../middleware/auth")
const {showContacts, addContact, updateContact, deleteContact} = require("../db/contact")

const ContactSchema = z.object({
    name: z.string(),
    email: z.string().email(),
    phone: z.string().min(11).max(11)
})

router.get("/contacts", auth, async(req,res)=>{
    try{
        const contacts = await showContacts(req.user)
        res.json({contacts})
    }catch(error){
        if(error instanceof z.ZodError) return res.status(400).send()
        console.log(error)
        res.status(500).send()
    }
})

router.post("/contact", auth, async(req, res)=>{
    try{
        const {name, email, phone} = ContactSchema.parse(req.body)
        const contact = await addContact(name, email, phone, req.user)
        res.json({contact})
    }catch(error){
        if(error instanceof z.ZodError) res.status(400).send()
        console.log(error)
        res.status(500).send()
    }
})

router.put("/contact/:id", auth, async(req,res)=>{
    try{
        const id = Number(req.params.id)
        const data = ContactSchema.parse(req.body)
        const contact = await updateContact(id, data)
        res.json({contact})
    }catch(error){
        if(error instanceof z.ZodError) res.status(400).send()
        res.status(500).send()
    }
})

router.delete("/contact/:id", auth, async(req,res)=>{
    const id = Number(req.params.id)
    const contact = await deleteContact(id)
    res.status(204).json({contact})
})

module.exports = {router}