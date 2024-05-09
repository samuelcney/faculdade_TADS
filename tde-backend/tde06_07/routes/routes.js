const express = require("express")
const router = express.Router()
const {showTasks,taskByID,addTask,updateTask,deleteTask} = require("../db/functions")

router.get("/tasks", async(req,res) =>{
    const tasks = await showTasks()
    res.json(tasks)
})

router.get("/task/:id", async (req,res) =>{
    const id = Number(req.params.id)
    const task = taskByID(id)
    if(!task) return res.status(404).json({
        message: `Tarefa com o ID ${id} não encontrada...`
    })
    res.json(task)
})

router.post("/task", (req, res) =>{
    const task = addTask(req.body)
    res.status(201).json(task)
})

router.put("/task/:id", (req,res)=>{
    const id = Number(req.params.id)
    const task = updateTask(id, req.body)
    res.json(task)
})

router.delete("/task/:id", (req,res)=>{
    const id = Number(req.params.id)
    const task = deleteTask(id)
    res.status(204).json(task)
})

module.exports = {router}
