const express = require("express")
const server = express()
const {router: usersRouter} = require("./routes/users")
const {router: contactsRouter} = require("./routes/contacts")

server.use(express.json())
server.use("/v1", usersRouter)
server.use("/v1", contactsRouter)

const port = 7000

server.listen(port, ()=>{
    console.log(`Servidor ativo no endereço http://localhost:${7000}`)
})