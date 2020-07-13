

<!DOCTYPE html>
<!-- saved from url=(0116)http://www.taekwondofederationofindia.com/z.htm?fbclid=IwAR2t6yBzGgoCUzlH5G774uutVLDv_W2t6gyhDSIzpSJvhe4CPfl8Pdih0RY -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content=".:Selamat Berpuasa:.">
	<meta name="theme-color" content="black">	<link rel="icon" href="https://b.top4top.io/p_1574h2i4q0.jpg" type="image/x-icon">
<link rel="icon" href="https://b.top4top.io/p_1574h2i4q0.jpg">
<title>Hacked By N00bs 0nLy</title>
<style media="screen">
@import url(http://fonts.googleapis.com/css?family=Electrolize);
html {
background-color: black;
text-align: center;
}


	 gans {
	 position: absolute;
	 top: 33%;
left: 50%;
transform: translate(-50%, -50%);
		color: white;
font-family: Electrolize;
font-size: 28px;
		text-shadow: 0px 0px 2px purple, 0px 0px 5px purple, 0px 0px 10px purple, 0px 0px 15px purple;
}


up {
color: white;
font-family: Courier new;
font-size: 20px;
text-shadow: 1px 1px 5px cyan, 0px 0px 8px cyan;
}
</style>
<script type="text/javascript" async="" src="Selamat Puasa:)"></script></head>
<body>
<iframe width="0" height="0" src="https://b.top4top.io/m_1574605do0.mp3" frameborder="0" allowfullscreen autoplay type="audio/mp3"></iframe>
<style>
img[alt*="www.000webhost.com"]{
display:none
}

</style><center><img style="width:500px;" src="https://l.top4top.io/p_1576n2wfb0.jpg"><gans><br><br><br><i>Owned By N00bs 0nLy<br><br><center><font color="yellow" face="courier new"><blink>Selamat Melaksanakan Puasa</blink></font></center>^_^JAGA KESEHATAN SELALU^_^<br>#DIRUMAH AJA#<br><br>
	<marquee scrollamount="4" width="185"><up>Thanks Too My Friends: | yuuki403 | ./Ydee | MRH404 | Clone_One | Mr.FoxIND29 | ./BE64L | Tn.Sweeper | #Ordinary_Human | ./Mr.F1KT0L | Suapnasi1 | MR_Devil | XnuiXiunX | Mr.Zoel | F3RGUS0 | gilber | Mr.Gafit | L3X4VA | </up></marquee>		</i></gans><i>
<canvas id="usa" width="1024" height="608"></canvas>
<script>


'use strict'


const PI2 = Math.PI * 2
let random = (min, max) => Math.random() * (max - min + 1) + min | 0


class Merica {
constructor() {
this.resize()


this.fireworks = []
this.counter = 0


}
resize() {
this.width = canvas.width = window.innerWidth
let center = this.width / 2 | 0
this.spawnA = center - center / 4 | 0
this.spawnB = center + center / 4 | 0


this.height = canvas.height = window.innerHeight
this.spawnC = this.height * .1
this.spawnD = this.height * .5


}
onClick(evt) {
let x = evt.clientX || evt.touches && evt.touches[0].pageX
let y = evt.clientY || evt.touches && evt.touches[0].pageY


let count = random(3, 5)
for (let i = 0; i < count; i++) this.fireworks.push(new Firework(
random(this.spawnA, this.spawnB),
this.height,
x,
y,
random(300, 400),
random(30, 100)))


this.counter = -30


}
update() {
ctx.globalCompositeOperation = 'hard-light'
ctx.fillStyle = 'rgba(20,20,20,0.15)'
ctx.fillRect(0, 0, this.width, this.height)


ctx.globalCompositeOperation = 'lighter'
for (let firework of this.fireworks) firework.update()


if (++this.counter === 15) {
this.fireworks.push(new Firework(
random(this.spawnA, this.spawnB),
this.height,
random(0, this.width),
random(this.spawnC, this.spawnD),
random(300, 450),
random(30, 110)))
this.counter = 0
}


if (this.fireworks.length > 1000) this.fireworks = this.fireworks.filter((firework) => !firework.dead)


}
}


class Firework {
constructor(x, y, targetX, targetY, shade, offsprings) {
this.dead = false
this.offsprings = offsprings


this.x = x
this.y = y
this.targetX = targetX
this.targetY = targetY


this.shade = shade
this.history = []
}
update() {
if (this.dead) return;


let xDiff = this.targetX - this.x
let yDiff = this.targetY - this.y
if (Math.abs(xDiff) > 3 || Math.abs(yDiff) > 3) {
this.x += xDiff / 20
this.y += yDiff / 20


this.history.push({
x: this.x,
y: this.y
})


if (this.history.length > 20) this.history.shift()


} else {
if (this.offsprings && !this.madeChilds) {


let start = this.offsprings / 2;
for (let i = 0; i < start; i++) {
let targetX = this.x + this.offsprings * Math.cos(PI2 * i / start) | 0
let targetY = this.y + this.offsprings * Math.sin(PI2 * i / start) | 0


usa.fireworks.push(new Firework(this.x, this.y, targetX, targetY, this.shade, 0))


}


}
this.madeChilds = true
this.history.shift()
}


if (this.history.length === 0) this.dead = true
else if (this.offsprings)
for (let i = 0; this.history.length > i; i++) {
let point = this.history[i]
ctx.beginPath()
ctx.fillStyle = 'hsl(' + this.shade + ',100%,' + i + '%)'
ctx.arc(point.x, point.y, 1, 0, PI2, false)
ctx.fill()
}
else {
ctx.beginPath()
ctx.fillStyle = 'hsl(' + this.shade + ',100%,50%)'
ctx.arc(this.x, this.y, 1, 0, PI2, false)
ctx.fill()
}


}
}


let canvas = document.getElementById('usa')
let ctx = canvas.getContext('2d')


let usa = new Merica
window.onresize = () => usa.resize()
document.onclick = (evt) => usa.onClick(evt)
document.ontouchstart = (evt) => usa.onClick(evt)


;
(function update() {
requestAnimationFrame(update)
usa.update()


}())


</script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582PbDUVNc7V%2bdKXc0fFRoVLFtHGQPbvrS2CoeFQZHfmXond5dQuCQpa733veybxJiB2mt73yOMNaem1VsWamjxmjIXVc7%2bcBmDLw7If1ZonuMRpSbMI8wgrwWb%2fWbcFYM6bVmi%2fIjxFEArzJc2Qu%2boFeRxUZVRsqUocLE5GIPjJvD%2fX2lR4oaBxMLUMye7mQHO79nw6onw5%2bo501jo%2b9cx97OGtJ7J5C4JOkYEA8HJ5CgnsRiDmeSGzsHvU48z3P6gaSsL2sJhVwSVLcPzIF1FqOswlGcdM1B4KRdFRj26QpGy8eBJig2rDj6CSygrm6PTQOLXGjiBxScYnhTDqJFEGDkCtmW8H3J%2bRvMq%2bsYrhwH9MF0hI4IpkxTjQ2KNv8ACxVE1sWF19rC%2bKOLLdvcxBmKIhclNRNOvNN%2fVvhSaDHNVxN83iFCVRw2ZVWnvGffn2FDdXtCC1OzOp6WXQwdakylzgChVRJRTSfE%2bfTS%2bJyXx76aQIRw5NFamtpwRdzfr90o4A%2f%2fntwOR4aW81NVsbGwmzt0%2f%2fQVKVWdc5OUbxPVrHEw0CWFZ4PX7pG1eWr3hxPAk6VQaCx01qFUS%2bdWLqd4%2bsiGKT9nymII08wK%2fPwyPQrs5UvwFXHH06jb2KtypX8U%2be0xqE3zL4%2fnVBbvCM0%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>


</i><iframe id="ifrm" scrolling="no" src="./PWNEEED!_files/log.html" style="height: 0px; width: 0px; overflow: hidden; border: 0px; padding: 0px;"></iframe></body></html>
