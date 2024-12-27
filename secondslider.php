<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<style>
maintravel {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: 1fr;
    place-items: inherit;
    min-height: 80vh;
}

.sliderHeading h2 {
    font-size: 32px;
    text-align: left;
    font-weight: 700;
    line-height: 60px;
    font-family: 'Exo 2';
    color: #000;
}

/* Content */

.content {
     padding-left: 12px; 
    color: #c7c7c7c9;
    margin-top:50px;
}

.content h1 {
    font-family: 'Poppins';
    font-size: 47.94px;
    font-weight: 500;
    color: black;
}

.content p {
    font-size: 17px;
    line-height: 32px;
    padding-right: 100px;
    color: black;
    font-family: 'Poppins';
        margin-bottom: -4px;
}

.btn {
    background-color: #f76591;
    background-image: linear-gradient(-180deg, #ffc16f, #f76591);
    font-size: clamp(0.8rem, 8vw, 0.9rem);
    font-weight: 600;
    color: #fff;
    width: max-content;
    outline: 0;
    border: 0;
    border-radius: 6px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 14px 55px;
    margin-top: 26px;
    text-align: center;
    transform: scale(1);
    transition: all 0.2s ease-in;
    cursor: pointer;
    touch-action: manipulation;
    user-select: none;
    -webkit-user-select: none;
    pointer-events: auto;
      font-size: 18px;
}
  

.btn:hover {
    box-shadow: 0 4px 10px rgba(247, 101, 145, 0.5);
    transform: scale(0.98);
}

/* Stacked Cards */

.stack {
    position: relative;
    margin-top: 73px;
}

.card {
    position: absolute;
    transform: translate(-50%, -50%);
    top: 50%;
    left: 50%;
    width: 350px;
    height: 450px;
    border-radius: 2rem;
    box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.25),
        0 15px 20px 0 rgba(0, 0, 0, 0.125);
    transition: transform 0.6s;
    user-select: none;
}

.card img {
    display: block;
    width: 100%;
    height: 100%;
    border-radius: inherit;
    object-fit: cover;
}

.card:nth-last-child(n + 5) {
    --x: calc(-50% + 90px);
    transform: translate(var(--x), -50%) scale(0.85);
    box-shadow: 0 0 1px 1px rgba(0, 0, 0, 0.01);
}

.card:nth-last-child(4) {
    --x: calc(-50% + 60px);
    transform: translate(var(--x), -50%) scale(0.9);
}

.card:nth-last-child(3) {
    --x: calc(-50% + 30px);
    transform: translate(var(--x), -50%) scale(0.95);
}

.card:nth-last-child(2) {
    --x: calc(-50%);
    transform: translate(var(--x), -50%) scale(1);
}

.card:nth-last-child(1) {
    --x: calc(-50% - 30px);
    transform: translate(var(--x), -50%) scale(1.05);
}

.card:nth-last-child(1) img {
    box-shadow: 0 1px 5px 5px rgba(255, 193, 111, 0.5);
}

.swap {
    animation: swap 1.3s ease-out forwards;
}

@keyframes swap {
    30% {
        transform: translate(calc(var(--x) - 250px), -50%) scale(0.85) rotate(-5deg) rotateY(65deg);
    }

    100% {
        transform: translate(calc(var(--x) - 30px), -50%) scale(0.5);
        z-index: -1;
    }
}

/* Media queries for keyframes */

@media (max-width: 1200px) {
    @keyframes swap {
        30% {
            transform: translate(calc(var(--x) - 200px), -50%) scale(0.85) rotate(-5deg) rotateY(65deg);
        }

        100% {
            transform: translate(calc(var(--x) - 30px), -50%) scale(0.5);
            z-index: -1;
        }
    }
}

@media (max-width: 1050px) {
    @keyframes swap {
        30% {
            transform: translate(calc(var(--x) - 150px), -50%) scale(0.85) rotate(-5deg) rotateY(65deg);
        }

        100% {
            transform: translate(calc(var(--x) - 30px), -50%) scale(0.5);
            z-index: -1;
        }
    }
}

/* Media queries for other classes */

@media (max-width: 1200px) {
    .content {
        padding-left: 80px;
    }

    .content p {
        padding-right: 40px;
    }

    .card {
        width: 250px;
        height: 380px;
    }
}

@media (max-width: 1050px) {
    .content {
        padding-left: 60px;
    }

    .content p {
        line-height: 1.5;
    }

    .card {
        width: 220px;
        height: 350px;
    }
}

@media (max-width: 990px) {
    .content p {
        padding-right: 0;
    }

    .card {
        width: 200px;
        height: 300px;
    }
}

@media (max-width: 950px) {
    maintravel {
        grid-template-columns: 1fr;
        grid-template-rows: 4fr 3fr;
        grid-template-areas: "content""stacked";
    }

    .content {
        grid-area: content;
        text-align: center;
        padding: 0 90px;
    }

    .btn {
        margin-bottom: 101px;
    }

    .stack {
        grid-area: stacked;
    }
}

