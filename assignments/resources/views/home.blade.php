@include('partials/header')
    <h1 class="text-center pt-5 mb-5">Milad's Favorite Video Games</h1>


    <div class="container">
        <div class="row">
            <div class=" card-wrap" style="display:flex; flex-wrap: wrap; text-align: center; justify-content: center;">



                @foreach($games as $game)
                <div class="card  col-sm-12 col-md-6 col-xl-4" >


                <div class="bord">

                    <h5><strong>{{$game->title}}</strong></h5>
                    <img class="card-img-top" src="images/{{$game->image}}" alt="Card image cap">

                        <div class="card-body ">
                            <h6 class="card-title">{{$game->category->name}}</h6>
                            <p class="card-text">{{$game->abstract}}</p>
                            <a href="#" class="btn btn-primary">More Details</a>
                        </div>

                    </div>

                </div>
                @endforeach



            </div>
        </div>
    </div>


    
    <p>{{$game->title}}</p>

    
@include('partials/footer')