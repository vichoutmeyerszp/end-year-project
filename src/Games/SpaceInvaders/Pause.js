export default class Enemy {
     pause = false;

     document.addEventListener("keyup", keyup);
  
     keyup = (event) => {
        if (event.code == "ArrowRight") {
          this.rightPressed = true;
        }
        if (event.code == "ArrowLeft") {
          this.leftPressed = true;
        }
        if (event.code == "Space") {
          this.shootPressed = true;
        }
      };
    
    }
  
    collideWith(sprite) {
      if (
        this.x + this.width > sprite.x &&
        this.x < sprite.x + sprite.width &&
        this.y + this.height > sprite.y &&
        this.y < sprite.y + sprite.height
      ) {
        return true;
      } else {
        return false;
      }
    }
  }
  