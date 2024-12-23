const express = require('express')
const app = express()

const port = 2500

app.get('/a', (req, res) => {
    let user ={
        fname: 'test',
        lname: 'ltest',
        age: 14,
        year: 30
    }
    res.json(user)
})

app.listen(port, () => {
    console.log(`HTTP server running  at http://localhost:${port}`)
})
