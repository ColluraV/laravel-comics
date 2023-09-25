


<div class=" darkBanner">
    <img id="jumboImg" src="./assets/jumbotron.jpg" alt=""><!--jumbo-->
    <div class="text-center relative">
      <h3 id="title" class="absolute">CURRENT SERIES</h3> 

      <div id="cards_container" class="row row-cols-6 gy-3 my-5">

        <!--////////////// cards in ciclo for //////////////// -->
        <div class="col" v-for="(card,i) in dcComicsList" :KEY="`card_${i}`">
          
        <div class="card border-0 rounded-0 h-100"> 
            <img class=" relative" :src="imgSrc" alt="" /><!-- //////immagine////// -->
        
            <div class="card-body text-white bg-dark"> <!-- //////nome////// -->
            {{ serie }}
            </div>
        
            <div class="overlay"> <!-- //////info in hover////// -->
                <div class="absolute top hidden">Tipologia: <br>{{ tipologia }}</div>
                <div class="absolute bottom hidden">Prezzo: {{ prezzo }}</div>
            </div>
        
        </div>
        
        </div>
      </div>




