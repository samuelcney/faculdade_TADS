const express = require("express")
const server = express()
const { router } = require('./routes/tasks')
const { content } = require('./content')

server.use(express.json())
server.use(router)

const port = 5000
server.listen(port, ()=>{
    console.log(`Servidor rodando na porta ${port}`)
})

server.get("/", (req, res) =>{
    res.send(content)
})

server.get("/health", (req, res) =>{
    res.json({
        status: "Running"
    })
})