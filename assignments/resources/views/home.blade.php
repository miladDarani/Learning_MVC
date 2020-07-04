@include('partials/header')
    <h1 class="text-center pt-5 mb-5">Home Page</h1>


    <div class="container">
        <div class="row">
            <div class=" card-wrap" style="display:flex; flex-wrap: wrap; text-align: center; justify-content: center;">
                @foreach($games as $game)
                <div class="card m-2 "  style="width: 18rem; border:5px solid white;">
                <img class="card-img-top" src="images/{{$game->image}}" alt="Card image cap">
                    <div class="card-body ">
                        <h5 class="card-title">{{$game->title}}</h5>
                        <p class="card-text">{{$game->abstract}}</p>
                        <a href="#" class="btn btn-primary">More Details</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>


    
    <p>{{$game->title}}</p>

    
@include('partials/footer')