<template>
<div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner justify-content-center">
            <div class="carousel-item active">
                <div class="container bg-dark d-flex justify-content-center">
                    <img src="images/1/1.jpg">
                </div>
            </div>

            <div class="carousel-item">
                <div class="container bg-dark d-flex justify-content-center">
                    <img src="images/1/1.jpg">
                </div>
            </div>

            <div class="carousel-item">
                <div class="container bg-dark d-flex justify-content-center">
                    <img src="images/1/1.jpg">
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
</template>
