<main>
    <div class="container">
        <div class="row">
            <div v-for="(element,index) in listaDischi ":key="element.id" class="card col-4 mb-4 column-gap-3">
                <img :src="element.poster" class="card-img-top" alt="element.title">
                <div class="card-body">
                    <h5 class="card-title">{{ element.title }}</h5>
                    <p class="card-text"> {{ element.author }} </p>
                    <p class="card-text"> {{ element.year }} </p>
                </div>
            </div>
        </div>

    </div>
</main>