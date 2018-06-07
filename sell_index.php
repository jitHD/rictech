<?php




 ?>
<html>
<head>

  <style>

  .containers{
      width:100%;
      float:left;
      border:1px solid white;
      align-items: center;
      text-align: center;
    }
    .cereals{
      background-image: url('image/market/sample1.png');
      height: 150px;
      background-repeat: no-repeat;
      background-size: contain;
      background-position: center;
    }

    .oil_seeds{
      background-image: url('image/market/sample2.png');
      height: 150px;
      background-repeat: no-repeat;
      background-size: contain;
      background-position: center;
    }

    .fruits{
      background-image: url('image/market/sample3.png');
      height: 150px;
      background-repeat: no-repeat;
      background-size: contain;
      background-position: center;
    }

    .vegetables{
      background-image: url('image/market/sample4.png');
      height: 150px;
      background-repeat: no-repeat;
      background-size: contain;
      background-position: center;
    }

    .spices{
      background-image: url('image/market/sample5.png');
      height: 150px;
      background-repeat: no-repeat;
      background-size: contain;
      background-position: center;
    }

    .livestock{
      background-image: url('image/market/sample6.png');
      height: 150px;
      background-repeat: no-repeat;
      background-size: contain;
      background-position: center;
    }

  @media only screen and (min-width:300px) and (max-width:500px)
  {
    .containers{
      width:50%;
    }
    .cereals{
      background-image: url('image/market/sample1.png');
    }

    .oil_seeds{
      background-image: url('image/market/sample2.png');
    }

    .fruits{
      background-image: url('image/market/sample3.png');
    }

    .vegetables{
      background-image: url('image/market/sample4.png');
    }

    .spices{
      background-image: url('image/market/sample5.png');
    }

    .livestock{
      background-image: url('image/market/sample6.png');
    }
  }

  @media only screen and (min-width:500px)
  {
    .containers{
      width:33.33%;
    }


  }

  .items{
    /*background-color: #ffffff; */
  }

  </style>


</head>

<body>
  <div class="col-12 index">
    <h1>RICTech: Sell</h1>
  </div>
  <div class="col-1 empty"></div>
  <div class="col-1 button button1" onclick="goBack();"><h4><b>Back</b></h4></div>
  <div class="col-3 empty"></div>
  <div class="col-2 empty"></div>
  <div class="col-3 empty"></div>
  <div class="col-1 button button1" onclick="loadPage('index.php')"><h4><b>Home</b></h4></div>
  <div class="col-1 empty"></div>

<div class="col-12">
  <?php if(isset($_GET['msg'])) echo "<h4>".$_GET['msg']."</h4>"; ?>
    <div class="containers" onclick="setPresent('sell_index.php');loadPage('sell_product.php?type=cereals');">
      <h3>Cereals</h3>
      <div class="cereals">
      </div>
    </div>
<!--  </a> -->

    <div class="containers" onclick="setPresent('sell_index.php');loadPage('sell_product.php?type=oil_seeds');">
      <h3>Oil Seeds</h3>
      <div class="oil_seeds">
      </div>
    </div>
  <div class="containers" onclick="setPresent('sell_index.php');loadPage('sell_product.php?type=fruits');">
      <h3>Fruits</h3>
      <div class="fruits">
      </div>
    </div>
    <div class="containers" onclick="setPresent('sell_index.php');loadPage('sell_product.php?type=vegetables');">
      <h3>Vegetables</h3>
      <div class="vegetables">
      </div>
    </div>
    <div class="containers" onclick="setPresent('sell_index.php');loadPage('sell_product.php?type=spices');">
      <h3>Spices</h3>
      <div class="spices">
      </div>
    </div>
    <div class="containers" onclick="setPresent('sell_index.php');loadPage('sell_product.php?type=livestock');">
      <h3>Livestock/Poultry/Fishery</h3>
      <div class="livestock">
      </div>
    </div>

</div>

</body>
</html>
