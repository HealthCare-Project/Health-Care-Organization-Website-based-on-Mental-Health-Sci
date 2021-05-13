@extends('layout.main')
@section('content')
    <!DOCTYPE html>


    <body>

    <div class="breadcumb-area bg-img bg-gradient-overlay" style="background-image: url(img/bg-img/35.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <h2 class="title">Food Calories Calculator </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcumb--con">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Food Calories Calculator </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

        <!-- Navbar -->
        <nav>
            <div class="nav-wrapper blue">
                <div class="container">
                    <a href="#" class="brand-logo center">Tracalorie</a>
                    <ul class="right">
                        <li>
                            <a href="#" class="clear-btn btn blue lighten-3">Clear All</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <br />

        <div class="container">
            <!-- Form Card -->
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Add Meal / Food Item</span>
                    <form class="col">
                        <div class="row">
                            <div class="input-field col s6">
                                <input type="text" placeholder="Add Item" id="item-name" />
                                <label for="item-name">Meal</label>
                            </div>
                            <div class="input-field col s6">
                                <input type="number" placeholder="Add Calories" id="item-calories" />
                                <label for="item-calories">Calories</label>
                            </div>
                            <button class="add-btn btn blue darken-3">
                                <i class="fa fa-plus"></i> Add Meal
                            </button>

                            <button class="update-btn btn orange">
                                <i class="fa fa-pencil-square-o"></i> Update Meal
                            </button>
                            <button class="delete-btn btn red">
                                <i class="fa fa-remove"></i> Delete Meal
                            </button>

                            <button class="back-btn btn grey pull-right">
                                <i class="fa fa-chevron-circle-left"></i> Back
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Calorie Count -->
            <h3 class="center-align">
                Total Calories: <span class="total-calories">0</span>
            </h3>

            <!-- Item List -->
            <ul id="item-list" class="collection">
                <!--
          <li class="collection-item" id="item-0">
            <strong>Steak Dinner: </strong> <em>1200 Calories</em>
            <a href="#" class="secondary-content">
              <i class="fa fa-pencil"></i>
            </a>
          </li>
          <li class="collection-item" id="item-0">
            <strong>Cookie: </strong> <em>400 Calories</em>
            <a href="#" class="secondary-content">
              <i class="fa fa-pencil"></i>
            </a>
          </li>
          <li class="collection-item" id="item-0">
            <strong>Eggs: </strong> <em>300 Calories</em>
            <a href="#" class="secondary-content">
              <i class="fa fa-pencil"></i>
            </a>
          </li>
        -->
            </ul>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app2.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

    </body>

    </html>

@endsection
