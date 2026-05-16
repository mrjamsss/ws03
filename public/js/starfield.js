class Starfield {
    constructor(canvasId, options = {}) {
        this.canvas = document.getElementById(canvasId);
        if (!this.canvas) return;
        
        this.ctx = this.canvas.getContext('2d');
        this.stars = [];
        this.numStars = options.numStars || 1000;
        this.speed = options.speed || 1.5;
        this.depth = options.depth || 1000;
        
        this.resize();
        window.addEventListener('resize', () => this.resize());
        
        this.init();
        this.animate();
    }
    
    resize() {
        this.width = window.innerWidth;
        this.height = window.innerHeight;
        this.canvas.width = this.width;
        this.canvas.height = this.height;
    }
    
    init() {
        this.stars = [];
        for (let i = 0; i < this.numStars; i++) {
            this.stars.push({
                x: Math.random() * this.width - this.width / 2,
                y: Math.random() * this.height - this.height / 2,
                z: Math.random() * this.depth,
                pz: Math.random() * this.depth
            });
        }
    }
    
    animate() {
        requestAnimationFrame(() => this.animate());
        
        // Dark space background
        this.ctx.fillStyle = '#020617'; // very dark blue/black
        this.ctx.fillRect(0, 0, this.width, this.height);
        
        this.ctx.translate(this.width / 2, this.height / 2);
        
        this.stars.forEach(star => {
            star.z -= this.speed;
            if (star.z <= 0) {
                star.x = Math.random() * this.width - this.width / 2;
                star.y = Math.random() * this.height - this.height / 2;
                star.z = this.depth;
                star.pz = this.depth;
            }
            
            // Map 3D to 2D
            const sx = (star.x / star.z) * (this.width / 2);
            const sy = (star.y / star.z) * (this.height / 2);
            const px = (star.x / star.pz) * (this.width / 2);
            const py = (star.y / star.pz) * (this.height / 2);
            
            star.pz = star.z;
            
            // Draw star/streak
            this.ctx.beginPath();
            this.ctx.moveTo(px, py);
            this.ctx.lineTo(sx, sy);
            
            // Brightness depends on how close it is
            const brightness = 1 - (star.z / this.depth);
            const size = brightness * 2;
            
            this.ctx.strokeStyle = `rgba(255, 255, 255, ${brightness})`;
            this.ctx.lineWidth = size;
            this.ctx.stroke();
            
            // Draw a tiny circle at the head of the streak for the star body
            this.ctx.beginPath();
            this.ctx.arc(sx, sy, size / 1.5, 0, Math.PI * 2);
            this.ctx.fillStyle = `rgba(255, 255, 255, ${brightness})`;
            this.ctx.fill();
        });
        
        this.ctx.translate(-this.width / 2, -this.height / 2);
    }
}

document.addEventListener('DOMContentLoaded', () => {
    new Starfield('starfield-bg', {
        numStars: 800,
        speed: 1.2
    });
});
