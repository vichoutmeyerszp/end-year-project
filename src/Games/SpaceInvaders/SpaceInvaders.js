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
        image.src = './data/SpaceShip.png'
        image.onload = () => {
         this.image = image
         this.width = image.width
         this.heigth = image.heigth
         this.position = {
            x: (canvas.width) / 2 - (this.width / 2),
            y: canvas.heigth - this.heigth - 20
        } 
        }
    }
        draw() {
            c.drawImage(this.image, 
                        this.position.x, 
                        this.position.y, 
                        this.width, 
                        this.heigth)
            
            
        }
        update() {
            if(this.image) {
            this.draw()
            this.position.x += this.velocity.x
            }
        }
        
    }


const player = new Player()
const keys = {
    q: {
        pressed:false
    },
    d: {
        pressed:false
    },
    space: {
        pressed:false
    },

}

function animate() {
    requestAnimationFrame(animate)
    c.fillStyle = 'black'
    c.fillRect(0, 0, canvas.width, canvas.height)   
    player.update()

    if(keys.q.pressed && player.position.x >= 0) {
        player.velocity.x = -5
    } else if (keys.d.pressed && player.position.x +player.width <= canvas.width) {
        player.velocity.x = 5

    } else {
        player.velocity.x = 0
    }
}

animate()

addEventListener('keydown', ({ key }) => {
    switch(key) {
        case 'q':
            console.log('left')
            keys.q.pressed = true
            break
        case 'd':
            console.log('right')
            keys.d.pressed = true
            break
        case ' ':
            console.log('space')
            break   
    }
}) 

addEventListener('keyup', ({ key }) => {
    switch(key) {
        case 'q':
            console.log('left')
            keys.q.pressed = false
            break
        case 'd':
            console.log('right')
            keys.d.pressed = false
            break
        case ' ':
            console.log('space')
            break   
    }
}) 