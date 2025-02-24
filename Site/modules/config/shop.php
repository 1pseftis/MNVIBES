<?PHP
$shop = array(
    "url"=> "/shop",
    "cats" => array( 
        "kits" => array (
			"kit_command_cart" => "kit {username} {namekit}",
            "title" => "Наборы ресурсов", 
			"id" => "kits",
			"kits" => array (
			    "vip" => array (
				    "title" => "Vip",
					"id" => "vip",//{namekit}
					"cost" => ceil(50)
				),
				"premium" => array (
				    "title" => "Premium",
					"id" => "premium",//{namekit}
					"cost" => ceil(100)
				),
				"deluxe" => array (
				    "title" => "Deluxe",
					"id" => "deluxe",//{namekit}
					"cost" => ceil(200)
				)
			)
        ),
		"items" => array (
            "title" => "Магазин предметов",
			"id" => "items"
        )
    )
);