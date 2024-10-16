</DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http_equiv='X-UA-Compatible' content='IE-edge'>
    <title>My first Php Page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>

</head>

<body>
    <p>Hello World</p>
    <p>My List</p>
    <ul>


        <?php
        $weather = array("rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind");
        for ($i = 0; $i < count($weather); $i++) {
            ?>
            <li style="color:red;">
                <?php echo $weather[$i]; ?>
            </li>
            <?php
        }
        ?>
    </ul>
    <p>
        <?php echo "We've seen all kinds of weather this month. At the beginning of the month, we had $weather[5] and $weather[6]. Then came sunshine with a few $weather[2] and some $weather[0]. At least we didn't get any $weather[3] or $weather[4].
"; ?>
    <p>
    <p>City List</p>
    <?php
    $city_list = array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");
    $s = "";
    for ($i = 0; $i < count($city_list); $i++) {
        if($i==count($city_list)-1){
        $s = $s . $city_list[$i];
        }else{
            $s = $s . $city_list[$i] . ", ";
        }
    }
    ?>
    <p style="color:green;">
        <?php echo $s; ?>
    </p>
    <ol>
    <p>Sorted City List</p>
        <?php
        sort($city_list);
        for ($i = 0; $i < count($city_list); $i++) {
            ?>
            <li style="color:orange;">
                <?php echo $city_list[$i]; ?>
            </li>
            <?php
        }
        $city_list[] = "Los Angeles";
        $city_list[] = "Calcutta";
        $city_list[] = "Osaka";
        $city_list[] = "Beijing";
        ?>
        <p>Added and Sorted City List</p>
        <ol>
            <?php
            sort($city_list);
            for ($i = 0; $i < count($city_list); $i++) {
                ?>
                <li style="color:red;">
                    <?php echo $city_list[$i]; ?>
                </li>
                <?php
            }
            ?>
        </ol>
</body>

</html>