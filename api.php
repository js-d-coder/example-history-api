<?php

function not_found() {
    header("HTTP/1.1 404 Not Found");
}

if(isset($_GET['title'])) {
    $title = $_GET['title'];


    switch($title) {
        case 'holmes':
            $response = ['title' => "Sherlock Holmes", 'desc' => "Sherlock Holmes (/ˈʃɜːrlɒk ˈhoʊmz/ or /-ˈhoʊlmz/) is a fictional private detective created by British author Sir Arthur Conan Doyle. Referring to himself as a \"consulting detective\" in the stories, Holmes is known for his proficiency with observation, forensic science, and logical reasoning that borders on the fantastic, which he employs when investigating cases for a wide variety of clients, including Scotland Yard."];
            break;

        case 'watson':
            $response = ['title' => "Dr. John Watson", 'desc' => "John H. Watson, known as Dr. Watson, is a fictional character in the Sherlock Holmes stories by Sir Arthur Conan Doyle. Watson is Sherlock Holmes' friend, assistant and sometime flatmate, and the first person narrator of all but four of these stories. He is described as the typical Victorian-era gentleman, unlike the more eccentric Holmes. He is astute, although he can never match his friend's deductive skills."];
            break;

        case 'moriarty':
            $response = ['title' => 'Professor Moriarty', 'desc' => 'Professor James Moriarty is a fictional character in some of the Sherlock Holmes stories written by Sir Arthur Conan Doyle. Moriarty is a machiavellian criminal mastermind whom Holmes describes as the "Napoleon of crime". Doyle lifted the phrase from a Scotland Yard inspector who was referring to Adam Worth, a real-life criminal mastermind and one of the individuals upon whom the character of Moriarty was based. The character was introduced primarily as a narrative device to enable Doyle to kill Sherlock Holmes, and only featured in two of the Sherlock Holmes stories. However, in adaptations, he has often been given a greater prominence and treated as Sherlock Holmes\' archenemy.'];
            break;
            
        default:
            $response = NULL;
            break;
    }

    if(!is_null($response)) {
        header("HTTP/1.1 200 OK");
        header('Content-Type: application/json');
        echo json_encode($response);
    } else {
        not_found();
    }

} else {
    not_found();
}
