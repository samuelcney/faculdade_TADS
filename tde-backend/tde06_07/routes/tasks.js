const express = require("express")
const router = express.Router()

let tasks = [
    {
        id: 1,
        name: "Adicionar novas tarefas.",
        description: "Implemente novas tarefas na lista.",
        isDone: false
    }
]

router.get("/tasks", (req,res) =>{
    res.send(tasks)
})

router.get("/task/:id", (req,res) =>{
    const id = Number(req.params.id)
    const task = tasks.find(task => task.id === id)
    if(!task) return res.status(404).json({
        message: `Tarefa com o ID ${id} não encontrada...`
    })
    res.json(task)
})

router.post("/tasks", (req, res) =>{
    const dados = req.body
    const task = {
        id: tasks.length + 1,
        name: dados.name,
        description: dados.description,
        isDone: dados.isDone
    }
    tasks.push(task)
    res.status(201).json(task)
})

router.put("/tasks/:id", (req,res)=>{
    const id = Number(req.params.id)
    const dados = req.body

    const task = tasks.find(task => task.id === id)
    if(!task) return res.status(404).send(
        `<h1>Tarefa não encontrada...</h1>`
    ) 
    task.name = dados.name
    task.description = dados.description
    task.isDone = dados.isDone
    res.json(task)
})

router.delete("/tasks/:id", (req,res)=>{
    const id = Number(req.params.id)
    tasks = tasks.filter(task => task.id !== id)
    res.status(204).send()
})

module.exports = {router}
