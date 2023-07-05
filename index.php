<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dischi</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>

        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

        <link rel="stylesheet" href="./styles/style.css">
    </head>
    <body>

        <div id="app">
            <header class="d-flex align-items-center">
                <div>
                    <img src="https://www.freepnglogos.com/uploads/spotify-logo-png/spotify-download-logo-30.png" alt="">
                </div>
            </header>
            <main>

                <div class="container w-75">

                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <div class="col" v-for="(item, index) in discItems" :key="index" >
                                <div class="card px-3 py-3">
                                <img :src="discItems[index].poster" class="card-img-top" alt="...">
                                <div class="card-body text-center px-0">
                                    <h5 class="card-title mb-1">{{ item.title }}</h5>
                                    <p class="card-text m-0 mb-1">{{ item.author }}</p>
                                    <h5 class="card-title">{{ item.year }}</h5>
                                </div>
                                </div>
                            </div>
                        </div>    



                   
                </div>

            </main>
            
            
        </div>

        <script src="./script/main.js"></script>
    </body>
</html>