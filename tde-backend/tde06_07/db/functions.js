const { prisma } = require("./prisma")

const showTasks = async () =>{
    const task = await prisma.tasks.findMany({
        select:{
            name: true,
            description: true,
            isDone: true
        },
        orderBy:{
            id: "asc"
        }
    })
    return task
}

const taskByID = async (id) =>{
    const task = await prisma.tasks.findFirst({
        where:{
            id
        }
    })
    return task
}

const addTask = async (data) =>{
    const task = await prisma.tasks.create({
        data
    })
    return task
}

const updateTask = async (id, data) =>{
    const task = await prisma.tasks.update({
        data,
        where:{
            id
        }
    })
    return task
}

const deleteTask = async (id) =>{
    const task = await prisma.tasks.delete({
        where:{
            id
        }
    })
    return task
}

module.exports ={
    showTasks, taskByID, addTask, updateTask, deleteTask
}