@media(max-width: 575px), only screen and (min-width: 576px) and (max-width: 767px), only screen and (min-width: 768px) and (max-width: 991px),
only screen and (min-width: 992px) and (max-width: 1199px){
    maintravel {
        grid-template-rows: 1fr 1fr;
            min-height: 100vh;
    }
    .fghjky p {
    font-size: 14px;
    margin-bottom: 10px !important;
}

    .content {
        padding: 0 1px;
        margin-bottom: 21px;
    }

    .content h1 {
        padding-left: 0;
        font-family: 'Poppins';
        font-size: 26.94px;
        font-weight: 500;
        color: black;
        text-align: left;
        line-height: 35px;
    }

    .stack {
    /* grid-area: stacked; */
    /* margin-bottom: -95px; */
    margin-top:80px;
    margin-bottom: 72px;
    margin-right: 43px;
}

.content p {
    font-size: 15px;
    line-height: 17px;
    padding-right: 0px;
    color: black;
    font-family: 'Poppins';
    text-align: center;
    margin-bottom: 9px;
}
.fghjky {
    margin-top: 15px;
    margin-left: 30px !important;
}
.tyu{
        font-size: 13px;
}

    .btn {
        padding: 8px 16px;
    }

    .card {
        width: 90%;
        height: auto;
    }

    .sliderHeading h2 {
        font-size: 35px;
        text-align: center;
        font-weight: 500;
        line-height: 42px;
        font-family: 'Exo 2';
        color: black;
    }

    .card img {
        display: block;
        width: 100%;
        height: 100%;
        border-radius: inherit;
        object-fit: cover;
    }
}
.fghjky {
    margin-top: 15px;
    margin-left: 5px;
}
.fghjky p {
    font-size: 14px;
    margin-bottom: -6px;
}
</style>

<body>
    <!-- <div class="col-lg-12 sliderHeading">
        <h2 style='text-align:center;'>INTERNATIONAL DESTINATIONS</h2>
    </div> -->
    <maintravel>

        <div class="content">
            <div class="sliderHeading">
                <h2>Dreaming of Your Next Destination ?</h2>
            </div>
            <p>We make planning your perfect vacation </p>
            <p>Simple, exciting, and stress-free. </p>
            <p>Whether you're seeking an exotic island </p>
            <p>Escape, a cultural immersion in a bustling city, </p>
            <p>or a tranquil retreat in the mountains,</p>
            <p>we help you turn your travel dreams into reality</p>
          <div class='fghjky'>
                    <p style='color:black;'>Explore Your Options</p>
                    <p style='color:black;'>Customize Your Experience</p>
                    <p style='color:black;'>Expert Support</p>
                    <p style='color:black;'>Travel with Confidence</p>
                    <p style='color:black:'>Experience like never before</p>
          </div>
                   
               
           
           
            <a href='internationaldestinations.php' class="btn d-none d-md-block">Explore More</a>
        </div>


        <div class="stack">
            <div class="card">
                <img src="./assets/imags/Bluebellfifthpartimg1.png" alt="Image 1 Description" />
            </div>
            <div class="card">
                <img src="./assets/imags/Bluebellfifthpartimg1.png" alt="Image 2 Description" />
            </div>
            <div class="card">
                <img src="./assets/imags/Bluebellfifthpartimg2.png" alt="Image 3 Description" />
            </div>
            <div class="card">
                <img src="./assets/imags/Bluebellfifthpartimg3.png" alt="Image 4 Description" />
            </div>
            <div class="card">
                <img src="./assets/imags/Bluebellfifthpartimg4.png" alt="Image 5 Description" />
            </div>
            <div class="card">
                <img src="./assets/imags/Bluebellfifthpartimg5.png" alt="Image 6 Description" />
            </div>
            <div class="card">
                <img src="./assets/imags/Bluebellfifthpartimg6.png" alt="Image 7 Description" />
            </div>
            <div class="card">
                <img src="./assets/imags/Bluebellfifthpartimg7.png" alt="Image 8 Description" />
            </div>
            <div class="card">
                <img src="./assets/imags/Bluebellfifthpartimg8.png" alt="Image 9 Description" />
            </div>
            <div class="card">
                <img src="./assets/imags/Bluebellfifthpartimg9.png" alt="Image 10 Description" />
            </div>
            <div class="card">
                <img src="./assets/imags/Bluebellfifthpartimg10.png" alt="Image 11 Description" />
            </div>
        </div>
        <div class='my-3 d-flex justify-content-center'>
              <a href='internationaldestinations.php' class="btn d-block d-md-none">Explore More</a>
        </div>
        </div>




        <script>
        const stack = document.querySelector(".stack");
        const cards = Array.from(stack.children)
            .reverse()
            .filter((child) => child.classList.contains("card"));

        cards.forEach((card) => stack.appendChild(card));

        function moveCard() {
            const lastCard = stack.lastElementChild;
            if (lastCard.classList.contains("card")) {
                lastCard.classList.add("swap");

                setTimeout(() => {
                    lastCard.classList.remove("swap");
                    stack.insertBefore(lastCard, stack.firstElementChild);
                }, 1200);
            }
        }

        let autoplayInterval = setInterval(moveCard, 2000);

        stack.addEventListener("click", function(e) {
            const card = e.target.closest(".card");
            if (card && card === stack.lastElementChild) {
                card.classList.add("swap");

                setTimeout(() => {
                    card.classList.remove("swap");
                    stack.insertBefore(card, stack.firstElementChild);
                }, 1200);
            }
        });
        </script>
</body>

</html>