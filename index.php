<?php

require_once(__DIR__ . '/vendor/autoload.php');

$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'c83ag9qad3ift3bm57v0');
$client = new Finnhub\Api\DefaultApi(
    new GuzzleHttp\Client(),
    $config
);



$search = $_GET['search']??'';
    ?>
    <form method="get" action="/">
        <input name="search" placeholder="search"/>
        <button type="submit">Submit</button>
    </form>
<?php
if($search == ""){?>



<html>




<style>
    div {
        width: 320px;
        padding: 10px;
        border: 5px solid gray;
        margin-left: auto;
        margin-right: auto;
    }
    h1 {text-align: center;}
    p {text-align: center;}
    div {text-align: center;}
</style>

<body>

<div>
   <?php
   $z=$client->quote("AAPL"); ?>
    <br>
    <?php
   echo "AAPL".PHP_EOL;  ?>
    <br>
    <?php
   echo "Current price :".$z->getC().PHP_EOL; ?>
    <br>
    <?php
    if($z->getD()<0){?>
    <p style="color:red">
        <?php echo "Price change :".$z->getD().PHP_EOL;

        }
        else{?>
    <p style="color:green">
        <?php echo "Price change :".$z->getD().PHP_EOL;
        }



        ?>
</div>

</body>
<body>

<div>
    <?php
    $z=$client->quote("MSFT"); ?>
    <br>
    <?php
    echo "MSFT".PHP_EOL;  ?>
    <br>
    <?php
    echo "Current price :".$z->getC().PHP_EOL; ?>
    <br>
    <?php
    if($z->getD()<0){?>
    <p style="color:red">
        <?php echo "Price change :".$z->getD().PHP_EOL;

        }
        else{?>
    <p style="color:green">
        <?php echo "Price change :".$z->getD().PHP_EOL;
        }



        ?>
</div>

</body>
<body>

<div>
    <?php
    $z=$client->quote("GOOGL"); ?>
    <br>
    <?php
    echo "GOOGL".PHP_EOL;  ?>
    <br>
    <?php
    echo "Current price :".$z->getC().PHP_EOL; ?>
    <br>
    <?php
    if($z->getD()<0){?>
    <p style="color:red">
        <?php echo "Price change :".$z->getD().PHP_EOL;

        }
        else{?>
    <p style="color:green">
        <?php echo "Price change :".$z->getD().PHP_EOL;
        }



        ?>
</div>

</body>
<body>

<div>
    <?php
    $z=$client->quote("GOOG"); ?>
    <br>
    <?php
    echo "GOOG".PHP_EOL;  ?>
    <br>
    <?php
    echo "Current price :".$z->getC().PHP_EOL; ?>
    <br>
    <?php
    if($z->getD()<0){?>
    <p style="color:red">
        <?php echo "Price change :".$z->getD().PHP_EOL;

        }
        else{?>
    <p style="color:green">
        <?php echo "Price change :".$z->getD().PHP_EOL;
        }



        ?>
</div>

</body>
</html>
<?php
}else{

    ?>


<style>
    div {
        width: 320px;
        padding: 10px;
        border: 5px solid gray;
        margin-left: auto;
        margin-right: auto;
    }
    h1 {text-align: center;}
    p {text-align: center;}
    div {text-align: center;}
</style>

<body>

<div>
    <?php
    $z=$client->quote("{$search}"); ?>
    <br>
    <?php
    echo "{$search}".PHP_EOL;  ?>
    <br>
    <?php
    echo "Current price :".$z->getC().PHP_EOL; ?>
    <br>
    <?php
    if($z->getD()<0){?>
        <p style="color:red">
            <?php echo "Price change :".$z->getD().PHP_EOL;

    }
    else{?>
        <p style="color:green">
        <?php echo "Price change :".$z->getD().PHP_EOL;
    }



    ?>
</div>

</body>
<?php
}
?>