const express = require('express')
const bodyParser = require('body-parser')
const cors = require('cors')
const helmet = require('helmet')

const data = require("./Data.json");

const app = express()
const port = 3069

function RandomIndex(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

app.enable('trust proxy')
app.use(bodyParser.json())
app.use(cors())
app.use(helmet())

app.get('/retrieveRandom', async (req, res) => {
    try {
        const userIndex = RandomIndex(1, data.data.length)
        res.json({
            success: true,
            user: data.data[userIndex]
        })
    } catch (err) {
        console.log(err)
        res.statusCode = 400
        return res.json({
            success: false,
            message: 'Unknown Discord API error',
        })
    }
})

app.listen(port, async () => {
    console.log(`API listening at port http://localhost:${port}`)
})
