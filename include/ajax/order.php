<?php
    $name = "ФИО заказчика: " . $_POST["name"] . "\n";
    $telephone = "Контактный телефон: " . $_POST["telephone"] . "\n";
    $email = "Контактный email: " . $_POST["email"] . "\n";
    $services = "Запрашиваемая услуга: " . $_POST["services"] . "\n";
    $description = "Описание задачи: " . $_POST["description"] . "\n";
    $separator = "------------------------------------------------------------------\n";
    $file = fopen("../../logs/orders.txt", "a+");
    fputs($file, $name);
    fputs($file, $telephone);
    fputs($file, $email);
    fputs($file, $services);
    fputs($file, $description);
    fputs($file, $separator);

    if(mail("akpoflash@gmail.com","Just Space - Заказ", $name . $telephone . $email . $services . $description)){
        mail($_POST["email"],"Just Space", "Благодарим вас за оформиление заказа на нашем сайте, по указанному телефону с вами свяжется наш менеджер.");
        echo json_encode("OK");
    }
?>
