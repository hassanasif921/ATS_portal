body {
    color: #333;
    font-family: 'Play', sans-serif;
    font-weight: normal;
    margin: 0;
    padding: 0;

}
html,body{overflow-y: scroll; }
h1 {
  background: #333;
  color: #fff;
  text-align: center;
  margin: 0 0 5% 0;
  padding: 0.5em;
  margin: 0 0 5% 0;
}
.div-logo{
    text-align: center; 
    margin-top: 2.5%; 
    background: rgba(255, 255, 255, 0.6); 
    padding-top: 5px;
}

.cardBox {
  float: left;
  font-size: 1.2em;
  margin: 1% 0 0 1%;
  transition: all 0.3s ease 0s;
  width: 100%;
  margin-top: 5%;
}

.cardBox:hover .card {
  transform: rotateY( 180deg);
}

.card {
    background: rgba(0, 0, 0, 0.3);;
  cursor: default;
  height: 300px;
  transform-style: preserve-3d;
  transition: transform 1.0s ease 0s;
  width: 100%;
  -webkit-animation: giro 1s 1;
  animation: giro 1s 1;
}
.card p {
  margin-bottom: 1.8em;
}

.back{
  padding-top: 7%;
}
.back p{
  font-size: 16px;
  padding: 0.9%;
}

.card .front,
.card .back {
  backface-visibility: hidden;
  box-sizing: border-box;
  color: white;
  display: block;
  font-size: 1.2em;
  height: 100%;
  padding: 0.8em;
  position: absolute;
  text-align: center;
  width: 100%;
}

.card .front strong {
  background: #fff;
  border-radius: 100%;
  color: #222;
  font-size: 1.5em;
  line-height: 30px;
  padding: 0 7px 4px 6px;
}
.front img{
    height: 140px; 
    width: 140px; 
    margin-top: 8%;
}
.card .back {
  transform: rotateY( 180deg);
}

.card .back a {
  padding: 0.3em 0.5em;
  background: #333;
  color: #fff;
  text-decoration: none;
  border-radius: 1px;
  font-size: 0.9em;
  transition: all 0.2s ease 0s;
}

.div-logo img{
    
    width: 15%;
}
.card .back a:hover {
  background: #fff;
  color: #333;
  text-shadow: 0 0 1px #333;
}

.cardBox:nth-child(1) .card .back {
  background: cornflowerblue;
}

.cardBox:nth-child(2) .card .back {
  background: orange;
}

.cardBox:nth-child(3) .card .back {
  background: yellowgreen;
}

.cardBox:nth-child(4) .card .back {
  background: tomato;
}

.cardBox:nth-child(2) .card {
  -webkit-animation: giro 1.5s 1;
  animation: giro 1.5s 1;
}

.cardBox:nth-child(3) .card {
  -webkit-animation: giro 2s 1;
  animation: giro 2s 1;
}

.cardBox:nth-child(4) .card {
  -webkit-animation: giro 2.5s 1;
  animation: giro 2.5s 1;
}
#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}
.content {
  position: absolute;
  bottom: 0;
  color: #f1f1f1;
  height:100%;
}
@-webkit-keyframes giro {
  from {
    transform: rotateY( 180deg);
  }
  to {
    transform: rotateY( 0deg);
  }
}

@keyframes giro {
  from {
    transform: rotateY( 180deg);
  }
  to {
    transform: rotateY( 0deg);
  }
}
