const express = require("express")
const server = express()
const { router } = require('./routes/routes')

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

const content = `
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>

    <style>
        
        *{
            margin: 0;
            padding: 0;
            outline: 0;
            box-sizing: border-box;
            font-family: 'Open Sans';
        }

        body{
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #404040;
        }

        .content{
            background-color: #545454;
            width: 800px;
            height: 200px;
            border: 1px solid #259f12;
            border-radius: 22px;
            text-align: center;
            

            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-direction: row;
        }

        .links{
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        h1{
            color: #FFF;
        }

        a{
            color: #FFF;
            margin: 20px 0;
            text-decoration: none;
        }

        a:hover{
            text-decoration: underline;
            text-decoration-color: #259f12;
        }

    </style>

</head>
<body>
    <div class="content">
        <h1>Olá, bem vindo!</h1>
        
        <div class="links">
            <a href='http://localhost:5000/tasks' target=_blank><li>Lista de tarefas</li></a>

            <a href='http://localhost:5000/health' target=_blank><li>Clique aqui para conferir <br> o status do servidor...</li></a>
        </div>
        
    </div>
</body>
`