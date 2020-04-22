<style type="text/css">
*{
    margin: 0px;
    padding: 0px;
    font-family: 'Times New Roman', Times, serif;
    box-sizing:border-box;
}
body{
    scroll-behavior: smooth;
}

.nav_style{
    background-color: rgb(233, 253, 160);
}
.nav_style a{
    color: #000;
}
.nav_style a:hover{
    color: rgb(0, 195, 255);
}
.container-fluid .navbar-brand img{
    transition: all 1s ease-in-out;
}
.container-fluid .navbar-brand img:hover{
    transform: rotate(360deg) scale(1.5);
}
/*----------main section-------------------------*/
main{height:60vh;width:100%;}
main .img-col{
   width: 100%;
   height: 100%;
   display: flex;
   justify-content: center;
   align-items: center;
    
}

main .img-col img{
    margin-top: 60px;
    width: 250px;
    height: 250px;
    animation: hand-circle 2s linear infinite ;
    
}
@keyframes hand-circle{
    0%{
        transform: rotate(180deg) scale(0.9);
       
    }
    50%{
        transform:  scale(1.1);
       
    }
    100%{
        transform:  scale(0.9);
    
    }
}

.main-heading{
    display: flex;
    justify-content: center;
    align-items: center;
}
.main-heading h1{
    font-size: 3rem;
    animation: rightMove 2s forwards ease-in-out;
}
.main-heading h1 span img{
    animation: earthcycle 3s linear infinite;
}
@keyframes earthcycle{
    0%{
        transform: rotate(0deg);
    }
    100%{
        transform: rotate(360deg);
    }
}
@keyframes rightMove{
    from{
        transform: translateX(100px);
        opacity: 0;
    }
    to{
        transform: rotateX(0px);
        opacity: 1;
    }
}
@media (max-width:767px){
    .main-heading h1{
        margin-top: 62px;
        font-size:1.8rem;
    }
    .main-heading h1 span img{
        width: 34px;
    }
    main .img-col img{
        margin-top: 10px;
    width: 150px;
    height: 150px;
    }
}
/*############### Corona update section ###########################3*/
.corona-update{
    background: rgba(207, 245, 219, 0.24);
    padding: 20px;
}
.corona-update h3{
    color: coral;
    font-size: 2rem;
    font-weight: bolder;
}

/*################### symptoms section###########################33*/
.symptoms-section{
    background: rgba(207, 245, 219, 0.24);
    padding: 10px;
}
.symptoms-section figure{
    transition: all 0.2s ease-in;
    cursor: pointer;
}
.symptoms-section figure:hover{
    transform: scale(1.2);
}
/*########### download the app section ##################################*/
.download-section{
    width: 100%;
    height: 100%;
    background:linear-gradient(rgba(5, 5, 5, 0.123),rgba(5, 5, 5, 0.123)), url('./assets/bg-2.jpg');
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    padding: 20px;
}
.download-bar-code-col .bar-code-img figure img{
    filter: drop-shadow(0px 3px 10px rgba(0, 0, 0, 0.616));
}
.download-bar-code-col h5{
    font-family: roboto;
    color: #014B66;
}
.download-bar-code-col h2{
    font-family: roboto;
    color: #014B66;
}
.download-bar-code-col h1{
    font-family: roboto;
    color: #FA7A19;
    font-weight: bold;
}
.download-bar-code-col p{
    font-family: roboto;
    color: #014B66;
}

 a figure img{
    transition: all 0.5s ease-in;
}
 a figure img:hover{
    transform: scale(1.1);
}
.site-address h2{
    color: #014B66;
    font-family: roboto;
    
}
.site-address h3 a{
    text-decoration: none;
    font-family: roboto;
    transition: all 1s ease-in;
}
.site-address h3 a:hover{
    color: #FA7A19;
}
/*top button-----------------------------*/
#top-button {
    display: none;
    padding: 10px;
    font-size: 1rem;
    float: right;
    position: fixed;
    bottom: 20px;
    right: 30px;
    z-index: 99;
    background: none;
    color: #FA7A19;
    border: 2px solid #FA7A19;
    border-radius: 50px;
    transition: all 0.2s ease-in;
}
#top-button:hover{
    color: #fff;
    background-color: #FA7A19;
}
@media(max-width:767px){
    #top-button{
        bottom: 20px;
        right: 20px;
    }
}

</style>