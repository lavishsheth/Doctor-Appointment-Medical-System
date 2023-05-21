<?php

// Define an array of health tips
$healthTips = [
    "Drink plenty of water throughout the day to stay hydrated.",
    "Get at least 7-8 hours of sleep each night to help your body recharge.",
    "Eat a balanced diet with plenty of fruits and vegetables for essential nutrients.",
    "Take regular breaks and stretch during prolonged periods of sitting or standing.",
    "Engage in physical activity for at least 30 minutes each day to maintain good health.",
    "Practice stress-reduction techniques like meditation or deep breathing exercises.",
    "Wash your hands frequently and avoid touching your face to prevent the spread of germs.",
    "Schedule regular check-ups with your doctor to monitor your overall health.",
];

// Function to randomly select and return a health tip
function getHealthTip() {
    global $healthTips;
    return $healthTips[array_rand($healthTips)];
}

// Function to generate a response based on the user's message
function generateResponse($message) {
    if (stripos($message, "health tip") !== false) {
        return "Sure, here's a health tip for you: " . getHealthTip();
    } else {
        return "I'm sorry, I didn't understand what you're asking. Please try asking for a health tip.";
    }
}

// Check if there is an incoming message
if (isset($_POST['message'])) {
    // Get the user's message
    $message = $_POST['message'];
    // Generate a response based on the user's message
    $response = generateResponse($message);
    // Echo the response
    echo $response;
}

?>
