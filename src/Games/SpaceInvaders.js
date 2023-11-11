const canvas = document.querySelector('canvas')
const c = canvas.getContext('2d')

canvas.width = innerWidth
canvas.height = innerHeight

class Player {
    constructor() {


        this.velocity = {
            x: 0,
            y: 0
        }

        const image = new Image()
        image.src = 'data/SpaceShip.png'
        Image.onload = () => {
         this.image = image
         this.width = image.width
         this.heigth = image.heigth
         this.position = {
            x: canvas.width / 2 - this.width / 2,
            y: canvas.heigth - this.heigth - 20
        } 
        }

        

    }
        draw() {
            if(this.image)
            c.drawImage(this.image, this.position.x, this.position.y, this.width, this.heigth)
        }
    }

const player = new Player()
player.draw()

function animate() {
    requestAnimationFrame(animate)
    c.fillStyle = 'black'
    c.fillRect(0, 0, canvas.width, canvas.height)
    player.draw
}

animate()