<main>
    <div class="container">
        <div class="row  column-gap-3">
                <div v-for="(element,index) in listaDischi ":key="element.id" class="card mb-4 col-4 border border-0">
                    <img :src="element.poster" class="card-img-top" alt="element.title" style="width: 120px; height: 120px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ element.title }}</h5>
                        <p class="card-text"> {{ element.author }} </p>
                        <p class="card-text"> {{ element.year }} </p>
                    </div>
                </div>
        </div>

    </div>
</main>